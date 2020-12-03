<?php
App::uses('AntecedentesPersonale', 'Model');

/**
 * AntecedentesPersonale Test Case
 */
class AntecedentesPersonaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.antecedentes_personale',
		'app.empleado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AntecedentesPersonale = ClassRegistry::init('AntecedentesPersonale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AntecedentesPersonale);

		parent::tearDown();
	}

}
