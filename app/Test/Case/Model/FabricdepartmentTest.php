<?php
App::uses('Fabricdepartment', 'Model');

/**
 * Fabricdepartment Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class FabricdepartmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fabricdepartment',
		'app.development',
		'app.customer',
		'app.country',
		'app.developmentfabric',
		'app.developmentstyle',
		'app.developmentsmssample1stproto',
		'app.developmentsmssamplebulk',
		'app.developmentsmssamplefabric',
		'app.developmentsmssamplematerial',
		'app.material',
		'app.developmentnegotiation',
		'app.supplier',
		'app.developmentorder',
		'app.developmentsmssampleprio',
		'app.buyer',
		'app.user',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fabricdepartment = ClassRegistry::init('Fabricdepartment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fabricdepartment);

		parent::tearDown();
	}

}
