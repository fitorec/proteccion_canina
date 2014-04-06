<?php
App::uses('Adopcion', 'Model');

/**
 * Adopcion Test Case
 *
 */
class AdopcionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.adopcion',
		'app.user',
		'app.perro'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Adopcion = ClassRegistry::init('Adopcion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Adopcion);

		parent::tearDown();
	}

}
