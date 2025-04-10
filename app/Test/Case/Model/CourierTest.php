<?php
App::uses('Courier', 'Model');

/**
 * Courier Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CourierTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.courier'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Courier = ClassRegistry::init('Courier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Courier);

		parent::tearDown();
	}

}
