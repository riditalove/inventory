<?php
/**
 * Commercialswewing Fixture
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CommercialswewingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'production_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'productionstyle_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'startdate' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'enddate' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'qtydone' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'startdate' => '2020-01-25 02:06:16',
			'enddate' => '2020-01-25 02:06:16',
			'qtydone' => 1,
			'remarks' => 'Lorem ipsum dolor sit amet',
			'entry_by' => 1,
			'edit_by' => 1,
			'status' => 1,
			'created' => '2020-01-25 02:06:16',
			'modified' => '2020-01-25 02:06:16'
		),
	);

}
