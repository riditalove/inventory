<?php
App::uses('CategoriesController', 'Controller');

/**
 * CategoriesController Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class CategoriesControllerTest extends ControllerTestCase {

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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
