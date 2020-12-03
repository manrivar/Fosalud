<?php
App::uses('AntecedentesFamiliar', 'Model');

/**
 * AntecedentesFamiliar Test Case
 */
class AntecedentesFamiliarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.antecedentes_familiar',
		'app.empleado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AntecedentesFamiliar = ClassRegistry::init('AntecedentesFamiliar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AntecedentesFamiliar);

		parent::tearDown();
	}

}
