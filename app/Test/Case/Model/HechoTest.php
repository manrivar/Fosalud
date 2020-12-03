<?php
App::uses('Hecho', 'Model');

/**
 * Hecho Test Case
 */
class HechoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hecho',
		'app.empleado',
		'app.tipo',
		'app.user',
		'app.group',
		'app.acceso',
		'app.modalidad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hecho = ClassRegistry::init('Hecho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hecho);

		parent::tearDown();
	}

}
