<?php

$a = 10;
for ($a = 0; $a <10; $a++)
{
echo "Iteracziya = $a";
echo "<br />";
}

while ($a <= 20){
	echo "Iteracziya = $a";
     echo "<br />";
	 $a++;
}
	do  
	{
		echo "Iteracziya = $a";
		echo "<br />";
		$a++;
		}
		while ($a <= 1);
			
		$b = 0;
		
		while ($b < 100){
			$b++;
			if ($b == 200) break;
			if ($b % 2 == 0) continue;
			
             echo "$b <br />";		
		}
		
			$t = 5;
			$f = 1;
			if ($t < 0) $f = "takoho chisla <b>$t</b> ne sushestvet";
			else for  ($e = 1; $e <= $t; $e++)
			 $f *= $e;
			 echo $f; 
?>