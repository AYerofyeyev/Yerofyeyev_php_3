<form method="post">
    <input type="text" name="folder">
    <input type="submit">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 01.08.2017
 * Time: 14:14
 */

function searchDirList($goalDir){
    $cwd = realpath(__DIR__);
    $dirList = scandir(realpath($cwd));
    foreach ($dirList as $item) {
        if (is_dir($item) && $item == $goalDir) {
            $goalDirList = scandir(realpath($item));
        }
    }
    if($goalDirList){
        print_r($goalDirList);
    } else {
        echo "Такой папки нет";
    }
}
$myDir = $_POST['folder'];
searchDirList($myDir);
?>