<?php
App::uses('Seguimiento', 'Model');

/**
 * Seguimiento Test Case
 */
class SeguimientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.seguimiento',
		'app.caso',
		'app.establecimiento',
		'app.departamento',
		'app.tipo_establecimiento',
		'app.tipo_caso',
		'app.persona'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Seguimiento = ClassRegistry::init('Seguimiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Seguimiento);

		parent::tearDown();
	}

}
