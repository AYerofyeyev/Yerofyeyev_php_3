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

$goalDir = $_POST['folder'];
$arrFolders = explode(DIRECTORY_SEPARATOR, __DIR__);
$rootDir = $arrFolders[1];
function searchDirName($dirName){

}
print_r($rootDir);