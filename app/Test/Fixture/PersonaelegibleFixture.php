<?php
/**
 * Personaelegible Fixture
 */
class PersonaelegibleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'cargoelegible_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'index'),
		'nota_psicologica' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'fecha_psicologica' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'nota_tecnica' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'fecha_tecnica' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'nota_entrevista' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'fecha_entrevista' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'nota_entrevista_profunda' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'fecha_entrevista_profunda' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'bandera_elegible' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'comment' => 'Si es elegible o no.'),
		'estado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'comment' => 'Estado laboral de la persona. Contratado Fosalud, No contratado, Contratado Externo', 'charset' => 'utf8'),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_id_mod' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechahora_mod' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'persona_id' => array('column' => 'persona_id', 'unique' => 0)
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
			'cargoelegible_id' => 1,
			'persona_id' => 1,
			'nota_psicologica' => 1,
			'fecha_psicologica' => '2016-08-09 12:30:41',
			'nota_tecnica' => 1,
			'fecha_tecnica' => '2016-08-09 12:30:41',
			'nota_entrevista' => 1,
			'fecha_entrevista' => '2016-08-09 12:30:41',
			'nota_entrevista_profunda' => 1,
			'fecha_entrevista_profunda' => '2016-08-09 12:30:41',
			'bandera_elegible' => 1,
			'estado' => 'Lorem ipsum dolor sit amet',
			'user_id_reg' => 1,
			'fechahora_reg' => 1470763841,
			'user_id_mod' => 1,
			'fechahora_mod' => '2016-08-09 12:30:41'
		),
	);

}
