<?php
App::uses('Developmentsmssamplefabric', 'Model');

/**
 * Developmentsmssamplefabric Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class DevelopmentsmssamplefabricTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.developmentsmssamplefabric',
		'app.development',
		'app.customer',
		'app.country',
		'app.developmentfabric',
		'app.developmentstyle',
		'app.material',
		'app.supplier',
		'app.buyer',
		'app.user',
		'app.fabricdepartment',
		'app.category',
		'app.developmentsmssample1stproto',
		'app.developmentsmssamplebulk',
		'app.developmentsmssamplematerial',
		'app.developmentnegotiation',
		'app.developmentorder',
		'app.developmentsmssampleprio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Developmentsmssamplefabric = ClassRegistry::init('Developmentsmssamplefabric');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Developmentsmssamplefabric);

		parent::tearDown();
	}

}
