<?php
App::uses('Category', 'Model');

/**
 * Category Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category',
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
		$this->Category = ClassRegistry::init('Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Category);

		parent::tearDown();
	}

}
