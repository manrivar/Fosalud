<?php
App::uses('Persona', 'Model');

/**
 * Persona Test Case
 */
class PersonaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.persona',
		'app.bitacora',
		'app.user',
		'app.group',
		'app.acceso',
		'app.requerimiento',
		'app.notificacion',
		'app.medio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Persona = ClassRegistry::init('Persona');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Persona);

		parent::tearDown();
	}

}
