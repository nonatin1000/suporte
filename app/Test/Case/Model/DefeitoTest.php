<?php
App::uses('Defeito', 'Model');

/**
 * Defeito Test Case
 *
 */
class DefeitoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.defeito',
		'app.servico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Defeito = ClassRegistry::init('Defeito');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Defeito);

		parent::tearDown();
	}

}
