<?php 
echo "<b> FOR </b> <br />";
$a = 0 ;
for ($b = 1; $b <= 100; $b++)
	$a = $a + $b;
echo "����� ���� ����� �� 1 �� 100 = $a" ;
echo "<br />";
echo "<b> WHILE </b> <br />";
$b = 0;
$a = 1;
while ($a <=100)
{	
	$b = $a + $b;
	$a++ ;
}
	echo "����� ���� ����� �� 1 �� 100 = $b" ;
	echo "<br />";
echo "<b> DO WHILE </b> <br />";
    $a = 1;
	$b = 0;
do 
{
$b = $a + $b;
	$a++ ;
}
	while ($a <= 100);
		
	echo "����� ���� ����� �� 1 �� 100 = $b" ;	
	
	
	
?>