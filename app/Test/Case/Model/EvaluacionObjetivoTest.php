<?php
App::uses('EvaluacionObjetivo', 'Model');

/**
 * EvaluacionObjetivo Test Case
 */
class EvaluacionObjetivoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evaluacion_objetivo',
		'app.cargofuncional'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EvaluacionObjetivo = ClassRegistry::init('EvaluacionObjetivo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EvaluacionObjetivo);

		parent::tearDown();
	}

}
