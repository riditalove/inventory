<?php
/**
 * Parcel Fixture
 */
class ParcelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'parcel_sender' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'sending_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'remark' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'parcel_receiver' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'courier_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'track_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'admin_recv_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'security_guard' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'sg_recv_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'csp_recv' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'csp_recv_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'apply_label' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'status' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
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
			'parcel_sender' => 'Lorem ipsum dolor sit amet',
			'sending_date' => '2020-12-03',
			'remark' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'parcel_receiver' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1,
			'courier_id' => 1,
			'track_no' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'admin_recv_date' => '2020-12-03 12:19:29',
			'security_guard' => 'Lorem ipsum dolor sit amet',
			'sg_recv_date' => '2020-12-03 12:19:29',
			'csp_recv' => 1,
			'csp_recv_date' => '2020-12-03 12:19:29',
			'apply_label' => 1,
			'status' => 1
		),
	);

}
