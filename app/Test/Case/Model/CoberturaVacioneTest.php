<?php
App::uses('CoberturaVacione', 'Model');

/**
 * CoberturaVacione Test Case
 */
class CoberturaVacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cobertura_vacione',
		'app.motivocobertura',
		'app.tipogestion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CoberturaVacione = ClassRegistry::init('CoberturaVacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoberturaVacione);

		parent::tearDown();
	}

}
