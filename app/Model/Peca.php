<?php
App::uses('AppModel', 'Model');
/**
 * Peca Model
 *
 */
class Peca extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'peca';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'O nome da peça é obrigatório',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxlength' => array(
				'rule' => array('maxlength', 50),
				'message' => 'O tamanho máximo da peça é de 50 caracteres',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
