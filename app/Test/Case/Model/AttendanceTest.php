<?php
App::uses('Attendance', 'Model');

/**
 * Attendance Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class AttendanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attendance',
		'app.user',
		'app.company'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Attendance = ClassRegistry::init('Attendance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attendance);

		parent::tearDown();
	}

}
