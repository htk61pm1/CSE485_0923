<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

// Lấy phần tử đầu tiên và phần tử cuối cùng
$firstElement = reset($numbers);
$lastElement = end($numbers);

echo "Phần tử đầu tiên: " . $firstElement . "\n";
echo "Phần tử cuối cùng: " . $lastElement . "\n";

// Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị
$maxValue = max($numbers);
$minValue = min($numbers);
$sum = array_sum($numbers);

echo "Số lớn nhất: " . $maxValue . "\n";
echo "Số nhỏ nhất: " . $minValue . "\n";
echo "Tổng các giá trị: " . $sum . "\n";

// Sắp xếp mảng theo chiều tăng và giảm các giá trị
sort($numbers);
print_r($numbers);

rsort($numbers);
print_r($numbers);

// Sắp xếp mảng theo chiều tăng và giảm các key
ksort($numbers);
print_r($numbers);

krsort($numbers);
print_r($numbers);
?>