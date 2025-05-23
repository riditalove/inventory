<?php
App::uses('Producttypedetail', 'Model');

/**
 * Producttypedetail Test Case
 */
class ProducttypedetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.producttypedetail',
		'app.producttype',
		'app.factory',
		'app.country',
		'app.customer',
		'app.development',
		'app.supplier',
		'app.merchandisingfabric',
		'app.merchandising',
		'app.buyer',
		'app.courier',
		'app.merchandisingteam',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.designation',
		'app.user',
		'app.section',
		'app.role',
		'app.log',
		'app.notification',
		'app.payment',
		'app.fabricdepartment',
		'app.category',
		'app.merchandisingstyle',
		'app.merchandisingcolor',
		'app.merchandisingsize',
		'app.merchandisingtotal',
		'app.merchandisingitem',
		'app.material',
		'app.merchandisingproto',
		'app.merchandisingfabricbooking',
		'app.merchandisingsmssample',
		'app.merchandisingsssample',
		'app.merchandisingppsample',
		'app.merchandisingpp',
		'app.merchandisingfabricinhouse',
		'app.merchandisingiteminhouse',
		'app.merchandisingppmeeting',
		'app.merchandisingpresssample',
		'app.merchandisingshootingsample',
		'app.merchandisingshipmentsample',
		'app.merchandisingpfinspection',
		'app.merchandisingfinspection',
		'app.merchandisingshipment',
		'app.developmentnegotiation',
		'app.developmentstyle',
		'app.developmentorder',
		'app.supplieraudit',
		'app.suppliercontact',
		'app.supplierdocument',
		'app.supplierimage',
		'app.developmentcolor',
		'app.developmentsize',
		'app.developmenttotal',
		'app.developmentfabric',
		'app.developmentitem',
		'app.developmentphoto',
		'app.developmentfabricbooking',
		'app.developmentfabricinhouse',
		'app.developmentitembooking',
		'app.developmentiteminhouse',
		'app.developmentpattern',
		'app.developmentsewing',
		'app.developmentdummy',
		'app.developmentwash',
		'app.developmentsample',
		'app.developmentparcel',
		'app.developmentsmssamplematerial',
		'app.developmentsmssampleprio',
		'app.factorystaff',
		'app.productioncapacity',
		'app.productionmachinery',
		'app.factorysupplier',
		'app.productionworker',
		'app.manufacturingprocess',
		'app.fabrictype',
		'app.garmenttype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Producttypedetail = ClassRegistry::init('Producttypedetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Producttypedetail);

		parent::tearDown();
	}

}
