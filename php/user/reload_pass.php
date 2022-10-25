<?php
$last = $_POST['last_p'];
$new = $_POST['new_p'];
$id = $_POST['id'];

include('../db.php');

$result = array();

$req =  mysqli_fetch_array(mysqli_query($db,"SELECT `password` FROM `user` WHERE id = '$id'"));
if($req['password'] == $last)
{
    $r = mysqli_query($db,"UPDATE `user` SET `password` = '$new' WHERE id = '$id'");
    $result['status'] = 200;
}
else
{
    $result['status'] = 404;
}
echo json_encode($result);
?>