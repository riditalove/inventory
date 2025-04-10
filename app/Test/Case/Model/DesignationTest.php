<?php
App::uses('Designation', 'Model');

/**
 * Designation Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class DesignationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.designation',
		'app.department',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.user',
		'app.section'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Designation = ClassRegistry::init('Designation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Designation);

		parent::tearDown();
	}

}
