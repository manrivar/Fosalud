<?php
App::uses('Grupohorario', 'Model');

/**
 * Grupohorario Test Case
 */
class GrupohorarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grupohorario',
		'app.personagrupohorario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grupohorario = ClassRegistry::init('Grupohorario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grupohorario);

		parent::tearDown();
	}

}
