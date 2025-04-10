<?php
App::uses('Developmentsmssamplebulk', 'Model');

/**
 * Developmentsmssamplebulk Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class DevelopmentsmssamplebulkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.developmentsmssamplebulk',
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
		'app.developmentsmssamplefabric',
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
		$this->Developmentsmssamplebulk = ClassRegistry::init('Developmentsmssamplebulk');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Developmentsmssamplebulk);

		parent::tearDown();
	}

}
