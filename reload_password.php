<html>
    <head>
        <title>Восстановление пароля</title>

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
        <!--<p>Восстановление пароля</p>
        <p>Введите вашу почту</p>
        <p><input id= 'email' placeholder = 'example@domain.ccs'></p>
        <p><button id ='send'>Восстановить</button></p>-->

        <section class="login-bg">
            <div class="login-bg-overlay"></div>
            <div class="login-wrapper">
                <div class="card-surface login-card">
                    <div class="login-inner">
                        <h3 class="font-weight-bold mb-md-6 mb-5">Восстановление пароля</h3>
                        <div class="input-style d-flex align-items-center mb-md-5 mb-4">
                            <div class="icon-middle mail-icon flex-shrink-0 mx-3"></div>
                            <input id='email' type="text" placeholder="Адрес почты" class="flex-grow-1">
                            <span></span>
                        </div>
                        <span class="m-xl-auto m-lg-auto m-3 mx-auto">
                            <button id = "send" type="button" class="btn btn-primary btn-text-sm p-3 px-5 mb-3">Восстановить</button>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <script src="jquery/jquery-3.4.1.min.js"></script>
        <script src = 'js/script/snackbar/snackbar.min.js'></script>
        <script>
            $('#send').bind('click',function(){
                if($('#email').val() != '' && $('#email').val() != " ")
                {
                    $.ajax({
                        type:"POST",
                        url:"php/user/reload_password/check_password.php",
                        dataType:"json",
                        data:{
                            email:$('#email').val()
                        },
                        success:function(data)
                        {
                            if (data['status'] == 200)
                            {
                                Snackbar.show({
                                    text: 'На почту было отправлено сообщение (Посмотрите папку спам)',
                                    pos: 'top-center'
                                });
                            }
                            else if (data['status'] == 404)
                            {
                                Snackbar.show({
                                    text: 'Такой почты нет в системе',
                                    pos: 'top-center'
                                });
                            }
                        },
                        error:function()
                        {
                            Snackbar.show({
                                    text: 'Ошибка',
                                    pos: 'top-center'
                                });
                        }
                    })
                }
            })
        </script>
    </body>
</html>