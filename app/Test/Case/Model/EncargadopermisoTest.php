<?php
App::uses('Encargadopermiso', 'Model');

/**
 * Encargadopermiso Test Case
 */
class EncargadopermisoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.encargadopermiso',
		'app.user',
		'app.group',
		'app.acceso',
		'app.estado',
		'app.factura'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Encargadopermiso = ClassRegistry::init('Encargadopermiso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Encargadopermiso);

		parent::tearDown();
	}

}
