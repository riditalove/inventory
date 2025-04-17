<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'phpqrcode', array('file' => 'phpqrcode/qrlib.php'));
/**
 * Materials Controller
 *
 * @property Material $Material
 * @property PaginatorComponent $Paginator
 */
class MaterialsController extends AppController
{

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

	public function index()
	{
		// For the dropdown
		$materialOptions = $this->Material->find('list', [
			'fields' => ['Material.id', 'Material.name'],
			'order' => ['Material.name' => 'ASC']
		]);
		$this->set('materials', $materialOptions);

		// Filtering condition
		$conditions = [];
		if (!empty($this->request->query['material_id'])) {
			$conditions['Material.id'] = $this->request->query['material_id'];
		}

		$this->Paginator->settings = [
			'conditions' => $conditions,
			'limit' => 20,
			'order' => ['Material.name' => 'ASC'],
			'recursive' => 0
		];

		$filteredMaterials = $this->Paginator->paginate('Material');
		$this->set('filteredMaterials', $filteredMaterials);
	}

	// public function index() {
	// 	$this->Material->recursive = 0;
	// 	$this->set('materials', $this->Paginator->paginate());
	// }

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
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

	public function add()
	{
		if ($this->request->is('post')) {
			$this->Material->create();

			if ($this->Material->save($this->request->data)) {
				$materialId = $this->Material->id;
				$materialName = $this->request->data['Material']['name'];

				// Avoid redefining constants
				if (!defined('QR_MODE_NUL')) {
					App::import('Vendor', 'phpqrcode/phpqrcode');
				}

				// Create directory if not exists
				$qrDir = WWW_ROOT . 'img' . DS . 'qrcodes' . DS;
				if (!file_exists($qrDir)) {
					mkdir($qrDir, 0775, true);
				}

				// URL accessible from phone
				$url = 'http://localhost/inventoryprintingfinal/stockouts/viewByMaterial/' . $materialId;
				$qrFileName = 'material_' . $materialName . '.png';
				$qrPath = $qrDir . $qrFileName;

				QRcode::png($url, $qrPath, 'L', 4, 2);

				$this->Session->setFlash(__('The material has been saved and QR code generated.'));
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Session->setFlash(__('The material could not be saved. Please, try again.'));
			}
		}
	}




	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
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
	public function delete($id = null)
	{
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
