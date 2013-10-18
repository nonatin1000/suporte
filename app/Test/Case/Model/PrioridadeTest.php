<?php
App::uses('Prioridade', 'Model');

/**
 * Prioridade Test Case
 *
 */
class PrioridadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.prioridade',
		'app.chamado',
		'app.funcionario',
		'app.setor',
		'app.user',
		'app.servico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Prioridade = ClassRegistry::init('Prioridade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Prioridade);

		parent::tearDown();
	}

}
