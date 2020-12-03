<?php
/**
 * Persona Fixture
 */
class PersonaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tipo_documento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'numero_documento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'genero' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'celular' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'profesion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipo_persona' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => 'natural o juridica', 'charset' => 'utf8'),
		'residencia' => array('type' => 'string', 'null' => false, 'default' => 'El Salvador', 'length' => 15, 'collate' => 'utf8_general_ci', 'comment' => 'el salvador, otra', 'charset' => 'utf8'),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'foto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 800, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'foto_dir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 800, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'tipo_documento' => 'Lorem ipsum dolor sit a',
			'numero_documento' => 'Lorem ipsum dolor sit amet',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'genero' => 'Lorem ip',
			'email' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem i',
			'celular' => 'Lorem i',
			'profesion' => 'Lorem i',
			'tipo_persona' => 'Lorem ip',
			'residencia' => 'Lorem ipsum d',
			'fechahora_reg' => 1583773009,
			'foto' => 'Lorem ipsum dolor sit amet',
			'foto_dir' => 'Lorem ipsum dolor sit amet'
		),
	);

}
