<?php
/**
 * EvaluacionResultado Fixture
 */
class EvaluacionResultadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'resultadoxobjetivo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'puntaje' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'semestre' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'comentarios_evaluador' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 350, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comentarios_evaluado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 350, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_mod' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'user_mod_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'persona_id' => 1,
			'resultadoxobjetivo_id' => 1,
			'puntaje' => '',
			'semestre' => 1,
			'comentarios_evaluador' => 'Lorem ipsum dolor sit amet',
			'comentarios_evaluado' => 'Lorem ipsum dolor sit amet',
			'fechahora_reg' => 1502308333,
			'user_reg_id' => 1,
			'fechahora_mod' => '2017-08-09 14:52:13',
			'user_mod_id' => 1
		),
	);

}
