<?php
session_start();
if(isset($_SESSION['id_user']))
{
    include('php/db.php');
    $user_login = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `user` WHERE id = '{$_SESSION['id_user']}'"));
}
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

        <link rel="stylesheet" href="css/main-style.css">

        <link rel="stylesheet" href="css/elements.css">

        <link rel="stylesheet" href="css/icons.css">

        <link rel="stylesheet" href="css/colors.css">



        <title>StroykaGid</title>

    </head>

    <body>

        <!-- Document -->

        <header>

        	<div class="header-line py-1 px-xl-4 px-lg-4 px-md-4 px-0">

        		<div class="container">

	        		<div class="row">

	        			<div class="col-12 d-flex">

	        				<span>

		        				<span class="color-white mr-4">

		                            Ваш город: 

		                        </span>

		                        <span class="dropdown">

		                            <a class="dropdown-toggle link-white" href="#" id="otherDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

		                                Москва

		                            </a>

		                            <div class="dropdown-menu" aria-labelledby="otherDropdown">

		                                <a class="dropdown-item" href="#">Город 1</a>

		                                <a class="dropdown-item" href="#">Город 2</a>

		                                <a class="dropdown-item" href="#">Город 3</a>

		                            </div>

		                        </span>

		                    </span>

	                        <span class="color-white ml-auto">

	                            +7 (495) 000-00-00

	                        </span>

	        			</div>

	        		</div>

	        	</div>

        	</div>

        	<nav class="navbar navbar-expand-lg navbar-main bg-white">

				<a class="navbar-brand p-0" href="index.php"><img src="resources/logo/logo.png" class="logo"></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

				    <span class="navbar-toggler-icon menu-icon"></span>

				</button>



				<div class="collapse navbar-collapse" id="navbarSupportedContent">

				    <ul class="navbar-nav mr-auto">

				    	<li class="nav-item">

				    		<a class="nav-link d-flex" href="#"><span class="icon menu-icon mr-2"></span>Товары</a>

				    	</li>

				        <li class="nav-item mr-5">

				    		<a class="nav-link d-flex" href="#"><span class="icon menu-icon mr-2"></span>Услуги</a>

				    	</li>

				        <li class="nav-item">

				        	<a class="nav-link" href="#">Главная</a>

				        </li>

				        <li class="nav-item">

				        	<a class="nav-link" href="#">Заявки</a>

				        </li>

				        <li class="nav-item">

				        	<a class="nav-link" href="#">Исполнители</a>

				    	</li>

                        <li class="nav-item">

                            <a class="nav-link" href="#">Фото</a>

                        </li>

				        <li class="nav-item">

				        	<a class="nav-link" href="#">Калькуляторы</a>

				    	</li>

				        <li class="nav-item">

				        	<a class="nav-link" href="#">Документы</a>

				    	</li>

                        <li class="nav-item">

                            <a class="nav-link" href="#">База знаний</a>

                        </li>

				    </ul>

				    <ul class="navbar-nav mr-auto">

				    	<li class="nav-item">
                            <?php
                             if (isset($_SESSION['id_user']))
                             {
                                 ?>
                                 <span class="dropdown">
	                                 <a class="nav-link dropdown-toggle account-dropdown d-flex mr-3" href="" id="accountDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                 	<div class="account-pict d-flex mr-3">
	                                 		<?php 
	                                 			if (!empty($user_login['account_pict'])) {
	                                 		?>
	                                 			<span class="icon-full m-auto" style="background-image: url(/resources/dynamic/account/<?php echo $user_login['account_pict'] ?>);"></span>
	                               			<?php
	                               				}
	                               				else {
	                               			?>
	                               				<span class="icon-full m-auto" style="background-image: url(/resources/icons/account-placeholder.svg);"></span>
	                               			<?php
	                               				}
	                               			?>
	                               		</div>
	                               		<span class="account-title my-auto">
		                               		<?php echo $user_login['login'] ?>
		                               	</span>
	                                 </a>
	                                 <div class="dropdown-menu" aria-labelledby="accountDropdownMenu">
										<a class="dropdown-item" href="account.php">Личный кабинет</a>
										<a class="dropdown-item" href="#">Настройки</a>
										<a class="dropdown-item" href="#">Уведомления<span class="badge-pill badge-danger btn-text-xsm ml-2">10</span></a>
										<a class="dropdown-item" href="php/logout.php">Выход</a>
							         </div>
							     </span>
                                 <?php
                             }
                             else
                             {
                            ?>
				    		    <a class="nav-link d-flex" href="log.php"><span class="icon login-icon mr-2"></span>Вход / Регистрация</a>
                            <?php
                             }
                            ?>

				    	</li>

				    	<?php
                             if (!isset($_SESSION['id_user']))
                             {
                        ?>
				    	<li class="nav-item py-1 my-auto">

				    		<button type="button" class="btn btn-primary btn-text-sm p-3">Вы исполнитель?</button>

				    	</li>
				    	<?php
				    		}
				    	?>

				    </ul>

				</div>

			</nav>

        </header>

        <main>

        	<!-- search surface under header -->

        	<div class="search-container">

        		<div class="search-opacity-overlay">

	        		<div class="container">

	        			<div class="row justify-content-center">

	        				<div class="col-xl-9 col-lg-9 col-md col-sm col-xs">

	        					<p class="h3 text-center color-white">СтройкаГид - все о строительстве и ремонте</p>

	        					<p class="text-center color-white">Поможем найти надежного исполнителя для любых задач</p>

	        					<div class="search-block mb-2">

	        						<div class="rounded-border bg-white d-flex pl-3">

	        							<div class="icon-small search-icon m-auto"></div>

	        							<div class="mr-3"></div>

	        							<input class="border-0 flex-grow-1 py-2" type="search" placeholder="Поиск...">

								        <a class="link dropdown-toggle p-2 d-xl-inline d-lg-inline d-md-inline d-none" href="#" id="searchCategoriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								        	Все категории

								        </a>

                                        <a class="icon-middle sliders-icon m-auto d-xl-none d-lg-none d-md-none d-inline" href="#" id="searchCategoriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

								        <div class="dropdown-menu" aria-labelledby="searchCategoriesDropdown">

									        <a class="dropdown-item" href="#">Категория 1</a>

									        <a class="dropdown-item" href="#">Категория 2</a>

									        <a class="dropdown-item" href="#">Категория 3</a>

								        </div>

	        							<button type="button" class="btn btn-primary btn-text-sm px-3 ml-2">Найти</button>

	        						</div>

	        					</div>

	        					<div>

	        						<span class="color-white mr-4">Например</span>

	        						<span class="pill">Поклеить обои</span>

	        						<span class="pill">Ремонт квартир</span>

	        						<span class="pill">Дизайн интерьера</span>

	        						<span class="pill">Муж на час</span>

	        					</div>

	        				</div>

	        			</div>

	        		</div>

	        	</div>

        	</div>



        	<!-- main page content -->

        	<div class="content py-4 px-xl-4 px-lg-4 px-md-4 px-0">

	        	<div class="container">

	        		<div class="row mb-5 categories-block flex-xl-row flex-lg-row flex-md-row flex-column overflow-auto pt-4">

	        			<div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

	        				<a href="#">

		        				<div class="card-surface category-card">

		        					<div class="float-left h-100 mr-4">

		        						<img src="resources/images/engineering.svg" style="height: 100%; width: auto;">

		        					</div>

			        				Архитектура и проектирование

		        				</div>

		        			</a>

	        			</div>

	        			<div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

	        				<a href="#">

		        				<div class="card-surface category-card">

		        					<div class="float-left h-100 mr-4">

		        						<img src="resources/images/bed.svg" style="height: 100%; width: auto;">

		        					</div>

			        				Оформление и дизайн

		        				</div>

		        			</a>

	        			</div>

	        			<div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

	        				<a href="#">

		        				<div class="card-surface category-card">

		        					<div class="float-left h-100 mr-4">

		        						<img src="resources/images/house.svg" style="height: 100%; width: auto;">

		        					</div>

			        				Cтроительство

		        				</div>

		        			</a>

	        			</div>

	        			<div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

	        				<a href="#">

		        				<div class="card-surface category-card">

		        					<div class="float-left h-100 mr-4">

		        						<img src="resources/images/art-and-design.svg" style="height: 100%; width: auto;">

		        					</div>

			        				Ремонт и отделка

		        				</div>

		        			</a>

	        			</div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

                            <a href="#">

                                <div class="card-surface category-card">

                                    <div class="float-left h-100 mr-4">

                                        <img src="resources/images/art-and-design.svg" style="height: 100%; width: auto;">

                                    </div>

                                    Готовые проекты

                                </div>

                            </a>

                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

                            <a href="#">

                                <div class="card-surface category-card">

                                    <div class="float-left h-100 mr-4">

                                        <img src="resources/images/architecture.svg" style="height: 100%; width: auto;">

                                    </div>

                                    Инженерные системы

                                </div>

                            </a>

                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

                            <a href="#">

                                <div class="card-surface category-card">

                                    <div class="float-left h-100 mr-4">

                                        <img src="resources/images/building.svg" style="height: 100%; width: auto;">

                                    </div>

                                    Строительные материалы

                                </div>

                            </a>

                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

                            <a href="#">

                                <div class="card-surface category-card">

                                    <div class="float-left h-100 mr-4">

                                        <img src="resources/images/house.svg" style="height: 100%; width: auto;">

                                    </div>

                                    Загородное строительство

                                </div>

                            </a>

                        </div>

	        			<div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

	        				<a href="#">

		        				<div class="card-surface category-card">

		        					<div class="float-left h-100 mr-4">

		        						<img src="resources/images/house.svg" style="height: 100%; width: auto;">

		        					</div>

			        				Банковские гарантии

		        				</div>

		        			</a>

	        			</div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

                            <a href="#">

                                <div class="card-surface category-card">

                                    <div class="float-left h-100 mr-4">

                                        <img src="resources/images/bed.svg" style="height: 100%; width: auto;">

                                    </div>

                                    Бухгалтерские услуги

                                </div>

                            </a>

                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

                            <a href="#">

                                <div class="card-surface category-card">

                                    <div class="float-left h-100 mr-4">

                                        <img src="resources/images/house.svg" style="height: 100%; width: auto;">

                                    </div>

                                    Страхование

                                </div>

                            </a>

                        </div>

	        			<div class="col-xl-3 col-lg-6 col-md-6 col-10 mb-4">

	        				<a href="#">

		        				<div class="card-surface category-card other-categories-card d-flex">

		        					<div class="m-auto d-flex">

		        						<div class="my-auto mr-2">

			        						Все услуги

			        					</div>

		        						<span class="icon right-icon"></span>

		        					</div>

		        				</div>

		        			</a>

	        			</div>

	        		</div>



                    <div class="row mb-4">

                        <div class="col-12 mb-4">

                            <span class="h4 weight-500 mr-4">Новые заявки (47880)</span>

                            <a class="m-auto d-inline-flex link" href="#">

                                <span class="my-auto mr-2">

                                    Все заявки

                                </span>

                                <span class="icon right-icon"></span>

                            </a>

                        </div>

                        <div class="col-12">

                            <label><input type="radio" name="requests-cathegory" class="d-none checkbox-pill" checked><span>поклеить обои</span></label>

                            <label><input type="radio" name="requests-cathegory" class="d-none checkbox-pill"><span>ремонт квартир</span></label>

                            <label><input type="radio" name="requests-cathegory" class="d-none checkbox-pill"><span>дизайн интерьера</span></label>

                            <label><input type="radio" name="requests-cathegory" class="d-none checkbox-pill"><span>муж на час</span></label>

                        </div>

                    </div>



                    <div class="row mb-5 flex-xl-wrap flex-lg-wrap flex-md-wrap flex-nowrap overflow-auto">

                        <!-- request 1-->

                        <div class="col-xl-6 col-lg-12 col-md-12 col-10 pr-5 mb-4">

                            <div class="d-flex flex-wrap mb-2">

                                <a class="btn-text-big link mr-auto text-truncate" href="#">

                                    Герметизация душевой кабины и ванной

                                </a>

                                <span class="btn-text-big price mr-4 text-nowrap">150 000 ₽</span>

                                <label class="mr-4"><input type="checkbox" class="d-none icon-checkbox like-checkbox"><span></span></label>

                                <label class=""><input type="checkbox" class="d-none icon-checkbox bookmark-checkbox"><span></span></label>

                            </div>

                            <div class="gray-line mb-3"></div>

                            <p class="mb-4">

                                Разработать амбиаграммы в смеси кельтского и старославянского стиля. Ищу исполнителя по следующей задаче: разработка пользовательского

                            </p>

                            <div class="d-flex flex-wrap">

                                <span class="color-gray mr-auto text-truncate" href="#">

                                    Размещено 17 января, 12:12

                                </span>

                                <span>

                                    <span class="color-gray mr-4">

                                        <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                        567

                                    </span>

                                    <span class="color-gray">

                                        <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                        16 ответов

                                    </span>

                                </span>

                            </div>

                        </div>



                        <!-- request 2-->

                        <div class="col-xl-6 col-lg-12 col-md-12 col-10 pr-5 mb-4">

                            <div class="d-flex flex-wrap mb-2">

                                <a class="btn-text-big link mr-auto text-truncate" href="#">

                                    Герметизация душевой кабины и ванной

                                </a>

                                <span class="btn-text-big price mr-4 text-nowrap">150 000 ₽</span>

                                <label class="mr-4"><input type="checkbox" class="d-none icon-checkbox like-checkbox"><span></span></label>

                                <label class=""><input type="checkbox" class="d-none icon-checkbox bookmark-checkbox"><span></span></label>

                            </div>

                            <div class="gray-line mb-3"></div>

                            <p class="mb-4">

                                Разработать амбиаграммы в смеси кельтского и старославянского стиля. Ищу исполнителя по следующей задаче: разработка пользовательского

                            </p>

                            <div class="d-flex flex-wrap">

                                <span class="color-gray mr-auto text-truncate" href="#">

                                    Размещено 17 января, 12:12

                                </span>

                                <span>

                                    <span class="color-gray mr-4">

                                        <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                        567

                                    </span>

                                    <span class="color-gray">

                                        <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                        16 ответов

                                    </span>

                                </span>

                            </div>

                        </div>



                        <!-- request 3-->

                        <div class="col-xl-6 col-lg-12 col-md-12 col-10 pr-5 mb-4">

                            <div class="d-flex flex-wrap mb-2">

                                <a class="btn-text-big link mr-auto text-truncate" href="#">

                                    Герметизация душевой кабины и ванной

                                </a>

                                <span class="btn-text-big price mr-4 text-nowrap">150 000 ₽</span>

                                <label class="mr-4"><input type="checkbox" class="d-none icon-checkbox like-checkbox"><span></span></label>

                                <label class=""><input type="checkbox" class="d-none icon-checkbox bookmark-checkbox"><span></span></label>

                            </div>

                            <div class="gray-line mb-3"></div>

                            <p class="mb-4">

                                Разработать амбиаграммы в смеси кельтского и старославянского стиля. Ищу исполнителя по следующей задаче: разработка пользовательского

                            </p>

                            <div class="d-flex flex-wrap">

                                <span class="color-gray mr-auto text-truncate" href="#">

                                    Размещено 17 января, 12:12

                                </span>

                                <span>

                                    <span class="color-gray mr-4">

                                        <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                        567

                                    </span>

                                    <span class="color-gray">

                                        <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                        16 ответов

                                    </span>

                                </span>

                            </div>

                        </div>



                        <!-- request 4-->

                        <div class="col-xl-6 col-lg-12 col-md-12 col-10 pr-5 mb-4">

                            <div class="d-flex flex-wrap mb-2">

                                <a class="btn-text-big link mr-auto text-truncate" href="#">

                                    Герметизация душевой кабины и ванной

                                </a>

                                <span class="btn-text-big price mr-4 text-nowrap">150 000 ₽</span>

                                <label class="mr-4"><input type="checkbox" class="d-none icon-checkbox like-checkbox"><span></span></label>

                                <label class=""><input type="checkbox" class="d-none icon-checkbox bookmark-checkbox"><span></span></label>

                            </div>

                            <div class="gray-line mb-3"></div>

                            <p class="mb-4">

                                Разработать амбиаграммы в смеси кельтского и старославянского стиля. Ищу исполнителя по следующей задаче: разработка пользовательского

                            </p>

                            <div class="d-flex flex-wrap">

                                <span class="color-gray mr-auto text-truncate" href="#">

                                    Размещено 17 января, 12:12

                                </span>

                                <span>

                                    <span class="color-gray mr-4">

                                        <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                        567

                                    </span>

                                    <span class="color-gray">

                                        <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                        16 ответов

                                    </span>

                                </span>

                            </div>

                        </div>

                    </div>



                    <div class="row mb-5">

                        <div class="col-12">

                            <div class="infoblock-surface" style="background-image: url('resources/images/reliable.svg');">

                                <div class="container-fluid">

                                    <div class="row">

                                        <div class="col-xl-3 col-lg-3 hidden-md-down">

                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-12 py-4 infoblock-opacity-bg">

                                            <p class="h3">СтройкаГид - строительный портал для бизнеса и частных лиц.</p>

                                            <p class="btn-text-big color-table-gray mb-0">Мы предоставляем информацию и удобные сервисы для работы.</p>

                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-12 d-flex infoblock-opacity-bg">

                                            <button type="button" class="btn btn-primary btn-text-sm p-3 m-xl-auto m-lg-auto m-3 mx-auto">О проекте</button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="row mb-4">

                    	<div class="col-12">

	                    	<span class="h4 weight-500">СтройкаГид</span> – это специализированный ресурс в сфере строительства и ремонта. На нашем сайте можно подобрать готовые решения, узнать стоимость работ и материалов, подготовить документы, разместить информацию о своей компании, товарах и услугах.

	                    </div>

                    </div>



                    <div class="row mb-5 flex-xl-wrap flex-lg-wrap flex-md-wrap flex-nowrap overflow-auto">

                        <!-- block 1-->

                        <div class="col-xl-6 col-lg-6 col-md-12 col-10 mb-4">

                            <div class="mb-4">

                                <span class="h4 weight-500 mr-4">Для заказчиков</span><br>

                                <a class="m-auto d-inline-flex link" href="#">

                                    <span class="my-auto mr-2">

                                        Подробнее

                                    </span>

                                    <span class="icon right-icon"></span>

                                </a>

                            </div>

                            <div class="d-flex flex-xl-nowrap flex-wrap mb-4">

                                <div class="about-video-block">

                                    <div class="wrapper-16-9 mb-2">

                                        <div class="content-aspect">

                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7qBfdcI-d1Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        </div>

                                    </div>

                                </div>

                                <div class="video-descr ml-xl-4 ml-0 mb-auto">

                                    СтройкаГид – позволяет самостоятельно или через консультантов подобрать необходимые товары или услуги, выбрать Поставщиков и Исполнителей или оставить Заявки на сайте. Личный кабинет позволяет хранить информацию об оставленных Заявках, вести переписку и обмениваться данными с Поставщиками и Покупателями.

                                </div>

                            </div>

                        	<div class="row mb-4">

                        		<div class="col-xl-5 col-6">

                        			<button type="button" class="btn btn-outline-secondary btn-text-sm p-3 w-100">Создать смету</button>

                        		</div>

                        		<div class="col-xl-5 col-6">

                        			<button type="button" class="btn btn-outline-secondary btn-text-sm p-3 w-100">Найти исполнителя</button>

                        		</div>

                        	</div>

                        	<div class="row mb-4">

                        		<div class="col-xl-5 col-6">

                        			<button type="button" class="btn btn-outline-secondary btn-text-sm p-3 w-100">Шаблоны документов</button>

                        		</div>

                        		<div class="col-xl-5 col-6">

                        			<button type="button" class="btn btn-outline-secondary btn-text-sm p-3 w-100">Консультации</button>

                        		</div>

                        	</div>

                        	<div class="row">

                        		<div class="col-xl-10 col-12">

                        			<button type="button" class="btn btn-primary btn-text-sm p-3 w-100">Оставить заявку</button>

                        		</div>

                        	</div>

                        </div>



                        <!-- block 2-->

                        <div class="col-xl-6 col-lg-6 col-md-12 col-10 mb-4">

                            <div class="mb-4">

                                <span class="h4 weight-500 mr-4">Для исполнителей</span><br>

                                <a class="m-auto d-inline-flex link" href="#">

                                    <span class="my-auto mr-2">

                                        Подробнее

                                    </span>

                                    <span class="icon right-icon"></span>

                                </a>

                            </div>

                            <div class="d-flex flex-xl-nowrap flex-wrap mb-4">

                                <div class="about-video-block">

                                    <div class="wrapper-16-9 mb-2">

                                        <div class="content-aspect">

                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7qBfdcI-d1Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        </div>

                                    </div>

                                </div>

                                <div class="video-descr ml-xl-4 ml-0 mb-auto">

                                    СтройкаГид – позволяет создать на сайте страничку своей компании с информацией о товарах и услугах, опыте работы и выполненных объектах. Личный кабинет позволяет хранить информацию о принятых Заявках, вести переписку и обмениваться данными с Покупателями и Заказчиками.

                                </div>

                            </div>

                            <div class="row mb-4">

                        		<div class="col-xl-5 col-6">

                        			<button type="button" class="btn btn-outline-secondary btn-text-sm p-3 w-100">Создать КП</button>

                        		</div>

                        		<div class="col-xl-5 col-6">

                        			<button type="button" class="btn btn-outline-secondary btn-text-sm p-3 w-100">Создать смету</button>

                        		</div>

                        	</div>

                        	<div class="row mb-4">

                        		<div class="col-xl-5 col-6">

                        			<button type="button" class="btn btn-outline-secondary btn-text-sm p-3 w-100">Заполнить договор</button>

                        		</div>

                        		<div class="col-xl-5 col-6">

                        			<button type="button" class="btn btn-outline-secondary btn-text-sm p-3 w-100">Сделать КС</button>

                        		</div>

                        	</div>

                        	<div class="row">

                        		<div class="col-xl-10 col-12">

                        			<button type="button" class="btn btn-primary btn-text-sm p-3 w-100">Стать исполнителем</button>

                        		</div>

                        	</div>

                        </div>

                    </div>



                    <div class="row mb-4">

                        <div class="col-12">

                            <span class="h4 weight-500 mr-4">Отбираем лучших исполнителей</span>

                            <a class="m-auto d-inline-flex link" href="#">

                                <span class="my-auto mr-2">

                                    Посмотреть всех

                                </span>

                                <span class="icon right-icon"></span>

                            </a>

                        </div>

                    </div>



                    <div class="row mb-5 pt-3 flex-xl-wrap flex-lg-wrap flex-md-wrap flex-nowrap overflow-auto">

                        <!-- item 1 -->

                        <div class="col-xl-4 col-lg-4 col-md-12 col-10 position-relative mb-4">

                            <div class="item-card-surface">

                                <div class="wrapper-16-9">

                                    <div class="content-aspect">

                                        <div class="contractor-img-block">

                                            <div class="item-img" style="background-image: url('resources/images/why.png');"></div>

                                            <div class="item-like">

                                                <label class="mb-0"><input type="checkbox" class="d-none icon-checkbox like-checkbox-white"><span class="mr-2"></span>256</label>

                                            </div>

                                            <ul class="item-achievments">

                                                <li style="background-image: url('resources/images/reward.svg');"></li>

                                                <li style="background-image: url('resources/images/reward-1.svg');"></li>

                                                <li style="background-image: url('resources/images/reward-2.svg');"></li>

                                                <li style="background-image: url('resources/images/reward.svg');"></li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="item-description">  

                                    <a class="btn-text-big link color-black d-block mb-2 text-truncate" href="#">

                                        Анастасия Солженицына

                                    </a>

                                    <div class="d-flex flex-wrap">

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle star-icon mr-1 vertical-middle"></span>

                                            4.7

                                        </div>

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                            567

                                        </div>

                                        <div class="color-gray">

                                            <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                            16 ответов

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <img class="place-block" src="resources/images/place1.svg">

                        </div>



                        <!-- item 2 -->

                        <div class="col-xl-4 col-lg-4 col-md-12 col-10 position-relative mb-4">

                            <div class="item-card-surface">

                                <div class="wrapper-16-9">

                                    <div class="content-aspect">

                                        <div class="contractor-img-block">

                                            <div class="item-img" style="background-image: url('resources/images/why.png');"></div>

                                            <div class="item-like">

                                                <label class="mb-0"><input type="checkbox" class="d-none icon-checkbox like-checkbox-white"><span class="mr-2"></span>256</label>

                                            </div>

                                            <ul class="item-achievments">

                                                <li style="background-image: url('resources/images/reward.svg');"></li>

                                                <li style="background-image: url('resources/images/reward-1.svg');"></li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="item-description">  

                                    <a class="btn-text-big link color-black d-block mb-2 text-truncate" href="#">

                                        Родион Раскольников

                                    </a>

                                    <div class="d-flex flex-wrap">

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle star-icon mr-1 vertical-middle"></span>

                                            4.7

                                        </div>

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                            567

                                        </div>

                                        <div class="color-gray">

                                            <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                            16 ответов

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <img class="place-block" src="resources/images/place2.svg">

                        </div>



                        <!-- item 3 -->

                        <div class="col-xl-4 col-lg-4 col-md-12 col-10 position-relative mb-4">

                            <div class="item-card-surface">

                                <div class="wrapper-16-9">

                                    <div class="content-aspect">

                                        <div class="contractor-img-block">

                                            <div class="item-img" style="background-image: url('resources/images/why.png');"></div>

                                            <div class="item-like">

                                                <label class="mb-0"><input type="checkbox" class="d-none icon-checkbox like-checkbox-white"><span class="mr-2"></span>256</label>

                                            </div>

                                            <ul class="item-achievments">

                                                <li style="background-image: url('resources/images/reward-2.svg');"></li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="item-description">  

                                    <a class="btn-text-big link color-black d-block mb-2 text-truncate" href="#">

                                        Софья Мармеладова

                                    </a>

                                    <div class="d-flex flex-wrap">

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle star-icon mr-1 vertical-middle"></span>

                                            4.7

                                        </div>

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                            567

                                        </div>

                                        <div class="color-gray">

                                            <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                            16 ответов

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <img class="place-block" src="resources/images/place3.svg">

                        </div>

                    </div>



                    <div class="row mb-5">

                        <div class="col-12">

                            <div class="infoblock-surface" style="background-image: url('resources/images/get-contractor.svg');">

                                <div class="container-fluid">

                                    <div class="row">

                                        <div class="col-xl-3 col-lg-3 hidden-md-down">

                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-12 py-4 infoblock-opacity-bg">

                                            <p class="h3">Вы работаете в сфере строительства и ремонта? Хотите рассказать о себе или найти новых Покупателей и Заказчиков?</p>

                                            <!-- <p class="btn-text-big color-table-gray mb-0">С нашим сервисом не нужно искать клиентов.</p> -->

                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-12 d-flex infoblock-opacity-bg">

                                            <button type="button" class="btn btn-primary btn-text-sm p-3 m-xl-auto m-lg-auto m-3 mx-auto">Зарегистрироваться</button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="row mb-4">

                        <div class="col-12 mb-4">

                            <span class="h4 weight-500 mr-4">Новости</span>

                            <a class="m-auto d-inline-flex link" href="#">

                                <span class="my-auto mr-2">

                                    Все новости

                                </span>

                                <span class="icon right-icon"></span>

                            </a>

                        </div>

                        <div class="col-12">

                            <label><input type="radio" name="news-cathegory" class="d-none checkbox-pill" checked><span>новости сайта</span></label>

                            <label><input type="radio" name="news-cathegory" class="d-none checkbox-pill"><span>законодательство</span></label>

                            <label><input type="radio" name="news-cathegory" class="d-none checkbox-pill"><span>технологии</span></label>

                            <label><input type="radio" name="news-cathegory" class="d-none checkbox-pill"><span>оборудование</span></label>

                            <label><input type="radio" name="news-cathegory" class="d-none checkbox-pill"><span>материалы</span></label>

                            <label><input type="radio" name="news-cathegory" class="d-none checkbox-pill"><span>производители</span></label>

                        </div>

                    </div>



                    <div class="row mb-5 flex-xl-wrap flex-lg-wrap flex-md-wrap flex-nowrap overflow-auto">

                        <!-- news 1 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 mb-4">

                            <a class="h4 weight-500 link color-black line-clamp-3 d-block mb-3" href="#">Ипотеку молодым дальневосточникам выдадут под 2%</a>

                            <div class="d-flex flex-wrap">

                                <span class="color-gray mr-auto text-truncate" href="#">

                                    17 января 2020

                                </span>

                                <span>

                                    <span class="mr-4 color-gray">

                                        <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                        567

                                    </span>

                                    <span class="color-gray">

                                        <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                        16 ответов

                                    </span>

                                </span>

                            </div>

                        </div>



                        <!-- news 2 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 mb-4">

                            <a class="h4 weight-500 link color-black line-clamp-3 d-block mb-3" href="#">Ипотеку молодым дальневосточникам выдадут под 2%</a>

                            <div class="d-flex flex-wrap">

                                <span class="color-gray mr-auto text-truncate" href="#">

                                    17 января 2020

                                </span>

                                <span>

                                    <span class="mr-4 color-gray">

                                        <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                        567

                                    </span>

                                    <span class="color-gray">

                                        <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                        16 ответов

                                    </span>

                                </span>

                            </div>

                        </div>



                        <!-- news 3 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 mb-4">

                            <a class="h4 weight-500 link color-black line-clamp-3 d-block mb-3" href="#">Ипотеку молодым дальневосточникам выдадут под 2%</a>

                            <div class="d-flex flex-wrap">

                                <span class="color-gray mr-auto text-truncate" href="#">

                                    17 января 2020

                                </span>

                                <span>

                                    <span class="mr-4 color-gray">

                                        <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                        567

                                    </span>

                                    <span class="color-gray">

                                        <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                        16 ответов

                                    </span>

                                </span>

                            </div>

                        </div>



                        <!-- news 4 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 mb-4">

                            <a class="h4 weight-500 link color-black line-clamp-3 d-block mb-3" href="#">Ипотеку молодым дальневосточникам выдадут под 2%</a>

                            <div class="d-flex flex-wrap">

                                <span class="color-gray mr-auto text-truncate" href="#">

                                    17 января 2020

                                </span>

                                <span>

                                    <span class="mr-4 color-gray">

                                        <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                        567

                                    </span>

                                    <span class="color-gray">

                                        <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                        16 ответов

                                    </span>

                                </span>

                            </div>

                        </div>

                    </div>



                    <div class="row mb-4">

                        <div class="col">

                            <span class="h4 weight-500 mr-4">Последние работы</span>

                            <a class="m-auto d-inline-flex link" href="#">

                                <span class="my-auto mr-2">

                                    Все работы

                                </span>

                                <span class="icon right-icon"></span>

                            </a>

                        </div>

                    </div>



                    <div class="row mb-5 flex-xl-wrap flex-lg-wrap flex-md-wrap flex-nowrap overflow-auto">

                        <!-- item 1 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 position-relative mb-4">

                            <div class="item-card-surface">

                                <div class="wrapper-16-9">

                                    <div class="content-aspect">

                                        <div class="work-img-block">

                                            <div class="item-img" style="background-image: url('resources/images/complete-work.png');"></div>

                                            <div class="item-like">

                                                <label class="mb-0"><input type="checkbox" class="d-none icon-checkbox like-checkbox-white"><span class="mr-2"></span>256</label>

                                            </div>

                                            <ul class="item-achievments">

                                                <li style="background-image: url('resources/images/reward-2.svg');"></li>

                                                <li style="background-image: url('resources/images/reward-3.svg');"></li>

                                                <li style="background-image: url('resources/images/reward-1.svg');"></li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="item-description">

                                    <div class="d-flex mb-2">

                                        <a class="btn-text-big link color-black line-clamp-2 my-auto mr-2" href="#">

                                            Ремонт и разводка сантехники в квартире

                                        </a>

                                        <a href="#">

                                            <div class="work-userpic" style="background-image: url('resources/images/userpic.png');"></div>

                                        </a>

                                    </div>



                                    <div class="d-flex flex-wrap mb-3">

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle star-icon mr-1 vertical-middle"></span>

                                            4.7

                                        </div>

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                            567

                                        </div>

                                        <div class="color-gray">

                                            <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                            16 ответов

                                        </div>

                                    </div>

                                    <div class="color-gray text-truncate">

                                        <span class="light-blue-dot mr-1 vertical-middle"></span>

                                        Краснопрудная ул. - м. Красносельская

                                    </div>

                                </div>

                            </div>

                        </div>



                        <!-- item 2 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 position-relative mb-4">

                            <div class="item-card-surface">

                                <div class="wrapper-16-9">

                                    <div class="content-aspect">

                                        <div class="work-img-block">

                                            <div class="item-img" style="background-image: url('resources/images/complete-work.png');"></div>

                                            <div class="item-like">

                                                <label class="mb-0"><input type="checkbox" class="d-none icon-checkbox like-checkbox-white"><span class="mr-2"></span>256</label>

                                            </div>

                                            <ul class="item-achievments">

                                                <li style="background-image: url('resources/images/reward-2.svg');"></li>

                                                <li style="background-image: url('resources/images/reward-3.svg');"></li>

                                                <li style="background-image: url('resources/images/reward-1.svg');"></li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="item-description">

                                    <div class="d-flex mb-2">

                                        <a class="btn-text-big link color-black line-clamp-2 my-auto mr-2" href="#">

                                            Ремонт и разводка сантехники в квартире

                                        </a>

                                        <a href="#">

                                            <div class="work-userpic" style="background-image: url('resources/images/userpic.png');"></div>

                                        </a>

                                    </div>



                                    <div class="d-flex flex-wrap mb-3">

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle star-icon mr-1 vertical-middle"></span>

                                            4.7

                                        </div>

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                            567

                                        </div>

                                        <div class="color-gray">

                                            <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                            16 ответов

                                        </div>

                                    </div>

                                    <div class="color-gray text-truncate">

                                        <span class="light-blue-dot mr-1 vertical-middle"></span>

                                        Краснопрудная ул. - м. Красносельская

                                    </div>

                                </div>

                            </div>

                        </div>



                        <!-- item 3 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 position-relative mb-4">

                            <div class="item-card-surface">

                                <div class="wrapper-16-9">

                                    <div class="content-aspect">

                                        <div class="work-img-block">

                                            <div class="item-img" style="background-image: url('resources/images/complete-work.png');"></div>

                                            <div class="item-like">

                                                <label class="mb-0"><input type="checkbox" class="d-none icon-checkbox like-checkbox-white"><span class="mr-2"></span>256</label>

                                            </div>

                                            <ul class="item-achievments">

                                                <li style="background-image: url('resources/images/reward-2.svg');"></li>

                                                <li style="background-image: url('resources/images/reward-3.svg');"></li>

                                                <li style="background-image: url('resources/images/reward-1.svg');"></li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="item-description">

                                    <div class="d-flex mb-2">

                                        <a class="btn-text-big link color-black line-clamp-2 my-auto mr-2" href="#">

                                            Ремонт и разводка сантехники в квартире

                                        </a>

                                        <a href="#">

                                            <div class="work-userpic" style="background-image: url('resources/images/userpic.png');"></div>

                                        </a>

                                    </div>



                                    <div class="d-flex flex-wrap mb-3">

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle star-icon mr-1 vertical-middle"></span>

                                            4.7

                                        </div>

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                            567

                                        </div>

                                        <div class="color-gray">

                                            <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                            16 ответов

                                        </div>

                                    </div>

                                    <div class="color-gray text-truncate">

                                        <span class="light-blue-dot mr-1 vertical-middle"></span>

                                        Краснопрудная ул. - м. Красносельская

                                    </div>

                                </div>

                            </div>

                        </div>



                        <!-- item 4 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 position-relative mb-4">

                            <div class="item-card-surface">

                                <div class="wrapper-16-9">

                                    <div class="content-aspect">

                                        <div class="work-img-block">

                                            <div class="item-img" style="background-image: url('resources/images/complete-work.png');"></div>

                                            <div class="item-like">

                                                <label class="mb-0"><input type="checkbox" class="d-none icon-checkbox like-checkbox-white"><span class="mr-2"></span>256</label>

                                            </div>

                                            <ul class="item-achievments">

                                                <li style="background-image: url('resources/images/reward-2.svg');"></li>

                                                <li style="background-image: url('resources/images/reward-3.svg');"></li>

                                                <li style="background-image: url('resources/images/reward-1.svg');"></li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="item-description">

                                    <div class="d-flex mb-2">

                                        <a class="btn-text-big link color-black line-clamp-2 my-auto mr-2" href="#">

                                            Ремонт и разводка сантехники в квартире

                                        </a>

                                        <a href="#">

                                            <div class="work-userpic" style="background-image: url('resources/images/userpic.png');"></div>

                                        </a>

                                    </div>



                                    <div class="d-flex flex-wrap mb-3">

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle star-icon mr-1 vertical-middle"></span>

                                            4.7

                                        </div>

                                        <div class="mr-4 color-gray">

                                            <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                            567

                                        </div>

                                        <div class="color-gray">

                                            <span class="icon-middle message-icon mr-1 vertical-middle"></span>

                                            16 ответов

                                        </div>

                                    </div>

                                    <div class="color-gray text-truncate">

                                        <span class="light-blue-dot mr-1 vertical-middle"></span>

                                        Краснопрудная ул. - м. Красносельская

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="row mb-5">

                        <div class="col-12">

                            <div class="infoblock-surface" style="background-image: url('resources/images/professionals.svg');">

                                <div class="container-fluid">

                                    <div class="row">

                                        <div class="col-xl-3 col-lg-3 hidden-md-down">

                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-12 py-4 infoblock-opacity-bg">

                                            <p class="h3"> Нужны сотрудники или ищите работу?</p>

                                            <p class="btn-text-big color-table-gray mb-0">Воспользуйтесь сервисом поиска работы и подбора персонала СтройкаГид!</p>

                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-12 d-flex infoblock-opacity-bg">

                                            <button type="button" class="btn btn-primary btn-text-sm p-3 m-xl-auto m-lg-auto m-3 mx-auto">Найти мастера</button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="row mb-4">

                        <div class="col">

                            <span class="h4 weight-500 mr-4">Отзывы</span>

                            <a class="m-auto d-inline-flex link" href="#">

                                <span class="my-auto mr-2">

                                    Все отзывы

                                </span>

                                <span class="icon right-icon"></span>

                            </a>

                        </div>

                    </div>



                    <div class="row mb-5 flex-xl-wrap flex-lg-wrap flex-md-wrap flex-nowrap overflow-auto">

                        <!-- review 1 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 mb-4">

                            <div class="item-card-surface">

                                <div class="wrapper-16-9 mb-2">

                                    <div class="content-aspect">

                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7qBfdcI-d1Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    </div>

                                </div>

                                <div class="item-description">

                                    <div class="d-flex mb-2">

                                        <a class="btn-text-big link color-black line-clamp-2 my-auto mr-2" href="#">

                                            Ремонт квартиры в Осколково (Москва)

                                        </a>

                                        <a href="#">

                                            <div class="work-userpic" style="background-image: url('resources/images/userpic.png');"></div>

                                        </a>

                                    </div>



                                    <div class="d-flex flex-wrap mb-3">

                                        <span class="color-gray mr-auto text-truncate" href="#">

                                            17 января 2020

                                        </span>

                                        <div class="color-gray">

                                            <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                            567

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <!-- review 2 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 mb-4">

                            <div class="item-card-surface">

                                <div class="wrapper-16-9 mb-2">

                                    <div class="content-aspect">

                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7qBfdcI-d1Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    </div>

                                </div>

                                <div class="item-description">

                                    <div class="d-flex mb-2">

                                        <a class="btn-text-big link color-black line-clamp-2 my-auto mr-2" href="#">

                                            Ремонт квартиры в Осколково (Москва)

                                        </a>

                                        <a href="#">

                                            <div class="work-userpic" style="background-image: url('resources/images/userpic.png');"></div>

                                        </a>

                                    </div>



                                    <div class="d-flex flex-wrap mb-3">

                                        <span class="color-gray mr-auto text-truncate" href="#">

                                            17 января 2020

                                        </span>

                                        <div class="color-gray">

                                            <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                            567

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <!-- review 3 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 mb-4">

                            <div class="item-card-surface">

                                <div class="wrapper-16-9 mb-2">

                                    <div class="content-aspect">

                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7qBfdcI-d1Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    </div>

                                </div>

                                <div class="item-description">

                                    <div class="d-flex mb-2">

                                        <a class="btn-text-big link color-black line-clamp-2 my-auto mr-2" href="#">

                                            Ремонт квартиры в Осколково (Москва)

                                        </a>

                                        <a href="#">

                                            <div class="work-userpic" style="background-image: url('resources/images/userpic.png');"></div>

                                        </a>

                                    </div>



                                    <div class="d-flex flex-wrap mb-3">

                                        <span class="color-gray mr-auto text-truncate" href="#">

                                            17 января 2020

                                        </span>

                                        <div class="color-gray">

                                            <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                            567

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <!-- review 4 -->

                        <div class="col-xl-3 col-lg-6 col-md-12 col-10 mb-4">

                            <div class="item-card-surface">

                                <div class="wrapper-16-9 mb-2">

                                    <div class="content-aspect">

                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7qBfdcI-d1Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    </div>

                                </div>

                                <div class="item-description">

                                    <div class="d-flex mb-2">

                                        <a class="btn-text-big link color-black line-clamp-2 my-auto mr-2" href="#">

                                            Ремонт квартиры в Осколково (Москва)

                                        </a>

                                        <a href="#">

                                            <div class="work-userpic" style="background-image: url('resources/images/userpic.png');"></div>

                                        </a>

                                    </div>



                                    <div class="d-flex flex-wrap mb-3">

                                        <span class="color-gray mr-auto text-truncate" href="#">

                                            17 января 2020

                                        </span>

                                        <div class="color-gray">

                                            <span class="icon-middle eye-on-icon mr-1 vertical-middle"></span>

                                            567

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="row mb-4">

                        <div class="col">

                            <span class="h4 weight-500 mr-4">Наши партнеры</span>

                        </div>

                    </div>



                    <div class="row mb-5">

                    	<div class="col d-flex px-xl-4 px-lg-4 px-md-4 px-0">

                            <div class="scroll-btn my-auto d-xl-block d-lg-block d-md-block d-none">

                    	        <button class="round-button left-arrow-icon" id="partnersRight"></button>

                            </div>

                    		<div class="flex-grow-1 partners-wrapper mx-xl-4 mx-lg-4 mx-md-4 mx-0"  id="partnersWrapper">

                                <div class="partners-content" id="partnersContent">



                                    <a class="item-card-surface-2" href="#">

                                        <div class="wrapper-4-3 mb-4">

                                            <div class="content-aspect partners-img-wrapper">

                                                <div class="partners-img" style="background-image: url('resources/images/partner1.svg');"></div>

                                            </div>

                                        </div>

                                        <div>

                                            <p class="color-black btn-text-big text-center">WGroup</p>

                                            <p class="color-gray text-center partners-descr">Генеральный партнер и спонсор обучающих курсов</p>

                                        </div>

                                    </a>



                                    <a class="item-card-surface-2" href="#">

                                        <div class="wrapper-4-3 mb-4">

                                            <div class="content-aspect partners-img-wrapper">

                                                <div class="partners-img" style="background-image: url('resources/images/partner2.svg');"></div>

                                            </div>

                                        </div>

                                        <div>

                                            <p class="color-black btn-text-big text-center">WGroup</p>

                                            <p class="color-gray text-center partners-descr">Генеральный партнер и спонсор обучающих курсов</p>

                                        </div>

                                    </a>



                                    <a class="item-card-surface-2" href="#">

                                        <div class="wrapper-4-3 mb-4">

                                            <div class="content-aspect partners-img-wrapper">

                                                <div class="partners-img" style="background-image: url('resources/images/partner3.svg');"></div>

                                            </div>

                                        </div>

                                        <div>

                                            <p class="color-black btn-text-big text-center">WGroup</p>

                                            <p class="color-gray text-center partners-descr">Генеральный партнер и спонсор обучающих курсов</p>

                                        </div>

                                    </a>



                                    <a class="item-card-surface-2" href="#">

                                        <div class="wrapper-4-3 mb-4">

                                            <div class="content-aspect partners-img-wrapper">

                                                <div class="partners-img" style="background-image: url('resources/images/partner4.svg');"></div>

                                            </div>

                                        </div>

                                        <div>

                                            <p class="color-black btn-text-big text-center">WGroup</p>

                                            <p class="color-gray text-center partners-descr">Генеральный партнер и спонсор обучающих курсов</p>

                                        </div>

                                    </a>



                                    <a class="item-card-surface-2" href="#">

                                        <div class="wrapper-4-3 mb-4">

                                            <div class="content-aspect partners-img-wrapper">

                                                <div class="partners-img" style="background-image: url('resources/images/partner5.svg');"></div>

                                            </div>

                                        </div>

                                        <div>

                                            <p class="color-black btn-text-big text-center">WGroup</p>

                                            <p class="color-gray text-center partners-descr">Генеральный партнер и спонсор обучающих курсов</p>

                                        </div>

                                    </a>



                                    <a class="item-card-surface-2" href="#">

                                        <div class="wrapper-4-3 mb-4">

                                            <div class="content-aspect partners-img-wrapper">

                                                <div class="partners-img" style="background-image: url('resources/images/partner6.svg');"></div>

                                            </div>

                                        </div>

                                        <div>

                                            <p class="color-black btn-text-big text-center">WGroup</p>

                                            <p class="color-gray text-center partners-descr">Генеральный партнер и спонсор обучающих курсов</p>

                                        </div>

                                    </a>



                                    <a class="item-card-surface-2" href="#">

                                        <div class="wrapper-4-3 mb-4">

                                            <div class="content-aspect partners-img-wrapper">

                                                <div class="partners-img" style="background-image: url('resources/images/partner1.svg');"></div>

                                            </div>

                                        </div>

                                        <div>

                                            <p class="color-black btn-text-big text-center">WGroup</p>

                                            <p class="color-gray text-center partners-descr">Генеральный партнер и спонсор обучающих курсов</p>

                                        </div>

                                    </a>



                                    <a class="item-card-surface-2" href="#">

                                        <div class="wrapper-4-3 mb-4">

                                            <div class="content-aspect partners-img-wrapper">

                                                <div class="partners-img" style="background-image: url('resources/images/partner2.svg');"></div>

                                            </div>

                                        </div>

                                        <div>

                                            <p class="color-black btn-text-big text-center">WGroup</p>

                                            <p class="color-gray text-center partners-descr">Генеральный партнер и спонсор обучающих курсов</p>

                                        </div>

                                    </a>



                                    <a class="item-card-surface-2" href="#">

                                        <div class="wrapper-4-3 mb-4">

                                            <div class="content-aspect partners-img-wrapper">

                                                <div class="partners-img" style="background-image: url('resources/images/partner3.svg');"></div>

                                            </div>

                                        </div>

                                        <div>

                                            <p class="color-black btn-text-big text-center">WGroup</p>

                                            <p class="color-gray text-center partners-descr">Генеральный партнер и спонсор обучающих курсов</p>

                                        </div>

                                    </a>

                                </div>

                    		</div>

                            <div class="scroll-btn my-auto d-xl-block d-lg-block d-md-block d-none">

                        		<button class="round-button right-arrow-icon" id="partnersLeft"></button>

                            </div>

                    	</div>

                    </div>



	        	</div>

	        </div>

        </main>



        <footer>

            <div class="gray-line"></div>

            <div class="container">

                <div class="row">

                    <div class="col">

                        <nav class="navbar navbar-expand-lg navbar-main bg-white">

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                <ul class="navbar-nav mr-auto">

                                    <li class="nav-item">

                                        <a class="nav-link d-flex" href="#"><span class="icon menu-icon mr-2"></span>Товары</a>

                                    </li>

                                    <li class="nav-item mr-5">

                                        <a class="nav-link d-flex" href="#"><span class="icon menu-icon mr-2"></span>Услуги</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" href="#">Главная</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" href="#">Заявки</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" href="#">Исполнители</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" href="#">Фото</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" href="#">Калькуляторы</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" href="#">Документы</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" href="#">База знаний</a>

                                    </li>

                                </ul>

                                <ul class="navbar-nav mr-auto">

                                    <li class="nav-item py-1 my-auto">

                                        <button type="button" class="btn btn-primary btn-text-sm p-3">Вы исполнитель?</button>

                                    </li>

                                </ul>

                            </div>

                        </nav>

                    </div>

                </div>

            </div>

            <div class="gray-line"></div>

            <div class="container mt-5">

                <div class="row">

                    <div class="col">

                        <div class="row">

                            <div class="col-xl-2 col-lg-4 col-6 mb-5">

                                <p class="footer-block-title btn-text-big weight-500 mb-5">Заказчику</p>

                                <ul class="footer-block-list">

                                    <li><a class="underlined-link" href="#">Регистрация</a></li>

                                    <li><a class="underlined-link" href="#">Создать заявку</a></li>

                                    <li><a class="underlined-link" href="#">Найти исполнителя</a></li>

                                    <li><a class="underlined-link" href="#">Найти консультанта</a></li>

                                    <li><a class="underlined-link" href="#">Узнать стоимость</a></li>

                                    <li><a class="underlined-link" href="#">Документация по заявке</a></li>

                                    <li><a class="underlined-link" href="#">Каталог услуг</a></li>

                                    <li><a class="underlined-link" href="#">Каталог товаров</a></li>

                                    <li><a class="underlined-link" href="#">Галерея работ</a></li>

                                    <li><a class="underlined-link" href="#">Готовые проекты</a></li>

                                </ul>

                            </div>

                            <div class="col-xl-2 col-lg-4 col-6 mb-5">

                                <p class="footer-block-title btn-text-big weight-500 mb-5">Исполнителю</p>

                                <ul class="footer-block-list">

                                    <li><a class="underlined-link" href="#">Регистрация</a></li>

                                    <li><a class="underlined-link" href="#">Создать услугу</a></li>

                                    <li><a class="underlined-link" href="#">Создать товар</a></li>

                                    <li><a class="underlined-link" href="#">Подобрать заявку</a></li>

                                    <li><a class="underlined-link" href="#">Шаблоны документов</a></li>

                                    <li><a class="underlined-link" href="#">Законодательство</a></li>

                                    <li><a class="underlined-link" href="#">Програмное обеспечение</a></li>

                                    <li><a class="underlined-link" href="#">Услуги для бизнеса</a></li>

                                    <li><a class="underlined-link" href="#">Обучение</a></li>

                                    <li><a class="underlined-link" href="#">Продвижение профиля</a></li>

                                </ul>

                            </div>

                            <div class="col-xl-2 col-lg-4 col-6 mb-5">

                                <p class="footer-block-title btn-text-big weight-500 mb-5">Категории</p>

                                <ul class="footer-block-list">

                                    <li><a class="underlined-link" href="#">Проектирование</a></li>

                                    <li><a class="underlined-link" href="#">Строительство</a></li>

                                    <li><a class="underlined-link" href="#">Ремонт и отделка</a></li>

                                    <li><a class="underlined-link" href="#">Инженерные сети</a></li>

                                    <li><a class="underlined-link" href="#">Загородное строительство</a></li>

                                    <li><a class="underlined-link" href="#">Строительные материалы</a></li>

                                    <li><a class="underlined-link" href="#">Строительная техника</a></li>

                                    <li><a class="underlined-link" href="#">Банковские гарантии</a></li>

                                    <li><a class="underlined-link" href="#">Бухгалтерские услуги</a></li>

                                    <li><a class="underlined-link" href="#">Страхование</a></li>

                                </ul>

                            </div>

                            <div class="col-xl-2 col-lg-4 col-6 mb-5">

                                <p class="footer-block-title btn-text-big weight-500 mb-5">О сервисе</p>

                                <ul class="footer-block-list">

                                    <li><a class="underlined-link" href="#">О нас</a></li>

                                    <li><a class="underlined-link" href="#">Как пользоваться</a></li>

                                    <li><a class="underlined-link" href="#">Новости</a></li>

                                    <li><a class="underlined-link" href="#">События</a></li>

                                    <li><a class="underlined-link" href="#">Реклама на сайте</a></li>

                                    <li><a class="underlined-link" href="#">API</a></li>

                                    <li><a class="underlined-link" href="#">Отзывы</a></li>

                                    <li><a class="underlined-link" href="#">Тарифы и цены</a></li>

                                    <li><a class="underlined-link" href="#">Служба поддержки</a></li>

                                    <li><a class="underlined-link" href="#">Наши представители</a></li>

                                </ul>

                            </div>

                            <div class="col-xl-2 col-lg-4 col-6 mb-5">

                                <p class="footer-block-title btn-text-big weight-500 mb-5">База знаний</p>

                                <ul class="footer-block-list">

                                    <li><a class="underlined-link" href="#">Регламенты</a></li>

                                    <li><a class="underlined-link" href="#">Документы</a></li>

                                    <li><a class="underlined-link" href="#">Готовые договоры</a></li>

                                    <li><a class="underlined-link" href="#">Калькуляторы</a></li>

                                    <li><a class="underlined-link" href="#">Вакансии</a></li>

                                    <li><a class="underlined-link" href="#">Статьи и блоги</a></li>

                                    <li><a class="underlined-link" href="#">Вопрос-ответ</a></li>

                                    <li><a class="underlined-link" href="#">Советы специалистов</a></li>

                                    <li><a class="underlined-link" href="#">Форум</a></li>

                                    <li><a class="underlined-link" href="#">Полезные ссылки</a></li>

                                </ul>

                            </div>

                            <div class="col-xl-2 col-lg-4 col-6 mb-5">

                                <p class="footer-block-title btn-text-big weight-500 mb-5">Связаться</p>

                                <ul class="footer-block-list">

                                    <li>

                                        <div>

                                            <a class="icon-middle whatsapp-icon mr-4 vertical-middle" href="#"></a>

                                            <a class="icon-middle telegram-icon mr-4 vertical-middle" href="#"></a>

                                            <a class="icon-middle viber-icon mr-4 vertical-middle" href="#"></a>

                                        </div>

                                    </li>

                                    <li>

                                        <span class="link">

                                            +7 (495) 000-00-00

                                        </span>

                                    </li>

                                    <li><a class="underlined-link" href="#">info@mail.ru</a></li>

                                    <li><a class="underlined-link" href="#">Обратная связь</a></li>

                                    <li>

                                        <span class="link" href="#">Сообщества:</span>

                                    </li>

                                    <li>

                                        <div>

                                            <a class="icon-middle vk-icon mr-4 vertical-middle" href="#"></a>

                                            <a class="icon-middle telegram-icon mr-4 vertical-middle" href="#"></a>

                                            <a class="icon-middle instagram-icon mr-4 vertical-middle" href="#"></a>

                                            <a class="icon-middle facebook-icon mr-3 vertical-middle" href="#"></a>

                                            <a class="icon-middle youtube-icon vertical-middle" href="#"></a>

                                        </div>

                                    </li>

                                    <li><a class="underlined-link" href="#">Блог</a></li>

                                    <li><a class="underlined-link" href="#">Подписаться</a></li>

                                    <li><a class="underlined-link" href="#">Конфиденциальность</a></li>

                                    <li><a class="underlined-link" href="#">Личный кабинет</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="footer-bottom m-0">

                <ul class="footer-bottom-list">

                    <li class="text-center"><a class="link color-gray" href="#">Конфиденциальность</a></li>

                    <li class="text-center">

                        <span class="color-gray">

                            Ваш город: 

                        </span>

                        <span class="dropdown">

                            <a class="dropdown-toggle link color-gray" href="#" id="otherDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                Москва

                            </a>

                            <div class="dropdown-menu" aria-labelledby="otherDropdown">

                                <a class="dropdown-item" href="#">Город 1</a>

                                <a class="dropdown-item" href="#">Город 2</a>

                                <a class="dropdown-item" href="#">Город 3</a>

                            </div>

                        </span>

                    </li>

                    <li class="text-center"><span class="color-gray">Будь в курсе наших новостей!</span></li>

                    <li class="text-center">

                        <span>

                            <input type="text" placeholder="Укажите ваш e-mail" class="vertical-middle footer-email-input mr-2">

                            <button type="button" class="btn btn-primary btn-text-sm p-3 vertical-middle">Подписаться</button>

                        </span>

                    </li>

                </ul>

            </div>

        </footer>

        <!-- End document -->



        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="jquery/jquery-3.4.1.min.js"></script>

        <script src="popper/popper.min.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>



        <!-- Optional JavaScript -->

        <script src="js/main-script.js"></script>



    </body>

</html>