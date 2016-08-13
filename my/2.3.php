<?php
$n_1 = 5;
$n_3 = 9;
$n_3 = &$n_1;
$n_4 = &$n_3;
echo "P1 $n_1<br />";
echo "p3 $n_3<br />";
echo "p $n_3<br />";
echo "p $n_4<br />";
?>