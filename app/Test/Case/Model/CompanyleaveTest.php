<?php
App::uses('Companyleave', 'Model');

/**
 * Companyleave Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CompanyleaveTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companyleave',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.announcement',
		'app.attendance',
		'app.user',
		'app.companyschedule',
		'app.department',
		'app.holiday',
		'app.onduty',
		'app.userleave'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Companyleave = ClassRegistry::init('Companyleave');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Companyleave);

		parent::tearDown();
	}

}
