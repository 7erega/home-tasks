<?php

function plus($numberOne, $numberTwo) {
	if ((isset($numberOne) && isset($numberTwo)) && (is_numeric($numberOne) && is_numeric($numberTwo))) {
		return $numberOne + $numberTwo;
	}
}

function minus($numberOne, $numberTwo) {
	if ((isset($numberOne) && isset($numberTwo)) && (is_numeric($numberOne) && is_numeric($numberTwo))) {
		return $numberOne - $numberTwo;
	}
}

function multiply($numberOne, $numberTwo) {
	if ((isset($numberOne) && isset($numberTwo)) && (is_numeric($numberOne) && is_numeric($numberTwo))) {
		return $numberOne * $numberTwo;
	}
}

function divided($numberOne, $numberTwo) {
	if ((isset($numberOne) && isset($numberTwo)) && (is_numeric($numberOne) && is_numeric($numberTwo))) {
		return $numberOne / $numberTwo;
	}
}

function sqrtNew($number) {
	if (isset($number) && is_numeric($number)) {
		return sqrt($number);
	}
}

function powNew($number) {
	if (isset($number) && is_numeric($number)) {
		return pow($number, 2);
	}
}

function cosNew($number) {
	if (isset($number) && is_numeric($number)) {
		return cos($number);
	}
}

function sinNew($number) {
	if (isset($number) && is_numeric($number)) {
		return sin($number);
	}
}

function tanNew($number) {
	if (isset($number) && is_numeric($number)) {
		return tan($number);
	}
}

function factorial($number) {
	if (isset($number) && is_numeric($number)) {
		if ($number == 0) {
        	return 1;
	    } else {
	        return $number * factorial($number - 1);
	    }
	}
}

function logNew($number) {
	if (isset($number) && is_numeric($number)) {
		return log($number);
	}
}