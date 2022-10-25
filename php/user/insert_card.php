<?php
session_start();
include('../db.php');
$card = $_POST['number'];
$result = array();
if(mysqli_query($db,"UPDATE `user` SET `credit_card` = '$card' WHERE id ='{$_SESSION['id_user']}'"))
    $result['status'] = 200;
else
    $result['status'] = 404;
echo json_encode($result);
?>