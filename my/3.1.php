<?php
    $x = 15;
 if (isset ($x)) echo "Переменная существует" ;
    else echo "ПЕременна не существует";
    echo  "<br />";


    $mass = array(3,4,5,6) ;
    unset($mass[1]);
    print_r($mass);
