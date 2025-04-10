<?php
App::uses('Companyschedule', 'Model');

/**
 * Companyschedule Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CompanyscheduleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companyschedule',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.announcement',
		'app.attendance',
		'app.user',
		'app.companyleave',
		'app.userleave',
		'app.department',
		'app.holiday',
		'app.onduty'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Companyschedule = ClassRegistry::init('Companyschedule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Companyschedule);

		parent::tearDown();
	}

}
