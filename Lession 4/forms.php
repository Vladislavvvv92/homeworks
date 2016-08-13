<?php
function getTopLongest ($text, $topCount = 3){
    $words = explode(' ', $text);

}
 function cmp ($a , $b)
{
    if (strlen($a)==strlen($b)){
        return 0;
    }
return (strlen ($a) < strlen($b))? 1 : -1;
}



if (isset($_POST['action']) && $_POST['action']==1){
    if (isset($_GET[text1])&& isset ($_GET {'text2'})){
        $tesult = getCommonWords ($_GET['text1'], $_GET['text2']);
        var_dump($result);
    }

}


?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2> Task 1</h2>
<form action="forms.php" method="get">
<!--    <label for="test">Input 1</label>-->
<!--    <input type="text" name="test" id="test">-->

    <div style="clear:both"></div>
    <label for="test">TExt 1</label>
    <textarea name="text1" id="test1" cols="30" rows="10">Составьте массив дней недели.</textarea>

    <div style="clear:both"></div>
    <label for="test1">Input 1</label>
    <textarea name="text1" id="test1" cols="30" rows="10">недели</textarea>

   <!-- <div style="clear:both"></div>
    <label for="test">Input 1</label>
    <textarea name="text1" id="test1" cols="30" rows="10"></textarea>-->
    <input type="Task", value="1">
    <input type="submit" value="calculate">
    <pre>
        <?php


 /*   $text1 = $_GET['rext1'];
        $text2 = $_GET['text'];
        $textArray1 = explode(' ', $text1);
        $textArray2 = explode(' ', $text2);
        var_dump($textArray1, $textArray2, array_intersect($textArray1,$textArray2));*/
        ?>


    </pre>
</form>
</body>
</html>