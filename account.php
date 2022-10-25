<?php

session_start();
/*
if(!isset($_SESSION['id_user']))

{

    header('location: log.php');

}

include('php/db.php');

$user = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `user` WHERE id = '{$_SESSION['id_user']}'"));


*/
?>





<!DOCTYPE html>

<html lang="en">

    <head>

        <!-- Required meta tags -->

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">



        <!-- Optional CSS -->

        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="css/account-style.css">

        <link rel="stylesheet" href="css/elements.css">

        <link rel="stylesheet" href="css/icons.css">

        <link rel="stylesheet" href="css/colors.css">

        <link rel="stylesheet" href="css/snippets.css">
        <link href="js/script/snackbar/snackbar.min.css" rel="stylesheet" type="text/css">


        <title>Личный кабинет <?php echo $user['login']?></title>

    </head>

    <body>

        <!-- Document -->

        <div class="full-screen-block d-flex flex-column side-mini" data-toggle="sideswitch">

            <header>

                <nav class="navbar navbar-expand-lg navbar-account border-bottom pl-0">

                    <div class= "side-brand d-flex">

                        <button id="sideSwitcher" class="btn btn-link side-switcher icon-big left-arrow-icon my-auto mx-3 p-0"></button>

                        <a class="navbar-brand p-0 m-0" href="index.php"><img src="resources/logo/logo.png" class="logo"></a>

                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon menu-icon"></span>

                    </button>



                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="nav navbar-nav" id="userTabs" role="tablist">

                            <li class="nav-item user-tab">

                                <a class="nav-link d-flex active" id="userTab1" data-toggle="tab" href="#userContent1" role="tab" aria-controls="userContent1" aria-selected="true">

                                    <span class="icon-small three-dots-icon my-auto mr-2"></span>

                                    <span class="badge badge-pill-ex badge-primary my-auto mr-3">3</span>

                                    <?php echo $user['full_name']?>

                                </a>

                            </li>

                            <!--<li class="nav-item user-tab">

                                <a class="nav-link d-flex" id="userTab2" data-toggle="tab" href="#userContent2" role="tab" aria-controls="userContent2" aria-selected="false">

                                    <span class="icon-small three-dots-icon my-auto mr-2"></span>

                                    <span class="badge badge-pill-ex badge-primary my-auto mr-3">3</span>

                                    ИП Иванова

                                </a>

                            </li>

                            <li class="nav-item user-tab">

                                <a class="nav-link d-flex" id="userTab3" data-toggle="tab" href="#userContent3" role="tab" aria-controls="userContent3" aria-selected="false">

                                    <span class="icon-small three-dots-icon my-auto mr-2"></span>

                                    <span class="badge badge-pill-ex badge-primary my-auto mr-3">3</span>

                                    ООО "Иванова"

                                </a>

                            </li>-->

                        </ul>

                        <ul class="nav navbar-nav mr-auto" id="userTabs" role="tablist">

                            <li class="nav-item">

                                <a class="nav-link d-flex" href="#"><span class="icon plus-icon mr-2"></span>Добавить пользователя</a>

                            </li>

                        </ul>

                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <span class="dropdown">
                                    <a class="nav-link dropdown-toggle clear-dropdown d-flex" href="" id="accountDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon menu-icon mr-2"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-account" aria-labelledby="accountDropdownMenu">
                                        <a class="dropdown-item" href="index.php">На главную</a>
                                        <a class="dropdown-item" href="#">Настройки</a>
                                        <a class="dropdown-item" href="#">Уведомления<span class="badge-pill badge-danger btn-text-xsm ml-2">10</span></a>
                                        <a class="dropdown-item" href="php/logout.php">Выход</a>
                                    </div>
                                </span>
                            </li>

                            <li class="nav-item">

                                <a class="nav-link d-flex" href="php/logout.php"><span class="icon login-icon mr-2"></span>Выход</a>

                            </li>

                        </ul>

                    </div>

                </nav>

            </header>

            <div class="flex-grow-1 position-relative">

                <main class="side-wrapper">

                    <div class="tab-content p-lg-4 p-2 pt-lg-5 pt-4">



                        <!-- user 1 -->

                        <div id="userContent1" class="tab-pane fade show active" aria-labeledby="userTab1">

                            <section class="container-fluid">

                                <div class="row">



                                    <section id="accountTabs1" class="card-tab-surface col-12 mb-5"> <!-- id группы вкладок заканчивается цифрой, так как может быть несколько пользователей -->

                                        <ul class="nav card-tab-list" role="tablist">

                                            <li class="card-tab">

                                                <a class="card-tab-link active" id="accountDataTab1" data-toggle="tab" href="#accountDataContent1" role="tab" aria-controls="accountDataContent1" aria-selected="true">

                                                    Данные аккаунта

                                                </a>

                                            </li>

                                            <li class="card-tab">

                                                <a class="card-tab-link" id="accountPassportTab1" data-toggle="tab" href="#accountPassportContent1" role="tab" aria-controls="accountPassportContent1" aria-selected="false">

                                                    Паспортные данные

                                                </a>

                                            </li>

                                            <li class="card-tab">

                                                <a class="card-tab-link" id="accountPasswordTab1" data-toggle="tab" href="#accountPasswordContent1" role="tab" aria-controls="accountPasswordContent1" aria-selected="false">

                                                    Смена пароля

                                                </a>

                                            </li>

                                            <li class="card-tab">

                                                <a class="card-tab-link" id="accountAuthTab1" data-toggle="tab" href="#accountAuthContent1" role="tab" aria-controls="accountAuthContent1" aria-selected="false">

                                                    Авторизация

                                                </a>

                                            </li>

                                            <li class="card-tab">

                                                <a class="card-tab-link" id="accountBankTab1" data-toggle="tab" href="#accountBankContent1" role="tab" aria-controls="accountBankContent1" aria-selected="false">

                                                    Банковские карты

                                                </a>

                                            </li>

                                        </ul>

                                        <div class="tab-content card-tab-content">



                                            <!-- tab 1 -->

                                            <div id="accountDataContent1" class="tab-pane fade show active" aria-labeledby="accountDataTab1">

                                                <div class="container-fluid">

                                                    <div class="row">

                                                        <div class="col-lg-5 col-12">

                                                            <table class="table-settings">

                                                                <tr>

                                                                    <td>

                                                                        <span class="data-change-descr color-gray mr-4 text-nowrap">

                                                                            Адрес

                                                                            <span fl = '0' t = "adres-i" style="cursor:pointer" class="reload icon-middle edit-icon mr-1 vertical-middle"></span>

                                                                        </span>

                                                                    </td>

                                                                    <td>

                                                                        <span class="data-descr data-change-descr adres-i color-text-secondary d-inline-block"><?php echo $user['adres']?></span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <span class="data-change-descr color-gray mr-4 text-nowrap">

                                                                            Телефон

                                                                            <span fl = '0' t = "phone-i" style="cursor:pointer" class="reload icon-middle edit-icon mr-1 vertical-middle"></span>

                                                                        </span>

                                                                    </td>

                                                                    <td>

                                                                        <span class="data-descr data-change-descr phone-i color-text-secondary d-inline-block"><?php echo $user['phone']?></span>

                                                                        <!--<a class="d-inline mini-link ml-3" href="#">Подтвердить</a>-->

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <span class="data-change-descr color-gray mr-4 text-nowrap">

                                                                            Почта

                                                                            <span fl = '0' t = "email-i"  style="cursor:pointer" class="reload icon-middle edit-icon mr-1 vertical-middle"></span>

                                                                        </span>

                                                                    </td>

                                                                    <td>

                                                                        <span class="data-descr data-change-descr email-i color-text-secondary d-inline-block"><?php echo $user['email']?></span>

                                                                        <span class="icon-middle accept-icon mr-1 vertical-middle"></span>

                                                                        <a class="d-inline mini-link ml-3" href="#">Настроить уведомления</a>

                                                                    </td>

                                                                </tr>

                                                            </table>

                                                        </div>

                                                        <div class="col-lg-7 col-12">

                                                            <table class="table-settings">

                                                                <tr>

                                                                    <td>

                                                                        <span class="data-change-descr color-gray mr-4 text-nowrap">

                                                                            Обо мне

                                                                            <span style ='cursor:pointer' class="ab-i icon-middle edit-icon mr-1 vertical-middle"></span>

                                                                        </span>

                                                                    </td>

                                                                    <td>

                                                                        <span class="ab-t color-text-secondary"><?php echo $user['about']?></span>

                                                                    </td>

                                                                </tr>

                                                            </table>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                            <!-- tab 2 -->

                                            <div id="accountPassportContent1" class="tab-pane fade" aria-labeledby="accountPassportTab1">
                                                <?php 
                                                    if($user['passport_number'] == "")
                                                    {
                                                ?>
                                                    <lable style ="margin-bottom:10px" from = 'seria'>Номер паспорта</lable><br>
                                                    <input style ="margin-bottom:10px" id ='seria' type='number' placeholder="00-00-000000"><br>
                                                    <lable style ="margin-bottom:10px" from = 'god'>Дата выдачи</lable><br>
                                                    <input style ="margin-bottom:10px" id ='god' type="date"><br>
                                                    <button id="save_passport" style ="margin-bottom:10px">Сохранить</button>
                                                <?php
                                                    }
                                                    else
                                                    {
                                                ?>
                                                    <p>Номер паспорта: <?php echo $user['passport_number']?></p>
                                                    <p>Дата выдачи: <?php echo $user['passport_data']?></p>
                                                <?php } ?>
                                            </div>



                                            <!-- tab 3 -->
                                            <div id="accountPasswordContent1" class="tab-pane fade text-center" aria-labeledby="accountPasswordTab1">
                                                <div class="d-inline-block pass-change-inputs">
                                                    <div class="input-style mb-5">
                                                        <input id='last_p' placeholder="Введите старый пароль"><span></span>
                                                    </div>
                                                    <div class="input-style mb-5">
                                                        <input id='new_p' placeholder='Введите новый пароль'><span></span>
                                                    </div>
                                                    <div class="input-style mb-5">
                                                        <input id='new_ps' placeholder='Введите новый пароль ещё раз'><span></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <button id = "save-pass" type="button" class="btn btn-primary btn-text-sm p-3">Сохранить</button>
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- tab 4 -->

                                            <div id="accountAuthContent1" class="tab-pane fade" aria-labeledby="accountAuthTab1">

                                                <div class="container-fluid">

                                                    <div class="row">

                                                        <div class="col-12">

                                                            <div class="color-gray mb-4">

                                                                Социальные сети, через которые вы сможете авторизоваться

                                                            </div>

                                                            <div>

                                                                <span class="mr-4 mb-2 d-inline-block">

                                                                    <span class="icon-xbig instagram-colored-icon mr-1 vertical-middle"></span>

                                                                    <label class="switch vertical-middle">

                                                                        <input type="checkbox" class="primary" name="instagram">

                                                                        <span class="slider round"></span>

                                                                    </label>

                                                                </span>

                                                                <span class="mr-4 mb-2 d-inline-block">

                                                                    <span class="icon-xbig google-colored-icon mr-1 vertical-middle"></span>

                                                                    <label class="switch vertical-middle">

                                                                        <input type="checkbox" class="primary" name="google">

                                                                        <span class="slider round"></span>

                                                                    </label>

                                                                </span>

                                                                <span class="mr-4 mb-2 d-inline-block">

                                                                    <span class="icon-xbig vk-colored-icon mr-1 vertical-middle"></span>

                                                                    <label class="switch vertical-middle">

                                                                        <input type="checkbox" class="primary" name="vk">

                                                                        <span class="slider round"></span>

                                                                    </label>

                                                                </span>

                                                                <span class="mr-4 mb-2 d-inline-block">

                                                                    <span class="icon-xbig gosuslugi-colored-icon mr-1 vertical-middle"></span>

                                                                    <label class="switch vertical-middle">

                                                                        <input type="checkbox" class="primary" name="gosuslugi">

                                                                        <span class="slider round"></span>

                                                                    </label>

                                                                </span>

                                                                <span class="mr-4 mb-2 d-inline-block">

                                                                    <span class="icon-xbig twitter-colored-icon mr-1 vertical-middle"></span>

                                                                    <label class="switch vertical-middle">

                                                                        <input type="checkbox" class="primary" name="twitter">

                                                                        <span class="slider round"></span>

                                                                    </label>

                                                                </span>

                                                                <span class="mr-4 mb-2 d-inline-block">

                                                                    <span class="icon-xbig odnoklassniki-colored-icon mr-1 vertical-middle"></span>

                                                                    <label class="switch vertical-middle">

                                                                        <input type="checkbox" class="primary" name="odnoklassniki">

                                                                        <span class="slider round"></span>

                                                                    </label>

                                                                </span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <!-- tab 5 -->

                                            <div id="accountBankContent1" class="tab-pane fade" aria-labeledby="accountBankTab1">

                                                <!--<?php
                                                if($user['credit_card'] != '0')
                                                {
                                                ?>
                                                    <p>Номер карты: <?php echo $user['credit_card']?></p>
                                                <?php
                                                }
                                                else
                                                {
                                                ?>
                                                    <label for='card_credit'>Номер карты</label><br>
                                                    <input id = 'card_credit' type="number" placeholder="0000 0000 0000 0000"><br>
                                                    <button id = 'card_save'>Сохранить</button>
                                                <?php } ?>-->
                                                <div class="container-credit mb-4">
                                                    <div class="wrapper-4-3">
                                                        <div class="content-aspect">
                                                            <div class="credit-pos credit-pos-2">
                                                                <div class="wrapper-4-3">
                                                                    <div class="content-aspect credit-surface">
                                                                        <div class="credit-card-line"></div>
                                                                        <div class="credit-input credit-cvv">
                                                                            <input type="text" placeholder="cvv">
                                                                        </div>
                                                                        <div class="credit-input credit-dot-1"></div>
                                                                        <div class="credit-input credit-dot-2"></div>
                                                                        <div class="credit-input credit-dot-3"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="credit-pos credit-pos-1">
                                                                <div class="wrapper-4-3">
                                                                    <div class="content-aspect credit-surface">
                                                                        <div class="credit-input credit-line-2"></div>
                                                                        <div class="credit-input credit-number">
                                                                            <input type="text" placeholder="номер карты">
                                                                        </div>
                                                                        <div class="credit-input credit-date">
                                                                            <input type="text" placeholder="дата">
                                                                        </div>
                                                                        <div class="credit-input credit-name">
                                                                            <input type="text" placeholder="имя" pattern="[A-Z]+\s[A-Z]+">
                                                                        </div>
                                                                        <div class="credit-image" style=""></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                        <div class="col-12 d-flex justify-content-lg-end justify-content-center">

                                                            <button type="button" class="btn btn-light btn-text-sm p-3 mr-4">Добавить карту</button>

                                                            <button type="button" class="btn btn-primary btn-text-sm p-3">Сохранить</button>

                                                        </div>

                                                    </div>

                                            </div>

                                        </div>

                                    </section>



                                    <section id="portfolioTabs1" class="card-tab-surface col-lg-6 col-12 mb-5"> <!-- id группы вкладок заканчивается цифрой, так как может быть несколько пользователей -->

                                        <ul class="nav card-tab-list" role="tablist">

                                            <li class="card-tab">

                                                <a class="card-tab-link active" id="myServicesTab1" data-toggle="tab" href="#myServicesContent1" role="tab" aria-controls="myServicesContent1" aria-selected="true">

                                                    Мои услуги

                                                </a>

                                            </li>

                                            <li class="card-tab">

                                                <a class="card-tab-link" id="portfolioTab1" data-toggle="tab" href="#portfolioContent1" role="tab" aria-controls="portfolioContent1" aria-selected="false">

                                                    Портфолио работ

                                                </a>

                                            </li>

                                        </ul>

                                        <div class="tab-content card-tab-content">

                                            <!-- tab1 -->

                                            <div id="myServicesContent1" class="tab-pane fade show active" aria-labeledby="myServicesTab1">

                                                <div class="container-fluid">

                                                    <div class="row mb-5 mt-2">

                                                        <div class="col-lg-6 col-12 color-text-secondary">

                                                            <div class="mr-4 mb-3">

                                                                Комплексный ремонт квартир

                                                                <span class="icon-middle edit-icon mr-1 vertical-middle"></span>

                                                            </div>

                                                            <div class="mr-4 mb-3">

                                                                Строительство домов

                                                                <span class="icon-middle edit-icon mr-1 vertical-middle"></span>

                                                            </div>

                                                            <div class="mr-4 mb-3">

                                                                Штукатурные работы

                                                                <span class="icon-middle edit-icon mr-1 vertical-middle"></span>

                                                            </div>

                                                            <div class="mr-4 mb-3">

                                                                Укладка напольных покрытий

                                                                <span class="icon-middle edit-icon mr-1 vertical-middle"></span>

                                                            </div>

                                                            <div class="mr-4 mb-3">

                                                                Ламинат и плитка

                                                                <span class="icon-middle edit-icon mr-1 vertical-middle"></span>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 col-12">

                                                            <div class="mb-2">

                                                                Выезд к клиенту

                                                            </div>

                                                            <div class="color-gray text-truncate mb-2">

                                                                <span class="light-blue-dot mr-1 vertical-middle"></span>

                                                                Технологический институт

                                                            </div>

                                                            <div class="color-gray text-truncate mb-2">

                                                                <span class="orange-dot mr-1 vertical-middle"></span>

                                                                Лесная

                                                            </div>

                                                            <div class="color-gray text-truncate mb-2">

                                                                <span class="orange-dot mr-1 vertical-middle"></span>

                                                                Выборская

                                                            </div>

                                                            <div class="color-gray text-truncate mb-2">

                                                                <span class="green-dot mr-1 vertical-middle"></span>

                                                                Маяковская

                                                            </div>

                                                            <a class="underlined-link mb-2" href="#">

                                                                Открыть карту

                                                            </a>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-12 d-flex justify-content-lg-end justify-content-center">

                                                            <button type="button" class="btn btn-light btn-text-sm p-3 mr-4">Все услуги</button>

                                                            <button type="button" class="btn btn-primary btn-text-sm p-3">Создать услугу</button>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                            <!-- tab2 -->

                                            <div id="portfolioContent1" class="tab-pane fade" aria-labeledby="portfolioTab1">

                                                <div class="container-fluid">

                                                    <div class="row mb-5 mt-2 flex-xl-wrap flex-lg-wrap flex-md-wrap flex-nowrap overflow-auto">

                                                        <!-- card 1 -->

                                                        <div class="col-lg-4 col-10 mb-2">

                                                            <div class="wrapper-4-3 mb-2">

                                                                <div class="content-aspect">

                                                                    <div class="portfolio-img-block">

                                                                        <div class="item-img" style="background-image: url('resources/images/portfolio1.png');"></div>

                                                                        <div class="opacity-overlay-gray"></div>

                                                                        <div class="portfolio-card-tools">

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small edit-icon"></span>

                                                                            </button>

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small delete-icon"></span>

                                                                            </button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="line-clamp-2">

                                                                Ремонт квартиры в москве 3000 м2

                                                            </div>

                                                        </div>



                                                        <!-- card 2 -->

                                                        <div class="col-lg-4 col-10 mb-2">

                                                            <div class="wrapper-4-3 mb-2">

                                                                <div class="content-aspect">

                                                                    <div class="portfolio-img-block">

                                                                        <div class="item-img" style="background-image: url('resources/images/portfolio2.png');"></div>

                                                                        <div class="opacity-overlay-gray"></div>

                                                                        <div class="portfolio-card-tools">

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small edit-icon"></span>

                                                                            </button>

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small delete-icon"></span>

                                                                            </button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="line-clamp-2">

                                                                Ремонт квартиры в москве 3000 м2

                                                            </div>

                                                        </div>



                                                        <!-- card 3 -->

                                                        <div class="col-lg-4 col-10 mb-2">

                                                            <div class="wrapper-4-3 mb-2">

                                                                <div class="content-aspect">

                                                                    <div class="portfolio-img-block">

                                                                        <div class="item-img" style="background-image: url('resources/images/portfolio1.png');"></div>

                                                                        <div class="opacity-overlay-gray"></div>

                                                                        <div class="portfolio-card-tools">

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small edit-icon"></span>

                                                                            </button>

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small delete-icon"></span>

                                                                            </button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="line-clamp-2">

                                                                Ремонт квартиры в москве 3000 м2

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-12 d-flex justify-content-lg-end justify-content-center">

                                                            <button type="button" class="btn btn-light btn-text-sm p-3 mr-4">Все портфолио</button>

                                                            <button type="button" class="btn btn-primary btn-text-sm p-3">Добавить работу</button>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </section>



                                    <section id="goodsTabs1" class="card-tab-surface col-lg-6 col-12 mb-5"> <!-- id группы вкладок заканчивается цифрой, так как может быть несколько пользователей -->

                                        <ul class="nav card-tab-list" role="tablist">

                                            <li class="card-tab">

                                                <a class="card-tab-link active" id="activeGoodsTab1" data-toggle="tab" href="#activeGoodsContent1" role="tab" aria-controls="activeGoodsContent1" aria-selected="true">

                                                    Активные товары (3)

                                                </a>

                                            </li>

                                            <li class="card-tab">

                                                <a class="card-tab-link" id="finishedGoodsTab1" data-toggle="tab" href="#finishedGoodsContent1" role="tab" aria-controls="finishedGoodsContent1" aria-selected="false">

                                                    Завершенные товары (7)

                                                </a>

                                            </li>

                                        </ul>

                                        <div class="tab-content card-tab-content">

                                            <!-- tab1 -->

                                            <div id="activeGoodsContent1" class="tab-pane fade show active" aria-labeledby="activeGoodsTab1">

                                                <div class="container-fluid">

                                                    <div class="row mb-5 mt-2 flex-xl-wrap flex-lg-wrap flex-md-wrap flex-nowrap overflow-auto">

                                                        <!-- card 1 -->

                                                        <div class="col-md-4 col-10 mb-2">

                                                            <div class="wrapper-16-9 mb-2">

                                                                <div class="content-aspect">

                                                                    <div class="portfolio-img-block">

                                                                        <div class="item-img" style="background-image: url('resources/images/goods1.png');"></div>

                                                                        <div class="opacity-overlay-gray"></div>

                                                                        <div class="portfolio-card-tools">

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small edit-icon"></span>

                                                                            </button>

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small delete-icon"></span>

                                                                            </button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="line-clamp-2">

                                                                Строительные инструменты

                                                            </div>

                                                            <div class="weight-500">

                                                                2300 ₽

                                                            </div>

                                                            <div class="color-gray btn-text-sm">

                                                                13.01.2020

                                                            </div>

                                                        </div>



                                                        <!-- card 2 -->

                                                        <div class="col-md-4 col-10 mb-2">

                                                            <div class="wrapper-16-9 mb-2">

                                                                <div class="content-aspect">

                                                                    <div class="portfolio-img-block">

                                                                        <div class="item-img" style="background-image: url('resources/images/goods2.png');"></div>

                                                                        <div class="opacity-overlay-gray"></div>

                                                                        <div class="portfolio-card-tools">

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small edit-icon"></span>

                                                                            </button>

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small delete-icon"></span>

                                                                            </button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="line-clamp-2">

                                                                Строительные инструменты

                                                            </div>

                                                            <div class="weight-500">

                                                                2300 ₽

                                                            </div>

                                                            <div class="color-gray btn-text-sm">

                                                                13.01.2020

                                                            </div>

                                                        </div>



                                                        <!-- card 3 -->

                                                        <div class="col-md-4 col-10 mb-2">

                                                            <div class="wrapper-16-9 mb-2">

                                                                <div class="content-aspect">

                                                                    <div class="portfolio-img-block">

                                                                        <div class="item-img" style="background-image: url('resources/images/goods3.png');"></div>

                                                                        <div class="opacity-overlay-gray"></div>

                                                                        <div class="portfolio-card-tools">

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small edit-icon"></span>

                                                                            </button>

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small delete-icon"></span>

                                                                            </button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="line-clamp-2">

                                                                Строительные инструменты

                                                            </div>

                                                            <div class="weight-500">

                                                                2300 ₽

                                                            </div>

                                                            <div class="color-gray btn-text-sm">

                                                                13.01.2020

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-12 d-flex justify-content-lg-end justify-content-center">

                                                            <button type="button" class="btn btn-light btn-text-sm p-3 mr-4">Все товары</button>

                                                            <button type="button" class="btn btn-primary btn-text-sm p-3">Добавить товар</button>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                            <!-- tab2 -->

                                            <div id="finishedGoodsContent1" class="tab-pane fade" aria-labeledby="finishedGoodsTab1">

                                                <div class="container-fluid">

                                                    <div class="row mb-5 mt-2 flex-xl-wrap flex-lg-wrap flex-md-wrap flex-nowrap overflow-auto">

                                                        <!-- card 1 -->

                                                        <div class="col-md-4 col-10 mb-2">

                                                            <div class="wrapper-16-9 mb-2">

                                                                <div class="content-aspect">

                                                                    <div class="portfolio-img-block">

                                                                        <div class="item-img" style="background-image: url('resources/images/goods1.png');"></div>

                                                                        <div class="opacity-overlay-gray"></div>

                                                                        <div class="portfolio-card-tools">

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small edit-icon"></span>

                                                                            </button>

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small delete-icon"></span>

                                                                            </button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="line-clamp-2">

                                                                Строительные инструменты

                                                            </div>

                                                            <div class="weight-500">

                                                                2300 ₽

                                                            </div>

                                                            <div class="color-gray btn-text-sm">

                                                                13.01.2020

                                                            </div>

                                                        </div>



                                                        <!-- card 2 -->

                                                        <div class="col-md-4 col-10 mb-2">

                                                            <div class="wrapper-16-9 mb-2">

                                                                <div class="content-aspect">

                                                                    <div class="portfolio-img-block">

                                                                        <div class="item-img" style="background-image: url('resources/images/goods2.png');"></div>

                                                                        <div class="opacity-overlay-gray"></div>

                                                                        <div class="portfolio-card-tools">

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small edit-icon"></span>

                                                                            </button>

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small delete-icon"></span>

                                                                            </button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="line-clamp-2">

                                                                Строительные инструменты

                                                            </div>

                                                            <div class="weight-500">

                                                                2300 ₽

                                                            </div>

                                                            <div class="color-gray btn-text-sm">

                                                                13.01.2020

                                                            </div>

                                                        </div>



                                                        <!-- card 3 -->

                                                        <div class="col-md-4 col-10 mb-2">

                                                            <div class="wrapper-16-9 mb-2">

                                                                <div class="content-aspect">

                                                                    <div class="portfolio-img-block">

                                                                        <div class="item-img" style="background-image: url('resources/images/goods3.png');"></div>

                                                                        <div class="opacity-overlay-gray"></div>

                                                                        <div class="portfolio-card-tools">

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small edit-icon"></span>

                                                                            </button>

                                                                            <button class="white-rounded-tool">

                                                                                <span class="icon-small delete-icon"></span>

                                                                            </button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="line-clamp-2">

                                                                Строительные инструменты

                                                            </div>

                                                            <div class="weight-500">

                                                                2300 ₽

                                                            </div>

                                                            <div class="color-gray btn-text-sm">

                                                                13.01.2020

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-12 d-flex justify-content-lg-end justify-content-center">

                                                            <button type="button" class="btn btn-light btn-text-sm p-3 mr-4">Все товары</button>

                                                            <button type="button" class="btn btn-primary btn-text-sm p-3">Добавить товар</button>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </section>



                                    <section id="workTabs1" class="card-tab-surface col-12 mb-5"> <!-- id группы вкладок заканчивается цифрой, так как может быть несколько пользователей -->

                                        <ul class="nav card-tab-list" role="tablist">

                                            <li class="card-tab">

                                                <a class="card-tab-link active" id="myRequestTab1" data-toggle="tab" href="#myRequestContent1" role="tab" aria-controls="myRequestContent1" aria-selected="true">
                                                    <?php $q = mysqli_query($db,"SELECT * FROM `jobs` WHERE id_user = '{$_SESSION['id_user']}'");?>
                                                    Мои заявки (<?php if(mysqli_num_rows($q) > 0) echo mysqli_num_rows($q);?>)

                                                </a>

                                            </li>

                                            <li class="card-tab">

                                                <a class="card-tab-link" id="myOrdersTab1" data-toggle="tab" href="#myOrdersContent1" role="tab" aria-controls="myOrdersContent1" aria-selected="false">

                                                    Мои заказы (7)

                                                </a>

                                            </li>

                                            <li class="card-tab">

                                                <a class="card-tab-link" id="myAdsTab1" data-toggle="tab" href="#myAdsContent1" role="tab" aria-controls="myAdsContent1" aria-selected="false">

                                                    Мои объявления (4)

                                                </a>

                                            </li>

                                        </ul>

                                        <div class="tab-content card-tab-content">

                                            <!-- tab1 -->

                                            <div id="myRequestContent1" class="tab-pane fade show active" aria-labeledby="myRequestTab1">

                                                <div class="container-fluid">

                                                    <div class="row mb-5 mt-2 flex-xl-wrap flex-lg-wrap flex-md-wrap flex-nowrap overflow-auto">

                                                        <!-- card 1-->
                                                        <?php
                                                                //$q = mysqli_query($db,"SELECT * FROM `jobs` WHERE id_user = '{$_SESSION['id_user']}'");
                                                                if(mysqli_num_rows($q) > 0)
                                                                {
                                                                    while($r = $q -> fetch_array())
                                                                    {
                                                                ?>
                                                                        <div class="col-lg-3 col-md-6 col-10 mb-lg-0 mb-4">

                                                                            <div class="outlined-card">
                                                                            
                                                                                <div class="p-3">

                                                                                    <div class="line-clamp-2 mb-2">

                                                                                        <?php echo $r['name']?>

                                                                                    </div>

                                                                                    <div class="color-gray text-truncate mb-2">

                                                                                        <span class="green-dot mr-1 vertical-middle"></span>

                                                                                        <?php echo $r['metro']?>

                                                                                    </div>

                                                                                    <div class="btn-text-big weight-500 mb-2">
                                                                                        
                                                                                        <?php echo $r['price'].' ₽'?>

                                                                                    </div>

                                                                                </div>

                                                                                <div class="light-gray-line"></div>

                                                                                <div class="p-3 d-inline-block">

                                                                                    <span class="mb-2 mr-4 d-inline-block"><label class="m-0"><input type="checkbox" class="d-none icon-checkbox like-checkbox"><span class="mr-2"></span><?php echo $r['like_s']?></label></span>

                                                                                    <span class="mb-2 mr-4 d-inline-block color-red">

                                                                                        <span class="icon-middle time-stroke-icon mr-1 vertical-middle"></span>

                                                                                        00:15:11

                                                                                    </span>

                                                                                    <span type="button" class="btn btn-outline-danger btn-text-sm mb-2 d-inline-block">Истекает</span>

                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-12 d-flex flex-wrap align-items-center">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="mr-4 mb-2">Статус заявки</span>

                                                                <span type="button" class="btn btn-outline-secondary btn-text-sm mr-4 mb-2">В архиве</span>

                                                                <span type="button" class="btn btn-outline-warning btn-text-sm mr-4 mb-2">На модерации</span>

                                                                <span type="button" class="btn btn-outline-danger btn-text-sm mr-4 mb-2">Истекает</span>

                                                                <span type="button" class="btn btn-danger btn-text-sm mr-4 mb-2">Отклонено</span>
                                                            </div>
                                                            <div class="d-flex ml-auto mr-lg-0 mr-auto">
                                                                <button type="button" class="btn btn-light btn-text-sm p-3 mr-4 mt-lg-0 mt-3 ml-auto">Все заявки</button>

                                                                <button type="button" class="btn btn-primary btn-text-sm p-3 mt-lg-0 mt-3">Добавить заявку</button>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                            <!-- tab2 -->

                                            <div id="myOrdersContent1" class="tab-pane fade" aria-labeledby="myOrdersTab1">

                                                <div class="container-fluid">

                                                    <div class="row mb-5 mt-2 overflow-auto">

                                                        

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-12 d-flex">

                                                            <button type="button" class="btn btn-light btn-text-sm p-3 mr-4 ml-auto">Все заказы</button>

                                                            <button type="button" class="btn btn-primary btn-text-sm p-3">Добавить заказ</button>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                            <!-- tab3 -->

                                            <div id="myAdsContent1" class="tab-pane fade" aria-labeledby="myAdsTab1">

                                                <div class="container-fluid">

                                                    <div class="row mb-5 mt-2 overflow-auto">

                                                        

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-12 d-flex">

                                                            <button type="button" class="btn btn-light btn-text-sm p-3 mr-4 ml-auto">Все объявления</button>

                                                            <button type="button" class="btn btn-primary btn-text-sm p-3">Добавить объявление</button>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </section>



                                </div>

                            </section>

                        </div>



                        <!-- user 2 -->

                        <div id="userContent2" class="tab-pane fade" aria-labeledby="userTab1">

                            user 2

                        </div>



                        <!-- user 3 -->

                        <div id="userContent3" class="tab-pane fade" aria-labeledby="userTab1">

                            user 3

                        </div>

                    </div>

                </main>

                <aside class="sidebar">

                    <ul class="nav">

                        <li class="side-elem active">

                            <a class="side-elem-link" href="#">

                                <span class="side-elem-icon mr-2">

                                    <span class="icon-middle side-main-icon"></span>

                                </span>

                                <span class="side-elem-title">Главная</span>

                            </a>

                        </li>

                        <li class="side-elem">

                            <a class="side-elem-link" href="#">

                                <span class="side-elem-icon mr-2">

                                    <span class="icon-middle side-messages-icon"></span>

                                </span>

                                <span class="side-elem-title">Сообщения</span>

                            </a>

                        </li>

                        <li class="side-elem">

                            <a class="side-elem-link" href="#">

                                <span class="side-elem-icon mr-2">

                                    <span class="icon-middle side-calendar-icon"></span>

                                </span>

                                <span class="side-elem-title">Календарь событий</span>

                            </a>

                        </li>

                        <li class="side-elem">

                            <a class="side-elem-link" href="#">

                                <span class="side-elem-icon mr-2">

                                    <span class="icon-middle side-money-icon"></span>

                                </span>

                                <span class="side-elem-title">Деньги</span>

                            </a>

                        </li>

                        <li class="side-elem">

                            <a class="side-elem-link" href="#">

                                <span class="side-elem-icon mr-2">

                                    <span class="icon-middle side-chat-icon"></span>

                                </span>

                                <span class="side-elem-title">Мои объявления</span>

                            </a>

                        </li>

                        <li class="side-elem">

                            <a class="side-elem-link" href="#">

                                <span class="side-elem-icon mr-2">

                                    <span class="icon-middle side-documents-icon"></span>

                                </span>

                                <span class="side-elem-title">Мои документы</span>

                            </a>

                        </li>

                        <li class="side-elem">

                            <a class="side-elem-link" href="#">

                                <span class="side-elem-icon mr-2">

                                    <span class="icon-middle side-book-icon"></span>

                                </span>

                                <span class="side-elem-title">Справочник</span>

                            </a>

                        </li>

                        <li class="side-elem">

                            <a class="side-elem-link" href="#">

                                <span class="side-elem-icon mr-2">

                                    <span class="icon-middle side-blog-icon"></span>

                                </span>

                                <span class="side-elem-title">Блог</span>

                            </a>

                        </li>



                        <li class="light-gray-line"></li>



                        <li class="side-elem">

                            <a class="side-elem-link" href="#">

                                <span class="side-elem-icon mr-2">

                                    <span class="icon-middle side-favorite-icon"></span>

                                </span>

                                <span class="side-elem-title">Избранное</span>

                            </a>

                        </li>

                        <li class="side-elem">

                            <a class="side-elem-link" href="#">

                                <span class="side-elem-icon mr-2">

                                    <span class="icon-middle side-chart-icon"></span>

                                </span>

                                <span class="side-elem-title">Статистика</span>

                            </a>

                        </li>

                        <li class="side-elem">

                            <a class="side-elem-link" href="#">

                                <span class="side-elem-icon mr-2">

                                    <span class="icon-middle side-settings-icon"></span>

                                </span>

                                <span class="side-elem-title">Настройки</span>

                            </a>

                        </li>

                    </ul>

                </aside>

            </div>

        </div>

        <!-- End document -->



        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                                    
        <script src="jquery/jquery-3.4.1.min.js"></script>
        <script src="js/script/snackbar/snackbar.min.js"></script>
        <script src="/js/script/maskedinput/jquery.maskedinput.min.js"></script>
        <script>
            $('#card_save').bind('click',function(){
                if($('#card_credit').val() != '')
                {
                    $.ajax({
                        type:"POST",
                        url:"php/user/insert_card.php",
                        dataType:"json",
                        data: {
                            number: $('#card_credit').val()
                        },
                        success:function(data){
                            if(data['status'] == 200)
                            {
                                Snackbar.show({
                                        text: 'Успешно',
                                        pos: 'top-center'
                                    });
                                location.reload();
                            }
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
            });


            $('#save_passport').bind('click',function(){
                if($('#seria').val() != "" && $('#god').val != "")
                {
                    $.ajax({
                        type:"POST",
                        url:"php/user/insert_pass.php",
                        dataType:"json",
                        data:{
                            ser:$('#seria').val(),
                            god:$('#god').val(),
                        },
                        success:function(data){
                            if(data['status'] == 200)
                            {
                                Snackbar.show({
                                    text: 'Успешно',
                                    pos: 'top-center'
                                });
                                location.reload();
                            }
                        },
                        error:function(){
                            alert('error');
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
            });



            $('#save-pass').bind('click',function(){
                $('#save-pass').attr('disabled', true);
                if($('#last_p').val() != '' && $('#new_p').val() != "" && $('#new_ps').val() != "" && ($('#new_p').val() == $('#new_ps').val()))
                {
                    $.ajax({
                        type:"POST",
                        url: 'php/user/reload_pass.php',
                        data:{
                            last_p:$('#last_p').val(),
                            new_p:$('#new_p').val(),
                            id:<?php echo $_SESSION['id_user']?>,
                        },
                        dataType: "json",
                        success: function(data){
                            console.log(data['status']);
                            if(data['status'] == 200)
                            {
                                Snackbar.show({
                                    text: 'Пароль успешно обновлён',
                                    pos: 'top-center'
                                });
                                $('#accountPasswordContent1 input').val('');
                            }
                            else if (data['status'] == 401)
                            {
                                Snackbar.show({
                                    text: 'Ошибка в сервере',
                                    pos: 'top-center'
                                });
                            }
                            else if(data['status'] == 404)
                            {
                                Snackbar.show({
                                    text: 'Старый пароль был неправильно введён',
                                    pos: 'top-center'
                                });
                            }
                            else
                            {
                                Snackbar.show({
                                    text: 'Ошибка с сервером',
                                    pos: 'top-center'
                                });
                            }
                            $('#save-pass').attr('disabled', false);
                        },
                        error:function(){
                            alert('Ошибка ответа');
                        }
                    });
                    //last_p
                    //new_p
                    //new_ps
                }
                else
                {
                    Snackbar.show({
                        text: 'Поля пустые или вы допустили ошибку',
                        pos: 'top-center'
                    });
                }
            });
        </script>
        
        
        <script src="popper/popper.min.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>



        <!-- Optional JavaScript -->

        <script src="js/side-script.js"></script>
        <script src="js/acc.js"></script>
        <script src="js/credit_card.js"></script>
    </body>

</html>
