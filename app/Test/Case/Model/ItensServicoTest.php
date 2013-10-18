<?php
App::uses('ItensServico', 'Model');

/**
 * ItensServico Test Case
 *
 */
class ItensServicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.itens_servico',
		'app.peca',
		'app.servico',
		'app.tipo_servico',
		'app.defeito',
		'app.chamado',
		'app.funcionario',
		'app.setor',
		'app.usuario',
		'app.grupo',
		'app.prioridade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItensServico = ClassRegistry::init('ItensServico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItensServico);

		parent::tearDown();
	}

}
