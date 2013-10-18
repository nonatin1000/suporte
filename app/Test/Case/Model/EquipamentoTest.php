<?php
App::uses('Equipamento', 'Model');

/**
 * Equipamento Test Case
 *
 */
class EquipamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.equipamento',
		'app.marca'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Equipamento = ClassRegistry::init('Equipamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Equipamento);

		parent::tearDown();
	}

}
