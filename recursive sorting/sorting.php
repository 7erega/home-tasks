<?php

function sorting(&$array) {
	$start = 0;
	$end = count($array) - 1;

	recursive($array, $start, $end);
}

function recursive(&$array, $start, $end) {
	$s = $start;
	$e = $end;

	$middle = $array[(int)($start + $end) / 2];

	do {

		while ($array[$e] > $middle) {
			$e--;
		}

		while ($array[$s] < $middle) {
			$s++;
		}

		if ($s <= $e) {
			list($array[$e], $array[$s]) = array($array[$s], $array[$e]);

			$s++;
			$e--;
		}
	} while ($s <= $e);

	if ($e > $start) {
		recursive($array, $start, $e);
	}

	if ($s < $end) {
		recursive($array, $s, $end);
	}
}

$test = [10,3,30,5,8,5,6,45];
echo "Исходный массив:<br>";
foreach ($test as $key => $value) {
	echo $value . "<br>";
}
echo "<br>";

sorting($test);

echo "Отсортированный массив:<br>";
foreach ($test as $key => $value) {
	echo $value . "<br>";
}