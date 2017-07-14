<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 10.07.2017
 * Time: 15:36
 */
$numbers = [26, 17, 136, 12, 79, 15];

foreach ($numbers as $value) {
  $value *= $value;
  $result += $value;
}

echo "Сумма квадратов = " . $result;