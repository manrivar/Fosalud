<?php
/**
 * Talksxestablishment Fixture
 */
class TalksxestablishmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'establishments_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sibases_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'regions_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_january' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_february' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_march' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_april' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_may' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_june' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_july' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_august' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_september' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_october' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_november' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'med_december' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_january' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_february' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_march' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_april' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_may' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_june' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_july' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_august' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_september' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_october' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_november' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nur_december' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_january' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_february' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_march' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_april' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_may' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_june' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_july' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_august' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_september' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_october' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_november' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'den_december' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_january' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_february' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_march' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_april' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_may' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_jun' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_july' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_august' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_september' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_october' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_november' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ot_december' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'year' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'establishments_id' => 1,
			'sibases_id' => 1,
			'regions_id' => 1,
			'med_january' => 1,
			'med_february' => 1,
			'med_march' => 1,
			'med_april' => 1,
			'med_may' => 1,
			'med_june' => 1,
			'med_july' => 1,
			'med_august' => 1,
			'med_september' => 1,
			'med_october' => 1,
			'med_november' => 1,
			'med_december' => 1,
			'nur_january' => 1,
			'nur_february' => 1,
			'nur_march' => 1,
			'nur_april' => 1,
			'nur_may' => 1,
			'nur_june' => 1,
			'nur_july' => 1,
			'nur_august' => 1,
			'nur_september' => 1,
			'nur_october' => 1,
			'nur_november' => 1,
			'nur_december' => 1,
			'den_january' => 1,
			'den_february' => 1,
			'den_march' => 1,
			'den_april' => 1,
			'den_may' => 1,
			'den_june' => 1,
			'den_july' => 1,
			'den_august' => 1,
			'den_september' => 1,
			'den_october' => 1,
			'den_november' => 1,
			'den_december' => 1,
			'ot_january' => 1,
			'ot_february' => 1,
			'ot_march' => 1,
			'ot_april' => 1,
			'ot_may' => 1,
			'ot_jun' => 1,
			'ot_july' => 1,
			'ot_august' => 1,
			'ot_september' => 1,
			'ot_october' => 1,
			'ot_november' => 1,
			'ot_december' => 1,
			'year' => 1,
			'created' => '2021-01-27 18:12:24',
			'modified' => '2021-01-27 18:12:24'
		),
	);

}
