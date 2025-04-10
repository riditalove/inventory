<?php
App::uses('Material', 'Model');

/**
 * Material Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class MaterialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.material',
		'app.country',
		'app.customer',
		'app.development',
		'app.supplier',
		'app.buyer',
		'app.user',
		'app.fabricdepartment',
		'app.category',
		'app.developmentfabric',
		'app.developmentstyle',
		'app.developmentsmssample1stproto',
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
		$this->Material = ClassRegistry::init('Material');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Material);

		parent::tearDown();
	}

}
