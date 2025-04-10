<?php
/**
 * Consumable Fixture
 */
class ConsumableFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'consumable_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'manufacturer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'item_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'order_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'purchase_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'purchase_cost' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'quantity' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'min_qty' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'company_id' => 1,
			'consumable_name' => 'Lorem ipsum dolor sit amet',
			'category_id' => 1,
			'manufacturer_id' => 1,
			'item_no' => 'Lorem ipsum dolor ',
			'order_number' => 'Lorem ipsum dolor ',
			'purchase_date' => '2021-01-08',
			'purchase_cost' => 1,
			'quantity' => 1,
			'min_qty' => 1
		),
	);

}
