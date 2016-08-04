<?php
$arr = array("html", "php", "js", "css", "jq");
foreach ($arr as $value) {
    echo $value."<br />" ;
}

$arr = array(13,23,34,45,56,23);
$result = 0;
foreach ($arr as $value){
    $result = $result + $value ;
}
 echo $result ;
$arr = array(32,22,12,2,3,4,1,23,43);
$res =0;
foreach ($arr as $value){
    $result = $value * $value ;
    $res = $res + $result ;
}
//echo $res ;
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой') ;
foreach ($arr as $key => $value){
    echo $key.'=>'.$value;
    echo "<br />" ;
}
$arr = array('Коля'=>'200', 'Вася'=>'300','Петя'=>'400') ;
foreach ($arr as $key => $value) {
    echo $key.' '.'- Зарплата'.' '.$value.' '.'доларов'.'<br />';
}
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой') ;
$en = array();
$ru = array();
foreach ($arr as $key => $value){
      array_push($en, $key);
      array_push($ru, $value);

}

var_dump($en);
echo '<br />';
var_dump($ru);
$arr = array(2,1,3,4,9,0,15);
foreach ($arr as $value)
{
    if ($value >= 3 && $value <= 10) echo $value . '<br />';
}
$arr = array();

for ($i=0; $i<=100; $i++ ){
$arr [] = $i;
}
for ($i=0; $i<=100; $i++) {
    if ($arr[$i] % 2 == 0) {
             echo $i . '<br />';
    }
}
$n =1000; // Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную $num.
$counter =0;
while ($n>50){
    $n = $n/2;
    $counter =$counter+1;
}
echo $n."<br />";
echo "Количество иtераций -"." ". $counter. "<br />";
for ($i =1; $i <10; $i++){ //Вывести таблицу умножения
    for ($j=1; $j<10; $j++){
        $res =$i*$j;
        echo $i."*".$j."=".$res ."<br />";
    }
}
//$arr = array(4, 2, 5, 19, 13, 0, 10);
//foreach ($arr as $value)
//    if ($value =2) echo "Есть!";
//    if ($value =3) echo "Есть!";
//    if ($value =4) echo "Есть!";
$arr = array(1);
for ($i=0; $i<100; $i++){
    $i = rand(5,100);
array_push($arr,$i);
}
var_dump($arr);
echo "<br />";
$min = min($arr);
$max = max($arr);
echo $min."<br />";
echo $max."<br />";
$buf = $arr[0];
$arr[0] = $arr[25];
$arr[25]=$buf;
print_r($arr);