<?php
App::uses('Config', 'Model');

/**
 * Config Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class ConfigTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.config'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Config = ClassRegistry::init('Config');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Config);

		parent::tearDown();
	}

}
