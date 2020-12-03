<?php
App::uses('TipoEstablecimiento', 'Model');

/**
 * TipoEstablecimiento Test Case
 */
class TipoEstablecimientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_establecimiento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoEstablecimiento = ClassRegistry::init('TipoEstablecimiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoEstablecimiento);

		parent::tearDown();
	}

}
