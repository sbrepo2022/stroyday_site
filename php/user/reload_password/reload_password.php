<?php
$id = $_POST['id'];
$password = $_POST['password'];

$result = array();

include('../../db.php');

$ids = mysqli_fetch_array(mysqli_query($db,"SELECT `id_user` FROM `reload_password` WHERE id = '$id'"));

if(mysqli_query($db,"UPDATE `user` SET `password` = '$password' WHERE id = '{$ids['id_user']}'"))
{
    $result['status'] = 200;
}
else
{
    $result['error'] = 404;
}

?>