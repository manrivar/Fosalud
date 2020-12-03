<?php
App::uses('SirhCodigo', 'Model');

/**
 * SirhCodigo Test Case
 */
class SirhCodigoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sirh_codigo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SirhCodigo = ClassRegistry::init('SirhCodigo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SirhCodigo);

		parent::tearDown();
	}

}
