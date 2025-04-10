<?php
App::uses('Assetmaintenance', 'Model');

/**
 * Assetmaintenance Test Case
 */
class AssetmaintenanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assetmaintenance',
		'app.asset',
		'app.supplier',
		'app.merchandisingfabric',
		'app.developmentnegotiation',
		'app.developmentorder',
		'app.supplieraudit',
		'app.suppliercontact',
		'app.supplierdocument',
		'app.supplierimage',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.designation',
		'app.user',
		'app.section',
		'app.role',
		'app.log'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Assetmaintenance = ClassRegistry::init('Assetmaintenance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Assetmaintenance);

		parent::tearDown();
	}

}
