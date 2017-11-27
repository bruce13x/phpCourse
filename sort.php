<?php 

// bubble sort

function simpleSort($arr) {
	$length = count($arr);
	$flag = 1;
	while ($flag == 1) {	
		$flag = 0;
		for ($i=0; $i < $length-1; $i++) { 
			if ($arr[$i] > $arr[$i + 1]) {
				$temp = $arr[$i];
				$arr[$i] = $arr[$i + 1];
				$arr[$i + 1] = $temp;
				$flag = 1;
			} 		
			
		}
	}
	return $arr;
}

$array = [6, 8, 4, 7, 0, 1, 5, 0, 9, 2, 3, 3];
$result = simpleSort($array);
var_dump($result);

















?>