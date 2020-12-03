<?php
App::uses('Descuento', 'Model');

/**
 * Descuento Test Case
 */
class DescuentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.descuento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Descuento = ClassRegistry::init('Descuento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Descuento);

		parent::tearDown();
	}

}
