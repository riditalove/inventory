<?php

App::uses('AppController', 'Controller');

/**
 * Assets Controller
 *
 * @property Asset $Asset
 * @property PaginatorComponent $Paginator
 */
class AssetsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public function beforeFilter() {
        parent::beforeFilter();
        $this->set('status', array( '0' => 'Pending', '1' => 'Deployed', '2' => 'Ready to Deploy', '3' => 'Archived','4' => 'Broken - Not Fixable', '5' => 'Lost/Stolen','6' => 'Out for Diagnostics','7' => 'Out for Repair'));
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Asset->recursive = 0;
        $conditions = array();
        if (!empty($this->request->data['Src']['company_id'])) {
            $conditions[] = array("Asset.company_id" => $this->request->data['Src']['company_id']);
        }
        
        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Asset.sale_date >= '" . $this->request->data['Src']['df'] . "'");
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Asset.sale_date <= '" . $this->request->data['Src']['dt'] . "'");
        }

        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Asset.id' => 'DESC'));
        $this->set('assets', $this->Paginator->paginate());
    }
    public function asset_report() {
        $this->Asset->recursive = 0;
        $conditions = array();
        if (!empty($this->request->data['Src']['company_id'])) {
            $conditions[] = array("Asset.company_id" => $this->request->data['Src']['company_id']);
        }
        
        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Asset.sale_date >= '" . $this->request->data['Src']['df'] . "'");
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Asset.sale_date <= '" . $this->request->data['Src']['dt'] . "'");
        }

        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Asset.id' => 'DESC'));
        $this->set('assets', $this->Paginator->paginate());
    }
    
    public function all_deployed() {
        $this->Asset->recursive = 0;
        $conditions = array('Asset.status'=>E_ERROR);
        if (!empty($this->request->data['Src']['company_id'])) {
            $conditions[] = array("Asset.company_id" => $this->request->data['Src']['company_id']);
        }
        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Asset.purchase_date >= '" . $this->request->data['Src']['df'] . "'");
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Asset.purchase_date <= '" . $this->request->data['Src']['dt'] . "'");
        }

        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Asset.id' => 'DESC'));
        $this->set('assets', $this->Paginator->paginate());
    }
    public function allready_to_deploy() {
        $this->Asset->recursive = 0;
        $conditions = array('Asset.status'=>E_WARNING);
        if (!empty($this->request->data['Src']['company_id'])) {
            $conditions[] = array("Asset.company_id" => $this->request->data['Src']['company_id']);
        }
        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Asset.purchase_date >= '" . $this->request->data['Src']['df'] . "'");
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Asset.purchase_date <= '" . $this->request->data['Src']['dt'] . "'");
        }

        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Asset.id' => 'DESC'));
        $this->set('assets', $this->Paginator->paginate());
    }
    public function all_pending() {
        $this->Asset->recursive = 0;
        $conditions = array('Asset.status'=>PHP_DEBUG);
        if (!empty($this->request->data['Src']['company_id'])) {
            $conditions[] = array("Asset.company_id" => $this->request->data['Src']['company_id']);
        }
        if (!empty($this->request->data['Src']['df'])) {
            $conditions[] = array("Asset.purchase_date >= '" . $this->request->data['Src']['df'] . "'");
        }
        if (!empty($this->request->data['Src']['dt'])) {
            $conditions[] = array("Asset.purchase_date <= '" . $this->request->data['Src']['dt'] . "'");
        }

        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('Asset.id' => 'DESC'));
        $this->set('assets', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Asset->exists($id)) {
            throw new NotFoundException(__('Invalid asset'));
        }
        $options = array('conditions' => array('Asset.' . $this->Asset->primaryKey => $id));
        $this->set('asset', $this->Asset->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $expiry_date = date('Y-m-d', strtotime("+".$this->request->data['Asset']['warranty']."months", strtotime($this->request->data['Asset']['purchase_date'])));
            $this->request->data['Asset']['expiry_date']=$expiry_date;
            $this->Asset->create();
            if ($this->Asset->save($this->request->data)) {
                $this->Flash->success(__('The asset has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The asset could not be saved. Please, try again.'));
            }
        }
        $suppliers = $this->Asset->Supplier->find('list');
        $companies = $this->Asset->Company->find('list');
        $this->set(compact('suppliers', 'companies'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Asset->exists($id)) {
            throw new NotFoundException(__('Invalid asset'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Asset->save($this->request->data)) {
                $this->Flash->success(__('The asset has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The asset could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Asset.' . $this->Asset->primaryKey => $id));
            $this->request->data = $this->Asset->find('first', $options);
        }
        $suppliers = $this->Asset->Supplier->find('list');
        $companies = $this->Asset->Company->find('list');
        $users = $this->Asset->User->find('list',array('conditions'=>array('User.status'=>E_ERROR)));
        $this->set(compact('suppliers', 'companies','users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->Asset->exists($id)) {
            throw new NotFoundException(__('Invalid asset'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Asset->delete($id)) {
            $this->Flash->success(__('The asset has been deleted.'));
        } else {
            $this->Flash->error(__('The asset could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
