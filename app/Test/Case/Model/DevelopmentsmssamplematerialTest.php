<?php
App::uses('Developmentsmssamplematerial', 'Model');

/**
 * Developmentsmssamplematerial Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class DevelopmentsmssamplematerialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.developmentsmssamplematerial',
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
		'app.developmentsmssamplefabric',
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
		$this->Developmentsmssamplematerial = ClassRegistry::init('Developmentsmssamplematerial');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Developmentsmssamplematerial);

		parent::tearDown();
	}

}
