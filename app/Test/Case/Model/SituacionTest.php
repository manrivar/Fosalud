<?php
App::uses('Situacion', 'Model');

/**
 * Situacion Test Case
 */
class SituacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.situacion',
		'app.motivo',
		'app.solicitudpersonal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Situacion = ClassRegistry::init('Situacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Situacion);

		parent::tearDown();
	}

}
