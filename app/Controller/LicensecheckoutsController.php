<?php
App::uses('AppController', 'Controller');
/**
 * Licensecheckouts Controller
 *
 * @property Licensecheckout $Licensecheckout
 * @property PaginatorComponent $Paginator
 */
class LicensecheckoutsController extends AppController {

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
		$this->Licensecheckout->recursive = 0;
		$this->set('licensecheckouts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Licensecheckout->exists($id)) {
			throw new NotFoundException(__('Invalid licensecheckout'));
		}
		$options = array('conditions' => array('Licensecheckout.' . $this->Licensecheckout->primaryKey => $id));
		$this->set('licensecheckout', $this->Licensecheckout->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
        $datas = $this->Licensecheckout->find('first', array('conditions' => array('Licensecheckout.license_id' => $id), 'order' => array('Licensecheckout.id' => 'DESC')));
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Licensecheckout']['license_id'] = $id;
            if(!isset($this->request->data['Licensecheckout']['status'])){
                $this->request->data['Licensecheckout']['status']=0;
            }
            if (empty($this->request->data['Licensecheckout']['recheck_in']) && $this->request->data['Licensecheckout']['status'] == 2) {
                $this->Flash->error(__('The licensecheckout could not be saved. Please, try again.'));
                return $this->redirect(array('controller' => 'licensecheckouts', 'action' => 'add', $id));
            } elseif (!empty($this->request->data['Licensecheckout']['recheck_in']) && $this->request->data['Licensecheckout']['status'] == 2) {
                $this->request->data['Licensecheckout']['user_id'] = $this->request->data['Licensecheckout']['recheck_in'];
                $this->request->data['Licensecheckout']['checkin_date'] = date('Y-m-d');
                
                $updatedata = array();
                $updatedata['Licensecheckout']['id'] = $datas['Licensecheckout']['id'];
                $updatedata['Licensecheckout']['checkout_date'] = date('Y-m-d');
            } elseif (empty($this->request->data['Licensecheckout']['user_id'])) {
                $this->request->data['Licensecheckout']['id'] = $datas['Licensecheckout']['id'];
                $this->request->data['Licensecheckout']['checkout_date'] = date('Y-m-d');
            }

            if ($this->Licensecheckout->save($this->request->data)) {
                if (!empty($this->request->data['Licensecheckout']['recheck_in']) && $this->request->data['Licensecheckout']['status'] == 2 && empty($datas['Licensecheckout']['checkout_date'])) {
                    $this->Licensecheckout->save($updatedata);
                }
                $accessorystatus =array();
                $accessorystatus['License']['id'] =$id;
                $accessorystatus['License']['last_status'] =$this->request->data['Licensecheckout']['status'];
                $this->Licensecheckout->License->save($accessorystatus);
                $this->Flash->success(__('The licensecheckout has been saved.'));
                return $this->redirect(array('controller' => 'licenses', 'action' => 'index'));
            } else {
                $this->Flash->error(__('The licensecheckout could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $datas;
        }
        $users = $this->Licensecheckout->User->find('list');
        $licenses = $this->Licensecheckout->License->find('first', array('conditions' => array('License.id' => $id)));
        $this->set(compact('users', 'licenses'));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Licensecheckout->exists($id)) {
			throw new NotFoundException(__('Invalid licensecheckout'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Licensecheckout->save($this->request->data)) {
				$this->Flash->success(__('The licensecheckout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The licensecheckout could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Licensecheckout.' . $this->Licensecheckout->primaryKey => $id));
			$this->request->data = $this->Licensecheckout->find('first', $options);
		}
		$users = $this->Licensecheckout->User->find('list');
		$licenses = $this->Licensecheckout->License->find('list');
		$this->set(compact('users', 'licenses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Licensecheckout->exists($id)) {
			throw new NotFoundException(__('Invalid licensecheckout'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Licensecheckout->delete($id)) {
			$this->Flash->success(__('The licensecheckout has been deleted.'));
		} else {
			$this->Flash->error(__('The licensecheckout could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
