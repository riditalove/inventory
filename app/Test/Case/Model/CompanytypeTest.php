<?php
App::uses('Companytype', 'Model');

/**
 * Companytype Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CompanytypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companytype',
		'app.company',
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
		$this->Companytype = ClassRegistry::init('Companytype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Companytype);

		parent::tearDown();
	}

}
