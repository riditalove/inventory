<?php

App::uses('AppController', 'Controller');

/**
 * Accessorycheckouts Controller
 *
 * @property Accessorycheckout $Accessorycheckout
 * @property PaginatorComponent $Paginator
 */
class AccessorycheckoutsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public function beforeFilter() {
        parent::beforeFilter();
    }
    

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Accessorycheckout->recursive = 0;
        $this->set('accessorycheckouts', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Accessorycheckout->exists($id)) {
            throw new NotFoundException(__('Invalid accessorycheckout'));
        }
        $options = array('conditions' => array('Accessorycheckout.' . $this->Accessorycheckout->primaryKey => $id));
        $this->set('accessorycheckout', $this->Accessorycheckout->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        $datas = $this->Accessorycheckout->find('first', array('conditions' => array('Accessorycheckout.accessory_id' => $id), 'order' => array('Accessorycheckout.id' => 'DESC')));
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Accessorycheckout']['accessory_id'] = $id;
            if(!isset($this->request->data['Accessorycheckout']['status'])){
                $this->request->data['Accessorycheckout']['status']=0;
            }
            if (empty($this->request->data['Accessorycheckout']['recheck_in']) && $this->request->data['Accessorycheckout']['status'] == 2) {
                $this->Flash->error(__('The accessorycheckout could not be saved. Please, try again.'));
                return $this->redirect(array('controller' => 'accessorycheckouts', 'action' => 'add', $id));
            } elseif (!empty($this->request->data['Accessorycheckout']['recheck_in']) && $this->request->data['Accessorycheckout']['status'] == 2) {
                $this->request->data['Accessorycheckout']['user_id'] = $this->request->data['Accessorycheckout']['recheck_in'];
                $this->request->data['Accessorycheckout']['checkin_date'] = date('Y-m-d');
                
                $updatedata = array();
                $updatedata['Accessorycheckout']['id'] = $datas['Accessorycheckout']['id'];
                $updatedata['Accessorycheckout']['checkout_date'] = date('Y-m-d');
            } elseif (empty($this->request->data['Accessorycheckout']['user_id'])) {
                $this->request->data['Accessorycheckout']['id'] = $datas['Accessorycheckout']['id'];
                $this->request->data['Accessorycheckout']['checkout_date'] = date('Y-m-d');
            }

            if ($this->Accessorycheckout->save($this->request->data)) {
                if (!empty($this->request->data['Accessorycheckout']['recheck_in']) && $this->request->data['Accessorycheckout']['status'] == 2 && empty($datas['Accessorycheckout']['checkout_date'])) {
                    $this->Accessorycheckout->save($updatedata);
                }
                $accessorystatus =array();
                $accessorystatus['Accessory']['id'] =$id;
                $accessorystatus['Accessory']['last_status'] =$this->request->data['Accessorycheckout']['status'];
                $this->Accessorycheckout->Accessory->save($accessorystatus);
                $this->Flash->success(__('The accessorycheckout has been saved.'));
                return $this->redirect(array('controller' => 'accessories', 'action' => 'index'));
            } else {
                $this->Flash->error(__('The accessorycheckout could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $datas;
        }
        $users = $this->Accessorycheckout->User->find('list');
        $accessories = $this->Accessorycheckout->Accessory->find('first', array('conditions' => array('Accessory.id' => $id)));
        $this->set(compact('users', 'accessories'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Accessorycheckout->exists($id)) {
            throw new NotFoundException(__('Invalid accessorycheckout'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Accessorycheckout->save($this->request->data)) {
                $this->Flash->success(__('The accessorycheckout has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The accessorycheckout could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Accessorycheckout.' . $this->Accessorycheckout->primaryKey => $id));
            $this->request->data = $this->Accessorycheckout->find('first', $options);
        }
        $users = $this->Accessorycheckout->User->find('list');
        $accessories = $this->Accessorycheckout->Accessory->find('list');
        $this->set(compact('users', 'accessories'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->Accessorycheckout->exists($id)) {
            throw new NotFoundException(__('Invalid accessorycheckout'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Accessorycheckout->delete($id)) {
            $this->Flash->success(__('The accessorycheckout has been deleted.'));
        } else {
            $this->Flash->error(__('The accessorycheckout could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
