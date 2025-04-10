<?php
App::uses('Country', 'Model');

/**
 * Country Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CountryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.country',
		'app.customer',
		'app.developmentfabric',
		'app.material'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Country = ClassRegistry::init('Country');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Country);

		parent::tearDown();
	}

}
