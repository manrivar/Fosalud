<?php
App::uses('Requerimiento', 'Model');

/**
 * Requerimiento Test Case
 */
class RequerimientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.requerimiento',
		'app.notificacion',
		'app.medio',
		'app.persona',
		'app.caso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Requerimiento = ClassRegistry::init('Requerimiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Requerimiento);

		parent::tearDown();
	}

}
