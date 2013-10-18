<?php
App::uses('TipoServico', 'Model');

/**
 * TipoServico Test Case
 *
 */
class TipoServicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_servico',
		'app.servico',
		'app.defeito',
		'app.chamado',
		'app.funcionario',
		'app.setor',
		'app.user',
		'app.prioridade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoServico = ClassRegistry::init('TipoServico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoServico);

		parent::tearDown();
	}

}
