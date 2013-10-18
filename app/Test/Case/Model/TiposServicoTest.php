<?php
App::uses('TiposServico', 'Model');

/**
 * TiposServico Test Case
 *
 */
class TiposServicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipos_servico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TiposServico = ClassRegistry::init('TiposServico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TiposServico);

		parent::tearDown();
	}

}
