<?php
App::uses('Vacuna', 'Model');

/**
 * Vacuna Test Case
 *
 */
class VacunaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vacuna',
		'app.enfermedad',
		'app.perro',
		'app.perros_vacuna'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vacuna = ClassRegistry::init('Vacuna');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vacuna);

		parent::tearDown();
	}

}
