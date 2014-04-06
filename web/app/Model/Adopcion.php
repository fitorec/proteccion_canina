<?php
App::uses('AppModel', 'Model');
/**
 * Adopcion Model
 *
 * @property User $User
 * @property Perro $Perro
 */
class Adopcion extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'perro_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Donante' => array(
			'className' => 'User',
			'foreignKey' => 'usuario_quien_dio_en_adopcion',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Perro' => array(
			'className' => 'Perro',
			'foreignKey' => 'perro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
