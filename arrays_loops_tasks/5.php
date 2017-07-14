<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 11.07.2017
 * Time: 10:49
 */

$arr = ['Коля' => '200', 'Вася' => '300', 'Петя' => '400'];

foreach ($arr as $worker => $salary) {
    echo $worker . " - зарплата " . $salary . " долларов. <br/>";
}

