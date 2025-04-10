<?php
App::uses('Company', 'Model');

/**
 * Company Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CompanyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company',
		'app.companytype',
		'app.companynature',
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
		$this->Company = ClassRegistry::init('Company');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Company);

		parent::tearDown();
	}

}
