<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

$value1 = $a['b']['o']['b'];
$value2 = $a['a']['c'];
$info = $a['a'];

echo "Giá trị = $value1 với key 'b'\n";
echo "Giá trị = $value2 với key 'c'\n";
echo "Thông tin của phần tử có key 'a':\n";
print_r($info);
?>