<?php
function convertToLowercase($item) {
    if (is_string($item)) {
        return strtolower($item);
    }
    return $item;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

// Chuyển đổi mảng $arr1
$arr1 = array_map('convertToLowercase', $arr1);
print_r($arr1);

// Chuyển đổi mảng $arr2
$arr2 = array_map('convertToLowercase', $arr2);
print_r($arr2);

// Chuyển đổi mảng $arr3
$arr3 = array_map('convertToLowercase', $arr3);
print_r($arr3);
?>
