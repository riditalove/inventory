<?php

App::uses('AppController', 'Controller');

/**
 * Roles Controller
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 * @property Role $Role
 * @property PaginatorComponent $Paginator
 */
class RolesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     * Generated by Abdul Jalil
     * @return void
     */
    public function index() {
        $this->Role->recursive = 0;
        $this->set('roles', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Role->exists($id)) {
            throw new NotFoundException(__('Invalid role'));
        }
        $options = array('conditions' => array('Role.' . $this->Role->primaryKey => $id));
        $this->set('role', $this->Role->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Role->create();
            $this->request->data['Role']['entry_by'] = $this->Auth->user('id');
            $this->request->data['Role']['roles'] = json_encode($this->request->data['Role']['roles']);
            if ($this->Role->save($this->request->data)) {
                $this->Flash->success(__('The role has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The role could not be saved. Please, try again.'));
            }
        }

        $acl = [
            'Master Settings' =>
            [
                'Role Management' => ['controller' => 'roles', 'action' => ['index' => 'List', 'view' => 'View Details', 'add' => 'Add New', 'edit' => 'Edit Role', 'delete' => 'Delete Role']],

                'Inventory Management' => ['controller' => 'inventories', 'action' => ['index' => 'List', 'view' => 'View Details', 'add' => 'Add New', 'edit' => 'Edit User', 'delete' => 'Delete User']],

                'Stockin Management' => ['controller' => 'stockins', 'action' => ['index' => 'List', 'view' => 'View Details', 'add' => 'Add New', 'edit' => 'Edit User', 'delete' => 'Delete User']],

                'Stock Management' => ['controller' => 'stocks', 'action' => ['index' => 'List', 'view' => 'View Details', 'add' => 'Add New', 'edit' => 'Edit User', 'delete' => 'Delete User']],

                'Stockout Management' => ['controller' => 'stockouts', 'action' => ['index' => 'List', 'view' => 'View Details', 'add' => 'Add New', 'edit' => 'Edit User', 'delete' => 'Delete User']],

                'Material Management' => ['controller' => 'materials', 'action' => ['index' => 'List', 'view' => 'View Details', 'add' => 'Add New', 'edit' => 'Edit User', 'delete' => 'Delete User']],
            ],
           

        ];
        $this->set('acls', $acl);

        $this->set('menudata', $this->getmenues());
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Role->exists($id)) {
            throw new NotFoundException(__('Invalid role'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Role']['edit_by'] = $this->Auth->user('id');
            $this->request->data['Role']['roles'] = json_encode($this->request->data['Role']['roles']);
            if ($this->Role->save($this->request->data)) {
                $this->Flash->success(__('The role has been updated.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The role could not be updated. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Role.' . $this->Role->primaryKey => $id));
            $this->request->data = $this->Role->find('first', $options);
            $this->set('menudata', $this->getmenues());
        
        }

        
        $acl = [
            'Master Settings' =>
            [
                'Role Management' => ['controller' => 'roles', 'action' => ['index' => 'List', 'view' => 'View Details', 'add' => 'Add New', 'edit' => 'Edit Role', 'delete' => 'Delete Role']],

                'Inventory Management' => ['controller' => 'inventories', 'action' => ['index' => 'List', 'view' => 'View Details', 'add' => 'Add New', 'edit' => 'Edit User', 'delete' => 'Delete User']],
            ],
           

        ];
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Role->id = $id;
        if (!$this->Role->exists()) {
            throw new NotFoundException(__('Invalid role'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Role->delete()) {
            $this->Flash->success(__('The role has been deleted.'));
        } else {
            $this->Flash->error(__('The role could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
