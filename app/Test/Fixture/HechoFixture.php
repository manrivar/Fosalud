<?php
/**
 * Hecho Fixture
 */
class HechoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'empleado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tipo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'modalidad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_agresion' => array('type' => 'date', 'null' => false, 'default' => null),
		'frecuencia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombre_agresor' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'edad_agresor' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sexo_agresor' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'otros' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'documentos que presenta' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'unidades_internas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'instituciones' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'evalaucion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'codigo' => 'Lorem ip',
			'empleado_id' => 1,
			'tipo_id' => 1,
			'modalidad_id' => 1,
			'fecha_agresion' => '2020-05-25',
			'frecuencia' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'nombre_agresor' => 'Lorem ipsum dolor sit amet',
			'edad_agresor' => 1,
			'sexo_agresor' => 'L',
			'otros' => 'Lorem ipsum dolor sit amet',
			'documentos que presenta' => 'Lorem ipsum dolor sit amet',
			'unidades_internas' => 'Lorem ipsum dolor sit amet',
			'instituciones' => 'Lorem ipsum dolor sit amet',
			'evalaucion' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'fechahora_reg' => 1
		),
	);

}
