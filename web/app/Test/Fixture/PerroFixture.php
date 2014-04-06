<?php
/**
 * PerroFixture
 *
 */
class PerroFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'estado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'comment' => 'estado del perro', 'charset' => 'latin1'),
		'raza' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_nacimiento' => array('type' => 'date', 'null' => false, 'default' => null),
		'color' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'peso' => array('type' => 'float', 'null' => true, 'default' => null, 'comment' => 'Peso del animal'),
		'tamanio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'estado' => array('column' => 'estado', 'unique' => 1),
			'color' => array('column' => 'color', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'estado' => 'Lorem ipsum dolor sit amet',
			'raza' => 'Lorem ipsum dolor sit amet',
			'fecha_nacimiento' => '2014-04-06',
			'color' => 'Lorem ipsum dolor sit amet',
			'peso' => 1,
			'tamanio' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-04-06 16:30:14',
			'modified' => '2014-04-06 16:30:14'
		),
	);

}
