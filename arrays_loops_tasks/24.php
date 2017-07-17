<form method="get">
    <input type="text" name = "myNumber" placeholder="Введите число">
    <input type="text" name="myKey" placeholder="Введите цифру">
    <input type="submit">
</form>

<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 17.07.2017
 * Time: 17:33
 */

$myNumber = $_GET["myNumber"];
$myKey = $_GET["myKey"];
$result = 0;

if (!is_numeric($myNumber) && !is_numeric($myKey)) {
    echo "<span style='font-family: Arial; font-size: 14px; font-weight: 700; border: solid 1px #000; padding: 10px;'>Введите число!</span>";
    DIE();
}
$arr = str_split($myNumber);

foreach ($arr as $value){
    if ($value == $myKey) {
        $result++;
    }
}

echo "<span style='font-family: Arial; font-size: 14px; font-weight: 700; border: solid 1px #000; padding: 10px;'>{$result}</span>";

?>