<?php
App::uses('Paseo', 'Model');

/**
 * Paseo Test Case
 *
 */
class PaseoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paseo',
		'app.posicion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paseo = ClassRegistry::init('Paseo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paseo);

		parent::tearDown();
	}

}
