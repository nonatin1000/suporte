<?php
App::uses('Setor', 'Model');

/**
 * Setor Test Case
 *
 */
class SetorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.setor',
		'app.funcionario',
		'app.user',
		'app.chamado',
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
		$this->Setor = ClassRegistry::init('Setor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Setor);

		parent::tearDown();
	}

}
