<form method="get">
    <input type="text" name = "myNumber">
    <input type="submit">
</form>

<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 17.07.2017
 * Time: 16:37
 */

$myNumber = $_GET["myNumber"];
if (!is_numeric($myNumber)) {
    echo "<span style='font-family: Arial; font-size: 14px; font-weight: 700; border: solid 1px #000; padding: 10px;'>Введите число!</span>";
    DIE();
}
$arr = str_split($myNumber);

foreach ($arr as $value){
    $result += $value;
}
if ($result <> 0) {
    echo "<span style='font-family: Arial; font-size: 14px; font-weight: 700; border: solid 1px #000; padding: 10px;'>{$result}</span>";
}
?>