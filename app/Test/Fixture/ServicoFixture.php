<?php
/**
 * Servico Fixture
 */
class ServicoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'macro_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'descricao' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null),
		'peso' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'macro_id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'nome' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'peso' => 1
		),
	);

}
