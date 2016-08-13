<?php
function factorial ($x){

    if ($x === 1) return 1;
    return $x* factorial($x -1);
}

echo factorial(5);


die;
function sum ()
{
   // var_dump(func_get_args());
    $sum = 0;
    $variables = func_get_args();
    foreach ($variables as $variable) {

    }
    $sum += $variable;
    return $sum;
}

echo sum (4,4,324)."<br />";
function increse ($var){
    return ++$var;
}
echo increse(10)."<br />";
function increseRef ($var){
    $var++;
}
$var = 99;
increseRef($var);
echo $var;
