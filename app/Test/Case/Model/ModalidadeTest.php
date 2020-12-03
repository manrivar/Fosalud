<?php
App::uses('Modalidade', 'Model');

/**
 * Modalidade Test Case
 */
class ModalidadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.modalidade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Modalidade = ClassRegistry::init('Modalidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Modalidade);

		parent::tearDown();
	}

}
