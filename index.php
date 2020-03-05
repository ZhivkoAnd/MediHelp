<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="bg">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140777965-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140777965-1');
</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="WlzDGxc23h7qmpRC46NObnPNSuFu4zt_NJMZq0JRUC0" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="apple-touch-icon" href="img/favicon-32x32.png" />

    <link rel="canonical" href="https://www.medihelp.center/">
    <link rel=”alternate” href="https://www.medihelp.center/" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/" hreflang="en" />

    <title>Медицински Център Медихелп - Приморско</title>
    <meta itemprop="name" content="Медицински Център Медихелп - Приморско">
    <meta itemprop="description" content="Медихелп е частен медицински център в Приморско за общо и специализирано здравно обслужване.">
    <meta itemprop="image" src="img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="МЕДИХЕЛП" />
    <meta property="og:description" content="Медицински Център Медихелп" />
    <meta property="og:site_name" content="МЕДИХЕЛП" />

    <meta name="description" content="Медихелп е частен медицински център в Приморско за общо и специализирано здравно обслужване.">
    <meta name="keywords" content="Медицински център, Медицински център Приморско, Медицински център Медихелп Приморско, Лекар Приморско, Педиатър Приморско, Хирург Приморско, Детски Лекар Приморско, Спешен кабинет Приморско, Медицински транспорт Приморско, Лекар Китен, Лекар Лозенец, Лекар Бургас, Педиатър Бургас, Хирург Бургас, Детски лекар Бургас">

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/MainCss.css" rel="stylesheet" type="text/css" />
    

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
    <div class="warlord">

        <header class="site-header navbar-transparent">

            <div class="banner auto-size" id="toppheader" style="background: url('img/Slider1.jpg') no-repeat;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: cover; ">

                <div class="container">
                    <h1 class="KaRappa">
                        <div class="minih3">Медицински център</div>МЕДИХЕЛП
                    </h1>
                </div>


                <!-- CAROUSEL 


                <div class="content-container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="car-wrapp">
                                <div class="carousel slide hidden-xs" data-ride="carousel" id="babe">
                                    <ol class="carousel-indicators">
                                        <li data-target="#babe" data-slide-to="0" class="active"></li>
                                        <li data-target="#babe" data-slide-to="1"></li>
                                        <li data-target="#babe" data-slide-to="2"></li>
                                    </ol>

                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="img/Slider2.png" alt="stethoscope">
                                            <div class="carousel-caption">
                                                <p class="caruhead">Добре дошли в<span style="text-transform:uppercase"> Медихелп</span></p>
                                                <p class="carutext">Благодарим Ви, че избрахте нашите услуги, за да отговорим на Вашите здравни нужди.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Slider1.jpg" alt="Doctors-performing-surgery">
                                            <div class="carousel-caption">
                                                <p class="caruhead">Добре дошли в<span style="text-transform:uppercase"> Медихелп</span></p>
                                                <p class="carutext">Благодарим Ви, че избрахте нашите услуги, за да отговорим на Вашите здравни нужди.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/Slider3.png" alt="Doctors-performing-surgery-2">
                                            <div class="carousel-caption">
                                                <p class="caruhead">Добре дошли в<span style="text-transform:uppercase"> Медихелп</span></p>
                                                <p class="carutext">Благодарим Ви, че избрахте нашите услуги, за да отговорим на Вашите здравни нужди.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="left carousel-control" href="#babe" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#babe" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- END OF CAROUSEL -->
            </div>

        </header>

        <!-- END OF HEADER -->


        <div class="container-fluid" style="background-color: #e9f5f5; box-shadow: 0 -7px 10px 3px #e9f5f5";>

            <!-- Main content -->
            <div class="inside">

                <h2 class="mayo">Какво е Медихелп ?</h2><br>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

                        <p class="glaventext">
                            Mедицински център Медихелп Приморско е частен медицински център за специализиранa доболнична медицинска помощ.
                            Собственик и управител е д-р Николай Стойчев.
                            Дейността стартира през 2004 година и е насочена към осигуряване на достъпна медицинска помощ за всички нуждаещи се
                            от неотложна и спешна медицинска доболнична грижа в този район.
                            Нашите врати са отворени за пациенти от всички възрастови групи 7 дни в седмицата. <br>
                            <br> • Уговаряне на час не е наложително.
                            <br> • Приемаме повечето застраховки.
                            <br><br>
                            Ние обслужваме Приморско, Бургас, Китен, Лозенец, Созопол, Царево и разположените по крайбрежието хотели, туристически селища и комплекси.
                            Ние сме единственото лечебно заведение в региона, което предлага специализирана медицинска помощ.
                            Притежаваме необходимата апаратура за диагностика и лечение и в много случаи спешните състояния ще бъдат овладяни в центъра.<br><br>
                            Разполагаме със спешен кабиент в Приморско, осигуряваме и медицински транспорт в Приморско и околните градове. Нашите лекари обслужват и Бургас в партньорство с болнично заведение.
                            Както в Приморско и Бургас, така и в Китен, Лозенец, Созопол и Царево разполагаме с лекар, хирург, педиатър, терапевт и реанимационен екип.<br>

                            <br> <span style="color:#990000; font-weight:800;">• За гостите на ММЦ Приморско, първичният преглед при неотложни и спешни състояния, включително наранявания и травми, е <span style="text-decoration:underline" ;>БЕЗПЛАТЕН.</span></span> <br> • При необходимост ще ви осигурим безплатен медицински транспорт с медицински екип до най-близкото лечебно заведение.
                        </p>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="lekari">
                            <p class="textt">
                                Лекари на които може да се доверите при нужда: <br> <br> • терапевт - ОПЛ с опит в спешната медицина <br> • хирург<br> • педиатър<br> • реанимационен екип /лекар-реаниматор за пациенти в критично състояние/<br> • медицински транспорт <br><br>

                               Центърът работи без почивен ден от 08:00 до 20:00 часа, а през нощта отговоря спешен екип на номер 0887411608.</p>
                        </div>
                    </div>
                </div>



                <br>


                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="img/Kontakti.jpg" alt="Man with telephone" class="d-block w-full">

                            <div class="px-2 py-2">


                                  <a href="kontakti.php" class="text-uppercase d-inline-block lts-2px ml-2 mb-2 text-center styled-link" ;>
                                Контакти
                            </a>

                                <p class="mb-1">
                                    Моля, не се колебайте да се свържете с нас по каквито и да било медицински въпроси.
                                </p>

                            </div>

                           

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="img/Deinosti.jpg" alt="Surgery" class="d-block w-full">

                            <div class="px-2 py-2">


                                <a href="koremna-hirurgia.php" class="text-uppercase d-inline-block lts-2px ml-2 mb-2 text-center styled-link" ;>
                                Хирургии
                            </a>

                                <p class="mb-1">
                                    Тук можете да видите информация за операциите, които извършваме.
                                </p>

                            </div>

                         

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="img/ZaNas.jpg" alt="Man with stethoscope" class="d-block w-full img-responsive">

                            <div class="px-2 py-2">


                                 <a href="za-nas.php" class="text-uppercase d-inline-block lts-2px ml-2 mb-2 text-center styled-link" ;>
                                За Нас
                            </a>

                                <p class="mb-1">
                                    Тук можете да видите информация за нашите доктори,оборудване и полици.
                                </p>

                            </div>

                           

                        </div>
                    </div>
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
                             <div>Последвайте ни&nbsp;&nbsp;<a href="https://www.facebook.com/Медицински-Център-Медихелп-667364060355224/" target="_blank"><img src="img/fb.png" alt="facebook icon" style="width:35px"/></a></div>
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
                             <br>Последвайте нашият блог:&nbsp;&nbsp;<a style="color: #fffa37;
    font-weight: 800;" href="https://www.top-form.org/" rel="dofollow" target="_blank">Top Form</a><br>
                            © 2004-2019 "Медихелп" - Приморско.<br>
                            Всички права запазени.<br><br>
                            Разработка: Живко Андреев
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Footer -->


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
