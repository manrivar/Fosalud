<?php
App::uses('Rotacion', 'Model');

/**
 * Rotacion Test Case
 */
class RotacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rotacion',
		'app.solicitudpersonal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rotacion = ClassRegistry::init('Rotacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rotacion);

		parent::tearDown();
	}

}
