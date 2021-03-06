<?php
App::uses('AppFixture', 'Test/Fixture');

/**
 * Subject Fixture
 *
 */
class SubjectFixture extends AppFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'exam_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'value' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'is_second_version' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'exam_id' => array('column' => 'exam_id', 'unique' => 0)
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
			'exam_id' => 2,
			'value' => '123',
			'is_second_version' => false
		),
		array(
			'id' => 2,
			'exam_id' => 2,
			'value' => '123',
			'is_second_version' => true
		),
		array(
			'id' => 100843,
			'exam_id' => 747,
			'value' => '10825363',
			'is_second_version' => false
		),
	);

}
