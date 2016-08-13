<?php
$list =array (15, "My string", true, "10");
echo $list [1];
echo "<br />";
$list [1] = "My";
echo $list [1];
echo "<br />";
for ($i=0; $i < count($list); $i++ )
	echo "≈лемент масива $i - ".$list[$i]. "<br />" ;
$array = array ("name"=>"Vlad", "Age"=>"21", "Student" => true);
 foreach ($array as $k => $v)
 echo "$k => $v <br />";
 
 
 $array = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
 echo getAvarageValue($array);
 function getAvarageValue ($array){
 $summa = 0;
 for ($i=0; $i<count($array); $i++){
	 $summa +=$array[$i];
 }
 $summa = $summa / count($array);
	 return ($summa);
 }
 echo "<br />";
 $list = array ("One", "Two", "Three") ;
 print_r ($list);
 echo "<br />";
 echo number ("One");
 function number ($s)
 {
	 switch ($s) {
	 case "One" : return 1; break;
     case "Two" : return 2; break;
     case "Three" : return 3; break;
	 
default :
echo "Такого числа нету" ;	 
	 }
 }
?>