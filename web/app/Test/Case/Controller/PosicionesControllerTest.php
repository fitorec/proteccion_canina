<?php
App::uses('PosicionesController', 'Controller');

/**
 * PosicionesController Test Case
 *
 */
class PosicionesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.posicion',
		'app.extraviado',
		'app.user',
		'app.adopcion',
		'app.perro',
		'app.vacuna',
		'app.enfermedad',
		'app.perros_vacuna',
		'app.voto',
		'app.paseo',
		'app.veterinaria'
	);

}
