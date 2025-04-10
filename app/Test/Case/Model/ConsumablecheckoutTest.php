<?php
App::uses('Consumablecheckout', 'Model');

/**
 * Consumablecheckout Test Case
 */
class ConsumablecheckoutTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consumablecheckout',
		'app.user',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.designation',
		'app.section',
		'app.role',
		'app.log',
		'app.asset',
		'app.supplier',
		'app.merchandisingfabric',
		'app.developmentnegotiation',
		'app.developmentorder',
		'app.supplieraudit',
		'app.suppliercontact',
		'app.supplierdocument',
		'app.supplierimage',
		'app.accessory',
		'app.category',
		'app.manufacturer',
		'app.accessorycheckout',
		'app.license',
		'app.consumable'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Consumablecheckout = ClassRegistry::init('Consumablecheckout');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Consumablecheckout);

		parent::tearDown();
	}

}
