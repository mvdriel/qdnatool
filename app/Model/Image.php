<?php
define('IMAGE_UPLOADS', ROOT . DS . 'data' . DS . 'images' . DS);
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 * @property Question $Question
 */
class Image extends AppModel {

/**
 * Path to the uploads directory.
 *
 * @var string
 */
	const UPLOADS = IMAGE_UPLOADS;

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id'
		)
	);

}
