<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 10.07.2017
 * Time: 15:25
 */
$numbers = [1, 20, 15, 17, 24, 35];

foreach ($numbers as $value) {
    $result += $value;
}
echo "Сумма = " . $result;