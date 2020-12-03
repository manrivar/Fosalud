<?php
App::uses('FaltaClasificacion', 'Model');

/**
 * FaltaClasificacion Test Case
 */
class FaltaClasificacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.falta_clasificacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FaltaClasificacion = ClassRegistry::init('FaltaClasificacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FaltaClasificacion);

		parent::tearDown();
	}

}
