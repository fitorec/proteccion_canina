<?php
/**
 * AdopcionFixture
 *
 */
class AdopcionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'unique', 'comment' => 'nombre de la vacuna'),
		'usuario_quien_dio_en_adopcion' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 250),
		'estado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'perro_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 1)
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
			'usuario_quien_dio_en_adopcion' => 1,
			'estado' => 'Lorem ipsum dolor sit amet',
			'perro_id' => 1,
			'created' => '2014-04-06 03:05:04',
			'modified' => '2014-04-06 03:05:04'
		),
	);

}
