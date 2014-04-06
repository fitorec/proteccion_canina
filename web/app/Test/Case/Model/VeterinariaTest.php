<?php
App::uses('Veterinaria', 'Model');

/**
 * Veterinaria Test Case
 *
 */
class VeterinariaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.veterinaria',
		'app.posicion',
		'app.extraviado',
		'app.user',
		'app.adopcion',
		'app.perro',
		'app.vacuna',
		'app.enfermedad',
		'app.perros_vacuna',
		'app.voto',
		'app.paseo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Veterinaria = ClassRegistry::init('Veterinaria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Veterinaria);

		parent::tearDown();
	}

}
