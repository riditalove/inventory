<?php
/**
 * Followuppocketinglabdip Fixture
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class FollowuppocketinglabdipFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'production_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'productionstyle_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'approved_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'factory_order_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'in_house_plan_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'actual_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'remarks' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'entry_by' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'edit_by' => array('type' => 'smallinteger', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => true),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'production_id' => 1,
			'productionstyle_id' => 1,
			'approved_date' => '2020-01-25',
			'factory_order_date' => '2020-01-25',
			'in_house_plan_date' => '2020-01-25',
			'actual_date' => '2020-01-25',
			'remarks' => 'Lorem ipsum dolor sit amet',
			'entry_by' => 1,
			'edit_by' => 1,
			'status' => 1,
			'created' => '2020-01-25 02:10:04',
			'modified' => '2020-01-25 02:10:04'
		),
	);

}
