<?php
App::uses('Developmentsmssampleprio', 'Model');

/**
 * Developmentsmssampleprio Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class DevelopmentsmssampleprioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.developmentsmssampleprio',
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
		'app.developmentsmssamplematerial',
		'app.developmentnegotiation',
		'app.developmentorder'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Developmentsmssampleprio = ClassRegistry::init('Developmentsmssampleprio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Developmentsmssampleprio);

		parent::tearDown();
	}

}
