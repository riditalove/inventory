<?php
App::uses('Customer', 'Model');

/**
 * Customer Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CustomerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer',
		'app.country',
		'app.developmentfabric',
		'app.material',
		'app.development'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Customer = ClassRegistry::init('Customer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Customer);

		parent::tearDown();
	}

}
