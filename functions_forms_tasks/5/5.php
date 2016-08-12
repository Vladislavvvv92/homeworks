<?php
$dir = 'D:\films';
$word = '1';
function seeDir($dir, $word){
    $file = scandir($dir);
    for ($i=0;$i < count($file); $i++){
     $position = strpos($file[$i], $word);
        if ($position !== false){
            $res[] = $file[$i];
        }
    }return $res;


}
print_r(seeDir($dir,$word));