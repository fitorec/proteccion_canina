<?php
App::uses('Voto', 'Model');

/**
 * Voto Test Case
 *
 */
class VotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.voto',
		'app.user',
		'app.adopcion',
		'app.perro',
		'app.extraviado',
		'app.posicion',
		'app.paseo',
		'app.veterinaria',
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
		$this->Voto = ClassRegistry::init('Voto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Voto);

		parent::tearDown();
	}

}
