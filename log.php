<?php
    session_start();
    if(isset($_SESSION['id_user']))
    {
        header('location: index.php');
    }
?>
<html>
    <head>
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

        <title>Вход в систему</title>
    </head>
    <body>
        <section class="login-bg">
            <div class="login-bg-overlay"></div>
            <div class="login-wrapper">
                <div class="card-surface login-card">
                    <div class="login-inner">
                        <h3 class="font-weight-bold mb-md-6 mb-5">Вход в личный кабинет</h3>
                        <div class="input-style d-flex align-items-center mb-md-5 mb-4">
                            <div class="icon-middle user-icon flex-shrink-0 mx-3"></div>
                            <input id='login' type="text" placeholder="Логин" class="flex-grow-1">
                            <span></span>
                        </div>
                        <div class="input-style d-flex align-items-center mb-md-6 mb-5">
                            <div class="icon-middle key-icon flex-shrink-0 mx-3"></div>
                            <input id='password' type="password" placeholder="Пароль" class="flex-grow-1">
                            <span></span>
                        </div>
                        <span class="m-xl-auto m-lg-auto m-3 mx-auto">
                            <button id = "sub" type="button" class="btn btn-primary btn-text-sm p-3 px-5 mb-3">Войти</button>
                            <div>
                                <a href="reload_password.php" class="link">Регистрация</a>
                                |
                                <a href="reload_password.php" class="link">Забыли пароль?</a>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <script src="jquery/jquery-3.4.1.min.js"></script>
        <script src = 'js/script/snackbar/snackbar.min.js'></script>
        <script>
            $(document).ready(function(){

                function login()
                {
                    if($('#login').val() != "" && $('#password').val() != "")
                    {
                        $.ajax({
                            type:'POST',
                            url:'php/user/login.php',
                            dataType:'json',
                            data:{
                                login:$('#login').val(),
                                password:$('#password').val(),
                            },
                            success:function(data){
                                if(data['status'] == 200)
                                {
                                    location.href = 'index.php';
                                }
                                else if(data['status'] == 205)
                                {
                                    Snackbar.show({
                                        text: 'Пароль не тот',
                                        pos: 'top-center'
                                    });
                                }
                                else if (data['status'] == 404)
                                {
                                    Snackbar.show({
                                        text: 'Такого логина в базе нет',
                                        pos: 'top-center'
                                    });
                                }
                            },
                            error:function()
                            {
                                alert('Ошибка сервера');
                            }
                        });
                    }
                    else
                    {
                        Snackbar.show({
                            text: 'Надо заполнить поля',
                            pos: 'top-center'
                        });
                    }
                }

                $('body').keyup(function(){
                    if(event.keyCode==13)
                    {
                        login();
                    }
                })

                $("#sub").bind('click',function(){
                    login();
                });
            });
        </script>
    </body>
</html>
