<?php
App::uses('Parcel', 'Model');

/**
 * Parcel Test Case
 */
class ParcelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parcel',
		'app.country',
		'app.customer',
		'app.development',
		'app.factory',
		'app.factorystaff',
		'app.department',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.user',
		'app.section',
		'app.designation',
		'app.role',
		'app.log',
		'app.notification',
		'app.payment',
		'app.productioncapacity',
		'app.productionmachinery',
		'app.factorysupplier',
		'app.productionmachinerydetail',
		'app.productionworker',
		'app.manufacturingprocess',
		'app.fabrictype',
		'app.producttype',
		'app.producttypedetail',
		'app.garmenttype',
		'app.certificate',
		'app.factorycustomer',
		'app.supplier',
		'app.merchandisingfabric',
		'app.merchandising',
		'app.buyer',
		'app.courier',
		'app.merchandisingteam',
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
		'app.developmentsmssampleprio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Parcel = ClassRegistry::init('Parcel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Parcel);

		parent::tearDown();
	}

}
