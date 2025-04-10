<?php
App::uses('Accessorycheckout', 'Model');

/**
 * Accessorycheckout Test Case
 */
class AccessorycheckoutTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.accessorycheckout',
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
		$this->Accessorycheckout = ClassRegistry::init('Accessorycheckout');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Accessorycheckout);

		parent::tearDown();
	}

}
