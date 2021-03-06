<?php
App::uses('AppModel', 'Model');
/**
 * Servico Model
 *
 * @property TipoServico $TipoServico
 * @property Defeito $Defeito
 * @property Chamado $Chamado
 */
class Servico extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'descricao' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo_servico_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'defeito_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'chamado_id' => array(
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
		'TipoServico' => array(
			'className' => 'TipoServico',
			'foreignKey' => 'tipo_servico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Defeito' => array(
			'className' => 'Defeito',
			'foreignKey' => 'defeito_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Chamado' => array(
			'className' => 'Chamado',
			'foreignKey' => 'chamado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
