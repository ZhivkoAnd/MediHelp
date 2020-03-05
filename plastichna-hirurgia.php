<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="bg">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="canonical" href="https://www.medihelp.center/plastichna-hirurgia.php">
    <link rel=”alternate” href="https://www.medihelp.center/plastichna-hirurgia.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/plastic-surgery.php" hreflang="en" />
    <link rel="apple-touch-icon" href="img/favicon-32x32.png" />
    <title>Пластична Хирургия | Бургас | М.Ц. Медихелп</title>
    <meta itemprop="name" content="Пластична Хирургия | Бургас | М.Ц. Медихелп">
    <meta name="description" content="Корекция и лечение на естетични дефекти от различен произход. Вижте какви операции извършваме.">
    <meta itemprop="image" src="img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="МЕДИХЕЛП" />
    <meta property="og:description" content="Пластична Хирургия" />

    <meta itemprop="description" content="Корекция и лечение на естетични дефекти от различен произход. Вижте какви пластични операции извършваме.">
    <meta name="keywords" content="Пластична хирургия, Пластична хирургия Бургас, Естетична Хирургия Бургас, Пластични операции, Пластични операции Бургас, корекция на уши, корекция на уши Бургас, Премахване на бенки, бенки премахване, Премахване на бенки Бургас">
    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/MainCss.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Philosopher|Russo+One&display=swap" rel="stylesheet">
</head>


<body data-spy="scroll">


   <!-- NAVIGATION -->

    <nav class="navbar navbar-inverse sidebar" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden-xs" href="index.php"><img class="logo" src="img/jivko_logooo.png" alt="logo"></a>

                <!-- Prozor4e s ezici i telefoni -->

                <div class="lang hidden-xs">

                    <a href="index.php"> <img class="hvr-grow" src="img/bg-flag.gif" alt="bg" style="width:35px; -webkit-box-shadow: 0px 0px 15px 1px rgba(46, 62, 88);
                                            -moz-box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);
                                            box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="en/index.php"> <img class="hvr-grow" src="img/uk-flag.gif" alt="uk" style="width:35px; -webkit-box-shadow: 0px 0px 15px 1px rgba(46, 62, 88);
                                            -moz-box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);
                                            box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);">
                    </a>
                    <div class="btn2">
                        <div class="button2"><img src="img/icon_phone.png" alt="phone" />&nbsp;&nbsp;00359887411608</div>
                        <div class="button2"><img src="img/email_icon.png" alt="email" />&nbsp;&nbsp;medihelp@abv.bg</div>
                    </div>
                </div>
                <div style="text-align: center;  margin-top: 13px;">

                </div>

                <div class="lang2 hidden-md hidden-lg hidden-sm">


                    <a href="index.php"> <img class="hvr-grow" src="img/bg-flag.gif" alt="bg" style="width:35px; -webkit-box-shadow: 0px 0px 15px 1px rgba(46, 62, 88);
                                            -moz-box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);
                                            box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);">
                    </a>
                    <a href="en/index.php"> <img class="hvr-grow" src="img/uk-flag.gif" alt="uk" style="width:35px; -webkit-box-shadow: 0px 0px 15px 1px rgba(46, 62, 88);
                                            -moz-box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);
                                            box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);">
                    </a>
                </div>



                <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
                            {
                            ?>
                <p class="regii">Добре Дошли
                    <?php echo $_SESSION['username']; ?>!</p> <a href="logout.php" class="regiii"> [ Излез ]</a>
                <?php }else{ ?>
                <a href="login.php" class="regi"> Влез | Регистрирай се </a>
                <?php } ?>

            </div>

            <!-- Krai na Prozor4e s ezici i telefoni -->

        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Начало<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Хирургии<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-certificate"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="koremna-hirurgia.php">Коремна Хирургия</a></li>
                        <li><a href="plastichna-hirurgia.php">Пластична Хирургия</a></li>
                        <li><a href="kolorektalna-hirurgia.php">Колоректална Хирургия</a></li>
                        <li><a href="kolonoskopia.php">Колоноскопия</a></li>
                        <li><a href="gastroskopia.php">Гастроскопия</a></li>


                    </ul>
                </li>
                <li><a href="kontakti.php">Контакти<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-phone"></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">За Нас<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="za-nas.php">Доктори</a></li>
                        <li><a href="za-nas.php">Оборудване</a></li>
                        <li><a href="za-nas.php">Такси и Застраховки</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Галерия<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-picture"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="galeria.php">Снимки</a></li>
                        <li><a href="virtualna-realnost.php">VR Картина</a></li>

                        <!--  <li class="divider"></li>
                                                             <li><a href="#">Separated link</a></li>
                                                             <li class="divider"></li>
                                                             <li><a href="#">One more separated link</a></li> -->
                    </ul>
                </li>
            </ul>
        </div>

    </nav>
    <!-- END OF NAVIGATION -->


    <!-- HEADER -->


    <!-- END OF HEADER -->


    <div class="warlord">

        <div class="container-fluid" style="background-color: #e9f5f5;">
            <div class="inside">

                <h1 id="deinosti" class="newh" style="border-bottom:3px solid black; text-align:center"> Пластична хирургия </h1>
                   <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="img/boobs.png" alt="pretty boobs" class="d-block w-full">

                            <div class="px-2 py-2">


                                  <a href="ugolemiavane-na-gurdi.php" class="text-uppercase d-inline-block lts-2px ml-2 mb-2 text-center styled-link" ;>
                                Уголемяване на Гърди
                            </a>

                                <p class="mb-1">
                                   • Увеличаване с импланти<br>
                                   • Повдигане на бюст<br>
                                   • Реконструкция на гърдите
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="img/lips.png" alt="juicy lips" class="d-block w-full">

                            <div class="px-2 py-2">


                                <a href="ugolemiavane-na-ustni.php" class="text-uppercase d-inline-block lts-2px ml-2 mb-2 text-center styled-link" ;>
                                Уголемяване на Устни
                            </a>

                                <p class="mb-1">
                                   • Увеличаване с хиалуронова киселина<br>
                                   • Поставяне на импланти
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="img/Ass.png" alt="Nice Ass" class="d-block w-full img-responsive">

                            <div class="px-2 py-2">


                                 <a href="liposukcia.php" class="text-uppercase d-inline-block lts-2px ml-2 mb-2 text-center styled-link" ;>
                               Липосукция
                            </a>

                               <p class="mb-1">
                                   • Oтстраняване на мастни депа<br>
                                   • Премахване на целулита<br>
                                   • Заглаждане на кожата
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
                 <div class="deinost">
                
                    <div style="display: inline-block; text-align: left">


                        Освен пластични операции като липосукции, уголемяване на гърди или устни, <br> в Медихелп извършваме и Естетична хирургия - корекция и лечение на естетични дефекти <br> от различен произход, като корекция на уши, премахване на бенки и други.</div>
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a role="tab" data-toggle="tab" href="#doctor1">Пластика на предната коремна стена</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor2">Лечение на рани с кожна пластика</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor3">Оперативно лечение на кожни образувания</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor4">Оперативно лечение на белези</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor5">Лечение на изгаряния</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor6">Дермабразио</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor7">Лечение на травми и рани на лицето</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor8">Премахване на бенки</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor10">Корекция на уши</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor11">Лечение на трудно зарастващи рани</a></li>
                </ul>
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="doctor1">

                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Пластика на предната коремна стена /абдоменопластика/</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;"> • Операцията се извършва по козметични причини или по медицински показания /затлъстяване/<br> • Пластиката на предната коремна стена е сериозна хирургическа операция. <br> • Извършва се под обща анестезия и понякога трае три-четири часа.</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorA/Picture1.png" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorA/Picture1.png" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorA/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorA/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorA/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorA/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorA/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorA/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorA/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorA/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorA/Picture6.png" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorA/Picture6.png" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorA/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorA/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorA/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorA/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>

                    <div role="tabpanel" class="tab-pane" id="doctor2">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Лечение на рани с кожна пластика</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">Рани, при които има дефект /липса на тъкани/ успешно могат да се лекуват чрез пренасяне на кожа от друго място на тялото. Необходимо е: <br><br>
                                • Да се отстранят некротичните /мъртвите/ тъкани<br>
                                • В раната да се образуват свежа, добре кръвоснабдена /гранулационна/ тъкан </p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture9.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture9.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture10.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture10.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture11.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture11.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture12.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture12.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorB/Picture13.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorB/Picture13.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="doctor3">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Оперативно лечение на кожни образувания <br>/доброкачествени и злокачествени/</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">• Прилага се радикално /до здрави тъкани/ изрязване.<br>
                                • Полученият кожен дефект се покрива с тъкани по съседство.<br>
                                • Задължително се изпраща материал за хистологично /микроскопско/ изследване.</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture9.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture9.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture10.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture10.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture11.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture11.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture12.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture12.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture13.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture13.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture14.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture14.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture15.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture15.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture16.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture16.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture17.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture17.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorC/Picture18.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorC/Picture18.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                </div>



                            </div>
                        </div>
                    </div>



                    <div role="tabpanel" class="tab-pane" id="doctor4">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Оперативно лечение на белези</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">• Оперативната корекция на белези /цикатрикси/ се налага поради ограничаване на функцията или по козметични причини.<br>
                                • Операциите са многоетапни.</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture9.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture9.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture10.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture10.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture11.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture11.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture12.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture12.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture13.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture13.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture14.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture14.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture15.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture15.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture16.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture16.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture17.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture17.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorD/Picture18.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorD/Picture18.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                </div>



                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" class="tab-pane" id="doctor5">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Лечение на изгаряния</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">Правилното, консервативно /неоперативно/ лечение на изгарянията обикновено е с добри резултати</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorE/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorE/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorE/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorE/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorE/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorE/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorE/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorE/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorE/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorE/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorE/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorE/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorE/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorE/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorE/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorE/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>




                                </div>


                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="doctor6">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Дермабразио</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">• Със специални дискове, въртящи се с висока скорост се премахва повърхностния слой на кожата.<br>
                                • Опитът на хирурга е от голямо значение за добрия резултат.<br>
                                • Понякога се налага дермабразио на няколко етапа. Изисква се търпение от пациента и лекаря. </p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorF/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorF/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorF/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorF/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorF/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorF/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorF/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorF/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" class="tab-pane" id="doctor7">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Лечение на травми и рани на лицето</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">Раните на лицето изискват внимателно и грамотно лечение. Тяхната обработка /шев/ може да се отложи дори с 1-2 дни. <br>
                                По-добре е с превръзка да спрете кървенето и да потърсите квалифициран хирург. Шев с дебели конци или напълване на раната с лепило води до грозни белези за цял живот.</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture9.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture9.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture10.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture10.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture11.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture11.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture12.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture12.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture13.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture13.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorG/Picture14.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorG/Picture14.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="doctor8">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Премахване на бенки</h2><br>
                            <p class="ushi" style="display: inline-block; text-align: left;">Хирургично премахване на бенка, дали поради козметични причини, или защото бенката е ракова, може да доведе до белег. Въпреки това, полученият белег може да изчезне сам по себе си в зависимост от такива фактори като:<br><br>

                                • Вашата възраст<br>
                                • Вида на операцията<br>
                                • Местоположението на бенката<br><br>
                                Може да се окаже почти невъзможно да се види точно къде е извършена процедурата.

                                Има разнообразие от продукти и методи, които можете да опитате да минимизирате белег за премахване на бенки. </p><br><br>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="doctor10">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Корекция на уши</h2><br>
                            <p class="ushi" style="display: inline-block; text-align: left;">


                                Отопластиката, известна също като козметична хирургия на ушите, е процедура за корекция на уши<br> - промяна на формата, позицията или размера на ушите.<br><br>

                                Може да изберете да имате отопластика, ако ви е притеснено от това, докъде излизат ушите от главата ви. Може също да помислите за отопластика, ако ухото или ушите ви са деформирани поради нараняване или раждане.<br><br>

                                Отопластиката може да се направи на всяка възраст, след като ушите са достигнали пълния си размер - обикновено след 5 годишна възраст - през зряла възраст. В някои случаи операцията се извършва още на възраст 3 години.<br>

                                Ако детето е родено с видни уши и някои други проблеми с формата на ухо, шинирането може успешно да коригира тези проблеми, ако започне веднага след раждането.<br><br>


                                Може да помислите за отопластика, ако:<br><br>

                                • Ухото или ушите ви излизат твърде далеч от главата ви<br>
                                • Ушите ви са големи пропорционално на главата ви<br>
                                • Не сте доволни от предишната хирургия на ушите<br><br>

                                Отопластиката обикновено се прави на двете уши, за да се оптимизира симетрията.<br>

                                Отопластиката може да се направи на всяка възраст, след като ушите са достигнали пълния си размер - обикновено след 5-годишна възраст.<br><br>

                                Важно ! Отопластиката няма да промени местоположението на ушите ви или да промени способността ви да чувате.</p><br><br>

                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorJ/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorJ/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorJ/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorJ/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorJ/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorJ/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorJ/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorJ/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorJ/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorJ/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorJ/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorJ/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="doctor11">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Лечение на трудно зарастващи рани</h2><br>

                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorK/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorK/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorK/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorK/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorK/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorK/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorK/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorK/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorK/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorK/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="img/doctorK/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="img/doctorK/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>


                                </div>


                            </div>
                        </div>

                    </div>





                </div>

                <div class="deinost">
                    <div style="display: inline-block; text-align: left">
                        Хирургичната дейност се осъществява в партньорство с болнично заведение. <br> Моля, не се колебайте да се свържете с нас по каквито и да е било въпроси като пациент,<br> на номер <strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359887411608">0887411608</a></span></i></strong>. За обаждане може да кликнете върху телефонния номер.</div>
                </div>

                <br>
            </div>
        </div>

        <!-- Footer -->

        <footer class="site-footer">
            <div class="container-fluid">
                <div class="foter">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="foter2">
                            <img class="logo" src="img/jivko_logooo.png" alt="Medihelp logo" style="width:150px; margin-bottom:16px;">
                            <p>
                                Медихелп обслужва Приморско, Бургас,<br> Китен, Лозенец, Созопол, Царево<br> и разположените по крайбрежието<br> хотели, туристически селища и комплекси.</p>
                            <div>Последвайте ни&nbsp;&nbsp;<a href="https://www.facebook.com/Медицински-Център-Медихелп-667364060355224/" target="_blank"><img src="img/fb.png" alt="facebook icon" style="width:35px" /></a></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="foter2">
                            <p style="font-size:22px;"> Работно Време </p>
                            <p> Понеделник до Неделя
                                от 8:00 до 22:00
                            </p><br>
                            <p style="font-size:22px;"> Контакти </p>
                            <p style="font-size:"> Телефон:&nbsp;00359887411608 <br>
                                E-mail: medihelp@abv.bg<br>
                                     Адрес: Приморско, Les Magnolias Club Hotel </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="foter2">
                            <p><a href="sitemap.php" style="font-size:22px; color:whitesmoke; text-decoration:underline;">Карта на сайта</a></p>
                            <br>
                            © 2004-2019 "Медихелп" - Приморско.<br>
                            Всички права запазени.<br><br>
                            Разработка: Живко Андреев
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="js/form-validation.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Script.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>



</body>

</html>
