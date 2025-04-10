<?php
App::uses('AppController', 'Controller');
/**
 * Takeaways Controller
 *
 * @property Takeaway $Takeaway
 * @property PaginatorComponent $Paginator
 */
class TakeawaysController extends AppController
{
	public $uses = array('Takeaway', 'Inventory');

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
		$this->Takeaway->recursive = 0;
		$this->set('takeaways', $this->Paginator->paginate());
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
		if (!$this->Takeaway->exists($id)) {
			throw new NotFoundException(__('Invalid takeaway'));
		}
		$options = array('conditions' => array('Takeaway.' . $this->Takeaway->primaryKey => $id));
		$this->set('takeaway', $this->Takeaway->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Takeaway->create();
			if ($this->Takeaway->save($this->request->data)) {
				$this->Flash->success(__('The takeaway has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The takeaway could not be saved. Please, try again.'));
			}
		}
		$inventories = $this->Takeaway->Inventory->find('list');
		$this->set(compact('inventories'));
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
		if (!$this->Takeaway->exists($id)) {
			throw new NotFoundException(__('Invalid takeaway'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Takeaway->save($this->request->data)) {
				$this->Flash->success(__('The takeaway has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The takeaway could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Takeaway.' . $this->Takeaway->primaryKey => $id));
			$this->request->data = $this->Takeaway->find('first', $options);
		}
		$inventories = $this->Takeaway->Inventory->find('list');
		$this->set(compact('inventories'));
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
		if (!$this->Takeaway->exists($id)) {
			throw new NotFoundException(__('Invalid takeaway'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Takeaway->delete($id)) {
			$this->Flash->success(__('The takeaway has been deleted.'));
		} else {
			$this->Flash->error(__('The takeaway could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function list_for_inventory($inventory_id)
	{
		 
		// Fetch the inventory by its ID
		$inventory = $this->Inventory->findById($inventory_id); // This will now work since the Inventory model is loaded

		// Check if the inventory exists
		if (!$inventory) {
			throw new NotFoundException(__('Invalid inventory'));
		}

		// Fetch the takeaways associated with the given inventory ID
		$takeaways = $this->Takeaway->find('all', array(
			'conditions' => array('Takeaway.inventory_id' => $inventory_id),
			'order' => array('Takeaway.date' => 'ASC') // Optional, to order by date
		));

		// Pass the data to the view
		$this->set(compact('inventory', 'takeaways'));
	}


}
