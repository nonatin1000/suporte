<?php
App::uses('HistoricoChamado', 'Model');

/**
 * HistoricoChamado Test Case
 *
 */
class HistoricoChamadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.historico_chamado',
		'app.chamado',
		'app.funcionario',
		'app.setor',
		'app.user',
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
		$this->HistoricoChamado = ClassRegistry::init('HistoricoChamado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HistoricoChamado);

		parent::tearDown();
	}

}
