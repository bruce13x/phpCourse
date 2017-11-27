<?php

// array_key_exists()

function myArrayKeyExists($myKey, $arr) {
	foreach ($arr as $key => $value) {
		if ($key === $myKey) {
			$res = 'true';
			break;
		} else {
			$res = 'false';
			continue;
		}
	}
	return $res;

} 
$array = [2, 5, "color" => "green", "gender" => "female"];
$key = 'color2';
$result = myArrayKeyExists($key, $array);
echo $result.'<br>';

// array_keys()

function myArrayKeys($arr, $search = null) {
	foreach ($arr as $key => $value) {
		if ($search) {
			if ($value === $search) {
				$res[] = $key;
				continue;
			}
		} else {
			$res[] = $key;
		}
		
	}
	return $res;
}

$ar = ["car" => "opel", 5, 8, "name" => "John", 5];
$result = myArrayKeys($ar, "John");
var_dump($result);

//array_combine()

function myArrayCombine($keys, $values) {
	$firstLen = count($keys);
	$secondLen = count($values);
	
	for ($i=0; $i < $firstLen ; $i++) { 
		$res[$keys[$i]] = $values[$i];
	}
	return $res;

}
$first = ["name", "car", "phone", "city"];
$second = ["John", "BMW", "HTC", "Ha"];
$resultarr = myArrayCombine($first, $second);
var_dump($resultarr);

// array_search()

function myArraySearch($search, $array) {
	$res = array();
	foreach ($array as $key => $value) {
		if ($value == $search) {
			$res[] = $key;

		} else {
			$flag = false;
		}
	}
	if (!$res) {
		return $flag;
	} else {
		return $res;
	}
	
}

$arr = [2, "color" => "red", "name" => "John", "color2" => "red"];
$result = myArraySearch("red", $arr);
var_dump($result);

// in_array()

function myInArray($search, $array, $strict = null) {
	foreach ($array as $key => $value) {
		if ($strict) {
			if ($value === $search) {
				$res = true;
				break;
			} else {
				$res = false;
			}
		} else {
			if ($value == $search) {
				$res = true;
				break;
			} else {
				$res = false;
			}
		}
	}
	return $res;
}

$array = [2, 5, '13', "color" => "red"];
$search = "2";
$result = myInArray($search, $array);
var_dump($result);

// array_diff ()

function myArrayDiff($arrOne, $arrTwo) {
	foreach ($arrOne as $key => $value) {
		if (!myInArray($value, $arrTwo)) {
			$res[$key] = $value;
		}
	}
	return $res;
}

$arr1 = ["color" => "red", "color" => "blue", "green", "black"];
$arr2 = ["red", "green"];
$result = myArrayDiff($arr1, $arr2);
var_dump($result);

// array_intersect()

function myArrayIntersect($arrOne, $arrTwo) {
	foreach ($arrOne as $key => $value) {
		if (in_array($value, $arrTwo)) {
			$res[$key] = $value;
		}
	}
	return $res;
}

$arr01 = [2, "color" => "red", "color" => "blue", "green", "black"];
$arr02 = [2, "green", "blue", "red"];
$res = myArrayIntersect($arr01, $arr02);
var_dump($res);

?>