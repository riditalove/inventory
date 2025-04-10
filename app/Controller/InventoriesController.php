<?php
App::uses('AppController', 'Controller');
/**
 * Inventories Controller
 *
 * @property Inventory $Inventory
 * @property PaginatorComponent $Paginator
 */
class InventoriesController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Uploader');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Inventory->recursive = 1;
		$inventories = $this->Inventory->find('all', array(
			'contain' => array('Takeaway') // This ensures takeaways are included with inventories
		));
		$this->set(compact('inventories'));
		
		$this->set('inventories', $this->Paginator->paginate());
		$suppliers = $this->Inventory->Supplier->find('list');

		$this->set(compact('suppliers'));
	
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
		if (!$this->Inventory->exists($id)) {
			throw new NotFoundException(__('Invalid inventory'));
		}
		$options = array('conditions' => array('Inventory.' . $this->Inventory->primaryKey => $id));
		$this->set('inventory', $this->Inventory->find('first', $options));
		$suppliers = $this->Inventory->Supplier->find('list');
		$this->set(compact('suppliers'));
	}

	/**
	 * add method
	 *
	 * @return void
	 */

	public function add()
	{
		if ($this->request->is('post')) {
			if (!empty($this->request->data['Inventory']['file']['name'])) {
				$fileext = pathinfo($this->request->data['Inventory']['file']['name'], PATHINFO_EXTENSION);
				$this->request->data['Inventory']['doc'] = $fileext;
			}

			$this->Inventory->create();
			if ($this->Inventory->save($this->request->data)) {
				$id = $this->Inventory->getInsertID();

				// Ensure Uploader component exists before calling it
				if (!empty($this->request->data['Inventory']['file']['name'])) {
					$uploadedFile = $this->Uploader->uploadFile($this->request->data['Inventory']['file'], $id, 'inventdoc');

					if ($uploadedFile) {
						$this->Flash->success(__('The inventory has been saved and file uploaded.'));
					} else {
						$this->Flash->error(__('The inventory was saved, but file upload failed.'));
					}
				}

				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The inventory could not be saved. Please, try again.'));
			}
		}
		$suppliers = $this->Inventory->Supplier->find('list');
		$this->set(compact('suppliers'));
	}



	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */

	 public function edit($id = null)
	 {
		 if (!$id || !$this->Inventory->exists($id)) {
			 throw new NotFoundException(__('Invalid inventory'));
		 }
	 
		 if ($this->request->is(array('post', 'put'))) {
			 $this->Inventory->id = $id; // Ensure we are updating an existing record
	 
			 // Handle File Upload
			 if (!empty($this->request->data['Inventory']['file']['name'])) {
				 $file = $this->request->data['Inventory']['file'];
				 $fileext = pathinfo($file['name'], PATHINFO_EXTENSION);
				 $this->request->data['Inventory']['doc'] = $fileext;
	 
				 // Define old file path
				 $oldFile = WWW_ROOT . 'img/inventdoc/' . $id . '.*'; // Delete all matching extensions
	 
				 // Ensure Uploader Component Exists
				 if (!isset($this->Uploader)) {
					 $this->Flash->error(__('Uploader component is missing.'));
					 return $this->redirect(array('action' => 'edit', $id));
				 }
			 }
	 
			 if ($this->Inventory->save($this->request->data)) {
				 // If file upload is required
				 if (!empty($this->request->data['Inventory']['file']['name'])) {
					 // Remove old file(s) with any extension
					 array_map('unlink', glob($oldFile));
	 
					 // Upload new file
					 $uploadedFile = $this->Uploader->uploadFile($file, $id, 'inventdoc');
	 
					 if ($uploadedFile) {
						 $this->Flash->success(__('The inventory has been saved and file uploaded.'));
					 } else {
						 $this->Flash->error(__('The inventory was saved, but file upload failed.'));
					 }
				 }
	 
				 return $this->redirect(array('action' => 'index'));
			 } else {
				 $this->Flash->error(__('The inventory could not be saved. Please, try again.'));
			 }
		 } else {
			 // Fetch existing data
			 $options = array('conditions' => array('Inventory.' . $this->Inventory->primaryKey => $id));
			 $this->request->data = $this->Inventory->find('first', $options);
		 }
	 
		 $suppliers = $this->Inventory->Supplier->find('list');
		 $this->set(compact('suppliers'));
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
		if (!$this->Inventory->exists($id)) {
			throw new NotFoundException(__('Invalid inventory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Inventory->delete($id)) {
			$this->Flash->success(__('The inventory has been deleted.'));
		} else {
			$this->Flash->error(__('The inventory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
