<?php
function convertToUppercase($item) {
    if (is_string($item)) {
        return strtoupper($item);
    }
    return $item;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'b', 'c', 'd'];
$arr3 = ['a', 0, null, false];

// Chuyển đổi mảng $arr1
$arr1 = array_map('convertToUppercase', $arr1);
print_r($arr1);

// Chuyển đổi mảng $arr2
$arr2 = array_map('convertToUppercase', $arr2);
print_r($arr2);

// Chuyển đổi mảng $arr3
$arr3 = array_map('convertToUppercase', $arr3);
print_r($arr3);
?>