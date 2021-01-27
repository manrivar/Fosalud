<?php
App::uses('Talksxestablishment', 'Model');

/**
 * Talksxestablishment Test Case
 */
class TalksxestablishmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.talksxestablishment',
		'app.establishments',
		'app.sibases',
		'app.regions'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Talksxestablishment = ClassRegistry::init('Talksxestablishment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Talksxestablishment);

		parent::tearDown();
	}

}
