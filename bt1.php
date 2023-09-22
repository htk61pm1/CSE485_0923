<?php
function calculateOperations($arrs) {
    $sum = array_sum($arrs);
    $product = array_product($arrs);
    $difference = $arrs[0];
    $quotient = $arrs[0];

    $length = count($arrs);
    for ($i = 1; $i < $length; $i++) {
        $difference -= $arrs[$i];
        $quotient /= $arrs[$i];
    }

    echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $sum . "\n";
    echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $product . "\n";
    echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $difference . "\n";
    echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $quotient . "\n";
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

calculateOperations($arrs);
?>