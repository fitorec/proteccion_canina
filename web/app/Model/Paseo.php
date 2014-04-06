<?php
App::uses('AppModel', 'Model');
/**
 * Paseo Model
 *
 * @property Posicion $Posicion
 */
class Paseo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'lugar';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'lugar' => array(
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
		'Posicion' => array(
			'className' => 'Posicion',
			'foreignKey' => 'posicion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
