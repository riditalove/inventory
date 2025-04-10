<?php
App::uses('Production2ndsewingthread', 'Model');

/**
 * Production2ndsewingthread Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class Production2ndsewingthreadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.production2ndsewingthread',
		'app.production',
		'app.customer',
		'app.country',
		'app.developmentfabric',
		'app.development',
		'app.supplier',
		'app.developmentnegotiation',
		'app.developmentstyle',
		'app.development1stproto',
		'app.developmentsmssamplebulk',
		'app.developmentsmssamplefabric',
		'app.developmentsmssamplematerial',
		'app.material',
		'app.developmentorder',
		'app.developmentsmssampleprio',
		'app.supplieraudit',
		'app.suppliercontact',
		'app.supplierdocument',
		'app.supplierimage',
		'app.buyer',
		'app.courier',
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
		'app.production1stbutton',
		'app.productionstyle',
		'app.production1stcarelable',
		'app.production1stembroidery',
		'app.production1steyelet',
		'app.production1stfancyrivet',
		'app.production1stherringbone',
		'app.production1stjacron',
		'app.production1stlabdip',
		'app.production1stpocketingaope',
		'app.production1stpocketinglabdip',
		'app.production1stpocketingydce',
		'app.production1stppssample',
		'app.production1stprint',
		'app.production1stproto',
		'app.production1strivet',
		'app.production1stsewingthread',
		'app.production1stsize',
		'app.production1stsmse',
		'app.production1sttape',
		'app.production1stwash',
		'app.production1stwoven',
		'app.production1stzipper',
		'app.production2ndbutton',
		'app.production2ndcarelable',
		'app.production2ndembroidery',
		'app.production2ndeyelet',
		'app.production2ndfancyrivet',
		'app.production2ndherringbone',
		'app.production2ndjacron',
		'app.production2ndlabdip',
		'app.production2ndpocketingaope',
		'app.production2ndpocketinglabdip',
		'app.production2ndpocketingydce',
		'app.production2ndppssample',
		'app.production2ndprint',
		'app.production2ndproto',
		'app.production2ndrivet',
		'app.production2ndsize',
		'app.production2ndsmse',
		'app.production2ndtape',
		'app.production2ndwash',
		'app.production2ndwoven',
		'app.production2ndzipper',
		'app.productionwarehousesample'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Production2ndsewingthread = ClassRegistry::init('Production2ndsewingthread');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Production2ndsewingthread);

		parent::tearDown();
	}

}
