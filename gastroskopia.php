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
    <link rel="apple-touch-icon" href="img/favicon-32x32.png" />
    <link rel="canonical" href="https://www.medihelp.center/gastroskopia.php">
    <link rel=”alternate” href="https://www.medihelp.center/gastroskopia.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/gastroscopy.php" hreflang="en" />

    <title>Гастроскопия | Бургас | Медицински Център Медихелп</title>
    <meta itemprop="name" content="Гастроскопия | Бургас | Медицински Център Медихелп">
    <meta name="description" content="Гастроскопия е метод за изследване на хранопровода, стомаха и дуоденума. Какво трябва да знаем за нея ?">
    <meta itemprop="image" src="img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="МЕДИХЕЛП" />
    <meta property="og:description" content="Гастроскопия" />

    <meta itemprop="description" content="Гастроскопия е метод за изследване на хранопровода, стомаха и дуоденума. Какво трябва да знаем за нея ?">
    <meta name="keywords" content="Гастроскопия, Гастроскопия Бургас, Гастроскопия Приморско, Фиброгастроскопия, атрофичен гастрит, полипи, полипи на стомаха">
    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/MainCss.css" rel="stylesheet">

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

        <div class="container-fluid" style="min-height:73.2%; background-color: #e9f5f5;">
            <div class="inside">

                <h1 id="zanas" class="newh" style="border-bottom: 3px solid black;">Гастроскопия</h1>

                <br>

                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">



                        <div class="wrapper center-block">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                        <h2 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Какво е Гастроскопия ( Горна ендоскопия ) ?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p class="udebelen"> Гастроскопия, или горна ендоскопия, е процедура, при която през устата се въвежда гъвкав ендоскоп, с който последователно се оглеждат хранопровода, стомаха и дванадесетопръстника (долдено). <br>Целта е диагностициране на заболявания на тези органи. Това е най добрият метод за изследване и оценка при множество симптоми.

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading6">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                Гастроскопия Подготовка
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                        <div class="panel-body">
                                            <p class="textt"> Вашият лекар ще Ви даде пълни инструкции как да се подготвите за Вашата ендоскопия.
                                                  Говорете с Вашия лекар за предишната си история и всички предписани лекарства, включително:<br><br>
                                                • Аспирин и лекарства, съдържащи аспирин<br>
                                                • Лекарства за артрит <br>
                                                • Нестероидни противовъзпалителни лекарства <br>
                                                • Разредители за кръв<br>
                                                • Лекарства за кръвно налягане<br>
                                                • Диабет<br>
                                                • Не яжте и не пийте преди процедурата<br>
                                                • Най-често ще бъдете посъветвани да не ядете, пиете, пушите или дъвчете дъвка в продължение на 8 часа преди процедурата. <br></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Какво да се очаква по време на Гастроскопията ?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <p class="udebelen"> По време на гастроскопията, с помощта на специален инструмент, се взимат биопсии, за патохистологично изследване на видимите при изследването променени участъци. Ендоскопистът има възможност да извършва и лечебни интервенции: разширяване на стеснени участъци, да премахва полипи, погълнати чужди тела, да спира кървене от хранопровода, стомаха или дванадесетопръстника.<br></p>
                                        </div>
                                    </div>
                                </div>



                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Причини да си направим Гастроскопия
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                • Патологична или съмнителна рентгенова находка<br>
                                                • Кървене<br>
                                                - Предшвестващо или активно кървене от ГИТ<br>
                                                - Окултно кървене<br>
                                                - Анемия с неуточнена етиология<br>
                                                • Горно и долно диспептичен синдром при мъже и жени над 40г.<br>
                                                • Дисфагия от Различен тип.<br>
                                                • Рискови Групи за карцином на стомах и дебело черво <br>
                                                - Фамилна анамнеза за карцином на стомах, колон <br>
                                                - Анамнеза за стомашна язва.<br>
                                                - Скрининг при висок риск при неоплазии на колона ( фамилна аденоматозна полипоза )<br>
                                                - Възпалителни – улцерозен панколит над 7 години, улцерозен ляв ректоколит повече от 15 години.<br>
                                                - Възпалителни дебелочревни заболявания и хронична диария с неизвестна етиология./<br>
                                                - Изасняване на диагнозата, активоността и разпространението, установяване на ремисия.<br>
                                                • Предстояща продължителна терапия с антикоагуланти<br>
                                                • Пациенти с предшестваща полипектомия от всякакъв тип.<br>
                                                • Пациенти след стомашна или дебелочревна резекция – оценка на анастомозата и проследяване „ Еволюция“ на стриктура.<br>
                                                • Съмнение за карцином<br>
                                                • Профилактичен преглед без конкретни показания <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Терапевтична Горна и Долна ендоскопия
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                • Полипектомия <br>
                                                • Ендоскопска мукозна резекция<br>
                                                • Локализиране източник на кървене и спиране на кървене<br>
                                                • Лигиране или склерозиране на варици на хранопровода<br>
                                                • Изваждане на чужди тела<br>
                                                - Дилатация- балонна дилатация на стриктура с различна етиология<br>
                                                - Стриктура на хранопровода от корозивни вещества, пръстен на Schatzki, рефлукс езофагит<br>
                                                - Пилорни и булбарни стенози следствие на язвена болест и с друга етиология<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading4">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                Фиброгастроскопия
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Фиброгастроскопия се извършва от гастроентеролог за комплексна и ранна диагностика на стомашни заболявания при хора, при които не се срещат обичайните симптоми.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading7">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                Потърсете спешна помощ, ако имате следните симптоми:
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                        <div class="panel-body">
                                            <p class="textt">

                                                • Болки в гърдите <br>
                                                • Проблеми с дишането <br>
                                                • Проблеми с преглъщането <br>
                                                • Болки в гърлото <br>
                                                • Повръщаме, ако има цвят на кръв или на кафе <br>
                                                • Болки в стомаха <br>

                                                Моля, не се колебайте да се свържете с нас по каквито и да било медицински въпроси. Ние извършваме Гастроскопия Бургас. Също така обслужваме Приморско, Китен, Лозенец, Созопол и Царево.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading5">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                Полипи и Полипи на стомаха
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Полипите са необичайни тъканни израстъци, които най-често изглеждат като малки, плоски натъртвания или малки гъбички. Повечето полипи са малки и по-малко от половин инч широк.<br>Полипите в дебелото черво са най-често срещаните, но също така е възможно да се развият полипи на места, които включват:<br><br>

                                               •  Ушния канал<br>
                                               •  маточна шийка<br>
                                               •  стомаха<br>
                                               •  носа<br>
                                               •  матката<br>
                                               •  гърлото<br><br>
                                                
                                                Повечето полипи са доброкачествени, което означава, че са неракови. Но тъй като те се дължат на необичаен клетъчен растеж, те в крайна сметка могат да станат злокачествени или ракови. Вашият лекар може да ви помогне да определите дали растежът е полип чрез извършване на биопсия. Това включва вземане на малка проба от тъкани и тестване за наличие на ракови клетки.<br><br>

                                                Лечението на полипи зависи от тяхното местоположение, размер и дали са доброкачествени или злокачествени.<br><br>
                                                Какво е полип на стомаха ?<br><br>
                                                Стомахът или стомашният полип е необичаен растеж на тъканта във вътрешната обвивка на стомаха. В зависимост от вида, полипите могат да се появят в снопове в определени области на стомаха. Местоположението на полипите помага за идентифициране на типа.Повечето полипи на стомаха не са ракови, но има някои видове, които имат по-висок риск да се превърнат в рак.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading9">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                                Атрофичен гастрит
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Атрофичния гастрит се характеризира с хронично възпаление на стомашната лигавица, със загуба на стомашни жлези и заместване с епител от чревния тип, жлези от пилорен тип и фиброзна тъкан. Атрофията на стомашната лигавица е крайната точка на хроничните процеси, като хроничен гастрит, свързан с инфекция с Helicobacter pylori или други неидентифицирани фактори на околната среда и автоимунитета, насочен срещу стомашните жлези.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="text-align:center;">
                        <img class="imagetabs img-responsive" src="img/gastroscopy.jpg" alt="gastroscopy"><br><br>
                        <div class="deinost">
                            <div style="display: inline-block; text-align: left">
                                Хирургичната дейност се осъществява в партньорство с болнично заведение. <br> Моля, не се колебайте да се свържете с нас по каквито и да е било въпроси като пациент, на номер <strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359887411608">0887411608</a></span></i></strong>. За обаждане може да кликнете върху телефонния номер.</div>
                        </div>
                    </div>
                </div>
            </div>

            <br>




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

    <script src="js/bootstrap.min.js"></script>


</body>

</html>
