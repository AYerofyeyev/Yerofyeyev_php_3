<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 11.07.2017
 * Time: 18:38
 */

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
$en = [];
$ru = [];

foreach ($arr as $key => $value) {
    array_push($en, $key);
    array_push($ru, $value);
}

print_r($en);
print_r($ru);
