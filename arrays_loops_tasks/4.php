<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 11.07.2017
 * Time: 10:34
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $value) {
    echo $key . "<br/>";
}

foreach ($arr as $value) {
    echo $value . "<br/>";
}