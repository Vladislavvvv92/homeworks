<?php
//phpinfo();
$id = 0;
function getID()
{
   global $id;
    return ++$id ;
}
echo getID();
echo '<br>';
echo getID();
echo '<br>';
echo getID();
echo '<br>';
echo getID();
echo '<br>';
echo getID();
echo '<br>';

function doArray ($a,$b,$c){
    return array($a,$b,$c);
    }

$str = "adsf ffffffff eqwf qfqf";
var_dump(explode(' ', $str) [2] );
$arrey = explode(' ', $str);
if (isset($arrey[50])) {
    echo $arrey[50];
}
else {
    echo 'ewrwr0';
}
echo '<pre>';
var_dump(doArray(2,4,5)[1]);
echo '</pre>';


die;
function summ ($a, $b){
    return $a +$b;
}
echo summ(5,4) ;
//function getTable($x,$y)
//{
//    echo 'Table' . $x . 'x' . $y;
//    $table = array();
//    for ($i = 1; $i < 9; $i++) {
//        $table[$i] = array();
//
//        for ($j = 1; $j < 9; $j++) {
//            $table[$i][$j] = $i * $j;
//            echo $i . 'x' . $j . '=' . $i * $j . '<br>';
//            if ($i * $j > 20) break 2;
//
//        }
//    }
//}
//getTable(9,9);
//
//$table[2] [2] =4;
//$table[5] [2] =10;
//$table = array();
//    for ($i=1; $i<9; $i++){
//        $table[$i]= array();
//
//        for ($j=1; $j<9; $j++){
//                        $table[$i][$j] = $i*$j;
//           echo $i . 'x' . $j . '='. $i*$j . '<br>';
//            //if ($i*$j>20) break 2;
//
//        }
//echo '<br>';
//    }
//echo '<pre>';
//var_dump($table);
//echo '</pre>';


//$group = array('Oleg', 'Anna', 'Lee', "bruce");
//sort ($group);
//for ($i=0; $i<count($group); $i++) {
//    $group{$i} = 'stud' . $group[$i];
//    echo $group[$i] . '<br>';
//}
//
//uuset ($group);

$group = array(array('name' => 'Anna',
    'age' => 18,
    'possition' => 'maneger'),
    array('name' => 'igor',
        'age' => 18,
        'possition' => 'man'),
    array('name' => 'Yana',
        'age' => 18,
        'possition' => 'ger')
) ;
?>
<table>
    <?php
    foreach ($group as $student){
        if ($student ['possition']== 'ger' )break;
        ?>
    <tr>
        <td><?php echo $student ['name']?></td>
        <td><?php echo $student ['age']?></td>
        <td><?php echo $student ['possition']?></td>
    </tr>
    <?php } ?>
    </table>
<?php
die;
//foreach ($group as $student){
//
//}
//$group[] = $student;
//$group[] = $student;
//$group[] = $student;
//$group[] = array('name' => 'Oleg',
//    'age' => 28,
//    'possition' => 'developer'
//);
//
//$student['possition'] = 'Director';
//$values = array(15,3422,53,643,345,345,345,);
//sort($values);
//$values[count($values)] = 'dddd';
//
//echo '<pre>';
//var_dump ($values);
//echo '</pre>';
//
//echo count($values);
