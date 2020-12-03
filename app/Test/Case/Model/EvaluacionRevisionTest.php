<?php
App::uses('EvaluacionRevision', 'Model');

/**
 * EvaluacionRevision Test Case
 */
class EvaluacionRevisionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evaluacion_revision',
		'app.evaluaciongeneral'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EvaluacionRevision = ClassRegistry::init('EvaluacionRevision');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EvaluacionRevision);

		parent::tearDown();
	}

}
