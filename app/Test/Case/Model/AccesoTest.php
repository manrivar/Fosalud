<?php
App::uses('Acceso', 'Model');

/**
 * Acceso Test Case
 */
class AccesoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acceso',
		'app.user',
		'app.group',
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Acceso = ClassRegistry::init('Acceso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Acceso);

		parent::tearDown();
	}

}
