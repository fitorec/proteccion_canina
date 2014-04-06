<?php
App::uses('Enfermedad', 'Model');

/**
 * Enfermedad Test Case
 *
 */
class EnfermedadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.enfermedad',
		'app.vacuna'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Enfermedad = ClassRegistry::init('Enfermedad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Enfermedad);

		parent::tearDown();
	}

}
