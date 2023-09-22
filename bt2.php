<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

$result = '';
$count = count($arrs);

for ($i = 0; $i < $count; $i++) {
    $result .= "Màu {$arrs[$i]} là màu yêu thích của {$names[$i]}";

    if ($i < $count - 1) {
        $result .= ', ';
    } else {
        $result .= '.';
    }
}

echo $result;
?>