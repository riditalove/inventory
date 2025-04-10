<?php
App::uses('AppModel', 'Model');
/**
 * Stockout Model
 *
 * @property Material $Material
 */
class Stockout extends AppModel
{

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'out_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'remaining_stocks' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'material_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'quantity_removed' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Material' => array(
			'className' => 'Material',
			'foreignKey' => 'material_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


	// Link to Stock model
	public $uses = array('Stock');

	public function beforeSave($options = array())
	{
		if (!empty($this->data['Stockout']['material_id'])) {
			// Load Stock model
			App::import('Model', 'Stock');
			$Stock = new Stock();

			$stockData = $Stock->find('first', array(
				'conditions' => array('Stock.material_id' => $this->data['Stockout']['material_id']),
				'fields' => array('Stock.quantity')
			));

			if (!empty($stockData)) {
				$this->data['Stockout']['remaining_stocks'] = $stockData['Stock']['quantity'];
			}
		}

		return true;
	}
}
