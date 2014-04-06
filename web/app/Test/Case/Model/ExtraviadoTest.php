<?php
App::uses('Extraviado', 'Model');

/**
 * Extraviado Test Case
 *
 */
class ExtraviadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.extraviado',
		'app.user',
		'app.perro',
		'app.posicion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Extraviado = ClassRegistry::init('Extraviado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Extraviado);

		parent::tearDown();
	}

}
