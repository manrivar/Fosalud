<?php
/**
 * Atendimento Fixture
 */
class AtendimentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'unidade_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'usuario_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'usuario_tri_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'servico_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'prioridade_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'atendimento_id' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null),
		'sigla_senha' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1),
		'num_senha' => array('type' => 'integer', 'null' => false, 'default' => null),
		'num_senha_serv' => array('type' => 'integer', 'null' => false, 'default' => null),
		'nm_cli' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'num_local' => array('type' => 'integer', 'null' => false, 'default' => null),
		'dt_cheg' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'dt_cha' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'dt_ini' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'dt_fim' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'ident_cli' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'dui' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11),
		'ucsf' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'fki_atendimentos_ibfk_3' => array('unique' => false, 'column' => 'status')
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
			'id' => '',
			'unidade_id' => 1,
			'usuario_id' => 1,
			'usuario_tri_id' => 1,
			'servico_id' => 1,
			'prioridade_id' => 1,
			'atendimento_id' => '',
			'status' => 1,
			'sigla_senha' => 'Lorem ipsum dolor sit ame',
			'num_senha' => 1,
			'num_senha_serv' => 1,
			'nm_cli' => 'Lorem ipsum dolor sit amet',
			'num_local' => 1,
			'dt_cheg' => '2016-10-14 09:40:59',
			'dt_cha' => '2016-10-14 09:40:59',
			'dt_ini' => '2016-10-14 09:40:59',
			'dt_fim' => '2016-10-14 09:40:59',
			'ident_cli' => 'Lorem ipsum dolor sit amet',
			'dui' => 'Lorem ips',
			'ucsf' => 'Lorem ipsum dolor sit amet'
		),
	);

}
