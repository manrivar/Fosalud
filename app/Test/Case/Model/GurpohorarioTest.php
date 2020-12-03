<?php
App::uses('Gurpohorario', 'Model');

/**
 * Gurpohorario Test Case
 */
class GurpohorarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gurpohorario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Gurpohorario = ClassRegistry::init('Gurpohorario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gurpohorario);

		parent::tearDown();
	}

}
