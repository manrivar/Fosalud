<?php
App::uses('Coberturaestablecimiento', 'Model');

/**
 * Coberturaestablecimiento Test Case
 */
class CoberturaestablecimientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.coberturaestablecimiento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Coberturaestablecimiento = ClassRegistry::init('Coberturaestablecimiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Coberturaestablecimiento);

		parent::tearDown();
	}

}
