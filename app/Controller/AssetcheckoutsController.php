<?php

App::uses('AppController', 'Controller');

/**
 * Assetcheckouts Controller
 *
 * @property Assetcheckout $Assetcheckout
 * @property PaginatorComponent $Paginator
 */
class AssetcheckoutsController extends AppController {

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
        $this->Assetcheckout->recursive = 0;
        $this->set('assetcheckouts', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Assetcheckout->exists($id)) {
            throw new NotFoundException(__('Invalid assetcheckout'));
        }
        $options = array('conditions' => array('Assetcheckout.' . $this->Assetcheckout->primaryKey => $id));
        $this->set('assetcheckout', $this->Assetcheckout->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        $datas = $this->Assetcheckout->find('first', array('conditions' => array('Assetcheckout.asset_id' => $id), 'order' => array('Assetcheckout.id' => 'DESC')));
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Assetcheckout']['asset_id'] = $id;
            if(!isset($this->request->data['Assetcheckout']['status'])){
                $this->request->data['Assetcheckout']['status']=0;
            }
            if (empty($this->request->data['Assetcheckout']['recheck_in']) && $this->request->data['Assetcheckout']['status'] == 2) {
                $this->Flash->error(__('The assetcheckout could not be saved. Please, try again.'));
                return $this->redirect(array('controller' => 'assetcheckouts', 'action' => 'add', $id));
            } elseif (!empty($this->request->data['Assetcheckout']['recheck_in']) && $this->request->data['Assetcheckout']['status'] == 2) {
                $this->request->data['Assetcheckout']['user_id'] = $this->request->data['Assetcheckout']['recheck_in'];
                $this->request->data['Assetcheckout']['checkin_date'] = date('Y-m-d');

                $updatedata = array();
                $updatedata['Assetcheckout']['id'] = $datas['Assetcheckout']['id'];
                $updatedata['Assetcheckout']['checkout_date'] = date('Y-m-d');
            } elseif (empty($this->request->data['Assetcheckout']['user_id'])) {
                $this->request->data['Assetcheckout']['id'] = $datas['Assetcheckout']['id'];
                $this->request->data['Assetcheckout']['checkout_date'] = date('Y-m-d');
            }

            if ($this->Assetcheckout->save($this->request->data)) {
                if (!empty($this->request->data['Assetcheckout']['recheck_in']) && $this->request->data['Assetcheckout']['status'] == 2 && empty($datas['Assetcheckout']['checkout_date'])) {
                    $this->Assetcheckout->save($updatedata);
                }
                $accessorystatus = array();
                $accessorystatus['Asset']['id'] = $id;
                $accessorystatus['Asset']['last_status'] = $this->request->data['Assetcheckout']['status'];
                $this->Assetcheckout->Asset->save($accessorystatus);
                $this->Flash->success(__('The assetcheckout has been saved.'));
                return $this->redirect(array('controller' => 'assets', 'action' => 'index'));
            } else {
                $this->Flash->error(__('The assetcheckout could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $datas;
        }
        $users = $this->Assetcheckout->User->find('list');
        $assets = $this->Assetcheckout->Asset->find('first', array('conditions' => array('Asset.id' => $id)));
        $this->set(compact('users', 'assets'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Assetcheckout->exists($id)) {
            throw new NotFoundException(__('Invalid assetcheckout'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Assetcheckout->save($this->request->data)) {
                $this->Flash->success(__('The assetcheckout has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The assetcheckout could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Assetcheckout.' . $this->Assetcheckout->primaryKey => $id));
            $this->request->data = $this->Assetcheckout->find('first', $options);
        }
        $users = $this->Assetcheckout->User->find('list');
        $assets = $this->Assetcheckout->Asset->find('list');
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
        if (!$this->Assetcheckout->exists($id)) {
            throw new NotFoundException(__('Invalid assetcheckout'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Assetcheckout->delete($id)) {
            $this->Flash->success(__('The assetcheckout has been deleted.'));
        } else {
            $this->Flash->error(__('The assetcheckout could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
