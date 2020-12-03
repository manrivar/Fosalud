<?php
/**
 * Usuario Fixture
 */
class UsuarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'login' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20),
		'sobrenome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100),
		'senha' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60),
		'ult_acesso' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null),
		'session_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'login' => array('unique' => true, 'column' => 'login')
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
			'login' => 'Lorem ipsum dolor ',
			'nome' => 'Lorem ipsum dolor ',
			'sobrenome' => 'Lorem ipsum dolor sit amet',
			'senha' => 'Lorem ipsum dolor sit amet',
			'ult_acesso' => '2016-10-14 09:42:10',
			'status' => 1,
			'session_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
