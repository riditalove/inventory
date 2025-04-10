<?php
App::uses('AppController', 'Controller');
/**
 * Materials Controller
 *
 * @property Material $Material
 * @property PaginatorComponent $Paginator
 */
class MaterialsController extends AppController {

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
		$this->Material->recursive = 0;
		$this->set('materials', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Material->exists($id)) {
			throw new NotFoundException(__('Invalid material'));
		}
		$options = array('conditions' => array('Material.' . $this->Material->primaryKey => $id));
		$this->set('material', $this->Material->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Material->create();
			if ($this->Material->save($this->request->data)) {
				$this->Flash->success(__('The material has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The material could not be saved. Please, try again.'));
			}
		}
	}

	// Inside your Material add function
// public function add() {
//     if ($this->request->is('post')) {
//         $this->Material->create();
//         if ($this->Material->save($this->request->data)) {
//             // Get the material_id
//             $materialId = $this->Material->id;
            
//             // Generate QR code for the material
//             $qrCodeUrl = Router::url(['controller' => 'stockouts', 'action' => 'history', $materialId], true);
//             $qrCodeImage = $this->generateQRCode($qrCodeUrl); // Generate QR code logic

//             // Save the QR code in the material record (you can store the image or just the URL)
//             $this->Material->id = $materialId;
//             $this->Material->saveField('qr_code', $qrCodeImage);

//             $this->Flash->success(__('The material has been saved.'));
//             return $this->redirect(['action' => 'index']);
//         }
//         $this->Flash->error(__('Unable to add the material.'));
//     }
// }


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Material->exists($id)) {
			throw new NotFoundException(__('Invalid material'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Material->save($this->request->data)) {
				$this->Flash->success(__('The material has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The material could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Material.' . $this->Material->primaryKey => $id));
			$this->request->data = $this->Material->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Material->exists($id)) {
			throw new NotFoundException(__('Invalid material'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Material->delete($id)) {
			$this->Flash->success(__('The material has been deleted.'));
		} else {
			$this->Flash->error(__('The material could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
