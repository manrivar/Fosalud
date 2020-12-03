<?php
App::uses('Consulta', 'Model');

/**
 * Consulta Test Case
 */
class ConsultaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consulta',
		'app.historiaclinica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Consulta = ClassRegistry::init('Consulta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Consulta);

		parent::tearDown();
	}

}
