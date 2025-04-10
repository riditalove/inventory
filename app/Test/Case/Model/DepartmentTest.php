<?php
App::uses('Department', 'Model');

/**
 * Department Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class DepartmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.department',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.user',
		'app.designation',
		'app.section'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Department = ClassRegistry::init('Department');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Department);

		parent::tearDown();
	}

}
