<!doctype> 
<html > 
<head> 
<meta charset="windows-1251">
<title>Document</title> 
</head> 
<body> 
<form action="6.php" name="Form1" method="post" enctype="multipart/form-data">
<input type="file" name="filename" >

<br>
<input type="submit" name="send"> 
<?php

if(isset($_POST["send"])){

echo $_FILES["filename"]["tmp_name"];

if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   { 
    move_uploaded_file($_FILES["filename"]["tmp_name"], 'C:/xampp/htdocs/Academy0207/functions_forms_tasks/6/gallery'.$_FILES["filename"]["name"]);

   } else {
      echo("Ошибка загрузки");
   }
$dir = 'C:/xampp/htdocs/Academy0207/functions_forms_tasks/6/gallery';
echo "<br>";
function listdir ($dir){
    $file = opendir($dir);    
    echo "<table border='1px'>";
    $files = readdir($file);
    while ($files !== false){

        if ($files != "." && $files != ".."){
            echo "<tr><td><img src='http://localhost/Academy0207/functions_forms_tasks/6/gallery".$files."'></td></tr>";
        }
        $files = readdir($file);
    }

    echo "</table>";
}
listdir($dir);
}
?> 
</form> 

</body> 
</html>