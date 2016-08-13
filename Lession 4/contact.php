<?php
/* logik */

function clearMess ($Message){
    $bann = array(
        'xxx' , 'yyy','zzz'
    );
    str_replace('xxx', '#Banned', $Message);
    return $Message;
}


$messages = array();
$messages = unserialize(file_get_contents('date.txt'));
$userMess = '';
if (isset($_POST['action']) && strtolower($_POST['action'])  == 'add'){
    if (!isset($_POST['username']) || !$_POST['username']){
        $_POST['username'] = 'Anonimus';
        if (!isset($_POST['message']) || !$_POST['message']) {
            $_POST['message'] = 'Messs';
        }
            else {
            $message[] = array(
                'username' => $_POST ['username'],
                'message' => $_POST ['message']
            );
            }
        }

    }
    $messages[] = array(
        'username' => $_POST ['username'],
        'message' => $_POST ['message']
    );
    $userMess = 'tour';

file_put_contents('date.txt', serialize($messages));
?>



<H1>Add you message:</H1>
<?php /*if ($userMess){*/?>

<form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name = "username" id = "username">

    <div style="clear: both"></div>

    <label for="Message">Message *</label>
    <textarea name="message" id="Message" cols="30" rows="10"></textarea>

    <div style="clear: both"></div>

    <input type="submit" value="Add Message">
    <input type="hidden" name="action" value="Add">
</form>
<?php
foreach ($messages as $message){ ?>
    <div>
        <h6><?php echo  $message['username'] ?></h6>
        <h6><?php echo  clearMess($message['message']) ?></h6>
    </div>

<?php }