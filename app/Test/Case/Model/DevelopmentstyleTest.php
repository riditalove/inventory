<?php
App::uses('Developmentstyle', 'Model');

/**
 * Developmentstyle Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class DevelopmentstyleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.developmentstyle',
		'app.development',
		'app.customer',
		'app.country',
		'app.developmentfabric',
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
		$this->Developmentstyle = ClassRegistry::init('Developmentstyle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Developmentstyle);

		parent::tearDown();
	}

}
