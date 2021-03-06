<?php
App::uses('AppModel', 'Model');
/**
 * Enfermedad Model
 *
 * @property Vacuna $Vacuna
 */
class Enfermedad extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'Vacuna' => array(
			'className' => 'Vacuna',
			'foreignKey' => 'vacuna_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
