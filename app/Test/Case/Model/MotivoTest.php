<?php
App::uses('Motivo', 'Model');

/**
 * Motivo Test Case
 */
class MotivoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.motivo',
		'app.situacion',
		'app.solicitudpersonal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Motivo = ClassRegistry::init('Motivo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Motivo);

		parent::tearDown();
	}

}
