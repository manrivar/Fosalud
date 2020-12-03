<?php
/**
 * EvaluacionCompetencia Fixture
 */
class EvaluacionCompetenciaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'compromiso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'puntaje' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'semestre' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id_mod' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'fechahora_mod' => array('type' => 'timestamp', 'null' => true, 'default' => null),
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
			'compromiso_id' => 1,
			'puntaje' => 1,
			'semestre' => 1,
			'fechahora_reg' => 1499289252,
			'user_id_reg' => 1,
			'user_id_mod' => 1,
			'fechahora_mod' => 1499289252
		),
	);

}
