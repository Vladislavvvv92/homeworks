<!doctype html>
<html lang="en">
<head>
    <meta charset="windows-1251">
    <title>Document</title>
</head>
<body>
<?php
in
define('GALLERY_FOLDER', 'images/');

echo '<pre>';
var_dump($_POST);
var_dump($_FILES);
if (isset($_POST['action']) && $_POST['action'] == 'add') {
    if (in_array($_FILES['image']['type'] == $allowtype )) {
        $filename = $_POST{'image'}['tmp_file'];
        $des = 'C:\xampp\htdocs\Academy0207\Lession 5\img' . $_FILES ['image']{'name'};
        if (move_uploaded_file($filename, $des)) {
            $mess = 'You upload files';
        }
    }
}else echo "File no";
echo '</pre>';
/*  */
$images = glob('img/*.*')
?>
<h1>Gallery</h1>
<h2>Add you image</h2>
<form action="galleery.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="add">
    <input type="file" name="image">
    <input type="submit">
</form>
<?php
if (isset($mess) ){
?>
<div style="color:green;"> <?php echo $mess ;}?></div>
<h2>Gallery</h2>
<div id="gallery">
    <?php
    foreach ($images as $image){
    ?>
    <img src="<?php echo $image?> " alt="" height="100">
    <?php } ?>
</div>
</body>
</html>