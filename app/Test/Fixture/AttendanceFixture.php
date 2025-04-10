<?php
/**
 * Attendance Fixture
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class AttendanceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'company_id' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'readerid' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'card' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'in_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'out_time' => array('type' => 'time', 'null' => true, 'default' => null),
		'middles' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 700, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'reason' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'comment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'a_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'entry_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'comment' => 'user_id'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'company_id' => 1,
			'readerid' => 'Lo',
			'card' => 'Lorem ip',
			'in_time' => '11:20:32',
			'out_time' => '11:20:32',
			'middles' => 'Lorem ipsum dolor sit amet',
			'reason' => 'Lorem ipsum dolor sit ame',
			'comment' => 'Lorem ipsum dolor sit amet',
			'a_date' => '2019-10-31',
			'entry_by' => 1
		),
	);

}
