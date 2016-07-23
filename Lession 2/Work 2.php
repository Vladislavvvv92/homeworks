<?php
define('CURRENCY', 'UAN');
define('COMPANY_NAME', 'Apple');
/*$money = 300;
if ($money>200){
    echo 'you have money';
    } elseif ($money >100){
    echo 'No money';
    }
    else {
        echo'you have no money';
    }*/   

$a = 5; 

$isMasrried = false;
#name = 'Anna';
/*if ($isMasrried){
    echo 'Married' . $name;
}else {
    echo 'Single' . $name;
}*/
echo $isMasrried == true ? 'Married' : 'Single'


die;
echo __FILE__ . '<br>';
echo __LINE__;

die;
$name = "Vlad";
$age = 21.5 ;
$age = (int) $age;
echo CURRENCY;
echo "<br>";
echo 'Hello' . $name . '!<br>' ;
echo 'Hello $name ! <br>';
echo "Hello ($name) ! I am ($age) old <br>";
echo gettype($name);

var_dump($name);
die;

$money = 2000 ;
$money += 5000;
$money-= 300;
$money-=200;
$zh = false;
$money= $money * 2;
$money*= 0.8 ;

echo $money ;
if ($money > 200 || $zh)
{
        echo "Мы можем пойти в кино" ;
    }
    else {
        echo "Ми не можемо";

    }
echo $money ;
$den = 900;
if ($den > 1000){
    echo "Dostatochno";
}
    else {
        echo " Ne dostatochno";
    }
