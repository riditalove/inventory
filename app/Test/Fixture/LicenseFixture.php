<?php
/**
 * License Fixture
 */
class LicenseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'asset_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'product_key' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'seats' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'manufacturer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'licensed_to_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'licensed_to_email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'supplier_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'order_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'purchase_cost' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'purchase_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'expiration_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'termination_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'purchase_order_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'notes' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'asset_name' => 'Lorem ipsum dolor sit amet',
			'category_id' => 1,
			'product_key' => 'Lorem ipsum dolor sit amet',
			'seats' => 1,
			'company_id' => 1,
			'manufacturer_id' => 1,
			'licensed_to_name' => 'Lorem ipsum dolor sit amet',
			'licensed_to_email' => 'Lorem ipsum dolor sit amet',
			'supplier_id' => 1,
			'order_number' => 'Lorem ipsum dolor sit amet',
			'purchase_cost' => 1,
			'purchase_date' => '2021-01-08',
			'expiration_date' => '2021-01-08',
			'termination_date' => '2021-01-08',
			'purchase_order_number' => 'Lorem ipsum dolor ',
			'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
