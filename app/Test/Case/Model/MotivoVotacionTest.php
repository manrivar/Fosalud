<?php
App::uses('MotivoVotacion', 'Model');

/**
 * MotivoVotacion Test Case
 */
class MotivoVotacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.motivo_votacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MotivoVotacion = ClassRegistry::init('MotivoVotacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MotivoVotacion);

		parent::tearDown();
	}

}
