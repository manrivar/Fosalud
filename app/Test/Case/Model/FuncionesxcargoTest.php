<?php
App::uses('Funcionesxcargo', 'Model');

/**
 * Funcionesxcargo Test Case
 */
class FuncionesxcargoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.funcionesxcargo',
		'app.cargo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Funcionesxcargo = ClassRegistry::init('Funcionesxcargo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Funcionesxcargo);

		parent::tearDown();
	}

}
