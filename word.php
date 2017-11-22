<?php

// strlen

function myStrlen ($string) {
	$endOfWord = "^";
	$newString = $string.$endOfWord;
	$i = 0;
	while ($newString[$i] !== "^") {
		$i++;
	}
	return $i;
}

$string = "@@@";
echo "String length is ".myStrlen($string)." symbols".'<br>';

// empty

function isEmpty ($var) {
	if ($var === 0 || $var === null || $var === 0.0 || $var === array()) {
		$result = "true";
	} else $result = "false";
return $result;
}

$var  = array();
echo 'Is $var empty? - '.isEmpty($var).'<br>';

// trim

function myTrim ($string) {
	$length = myStrlen($string) - 1;
	$i = 0;
	while ($string[$i] == " ") {
		$string[$i] = null;
		$i++;
	}
	while ($string[$length] == " ") {
		$string[$length] = null;
		$length--;
	}
	return $string;

}

echo myTrim('   1  stringnnn       ');
echo "end".'<br>'; //to check if a space removed

// intval

function myIntval ($string) {
	$notintString = strval($string);
	$length = myStrlen($notintString) -1 ;
	$i = 0;
	while ($i <= $length) {
		if ($notintString[$i] == '.') {
			while ($i <= $length) {
				$notintString[$i] = null;
				$i++;
			}
		}
		$i++;
	}

	return $notintString;
}

$float = 12.2365;
echo 'You entered '.$float.'<br>';
echo 'Function returns '.myIntval($float).'<br>';

// implode

function myImplode($array, $glue) {
	$length = count($array) -1;
	$i = 0;
	$result2 = null;
	while ($i <= $length) {
		if ($i == $length) {
			$result = $array[$i];
		} else {
			$result = $array[$i].$glue;
		}
		$i++;
		$result2 = $result2.$result; 
	}
	return $result2;
}

$array = array('abc', 'def', 'ghi', 'xxx');
$glue = ', ';
echo '<b>array after myImplode </b>'.myImplode($array, $glue).'<br>';

// explode

function myExplode($string, $separator) {
	$length = strlen($string) - 1;
	$i = 0;
	$y = 0;
	$result = null;
	$resArray = array();
	while ($i <= $length) {
		if ($string[$i] !== $separator) {
			$result = $result.$string[$i];
			

		} else {
			// echo "$result".'<br>';
			$resArray[$y] = $result;
			$result = null;
			echo $resArray[$y].'<br>';
			$y++;
			
		}
		$i++;
	}
	//echo $resArray[0].'<br>';
	//echo $resArray[1].'<br>';
	return $result;

}

$string = 'I\'m first phrase. I\'m second phrase';
$separator = '.';
echo '<b>Before</b><br>';
echo $string.'<br>';
echo '<b>After</b><br>';
echo myExplode($string, $separator).'<br>';

$string = 'This is a long sentence';
$separator = ' ';
echo '<b>Before</b><br>';
echo $string.'<br>';
echo '<b>After</b><br>';
echo myExplode($string, $separator).'<br>';
?>