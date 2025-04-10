<?php

App::uses('AppController', 'Controller');

/**
 * Assetmaintenances Controller
 *
 * @property Assetmaintenance $Assetmaintenance
 * @property PaginatorComponent $Paginator
 */
class AssetmaintenancesController extends AppController {

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
        $this->Assetmaintenance->recursive = 0;
        $this->set('assetmaintenances', $this->Paginator->paginate());
    }

    public function maintenance_report() {
        $this->Assetmaintenance->recursive = 0;
        $this->set('assetmaintenances', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Assetmaintenance->exists($id)) {
            throw new NotFoundException(__('Invalid assetmaintenance'));
        }
        $options = array('conditions' => array('Assetmaintenance.' . $this->Assetmaintenance->primaryKey => $id));
        $this->set('assetmaintenance', $this->Assetmaintenance->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Assetmaintenance->create();
            if ($this->Assetmaintenance->save($this->request->data)) {
                $this->Flash->success(__('The assetmaintenance has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The assetmaintenance could not be saved. Please, try again.'));
            }
        }
        $assets = $this->Assetmaintenance->Asset->find('list');
        $suppliers = $this->Assetmaintenance->Supplier->find('list');
        $users = $this->Assetmaintenance->User->find('list');
        $this->set(compact('assets', 'suppliers', 'users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Assetmaintenance->exists($id)) {
            throw new NotFoundException(__('Invalid assetmaintenance'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Assetmaintenance->save($this->request->data)) {
                $this->Flash->success(__('The assetmaintenance has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The assetmaintenance could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Assetmaintenance.' . $this->Assetmaintenance->primaryKey => $id));
            $this->request->data = $this->Assetmaintenance->find('first', $options);
        }
        $assets = $this->Assetmaintenance->Asset->find('list');
        $suppliers = $this->Assetmaintenance->Supplier->find('list');
        $users = $this->Assetmaintenance->User->find('list');
        $this->set(compact('assets', 'suppliers', 'users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->Assetmaintenance->exists($id)) {
            throw new NotFoundException(__('Invalid assetmaintenance'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Assetmaintenance->delete($id)) {
            $this->Flash->success(__('The assetmaintenance has been deleted.'));
        } else {
            $this->Flash->error(__('The assetmaintenance could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
