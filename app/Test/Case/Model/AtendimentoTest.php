<?php
App::uses('Atendimento', 'Model');

/**
 * Atendimento Test Case
 */
class AtendimentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.atendimento',
		'app.usuario',
		'app.servico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Atendimento = ClassRegistry::init('Atendimento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Atendimento);

		parent::tearDown();
	}

}
