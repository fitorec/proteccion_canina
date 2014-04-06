<?php
App::uses('Perro', 'Model');

/**
 * Perro Test Case
 *
 */
class PerroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.perro',
		'app.user',
		'app.adopcion',
		'app.extraviado',
		'app.posicion',
		'app.vacuna',
		'app.enfermedad',
		'app.perros_vacuna'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Perro = ClassRegistry::init('Perro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Perro);

		parent::tearDown();
	}

}
