<?php
/**
 * Material Fixture
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class MaterialFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'name_local' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'country_id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'details' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'entry_by' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true, 'comment' => 'user_id'),
		'edit_by' => array('type' => 'smallinteger', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => true, 'comment' => 'user_id'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'name_local' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1,
			'details' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'entry_by' => 1,
			'edit_by' => 1,
			'status' => 1,
			'created' => '2019-10-31 11:31:41',
			'modified' => '2019-10-31 11:31:41'
		),
	);

}
