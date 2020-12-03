<?php
App::uses('Establecimiento', 'Model');

/**
 * Establecimiento Test Case
 */
class EstablecimientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.establecimiento',
		'app.municipio',
		'app.departamento',
		'app.estudio',
		'app.persona',
		'app.expediente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Establecimiento = ClassRegistry::init('Establecimiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Establecimiento);

		parent::tearDown();
	}

}
