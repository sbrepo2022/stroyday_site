<?php

session_start();

include('../db.php');

$log = $_POST['login'];

$pas = $_POST['password'];



$result = array();





$r = mysqli_query($db,"SELECT `id`, `login`, `password` FROM `user` WHERE login = '$log'");

if(mysqli_num_rows($r) > 0)

{

    $r_ = mysqli_fetch_array($r);

    if($r_['password'] == $pas )

    {

        $result['status'] = 200;

        $_SESSION['id_user'] = $r_['id'];

    }

    else

        $result['status'] = 205;

}

else

{

    $result['status'] = 404;

}

echo json_encode($result);

?>