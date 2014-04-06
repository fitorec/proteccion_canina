<?php
/**
 * PaseoFixture
 *
 */
class PaseoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'primary'),
		'lugar' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'comment' => 'nombre de la vacuna', 'charset' => 'latin1'),
		'posicion_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'fecha_hora' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'lugar' => 'Lorem ipsum dolor sit amet',
			'posicion_id' => 1,
			'fecha_hora' => '2014-04-06 16:28:39',
			'created' => '2014-04-06 16:28:39',
			'modified' => '2014-04-06 16:28:39'
		),
	);

}
