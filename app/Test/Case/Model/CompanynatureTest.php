<?php
App::uses('Companynature', 'Model');

/**
 * Companynature Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CompanynatureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companynature',
		'app.company',
		'app.companytype',
		'app.department',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Companynature = ClassRegistry::init('Companynature');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Companynature);

		parent::tearDown();
	}

}
