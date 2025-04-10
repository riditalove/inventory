<?php
App::uses('AppController', 'Controller');
/**
 * Assetcomponents Controller
 *
 * @property Assetcomponent $Assetcomponent
 * @property PaginatorComponent $Paginator
 */
class AssetcomponentsController extends AppController {

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
	public function index() {
		$this->Assetcomponent->recursive = 0;
		$this->set('assetcomponents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Assetcomponent->exists($id)) {
			throw new NotFoundException(__('Invalid assetcomponent'));
		}
		$options = array('conditions' => array('Assetcomponent.' . $this->Assetcomponent->primaryKey => $id));
		$this->set('assetcomponent', $this->Assetcomponent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Assetcomponent->create();
			if ($this->Assetcomponent->save($this->request->data)) {
				$this->Flash->success(__('The assetcomponent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The assetcomponent could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Assetcomponent->Category->find('list');
		$companies = $this->Assetcomponent->Company->find('list');
		$this->set(compact('categories', 'companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Assetcomponent->exists($id)) {
			throw new NotFoundException(__('Invalid assetcomponent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Assetcomponent->save($this->request->data)) {
				$this->Flash->success(__('The assetcomponent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The assetcomponent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Assetcomponent.' . $this->Assetcomponent->primaryKey => $id));
			$this->request->data = $this->Assetcomponent->find('first', $options);
		}
		$categories = $this->Assetcomponent->Category->find('list');
		$companies = $this->Assetcomponent->Company->find('list');
		$this->set(compact('categories', 'companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Assetcomponent->exists($id)) {
			throw new NotFoundException(__('Invalid assetcomponent'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Assetcomponent->delete($id)) {
			$this->Flash->success(__('The assetcomponent has been deleted.'));
		} else {
			$this->Flash->error(__('The assetcomponent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
