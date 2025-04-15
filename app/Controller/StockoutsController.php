<?php
App::uses('AppController', 'Controller');
/**
 * Stockouts Controller
 *
 * @property Stockout $Stockout
 * @property PaginatorComponent $Paginator
 */
class StockoutsController extends AppController
{

	public $uses = array('Stockout', 'Stock');

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

	
	 public function index()
	 {
		 $this->loadModel('Material');
		 $this->loadModel('Stock');
	 
		 // Dropdown data
		 $materials = $this->Material->find('list', [
			 'fields' => ['Material.id', 'Material.name'],
			 'order' => ['Material.name' => 'ASC']
		 ]);
	 
		 $conditions = [];
	 
		 if (!empty($this->request->query['material_id'])) {
			 $conditions['Stockout.material_id'] = $this->request->query['material_id'];
		 }
	 
		 // Setup pagination
		 $this->paginate = [
			 'conditions' => $conditions,
			 'contain' => ['Material'],
			 'limit' => 20,
			 'order' => ['Stockout.out_date' => 'DESC']
		 ];
	 
		 $stockouts = $this->Paginator->paginate('Stockout');
	 
		 // Add quantity from Stock table
		 foreach ($stockouts as &$stockout) {
			 $stock = $this->Stock->find('first', [
				 'conditions' => ['Stock.material_id' => $stockout['Stockout']['material_id']],
				 'fields' => ['Stock.quantity'],
				 'recursive' => -1
			 ]);
			 $stockout['Stock']['quantity'] = isset($stock['Stock']['quantity']) ? $stock['Stock']['quantity'] : 0;
		 }
	 
		 $this->set(compact('stockouts', 'materials'));
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
		if (!$this->Stockout->exists($id)) {
			throw new NotFoundException(__('Invalid stockout'));
		}
		$options = array('conditions' => array('Stockout.' . $this->Stockout->primaryKey => $id));
		$this->set('stockout', $this->Stockout->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->Stockout->create();
	// 		if ($this->Stockout->save($this->request->data)) {
	// 			$this->Flash->success(__('The stockout has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Flash->error(__('The stockout could not be saved. Please, try again.'));
	// 		}
	// 	}
	// 	$materials = $this->Stockout->Material->find('list');
	// 	$this->set(compact('materials'));
	// }

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */

	 public function add($materialId = null)
	 {
		 $this->loadModel('Stock');
		 $this->loadModel('Material');
	 
		 if (!$materialId) {
			 throw new NotFoundException(__('Material ID is required'));
		 }
	 
		 $material = $this->Material->findById($materialId);
		 if (!$material) {
			 throw new NotFoundException(__('Invalid material'));
		 }
	 
		 // Get current stock for this material
		 $stock = $this->Stock->find('first', [
			 'conditions' => ['Stock.material_id' => $materialId]
		 ]);
		 $currentQuantity = $stock ? $stock['Stock']['quantity'] : 0;
	 
		 if ($this->request->is('post')) {
			 $this->Stockout->create();
			 $this->request->data['Stockout']['material_id'] = $materialId;
	 
			 if ($this->Stockout->save($this->request->data)) {
				 // Update stock quantity
				 if ($stock) {
					 $updatedQty = $currentQuantity - $this->request->data['Stockout']['quantity_removed'];
					 $this->Stock->id = $stock['Stock']['id'];
					 $this->Stock->saveField('quantity', $updatedQty);
	 
					 // Save the remaining stocks in the stockout
					 $this->Stockout->saveField('remaining_stocks', $updatedQty);
				 }
	 
				 $this->Flash->success(__('The stockout has been saved.'));
				 return $this->redirect(['action' => 'viewByMaterial', $materialId]);

			 } else {
				 $this->Flash->error(__('The stockout could not be saved. Please, try again.'));
			 }
		 }
	 
		 $this->set(compact( 'currentQuantity'));
		$this->set('materialId', $materialId);
	    $this->set('materialName', $material['Material']['name']);
	 }
	 

	// public function add($materialId = null)
	// {
	// 	$this->loadModel('Stock');
	// 	$this->loadModel('Material');

	// 	if (!$materialId) {
	// 		throw new NotFoundException(__('Material ID is required'));
	// 	}

	// 	$material = $this->Material->findById($materialId);
	// 	if (!$material) {
	// 		throw new NotFoundException(__('Invalid material'));
	// 	}

	// 	if ($this->request->is('post')) {
	// 		$this->Stockout->create();
	// 		$this->request->data['Stockout']['material_id'] = $materialId;

	// 		if ($this->Stockout->save($this->request->data)) {
	// 			// Decrease the stock quantity
	// 			$stock = $this->Stock->findByMaterialId($materialId);
	// 			if ($stock) {
	// 				$updatedQty = $stock['Stock']['quantity'] - $this->request->data['Stockout']['quantity_removed'];
	// 				$this->Stock->id = $stock['Stock']['id'];
	// 				$this->Stock->saveField('quantity', $updatedQty);

	// 				// Save the remaining stocks in the stockout
	// 				$this->Stockout->saveField('remaining_stocks', $updatedQty);
	// 			}

	// 			$this->Flash->success(__('The stockout has been saved.'));
	// 			return $this->redirect(['action' => 'viewByMaterial', $materialId]);
	// 		} else {
	// 			$this->Flash->error(__('The stockout could not be saved. Please, try again.'));
	// 		}
	// 	}

	// 	// Set material info for the view
	// 	$this->set('materialId', $materialId);
	// 	$this->set('materialName', $material['Material']['name']);
	// }


	// public function add()
	// {
	// 	if ($this->request->is('post')) {
	// 		$materialId = $this->request->data['Stockout']['material_id'];
	// 		$quantityRemoved = $this->request->data['Stockout']['quantity_removed'];

	// 		// Load current stock
	// 		$this->loadModel('Stock');
	// 		$stock = $this->Stock->find('first', [
	// 			'conditions' => ['Stock.material_id' => $materialId]
	// 		]);

	// 		if ($stock) {
	// 			$remaining = $stock['Stock']['quantity'];

	// 			// Update stock quantity
	// 			$newQty = $remaining - $quantityRemoved;
	// 			$this->Stock->id = $stock['Stock']['id'];
	// 			$this->Stock->saveField('quantity', $newQty);

	// 			// Set remaining_stocks for stockout
	// 			$this->request->data['Stockout']['remaining_stocks'] = $remaining;

	// 			$this->Stockout->create();
	// 			if ($this->Stockout->save($this->request->data)) {
	// 				$this->Flash->success(__('The stockout has been saved.'));
	// 				return $this->redirect(['action' => 'index']);
	// 			}
	// 			$this->Flash->error(__('The stockout could not be saved. Please try again.'));
	// 		} else {
	// 			$this->Flash->error(__('Material not found in stock.'));
	// 		}
	// 	}

	// 	$materials = $this->Stockout->Material->find('list');
	// 	$this->set(compact('materials'));
	// }

	// public function edit($id = null)
	// {
	// 	if (!$this->Stockout->exists($id)) {
	// 		throw new NotFoundException(__('Invalid stockout'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->Stockout->save($this->request->data)) {
	// 			$this->Flash->success(__('The stockout has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Flash->error(__('The stockout could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('Stockout.' . $this->Stockout->primaryKey => $id));
	// 		$this->request->data = $this->Stockout->find('first', $options);
	// 	}
	// 	$materials = $this->Stockout->Material->find('list');
	// 	$this->set(compact('materials'));
	// }

	public function edit($id = null)
	{
		$this->loadModel('Stock'); // Ensure this is here

		if (!$id) {
			throw new NotFoundException(__('Invalid stockin'));
		}

		$stockout = $this->Stockout->findById($id);
		if (!$stockout) {
			throw new NotFoundException(__('Invalid stockout'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$oldQuantity = $stockout['Stockout']['quantity_removed'];
			$materialId = $stockout['Stockout']['material_id'];

			$stock = $this->Stock->findByMaterialId($materialId);
			if ($stock) {
				$newStockQty = $stock['Stock']['quantity'] + $oldQuantity;
				$this->Stock->id = $stock['Stock']['id'];
				$this->Stock->saveField('quantity', $newStockQty);
			}

			$this->Stockout->id = $id;
			if ($this->Stockout->save($this->request->data)) {
				$newQty = $this->request->data['Stockout']['quantity_removed'];
				$stock = $this->Stock->findByMaterialId($materialId);
				if ($stock) {
					$updatedQty = $stock['Stock']['quantity'] - $newQty;
					$this->Stock->id = $stock['Stock']['id'];
					$this->Stock->saveField('quantity', $updatedQty);

					// Update remaining_stocks in Stockout record
					$this->Stockout->saveField('remaining_stocks', $updatedQty);
				}

				$this->Flash->success(__('The stockout has been updated.'));
				return $this->redirect(array('action' => 'viewByMaterial', $materialId));
			}
			$this->Session->Flash->error(__('Unable to update stockout.'));
		} else {
			$this->request->data = $stockout;

			// Populate remaining_stocks from stocks table
			$materialId = $stockout['Stockout']['material_id'];
			$stock = $this->Stock->findByMaterialId($materialId);
			if ($stock) {
				$this->request->data['Stockout']['remaining_stocks'] = $stock['Stock']['quantity'];
			}
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
	// 	if (!$this->Stockout->exists($id)) {
	// 		throw new NotFoundException(__('Invalid stockout'));
	// 	}
	// 	$this->request->allowMethod('post', 'delete');
	// 	if ($this->Stockout->delete($id)) {
	// 		$this->Flash->success(__('The stockout has been deleted.'));
	// 	} else {
	// 		$this->Flash->error(__('The stockout could not be deleted. Please, try again.'));
	// 	}
	// 	return $this->redirect(array('action' => 'index'));
	// }

	// 

	public function delete($id = null)
	{
		$this->loadModel('Stock');
		$this->request->allowMethod('post', 'delete');

		$stockout = $this->Stockout->findById($id);

		if (!$stockout) {
			throw new NotFoundException(__('Invalid stockout'));
		}

		$materialId = $stockout['Stockout']['material_id'];
		$quantityRemoved = $stockout['Stockout']['quantity_removed'];

		// Restore stock
		$stock = $this->Stock->findByMaterialId($materialId);
		if ($stock) {
			$newQty = $stock['Stock']['quantity'] + $quantityRemoved;
			$this->Stock->id = $stock['Stock']['id'];
			$this->Stock->saveField('quantity', $newQty);

		}

		if ($this->Stockout->delete($id)) {
			$this->Flash->success(__('Stockout deleted and stock restored.'));
		} else {
			$this->Flash->error(__('Stockout could not be deleted.'));
		}

		return $this->redirect(array('action' => 'index'));
	}

	public function get_stock_quantity($id = null)
	{
		$this->autoRender = false;
		$this->layout = null;

		if (!$id) {
			echo json_encode(['quantity' => 0]);
			return;
		}

		$this->loadModel('Stock');

		$stock = $this->Stock->find('first', array(
			'conditions' => array('Stock.material_id' => $id),
			'fields' => array('Stock.quantity'),
			'recursive' => -1
		));

		$quantity = (!empty($stock)) ? $stock['Stock']['quantity'] : 0;

		header('Content-Type: application/json');
		echo json_encode(['quantity' => $quantity]);
	}


	public function materialHistory($materialId = null)
	{
		if (!$materialId) {
			throw new NotFoundException(__('Invalid Material ID'));
		}

		$this->paginate = [
			'conditions' => ['Stockout.material_id' => $materialId],
			'order' => ['Stockout.created' => 'DESC']
		];

		$stockouts = $this->paginate('Stockout');

		$this->loadModel('Material');
		$material = $this->Material->findById($materialId);

		if (!$material) {
			throw new NotFoundException(__('Invalid material'));
		}

		$this->set('materialName', $material['Material']['name']);

		$this->set(compact('stockouts', 'materialId'));
	}

	public function viewByMaterial($materialId = null)
{
    $this->loadModel('Stockout');
    $this->loadModel('Material');

    if (!$materialId) {
        throw new NotFoundException(__('Material ID is required'));
    }

    $material = $this->Material->findById($materialId);
    if (!$material) {
        throw new NotFoundException(__('Material not found'));
    }

    $stockouts = $this->Stockout->find('all', [
        'conditions' => ['Stockout.material_id' => $materialId],
        'order' => ['Stockout.out_date' => 'DESC']
    ]);

    $materialName = $material['Material']['name']; // Adjust to your column

    $this->set(compact('materialId', 'materialName', 'stockouts'));
}





}
