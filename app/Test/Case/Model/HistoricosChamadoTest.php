<?php
App::uses('HistoricosChamado', 'Model');

/**
 * HistoricosChamado Test Case
 *
 */
class HistoricosChamadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.historicos_chamado',
		'app.chamado',
		'app.funcionario',
		'app.setor',
		'app.usuario',
		'app.grupo',
		'app.prioridade',
		'app.servico',
		'app.tipo_servico',
		'app.defeito'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HistoricosChamado = ClassRegistry::init('HistoricosChamado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HistoricosChamado);

		parent::tearDown();
	}

}
