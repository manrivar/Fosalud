<?php
App::uses('CoberturaVacacion', 'Model');

/**
 * CoberturaVacacion Test Case
 */
class CoberturaVacacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cobertura_vacacion',
		'app.motivocobertura',
		'app.tipogestion',
		'app.coberturavacaciones'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CoberturaVacacion = ClassRegistry::init('CoberturaVacacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoberturaVacacion);

		parent::tearDown();
	}

}
