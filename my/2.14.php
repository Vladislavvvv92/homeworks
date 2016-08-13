<?php
$array = array(array (3,4,5), array (6, 7), array(8));
$a = 0;
$b = 0;
for ($i=0 ; $i < count($array); $i++){
	$b =$b+ count($array[$i]);
	for ($j = 0; $j < count($array[$i]); $j++)
	
	
		$a += $array[$i][$j];
}
		$s = $a / $b;
		
		echo $s ;
		
		
	echo "<br />" ;
	
		
	

?>