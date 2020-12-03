<?php
App::uses('NombrePlaza', 'Model');

/**
 * NombrePlaza Test Case
 */
class NombrePlazaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nombre_plaza'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NombrePlaza = ClassRegistry::init('NombrePlaza');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NombrePlaza);

		parent::tearDown();
	}

}
