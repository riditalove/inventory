<?php
/**
 * Commercialfullgarmenttest Fixture
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CommercialfullgarmenttestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'production_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'productionstyle_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'items' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'planneddate' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'actualdate' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'items' => 'Lorem ipsum dolor sit amet',
			'planneddate' => '2020-01-25 02:03:31',
			'actualdate' => '2020-01-25 02:03:31',
			'remarks' => 'Lorem ipsum dolor sit amet',
			'entry_by' => 1,
			'edit_by' => 1,
			'status' => 1,
			'created' => '2020-01-25 02:03:31',
			'modified' => '2020-01-25 02:03:31'
		),
	);

}
