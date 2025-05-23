<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'phpqrcode', array('file' => 'phpqrcode/qrlib.php'));
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
	




	public function index()
	{
		$this->loadModel('Material');
    $this->loadModel('Supplier');
    $suppliers = $this->Supplier->find('list', [
			'fields' => ['Supplier.id', 'Supplier.name'],
		]);
    
		$materials = $this->Material->find('list', [
			'fields' => ['Material.id', 'Material.name'],
			'order' => ['Material.name' => 'ASC']
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

		$this->set(compact('stockins', 'materials', 'suppliers'));


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


	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 * 
	 */

	public function add()
	{
		$this->loadModel('Material');
		$this->loadModel('Stock');
		$this->loadModel('Supplier');

		// Fetch suppliers for dropdown
		$suppliers = $this->Supplier->find('list', [
			'fields' => ['Supplier.id', 'Supplier.name'],
			'order' => ['Supplier.name' => 'ASC']
		]);

		if ($this->request->is('post')) {
			$this->Stockin->create();

			if ($this->Stockin->save($this->request->data)) {
				$stockinId = $this->Stockin->id;
				$materialId = $this->request->data['Stockin']['material_id'];
				$addedQty = $this->request->data['Stockin']['quantity'];

				// Update stock quantity
				$stock = $this->Stock->find('first', [
					'conditions' => ['Stock.material_id' => $materialId],
					'recursive' => -1
				]);

				if ($stock) {
					$stock['Stock']['quantity'] += $addedQty;
					$this->Stock->save($stock);
				} else {
					$this->Stock->create();
					$this->Stock->save([
						'material_id' => $materialId,
						'quantity' => $addedQty
					]);
				}

				// Generate QR Code
				$material = $this->Material->findById($materialId);
				$materialName = $material['Material']['name'];
				$safeMaterialName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $materialName);

				$qrDir = WWW_ROOT . 'img' . DS . 'qrcodes' . DS;
				if (!file_exists($qrDir)) {
					mkdir($qrDir, 0775, true);
				}

				$url = 'http://localhost/inventoryprintingfinal/stockouts/viewByMaterial/' . $materialId;
				$qrFileName = 'material_' . $safeMaterialName . '_' . $stockinId . '.png';
				$qrPath = $qrDir . $qrFileName;

				App::import('Vendor', 'phpqrcode', ['file' => 'phpqrcode' . DS . 'qrlib.php']);
				QRcode::png($url, $qrPath, 'L', 4, 2);

				$this->Flash->success(__('The stockin has been saved, stock updated, and QR code generated.'));
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The stockin could not be saved. Please, try again.'));
			}
		}

		// For both GET and failed POST request
		$materials = $this->Material->find('list', ['fields' => ['Material.id', 'Material.name']]);
		$this->set(compact('materials', 'suppliers'));
	}



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

				return $this->redirect(array('action' => 'index', '?' => array('material_id' => $stockin['Stockin']['material_id'])));


				

			}
			$this->Session->Flash->error(__('Unable to update stockin.'));
		}
		if (empty($this->request->query('material_id'))) {
			$this->Session->delete('Stockin.material_id');
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

		return $this->redirect(array('action' => 'index', '?' => array('material_id' => $stockin['Stockin']['material_id'])));
	}

	public function print_qr($id = null)
	{
		$this->layout = 'ajax'; // Use minimal layout
		$this->Stockin->id = $id;
		if (!$this->Stockin->exists()) {
			throw new NotFoundException(__('Invalid stockin'));
		}

		$stockin = $this->Stockin->find('first', [
			'conditions' => ['Stockin.id' => $id],
			'contain' => ['Material']
		]);

		$this->set(compact('stockin'));
	}


}
