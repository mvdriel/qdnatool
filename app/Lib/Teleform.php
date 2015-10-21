<?php
class Teleform {

	public static function validateDataFile($check) {
		$valid = false;
		if (is_array($check) && !isset($check['tmp_name'])) {
			$check = array_values($check);
			$check = $check[0];
		}

		if (is_array($check) && isset($check['tmp_name'])) {
			$check = $check['tmp_name'];
		}

		ini_set('auto_detect_line_endings', true);
		$handle = fopen($check, "r");
		if ($handle !== false) {
			while (!feof($handle)) {
				$line = fgets($handle);
				$line = $this->__decodeLine($line, $i == 0);
			}
		}
		return $valid;
	}


		if ($result && ($handle = fopen($filename, "r")) !== false) {
			for ($i = 0; !feof($handle); $i++) {
				$skipLine = false;
				$line = fgets($handle);
				$line = $this->__decodeLine($line, $i == 0);

				return true;
*/

		return true;
	}

}