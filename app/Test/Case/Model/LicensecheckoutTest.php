<?php
App::uses('Licensecheckout', 'Model');

/**
 * Licensecheckout Test Case
 */
class LicensecheckoutTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.licensecheckout',
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
		$this->Licensecheckout = ClassRegistry::init('Licensecheckout');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Licensecheckout);

		parent::tearDown();
	}

}
