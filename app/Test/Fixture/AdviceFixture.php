<?php
/**
 * Advice Fixture
 */
class AdviceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'regions_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'trimester1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'trimester2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'trimester3' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'trimester4' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'year' => array('type' => 'integer', 'null' => false, 'default' => '2020', 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'regions_id' => 1,
			'trimester1' => 1,
			'trimester2' => 1,
			'trimester3' => 1,
			'trimester4' => 1,
			'year' => 1,
			'created' => '2021-01-28 15:45:43',
			'modified' => '2021-01-28 15:45:43'
		),
	);

}
