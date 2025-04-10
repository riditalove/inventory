<?php
App::uses('Action', 'Model');

/**
 * Action Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class ActionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.action'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Action = ClassRegistry::init('Action');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Action);

		parent::tearDown();
	}

}
