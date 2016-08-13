<?php
$x = 5 ;
echo "$x <br />";

function ex () {

$x = 4;
echo $x;
}

ex ();
echo "<br />" ;

 function ee () {
	 global $x;
	 $x++;
	 	 $GLOBALS["x"] = 6;
	 
echo $x	;	
		
 }
 ee ();
 echo $x;
 
echo "<br />" ;

function testStatic (){
	static $id = 1 ;
		echo "$id <br />";
		$id++;
	
	
}
	testStatic ();
	for ($i=0; $i<10; $i++ )
		testStatic();
	
?>