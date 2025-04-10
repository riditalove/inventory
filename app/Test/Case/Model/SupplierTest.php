<?php
App::uses('Supplier', 'Model');

/**
 * Supplier Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class SupplierTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.supplier',
		'app.development',
		'app.customer',
		'app.country',
		'app.developmentfabric',
		'app.developmentstyle',
		'app.developmentsmssample1stproto',
		'app.developmentsmssamplebulk',
		'app.developmentsmssamplefabric',
		'app.developmentsmssamplematerial',
		'app.material',
		'app.developmentnegotiation',
		'app.developmentorder',
		'app.developmentsmssampleprio',
		'app.buyer',
		'app.user',
		'app.fabricdepartment',
		'app.category',
		'app.supplier_audit',
		'app.supplier_contact',
		'app.supplier_document',
		'app.supplier_image'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Supplier = ClassRegistry::init('Supplier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Supplier);

		parent::tearDown();
	}

}
