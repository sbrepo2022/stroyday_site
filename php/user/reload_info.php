<?php
session_start();
$result = array();
include('../db.php');
$pole = $_POST['pole'];
$val = $_POST['val'];
if($pole == "adres-i")
{
    if(mysqli_query($db,"UPDATE `user` SET adres = '$val' WHERE id = '{$_SESSION['id_user']}'"))
        $result['status'] = 200;
}
else if ($pole == "phone-i")
{
    if(mysqli_query($db,"UPDATE `user` SET phone = '$val' WHERE id = '{$_SESSION['id_user']}'"))
        $result['status'] = 200;
}
else if ($pole == "email-i")
{
    if(mysqli_query($db,"UPDATE `user` SET email = '$val' WHERE id = '{$_SESSION['id_user']}'"))
        $result['status'] = 200;
}
else if ($pole == "about")
{
    if(mysqli_query($db,"UPDATE `user` SET about = '$val' WHERE id = '{$_SESSION['id_user']}'"))
        $result['status'] = 200;
}
if(!isset($result['status']))
    $result['status'] = 404;
echo json_encode($result);
?>