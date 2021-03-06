<?php
App::uses('Funcionario', 'Model');

/**
 * Funcionario Test Case
 *
 */
class FuncionarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.funcionario',
		'app.setor',
		'app.user',
		'app.chamado',
		'app.prioridade',
		'app.servico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Funcionario = ClassRegistry::init('Funcionario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Funcionario);

		parent::tearDown();
	}

}
