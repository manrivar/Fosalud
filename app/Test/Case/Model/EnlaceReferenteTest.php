<?php
App::uses('EnlaceReferente', 'Model');

/**
 * EnlaceReferente Test Case
 */
class EnlaceReferenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.enlace_referente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EnlaceReferente = ClassRegistry::init('EnlaceReferente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EnlaceReferente);

		parent::tearDown();
	}

}
