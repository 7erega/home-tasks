<?php

function tree(array $data, &$tree = array(), $level = 0) {

    if (!isset($tree[$level])) $tree[$level] = array();

    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $tree[$level][] = $key;
            tree($value, $tree, $level + 1);
        } else {
            $tree[$level][] = $value;
        }
    }
}

$binary_tree = array(1 => array(2 => array(4,5),4=>array(5,6)));
tree($binary_tree, $output);
echo "<pre>";
var_dump($output);
echo "</pre>";