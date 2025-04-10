<?php
App::uses('Assetcomponent', 'Model');

/**
 * Assetcomponent Test Case
 */
class AssetcomponentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assetcomponent',
		'app.category',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.department',
		'app.designation',
		'app.user',
		'app.section',
		'app.role',
		'app.development',
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
		$this->Assetcomponent = ClassRegistry::init('Assetcomponent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Assetcomponent);

		parent::tearDown();
	}

}
