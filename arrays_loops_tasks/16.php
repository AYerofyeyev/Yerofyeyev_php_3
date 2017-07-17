<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 14.07.2017
 * Time: 17:16
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $key => $value) {
    echo $value;
    if ((++$key % 3) == 0) {
        echo "<br />";
  } else {
        echo ", ";
    }
}