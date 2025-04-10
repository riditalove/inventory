<?php
/**
 * Component Fixture
 */
class ComponentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'component_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'quantity' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'min_qty' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'order_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'purchase_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'purchase_cost' => array('type' => 'date', 'null' => false, 'default' => null),
		'serial_no' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'component_name' => 'Lorem ipsum dolor sit amet',
			'category_id' => 1,
			'quantity' => 1,
			'min_qty' => 1,
			'company_id' => 1,
			'order_number' => 'Lorem ipsum dolor ',
			'purchase_date' => '2021-01-08',
			'purchase_cost' => '2021-01-08',
			'serial_no' => '2021-01-08'
		),
	);

}
