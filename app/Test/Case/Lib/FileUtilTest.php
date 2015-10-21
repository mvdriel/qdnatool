<?php
App::uses('FileUtil', 'Lib');
class FileUtilTest extends CakeTestCase {



/**
 * testFileSize method
 *
 * @return void
 */
	public function testDetectEncoding() {
		$data = '';
		$result = FileUtil::detectEncoding($data);
		$this->assertFalse($result);

		$expected = array('UTF-8' => array(0xef, 0xbb, 0xbf));
		$data = pack('CCC', 0xef, 0xbb, 0xbf) . 'test';
		$result = FileUtil::detectEncoding($data);
		$this->assertEquals($expected, $result);

		$expected = array('UTF-16BE' => array(0xfe, 0xff));
		$data = pack('CC', 0xfe, 0xff) . 'test';
		$result = FileUtil::detectEncoding($data);
		$this->assertEquals($expected, $result);

		$expected = array('UTF-16LE' => array(0xff, 0xfe));
		$data = pack('CC', 0xff, 0xfe) . 'test';
		$result = FileUtil::detectEncoding($data);
		$this->assertEquals($expected, $result);

		$expected = array('UTF-8' => array(0xef, 0xbb, 0xbf));
		$data = file_get_contents(TESTS . 'File' . DS . 'Lib' . DS . 'FileUtil' . DS . 'utf-8.txt');
		$result = FileUtil::detectEncoding($data);
		$this->assertEquals($expected, $result);
	}

	public function testRemoveBom() {
		$expected = "test\n";
		$data = file_get_contents(TESTS . 'File' . DS . 'Lib' . DS . 'FileUtil' . DS . 'utf-8.txt');
		$this->assertNotEquals($expected, $data);

		$result = FileUtil::removeBom($data);
		$this->assertEquals($expected, $result);

	}

}