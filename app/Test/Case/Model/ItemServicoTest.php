<?php
App::uses('ItemServico', 'Model');

/**
 * ItemServico Test Case
 *
 */
class ItemServicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_servico',
		'app.peca',
		'app.servico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemServico = ClassRegistry::init('ItemServico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemServico);

		parent::tearDown();
	}

}
