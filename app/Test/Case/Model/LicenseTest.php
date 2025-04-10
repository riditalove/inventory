<?php
App::uses('License', 'Model');

/**
 * License Test Case
 */
class LicenseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.license',
		'app.category',
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
		'app.manufacturer',
		'app.supplier',
		'app.merchandisingfabric',
		'app.developmentnegotiation',
		'app.developmentorder',
		'app.supplieraudit',
		'app.suppliercontact',
		'app.supplierdocument',
		'app.supplierimage'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->License = ClassRegistry::init('License');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->License);

		parent::tearDown();
	}

}
