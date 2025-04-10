<?php
App::uses('Componentcheckout', 'Model');

/**
 * Componentcheckout Test Case
 */
class ComponentcheckoutTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.componentcheckout',
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
		$this->Componentcheckout = ClassRegistry::init('Componentcheckout');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Componentcheckout);

		parent::tearDown();
	}

}
