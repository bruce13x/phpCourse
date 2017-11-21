<?php
function calc($num1, $num2, $oper){


	if ($oper == '+') {
		return $num1 + $num2;
	} elseif ($oper == '-') {
		return $num1 - $num2;
	} elseif ($oper == '*') {
		return $num1 * $num2;
	} elseif ($oper == '/') {
		if ($num2 == 0) {
			return "Division be zero";
		}
		return $num1 / $num2;
	}
}
echo calc(12, 6, '/');
echo calc(3, 5, '*');
echo calc(3, 0, '/');
echo calc(3, 255.52, '+');
//  comment
?>
