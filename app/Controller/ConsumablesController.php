<?php

App::uses('AppController', 'Controller');

/**
 * Consumables Controller
 *
 * @property Consumable $Consumable
 * @property PaginatorComponent $Paginator
 */
class ConsumablesController extends AppController {

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
        $this->Consumable->recursive = 0;
        $this->set('consumables', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Consumable->exists($id)) {
            throw new NotFoundException(__('Invalid consumable'));
        }
        $options = array('conditions' => array('Consumable.' . $this->Consumable->primaryKey => $id));
        $this->set('consumable', $this->Consumable->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Consumable->create();
            if ($this->Consumable->save($this->request->data)) {
                $this->Flash->success(__('The consumable has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The consumable could not be saved. Please, try again.'));
            }
        }
        $companies = $this->Consumable->Company->find('list');
        $categories = $this->Consumable->Category->find('list');
        $manufacturers = $this->Consumable->Manufacturer->find('list');
        $this->set(compact('companies', 'categories', 'manufacturers'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Consumable->exists($id)) {
            throw new NotFoundException(__('Invalid consumable'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Consumable->save($this->request->data)) {
                $this->Flash->success(__('The consumable has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The consumable could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Consumable.' . $this->Consumable->primaryKey => $id));
            $this->request->data = $this->Consumable->find('first', $options);
        }
        $companies = $this->Consumable->Company->find('list');
        $categories = $this->Consumable->Category->find('list');
        $manufacturers = $this->Consumable->Manufacturer->find('list');
        $users = $this->Consumable->User->find('list');
        $this->set(compact('companies', 'categories', 'manufacturers','users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->Consumable->exists($id)) {
            throw new NotFoundException(__('Invalid consumable'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Consumable->delete($id)) {
            $this->Flash->success(__('The consumable has been deleted.'));
        } else {
            $this->Flash->error(__('The consumable could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
