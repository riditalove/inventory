<?php

App::uses('AppController', 'Controller');

/**
 * Accessories Controller
 *
 * @property Accessory $Accessory
 * @property PaginatorComponent $Paginator
 */
class AccessoriesController extends AppController {

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
        $this->Accessory->recursive = 0;
        $conditions = array();
        if (!empty($this->request->data['Src']['accessory_name'])) {
            $conditions[] = array("Accessory.accessory_name LIKE '%" . $this->request->data['Src']['accessory_name'] . "%'");
        }
        if (!empty($this->request->data['Src']['serial_no'])) {
            $conditions[] = array("Accessory.serial_no LIKE '%" . $this->request->data['Src']['serial_no'] . "%'");
        }
        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Accessory.purchase_date >= '" . $this->request->data['Src']['df'] . "'");
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Accessory.purchase_date <= '" . $this->request->data['Src']['dt'] . "'");
        }
        
        $this->Paginator->settings = array('conditions' => $conditions,'order' => array('Accessory.id' => 'DESC'));
        $this->set('accessories', $this->Paginator->paginate());
    }
    
    public function accessory_report() {
        $this->Accessory->recursive = 0;
        $this->set('accessories', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Accessory->exists($id)) {
            throw new NotFoundException(__('Invalid accessory'));
        }
        $options = array('conditions' => array('Accessory.' . $this->Accessory->primaryKey => $id));
        $this->set('accessory', $this->Accessory->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Accessory->create();
            if ($this->Accessory->save($this->request->data)) {
                $this->Flash->success(__('The accessory has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The accessory could not be saved. Please, try again.'));
            }
        }
        $companies = $this->Accessory->Company->find('list');
        $categories = $this->Accessory->Category->find('list');
        $suppliers = $this->Accessory->Supplier->find('list');
        $manufacturers = $this->Accessory->Manufacturer->find('list');
        $this->set(compact('companies', 'categories', 'suppliers', 'manufacturers'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Accessory->exists($id)) {
            throw new NotFoundException(__('Invalid accessory'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Accessory->save($this->request->data)) {
                $this->Flash->success(__('The accessory has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The accessory could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Accessory.' . $this->Accessory->primaryKey => $id));
            $this->request->data = $this->Accessory->find('first', $options);
        }
        $companies = $this->Accessory->Company->find('list');
        $categories = $this->Accessory->Category->find('list');
        $suppliers = $this->Accessory->Supplier->find('list');
        $manufacturers = $this->Accessory->Manufacturer->find('list');
        $users = $this->Accessory->User->find('list');
        $this->set(compact('companies', 'categories', 'suppliers', 'manufacturers','users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->Accessory->exists($id)) {
            throw new NotFoundException(__('Invalid accessory'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Accessory->delete($id)) {
            $this->Flash->success(__('The accessory has been deleted.'));
        } else {
            $this->Flash->error(__('The accessory could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
