<?php
App::uses('AppController', 'Controller');
/**
 * Stockins Controller
 *
 * @property Stockin $Stockin
 * @property PaginatorComponent $Paginator
 */
class StockinsController extends AppController
{
	public $uses = array('Stockin', 'Stock');


	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');

	/**
	 * index method
	 *
	 * @return void
	 */
	// public function index()
	// {
	// 	$this->loadModel('Material');

	// 	$materials = $this->Material->find('list', [
	// 		'fields' => ['Material.id', 'Material.name']
	// 	]);

	// 	$conditions = [];

	// 	if (!empty($this->request->query['material_id'])) {
	// 		$conditions['Stock.material_id'] = $this->request->query['material_id'];
	// 	}

	// 	$stockin = $this->Stockin->find('all', [
	// 		'conditions' => $conditions,
	// 		'contain' => ['Stockin']
	// 	]);

	// 	$this->Stockin->recursive = 0;
	// 	$this->set('stockins', $this->Paginator->paginate());
	// 	$this->set(compact('materials'));
	// }

	public function index()
	{
		$this->loadModel('Material');

		$materials = $this->Material->find('list', [
			'fields' => ['Material.id', 'Material.name']
		]);

		$conditions = [];

		if (!empty($this->request->query['material_id'])) {
			$conditions['Stockin.material_id'] = $this->request->query['material_id'];
		}

		$this->Stockin->recursive = 0;

		$this->paginate = [
			'conditions' => $conditions,
			'contain' => ['Material']
		];

		$stockins = $this->Paginator->paginate('Stockin');
		$this->set(compact('stockins', 'materials'));
	}


	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		if (!$this->Stockin->exists($id)) {
			throw new NotFoundException(__('Invalid stockin'));
		}
		$options = array('conditions' => array('Stockin.' . $this->Stockin->primaryKey => $id));
		$this->set('stockin', $this->Stockin->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 * 
	 * 
	 */
	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->Stockin->create();
	// 		if ($this->Stockin->save($this->request->data)) {
	// 			$this->Flash->success(__('The stockin has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Flash->error(__('The stockin could not be saved. Please, try again.'));
	// 		}
	// 	}
	// 	$materials = $this->Stockin->Material->find('list');
	// 	$this->set(compact('materials'));
	// }

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */

	public function add()
	{
		if ($this->request->is('post')) {
			$this->Stockin->create();
			if ($this->Stockin->save($this->request->data)) {

				// Get the submitted material_id and quantity
				$materialId = $this->request->data['Stockin']['material_id'];
				$addedQty = $this->request->data['Stockin']['quantity'];

				// Load Stock model if not already loaded
				$this->loadModel('Stock');

				// Find the current stock for the material
				$stock = $this->Stock->find('first', [
					'conditions' => ['Stock.material_id' => $materialId],
					'recursive' => -1
				]);

				if ($stock) {
					// Add the quantity to existing stock
					$stock['Stock']['quantity'] += $addedQty;

					// Save the updated stock quantity
					$this->Stock->save($stock);
				} else {
					// If stock entry doesn’t exist, create one
					$this->Stock->create();
					$this->Stock->save([
						'material_id' => $materialId,
						'quantity' => $addedQty
					]);
				}

				$this->Flash->success(__('The stockin has been saved and stock updated.'));
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The stockin could not be saved. Please, try again.'));
			}
		}

		$this->loadModel('Material');
		$materials = $this->Material->find('list');
		$this->set(compact('materials'));
	}

	// public function edit($id = null)
	// {

	// 	if (!$this->Stockin->exists($id)) {
	// 		throw new NotFoundException(__('Invalid stockin'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->Stockin->save($this->request->data)) {
	// 			$this->Flash->success(__('The stockin has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Flash->error(__('The stockin could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('Stockin.' . $this->Stockin->primaryKey => $id));
	// 		$this->request->data = $this->Stockin->find('first', $options);
	// 	}
	// 	$materials = $this->Stockin->Material->find('list');
	// 	$this->set(compact('materials'));
	// }

	public function edit($id = null)
	{

		if (!$id) {
			throw new NotFoundException(__('Invalid stockin'));
		}

		$stockin = $this->Stockin->findById($id);
		if (!$stockin) {
			throw new NotFoundException(__('Invalid stockin'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$oldQuantity = $stockin['Stockin']['quantity'];
			$materialId = $stockin['Stockin']['material_id'];

			// Subtract old quantity from stocks
			$stock = $this->Stock->findByMaterialId($materialId);
			if ($stock) {
				$newStockQty = $stock['Stock']['quantity'] - $oldQuantity;
				$this->Stock->id = $stock['Stock']['id'];
				$this->Stock->saveField('quantity', $newStockQty);
			}

			// Save the new stockin data
			$this->Stockin->id = $id;
			if ($this->Stockin->save($this->request->data)) {

				// Add the new quantity to stocks
				$newQty = $this->request->data['Stockin']['quantity'];
				$stock = $this->Stock->findByMaterialId($materialId);
				if ($stock) {
					$updatedQty = $stock['Stock']['quantity'] + $newQty;
					$this->Stock->id = $stock['Stock']['id'];
					$this->Stock->saveField('quantity', $updatedQty);
				}

				$this->Flash->success(__('The stockin has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->Flash->error(__('Unable to update stockin.'));
		}

		if (!$this->request->data) {
			$this->request->data = $stockin;
		}
	}


	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	// public function delete($id = null)
	// {
	// 	if (!$this->Stockin->exists($id)) {
	// 		throw new NotFoundException(__('Invalid stockin'));
	// 	}
	// 	$this->request->allowMethod('post', 'delete');
	// 	if ($this->Stockin->delete($id)) {
	// 		$this->Flash->success(__('The stockin has been deleted.'));
	// 	} else {
	// 		$this->Flash->error(__('The stockin could not be deleted. Please, try again.'));
	// 	}
	// 	return $this->redirect(array('action' => 'index'));
	// }

	public function delete($id = null)
	{
		$this->loadModel('Stock');
		$this->request->allowMethod('post', 'delete');

		$stockin = $this->Stockin->findById($id);

		if (!$stockin) {
			throw new NotFoundException(__('Invalid stockin'));
		}

		$materialId = $stockin['Stockin']['material_id'];
		$quantityAdded = $stockin['Stockin']['quantity']; // use the correct field

		// Reduce the stock by the quantity that was added
		$stock = $this->Stock->findByMaterialId($materialId);
		if ($stock) {
			$newQty = $stock['Stock']['quantity'] - $quantityAdded;
			$this->Stock->id = $stock['Stock']['id'];
			$this->Stock->saveField('quantity', $newQty);
		}

		if ($this->Stockin->delete($id)) {
			$this->Flash->success(__('Stockin deleted and stock adjusted.'));
		} else {
			$this->Flash->error(__('Stockin could not be deleted.'));
		}

		return $this->redirect(array('action' => 'index'));
	}

}
