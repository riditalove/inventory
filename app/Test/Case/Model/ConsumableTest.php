<?php
App::uses('Consumable', 'Model');

/**
 * Consumable Test Case
 */
class ConsumableTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consumable',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.designation',
		'app.user',
		'app.section',
		'app.role',
		'app.development',
		'app.log',
		'app.notification',
		'app.payment',
		'app.category',
		'app.manufacturer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Consumable = ClassRegistry::init('Consumable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Consumable);

		parent::tearDown();
	}

}
