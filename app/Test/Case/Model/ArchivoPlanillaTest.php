<?php
App::uses('ArchivoPlanilla', 'Model');

/**
 * ArchivoPlanilla Test Case
 */
class ArchivoPlanillaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.archivo_planilla'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArchivoPlanilla = ClassRegistry::init('ArchivoPlanilla');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArchivoPlanilla);

		parent::tearDown();
	}

}
