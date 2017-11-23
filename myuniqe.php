<?php

function myUnique($arr) {
	$res =array();
	foreach ($arr as $key => $value) {
		if (empty($res)) {
			$res[] = $value;
		} else {
			foreach ($res as $key => $val) {
				$flag = 0;
				if ($value == $val) {
					break;
				} else {
					$flag = 1;
					continue;
				}
			}
			if ($flag == 1) {
				$res[] = $value;
			}
		}
	}
return $res;
}

$arr = [4, 'red', 2, 1, 1, 'red', 3, 3, 2, 1, 4];
$result = myUnique($arr);
var_dump($result);




?>
