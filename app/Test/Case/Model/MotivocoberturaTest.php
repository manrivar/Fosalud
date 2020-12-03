<?php
App::uses('Motivocobertura', 'Model');

/**
 * Motivocobertura Test Case
 */
class MotivocoberturaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.motivocobertura'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Motivocobertura = ClassRegistry::init('Motivocobertura');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Motivocobertura);

		parent::tearDown();
	}

}
