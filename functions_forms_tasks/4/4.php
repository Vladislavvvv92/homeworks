<?php
$dir = '\Users\vladi\Desktop';

function listdir ($dir){
    $file = opendir($dir);
    while (false !== ($files = readdir($file))){
        if ($files != "." && $files != ".."){
            echo "$files <br>";
        }
    }
}
listdir($dir);
