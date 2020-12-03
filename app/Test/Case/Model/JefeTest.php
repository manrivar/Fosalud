<?php
App::uses('Jefe', 'Model');

/**
 * Jefe Test Case
 */
class JefeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jefe',
		'app.user',
		'app.group',
		'app.acceso',
		'app.estado',
		'app.factura',
		'app.equipojefe'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Jefe = ClassRegistry::init('Jefe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jefe);

		parent::tearDown();
	}

}
