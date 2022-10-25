<?php
include('php/db.php');
$id = $_GET['id'];
$pas = mysqli_query($db,"SELECT * FROM `reload_password` WHERE code = '$id'");
if(mysqli_num_rows($pas) == 0)
{
    header('location: index.php');
}
?>
<html>
    <head>
        <title>Сброс пароля</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <!-- Optional CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login-style.css">
        <link rel="stylesheet" href="css/elements.css">
        <link rel="stylesheet" href="css/icons.css">
        <link rel="stylesheet" href="css/colors.css">

        <link href="js/script/snackbar/snackbar.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!--<p><input id="password" placeholder = 'Введите новый пароль'></p>
        <p><input id="password1" placeholder = 'Введите новый пароль ещё раз'></p>
        <p><button id = 'done'>Сбросить</button></p>-->

        <section class="login-bg">
            <div class="login-bg-overlay"></div>
            <div class="login-wrapper">
                <div class="card-surface login-card">
                    <div class="login-inner">
                        <h3 class="font-weight-bold mb-md-6 mb-5">Сброс пароля</h3>
                        <div class="input-style d-flex align-items-center mb-md-5 mb-4">
                            <input id='password' type="password" placeholder="Новый пароль" class="flex-grow-1">
                            <span></span>
                        </div>
                        <div class="input-style d-flex align-items-center mb-md-5 mb-4">
                            <input id='password1' type="password" placeholder="Повтор пароля" class="flex-grow-1">
                            <span></span>
                        </div>
                        <span class="m-xl-auto m-lg-auto m-3 mx-auto">
                            <button id = "done" type="button" class="btn btn-primary btn-text-sm p-3 px-5 mb-3">Сбросить</button>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <script src="jquery/jquery-3.4.1.min.js"></script>
        <script src = 'js/script/snackbar/snackbar.min.js'></script>
        <script>
        if($('#password').val() != '' && $('#password1').val() != "")
        {
            $.ajax({
                type:"POST",
                url:"php/user/reload_password/reload_password.php",
                dataType:"json",
                data:{
                    id:<?php echo $pas['id']?>,
                    password: $('#password').val()
                },
                success:function(data){
                    if(data['status'] == 200)
                    {

                    }
                },
                error:function(){
                    Snackbar.show({
                        text: 'Ошибка',
                        pos: 'top-center'
                    });
                }
            })
        }
        else
        {
            Snackbar.show({
                text: 'Нужно заполнить поля',
                pos: 'top-center'
            });
        }
        </script>
    </body>
</html>