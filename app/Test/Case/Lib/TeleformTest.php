<?php
App::uses('Teleform', 'Lib');
class TeleformTest extends CakeTestCase {



/**
 * testFileSize method
 *
 * @return void
 */
	public function testValidateDataFile() {
		$file = TESTS . 'File' . DS . 'Lib' . DS . 'Teleform' . DS . 'test.csv';
		$this->assertTrue(Teleform::validateDataFile($file));
	}

}