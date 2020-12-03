<?php
App::uses('Correlativosolicitud', 'Model');

/**
 * Correlativosolicitud Test Case
 */
class CorrelativosolicitudTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.correlativosolicitud'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Correlativosolicitud = ClassRegistry::init('Correlativosolicitud');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Correlativosolicitud);

		parent::tearDown();
	}

}
