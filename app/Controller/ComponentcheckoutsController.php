<?php

App::uses('AppController', 'Controller');

/**
 * Componentcheckouts Controller
 *
 * @property Componentcheckout $Componentcheckout
 * @property PaginatorComponent $Paginator
 */
class ComponentcheckoutsController extends AppController {

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
        $this->Componentcheckout->recursive = 0;
        $this->set('componentcheckouts', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Componentcheckout->exists($id)) {
            throw new NotFoundException(__('Invalid componentcheckout'));
        }
        $options = array('conditions' => array('Componentcheckout.' . $this->Componentcheckout->primaryKey => $id));
        $this->set('componentcheckout', $this->Componentcheckout->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        $datas = $this->Componentcheckout->find('first', array('conditions' => array('Componentcheckout.assetcomponent_id' => $id), 'order' => array('Componentcheckout.id' => 'DESC')));
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Componentcheckout']['assetcomponent_id'] = $id;
            if(!isset($this->request->data['Componentcheckout']['status'])){
                $this->request->data['Componentcheckout']['status']=0;
            }
            if (empty($this->request->data['Componentcheckout']['recheck_in']) && $this->request->data['Componentcheckout']['status'] == 2) {
                $this->Flash->error(__('The componentcheckout could not be saved. Please, try again.'));
                return $this->redirect(array('controller' => 'componentcheckouts', 'action' => 'add', $id));
            } elseif (!empty($this->request->data['Componentcheckout']['recheck_in']) && $this->request->data['Componentcheckout']['status'] == 2) {
                $this->request->data['Componentcheckout']['user_id'] = $this->request->data['Componentcheckout']['recheck_in'];
                $this->request->data['Componentcheckout']['checkin_date'] = date('Y-m-d');
                
                $updatedata = array();
                $updatedata['Componentcheckout']['id'] = $datas['Componentcheckout']['id'];
                $updatedata['Componentcheckout']['checkout_date'] = date('Y-m-d');
            } elseif (empty($this->request->data['Componentcheckout']['user_id'])) {
                $this->request->data['Componentcheckout']['id'] = $datas['Componentcheckout']['id'];
                $this->request->data['Componentcheckout']['checkout_date'] = date('Y-m-d');
            }

            if ($this->Componentcheckout->save($this->request->data)) {
                if (!empty($this->request->data['Componentcheckout']['recheck_in']) && $this->request->data['Componentcheckout']['status'] == 2 && empty($datas['Componentcheckout']['checkout_date'])) {
                    $this->Componentcheckout->save($updatedata);
                }
                $accessorystatus =array();
                $accessorystatus['Assetcomponent']['id'] =$id;
                $accessorystatus['Assetcomponent']['last_status'] =$this->request->data['Componentcheckout']['status'];
                $this->Componentcheckout->Assetcomponent->save($accessorystatus);
                $this->Flash->success(__('The assetcomponent has been saved.'));
                return $this->redirect(array('controller' => 'assetcomponents', 'action' => 'index'));
            } else {
                $this->Flash->error(__('The assetcomponent could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $datas;
        }
        $users = $this->Componentcheckout->User->find('list');
        $assetcomponents = $this->Componentcheckout->Assetcomponent->find('first', array('conditions' => array('Assetcomponent.id' => $id)));
        $this->set(compact('users', 'assetcomponents'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Componentcheckout->exists($id)) {
            throw new NotFoundException(__('Invalid componentcheckout'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Componentcheckout->save($this->request->data)) {
                $this->Flash->success(__('The componentcheckout has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The componentcheckout could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Componentcheckout.' . $this->Componentcheckout->primaryKey => $id));
            $this->request->data = $this->Componentcheckout->find('first', $options);
        }
        $users = $this->Componentcheckout->User->find('list');
        $assets = $this->Componentcheckout->Asset->find('list');
        $this->set(compact('users', 'assets'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->Componentcheckout->exists($id)) {
            throw new NotFoundException(__('Invalid componentcheckout'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Componentcheckout->delete($id)) {
            $this->Flash->success(__('The componentcheckout has been deleted.'));
        } else {
            $this->Flash->error(__('The componentcheckout could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
