<?php
session_start();
include('../db.php');
$result = array();
$ser = $_POST['ser'];
$god = $_POST['god'];
if(mysqli_query($db,"UPDATE `user` SET passport_number = '$ser' , passport_data = '$god' WHERE id = '{$_SESSION['id_user']}'"))
    $result['status'] = 200;
else
    $result['status'] = 404;
echo json_encode($result);
?>