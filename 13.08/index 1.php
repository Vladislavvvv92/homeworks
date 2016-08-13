<?php
$fileName = 'someFile.txt';


$file = fopen($fileName, 'a');
fwrite($file, 'Data test');
fclose($file);

//file_put_contents($fileName, 'Data test');


if (file_exists($fileName)) {
    $file = fopen($fileName, 'r');
    $data = fread($file, filesize($fileName));
    fclose($file);

    var_dump($data);


    /*  */
    echo '<br><br>';
    $data1 = file_get_contents($fileName);
    var_dump($data1);
} else {
    echo 'File not exist!';
    $file = fopen($fileName, 'w');
    fclose($file);
}


?>