<?php
App::uses('Payment', 'Model');

/**
 * Payment Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class PaymentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.payment',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Payment = ClassRegistry::init('Payment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Payment);

		parent::tearDown();
	}

}
