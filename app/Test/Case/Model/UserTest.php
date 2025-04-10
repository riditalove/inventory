<?php
App::uses('User', 'Model');

/**
 * User Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.designation',
		'app.section',
		'app.role',
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
		'app.supplier_audit',
		'app.supplier_contact',
		'app.supplier_document',
		'app.supplier_image',
		'app.developmentsmssampleprio',
		'app.buyer',
		'app.fabricdepartment',
		'app.category',
		'app.log',
		'app.notification',
		'app.payment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
