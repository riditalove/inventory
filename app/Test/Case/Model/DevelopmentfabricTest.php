<?php
App::uses('Developmentfabric', 'Model');

/**
 * Developmentfabric Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class DevelopmentfabricTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.developmentfabric',
		'app.development',
		'app.developmentstyle',
		'app.country',
		'app.customer',
		'app.material'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Developmentfabric = ClassRegistry::init('Developmentfabric');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Developmentfabric);

		parent::tearDown();
	}

}
