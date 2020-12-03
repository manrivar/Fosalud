<?php
App::uses('CatalogoPuesto', 'Model');

/**
 * CatalogoPuesto Test Case
 */
class CatalogoPuestoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.catalogo_puesto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CatalogoPuesto = ClassRegistry::init('CatalogoPuesto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CatalogoPuesto);

		parent::tearDown();
	}

}
