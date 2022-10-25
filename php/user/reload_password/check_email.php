<?php
include('../../db.php');
$email = $_POST['email'];

$result = array();

$check = mysqli_query($db,"SELECT `id` FROM `user` WHERE email = '$email'");

$chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";

$max=10;

$size=StrLen($chars)-1;

$code=null;

while($max--)
	$code.=$chars[rand(0,$size)];

if(mysqli_num_rows($check) > 0)
{
    $check_ = mysqli_fetch_array(check);
    mysqli_query($db,"INSERT INTO `reload_password` (`id`, `id_user`, `code`) VALUES (NULL, '{$check_['id']}', '$code');");

    $message = '
		<html>
		    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		        <title>Восстановление пароля</title>
		    </head>
		    <body>';
    $message.= '<p>Восстановление пароля!</p>';
    $message.= '<p>Чтобы восстановить пароль, пройдите по ссылке: https://stroydayssite.000webhostapp.com/reload_password_done.php?id="'.$code.'</p>';
    $message.= '<p>Дата:'.date('Y-m-d H:i:s').'</p>';
    $message.=  '</body>
    </html>';
    $headers  = "Content-type: text/html; charset=utf-8  \r\n"; 
    $headers .= "From: <StroyDay.ru> \r\n";
    mail($email, "Восстановление пароля", $message, $headers);
}
else
{
    $result['status'] = 404;
}
?>
