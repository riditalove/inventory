<?php
App::uses('Section', 'Model');

/**
 * Section Test Case
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class SectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.section',
		'app.department',
		'app.company',
		'app.companytype',
		'app.companynature',
		'app.user',
		'app.designation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Section = ClassRegistry::init('Section');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Section);

		parent::tearDown();
	}

}
