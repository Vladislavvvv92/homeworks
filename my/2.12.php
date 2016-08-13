<?php 
function getsum ($x,$y) {
	$sum = $x + $y ;
	echo "Summa $sum";
}
	function getsum1 ($x, $y){
	$sum1 = $x + $y;
		return $sum1 ; 
	}
$sum=111;
	getsum (19, 10);
	
	echo "<br />";
	$a = getsum1 (18,10) ;
    echo $a ;
	echo "<br / >";

	function hello ()
	{
	for ($i=1; $i<=100; $i++){
		echo "Hello";
		if ($i%10 == 0 ) echo "<br / >";
	    
	}
	}
	 hello ();
	 
	 function summa ($x, $y , $z){
	 $summat = $x + $y + $z ;
	 echo "$summat";
	 return $summat ;
	 }
	 summa (2,2,2);
	
	echo "<br />";
	function sered ($x, $y,$z){
		$a = summa ($x,$y,$z) / 3 ;
		echo "<br />";
        echo $a	;
        return ($a);	
	}
	
	sered (3,4,5);