<?php
App::uses('Diasgocesalario', 'Model');

/**
 * Diasgocesalario Test Case
 */
class DiasgocesalarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.diasgocesalario',
		'app.user',
		'app.group',
		'app.acceso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Diasgocesalario = ClassRegistry::init('Diasgocesalario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Diasgocesalario);

		parent::tearDown();
	}

}
