<?php
App::uses('Courierservice', 'Model');

/**
 * Courierservice Test Case
 */
class CourierserviceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.courierservice',
		'app.parcel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Courierservice = ClassRegistry::init('Courierservice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Courierservice);

		parent::tearDown();
	}

}
