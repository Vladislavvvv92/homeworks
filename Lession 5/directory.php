<?php
$dirname = ('D:/*');
echo '<pre>';
$arr = glob($dirname);
var_dump($arr);
echo '</pre>';




die;
$dir = opendir($dirname);
//var_dump($dir);
//$file = readdir($dir);
if (is_dir($dirname)){

while (($file = readdir($dir)) !== false){
    echo $file . '<br>';
}
closedir($dir);
} else {
    echo "$dirname is not dir";
}