<form method="get">
    <input type="text" name="rows" placeholder="Задайте количество строк">
    <input type="text" name="cols" placeholder="Задайте количество колонок">
    <input type="submit">
</form>

<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.07.2017
 * Time: 21:54
 */

$colors = ['red','yellow','blue','gray','maroon','brown','green'];

$rows = $_GET['rows'];
$cols = $_GET['cols'];
?>

<table cellpadding="10px" border="1px" cellspacing="0">
    <?php
        for ($i = 0; $i < $rows; $i++){
            echo "<tr>";
            for($j = 0; $j < $cols; $j++){
                $a = rand();
                $color = $colors[rand(0, 6)];
                echo "<td style='background-color: {$color}'>{$a}</td>";
            }
            echo "</tr>";
        }
    ?>
</table>
