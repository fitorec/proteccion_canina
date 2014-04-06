<?php
/**
 * ExtraviadoFixture
 *
 */
class ExtraviadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'perro_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'posicion_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'lugar' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'comment' => 'Nombre del empleado', 'charset' => 'latin1'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'contacto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'estado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'lugar' => array('column' => 'lugar', 'unique' => 1)
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
			'perro_id' => 1,
			'posicion_id' => 1,
			'lugar' => 'Lorem ipsum dolor sit amet',
			'fecha' => '2014-04-06',
			'contacto' => 'Lorem ipsum dolor sit amet',
			'estado' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-04-06 03:45:01',
			'modified' => '2014-04-06 03:45:01'
		),
	);

}
