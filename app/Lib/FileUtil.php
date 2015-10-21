<?php
/**
 * File Utility class
 *
 */
class FileUtil {

	private static $__byteOrderMarks = array(
		'UTF-8' => array(array(0xEF, 0xBB, 0xBF)),
		'UTF-16BE' => array(array(0xFE, 0xFF)),
		'UTF-16LE' => array(array(0xFF, 0xFE)),
		'UTF-32BE' => array(array(0x00, 0x00, 0xFE, 0xFF)),
		'UTF-32LE' => array(array(0xFF, 0xFE, 0x00, 0x00)),
		'UTF-7' => array(
			array(0x2B, 0x2F, 0x76, 0x38), array(0x2B, 0x2F, 0x76, 0x39), array(0x2B, 0x2F, 0x76, 0x2B),
			array(0x2B, 0x2F, 0x76, 0x2F), array(0x2B, 0x2F, 0x76, 0x38, 0x2D)
		),
		'UTF-1' => array(array(0xF7, 0x64, 0x4C)),
		'UTF-EBCDIC' => array(array(0xDD, 0x73, 0x66, 0x73)),
		'SCSU' => array(array(0x0E, 0xFE, 0xFF)),
		'BOCU-1' => array(array(0xFB, 0xEE, 0x28)),
		'GB-18030' => array(array(0x84, 0x31, 0x95, 0x33))
	);

	public static function detectEncoding($data) {
		foreach (self::$__byteOrderMarks as $encoding => $marks) {
			foreach ($marks as $mark) {
				$needle = '';
				foreach ($mark as $byte) {
					$needle .= pack('c', $byte);
				}
				if (strpos($data, $needle) === 0) {
					return array($encoding => $mark);
				}
			}
		}
		return false;
	}

	public static function removeBom($data) {
		$encoding = self::detectEncoding($data);
		if ($encoding) {
			$mark = array_values($encoding)[0];
			$data = substr($data, count($mark));
		}
		return $data;
	}

	public static function decode($data, $encoding = false) {
		if ($encoding !== false) {
			$data = mb_convert_encoding($data, 'UTF-8', $encoding);
		}
		return $data;
	}

}