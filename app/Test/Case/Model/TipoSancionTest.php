<?php
App::uses('TipoSancion', 'Model');

/**
 * TipoSancion Test Case
 */
class TipoSancionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_sancion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoSancion = ClassRegistry::init('TipoSancion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoSancion);

		parent::tearDown();
	}

}
