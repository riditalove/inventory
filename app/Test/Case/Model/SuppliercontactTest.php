<?php
App::uses('Suppliercontact', 'Model');

/**
 * Suppliercontact Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class SuppliercontactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.suppliercontact',
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
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.designation',
		'app.section',
		'app.role',
		'app.log',
		'app.notification',
		'app.payment',
		'app.fabricdepartment',
		'app.category',
		'app.supplieraudit',
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
		$this->Suppliercontact = ClassRegistry::init('Suppliercontact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Suppliercontact);

		parent::tearDown();
	}

}
