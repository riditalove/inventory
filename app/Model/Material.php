<?php
App::uses('AppModel', 'Model');
/**
 * Material Model
 *
 */
class Material extends AppModel
{

	public $hasOne = 'Stock';

	public function afterSave($created, $options = array())
	{
		if ($created) {
			// Only create a Stock if a new Material was created
			$this->Stock = ClassRegistry::init('Stock');
			$this->Stock->create();
			$this->Stock->save(array(
				'Stock' => array(
					'material_id' => $this->id,
					'quantity' => 0
				)
			));
		}
		return ;
	}
	public function afterDelete() {
        $this->Stock = ClassRegistry::init('Stock');
        $this->Stock->deleteAll(array('Stock.material_id' => $this->id), false);
        return ;
    }

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);


	public $hasMany = array(
		'Stock' => array(
			'className' => 'Stock',
			'foreignKey' => 'material_id',
			'dependent' => true, // Deletes associated Stock rows
		),
		'Stockin' => array(
			'className' => 'Stockin',
			'foreignKey' => 'material_id',
			'dependent' => true, // Deletes associated Stockin rows
		),
		'Stockout' => array(
			'className' => 'Stockout',
			'foreignKey' => 'material_id',
			'dependent' => true, // Deletes associated Stockout rows
		)
	);
}
