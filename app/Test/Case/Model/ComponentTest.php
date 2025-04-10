<?php
App::uses('Component', 'Model');

/**
 * Component Test Case
 */
class ComponentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.component',
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
		$this->Component = ClassRegistry::init('Component');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Component);

		parent::tearDown();
	}

}
