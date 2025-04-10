<?php
App::uses('Buyer', 'Model');

/**
 * Buyer Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class BuyerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.buyer',
		'app.development'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Buyer = ClassRegistry::init('Buyer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Buyer);

		parent::tearDown();
	}

}
