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
	$length = myStrlen($string) - 1;
	echo "befor func =".$string.'<br>';
	echo "max index= ".$length.'<br>';
	$i = 0;
	/*while ($string[$i] == 0) {
		$string[$i] = null;
		$i++;
	}*/
	for ($i = 0; $i <= $length; $i++ ) { 
		if ($string[$i] == '.') {
			echo "dot position is $i".'<br>';
			break;
		} 
	}
	while ($i <= $length) {
		$string[$i] = null;
		$i++;
	}
	return $string;
}
$chi = 123.45;
echo myIntval($chi);




?>