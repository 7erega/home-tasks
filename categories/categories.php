<?php

$categories = [
    ['title' => 'some 1', 'id' => 1, 'parent' => null, 'depth' => 0],
    ['title' => 'some 2', 'id' => 2, 'parent' => 1, 'depth' => 1],
    ['title' => 'some 3', 'id' => 3, 'parent' => 1, 'depth' => 1],
    ['title' => 'some 4', 'id' => 4, 'parent' => 3, 'depth' => 2],
    ['title' => 'some 5', 'id' => 5, 'parent' => 2, 'depth' => 2],
    ['title' => 'some 6', 'id' => 6, 'parent' => 5, 'depth' => 3],
];

function showHierarchy($categories, $parent = 0) {
    $arr = array();

    foreach($categories as $category) {

        if($parent == $category['parent']) {
            $res = showHierarchy($categories, $category['id']);
            
            if(!empty($res)) {
            	$arr[$category['title']] = $res;
            }
            else {
            	$arr[$category['id']] = $category['title'];
            }
        }
    }
    return $arr;
}
echo "<pre>";
print_r(showHierarchy($categories));
echo "</pre>";