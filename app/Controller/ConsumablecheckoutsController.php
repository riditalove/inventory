<?php

App::uses('AppController', 'Controller');

/**
 * Consumablecheckouts Controller
 *
 * @property Consumablecheckout $Consumablecheckout
 * @property PaginatorComponent $Paginator
 */
class ConsumablecheckoutsController extends AppController {

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
        $this->Consumablecheckout->recursive = 0;
        $this->set('consumablecheckouts', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Consumablecheckout->exists($id)) {
            throw new NotFoundException(__('Invalid consumablecheckout'));
        }
        $options = array('conditions' => array('Consumablecheckout.' . $this->Consumablecheckout->primaryKey => $id));
        $this->set('consumablecheckout', $this->Consumablecheckout->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        $datas = $this->Consumablecheckout->find('first', array('conditions' => array('Consumablecheckout.consumable_id' => $id), 'order' => array('Consumablecheckout.id' => 'DESC')));
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Consumablecheckout']['consumable_id'] = $id;
            if(!isset($this->request->data['Consumablecheckout']['status'])){
                $this->request->data['Consumablecheckout']['status']=0;
            }
            if (empty($this->request->data['Consumablecheckout']['recheck_in']) && $this->request->data['Consumablecheckout']['status'] == 2) {
                $this->Flash->error(__('The consumablecheckout could not be saved. Please, try again.'));
                return $this->redirect(array('controller' => 'consumablecheckouts', 'action' => 'add', $id));
            } elseif (!empty($this->request->data['Consumablecheckout']['recheck_in']) && $this->request->data['Consumablecheckout']['status'] == 2) {
                $this->request->data['Consumablecheckout']['user_id'] = $this->request->data['Consumablecheckout']['recheck_in'];
                $this->request->data['Consumablecheckout']['checkin_date'] = date('Y-m-d');
                
                $updatedata = array();
                $updatedata['Consumablecheckout']['id'] = $datas['Consumablecheckout']['id'];
                $updatedata['Consumablecheckout']['checkout_date'] = date('Y-m-d');
            } elseif (empty($this->request->data['Consumablecheckout']['user_id'])) {
                $this->request->data['Consumablecheckout']['id'] = $datas['Consumablecheckout']['id'];
                $this->request->data['Consumablecheckout']['checkout_date'] = date('Y-m-d');
            }

            if ($this->Consumablecheckout->save($this->request->data)) {
                if (!empty($this->request->data['Consumablecheckout']['recheck_in']) && $this->request->data['Consumablecheckout']['status'] == 2 && empty($datas['Consumablecheckout']['checkout_date'])) {
                    $this->Consumablecheckout->save($updatedata);
                }
                $accessorystatus =array();
                $accessorystatus['Consumable']['id'] =$id;
                $accessorystatus['Consumable']['last_status'] =$this->request->data['Consumablecheckout']['status'];
                $this->Consumablecheckout->Consumable->save($accessorystatus);
                $this->Flash->success(__('The consumablecheckout has been saved.'));
                return $this->redirect(array('controller' => 'consumables', 'action' => 'index'));
            } else {
                $this->Flash->error(__('The consumablecheckout could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $datas;
        }
        $users = $this->Consumablecheckout->User->find('list');
        $consumables = $this->Consumablecheckout->Consumable->find('first', array('conditions' => array('Consumable.id' => $id)));
        $this->set(compact('users', 'consumables'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Consumablecheckout->exists($id)) {
            throw new NotFoundException(__('Invalid consumablecheckout'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Consumablecheckout->save($this->request->data)) {
                $this->Flash->success(__('The consumablecheckout has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The consumablecheckout could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Consumablecheckout.' . $this->Consumablecheckout->primaryKey => $id));
            $this->request->data = $this->Consumablecheckout->find('first', $options);
        }
        $users = $this->Consumablecheckout->User->find('list');
        $consumables = $this->Consumablecheckout->Consumable->find('list');
        $this->set(compact('users', 'consumables'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->Consumablecheckout->exists($id)) {
            throw new NotFoundException(__('Invalid consumablecheckout'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Consumablecheckout->delete($id)) {
            $this->Flash->success(__('The consumablecheckout has been deleted.'));
        } else {
            $this->Flash->error(__('The consumablecheckout could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
