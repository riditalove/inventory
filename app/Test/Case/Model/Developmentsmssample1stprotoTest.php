<?php
App::uses('Development1stproto', 'Model');

/**
 * Development1stproto Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class Development1stprotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.developmentsmssample1stproto',
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
		'app.developmentsmssamplebulk',
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
		$this->Development1stproto = ClassRegistry::init('Development1stproto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Development1stproto);

		parent::tearDown();
	}

}
