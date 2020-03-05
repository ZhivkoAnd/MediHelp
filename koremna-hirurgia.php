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
    <link rel="canonical" href="https://www.medihelp.center/koremna-hirurgia.php">
    <link rel=”alternate” href="https://www.medihelp.center/koremna-hirurgia.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/abdominal-surgery.php" hreflang="en" />
    <title>Oперация на Херния и Жлъчка | Бургас | М.Ц. Медихелп</title>
    <meta itemprop="name" content="Oперация на Херния и Жлъчка | Бургас | М.Ц. Медихелп">
    <meta name="description" content="Извършваме всички видове операции в областта на коремната хирургия - Херния, Жлъчка и други.">
    <meta itemprop="image" src="img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="МЕДИХЕЛП" />
    <meta property="og:description" content="Коремна Хирургия" />

    <meta itemprop="description" content="Извършваме всички видове операции в областта на коремната хирургия - Херния, Жлъчка и други.">
    <meta name="keywords" content="Херния, Операция на Херния Бургас, Операция от херния Бургас, Операция на ингвинална херния Бургас, Операция на пъпна херния Бургас, жлъчка, Операция на жлъчка, Операция на жлъчка Бургас">
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



                <h1 id="zanas" class="newh" style="border-bottom: 3px solid black;">Коремна Хирургия</h1>

                <br>

                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">

                        <div class="wrapper center-block">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                        <h2 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Херния на предната коремна стена
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Какво е херния?<br><br>
                                                Херния се появява, когато орган или мастна тъкан се притиска през слабо място в околния мускул или съединителна тъкан, наречена фасция. Най-често срещаните видове хернии са ингвинални (вътрешни слаби), инцизионни (в резултат на разрез), бедрена (външна слабина), пъпна (пъпа) и хиатална (горен стомах).<br><br>
                                                Какво причинява херния?<br><br>
                                                В крайна сметка, всички хернии са причинени от комбинация от налягане и отваряне или слабост на мускулите или фасциите; налягането избутва орган или тъкан през отвора или слабото място. Понякога мускулната слабост присъства при раждането; по-често се случва по-късно в живота.<br><br>

                                                Всичко, което причинява повишаване на налягането в корема, може да предизвика херния, включително:<br><br>

                                               - Повдигане на тежки предмети без стабилизиране на коремните мускули<br>
                                               - Диария или запек<br>
                                               - Устойчиво кашляне или кихане<br><br>
                                                Освен това, затлъстяването, лошото хранене и пушенето могат да отслабят мускулите и да направят херния по-вероятна.

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Ингвинална херния
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Ингвинална херния се появява, когато тъкан, например като част от червата, излиза през слабо място в коремните мускули. Получената изпъкналост може да бъде болезнена, особено когато кашляте, наклянате се или повдигате тежък предмет.
                                                Хернията не е непременно опасна. Тя обаче не се подобрява сама по себе си и може да доведе до животозастрашаващи усложнения. Оперирането на ингвинална херния е обичайна хирургична процедура.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingh">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseh" aria-expanded="false" aria-controls="collapseh">
                                                Пъпна херния
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseh" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingh">
                                        <div class="panel-body">
                                            <p class="udebelen"> Пъпна херния е, когато пъпът изскочи навън поради слабост в мускулите около пъпа.
                                                Пъпна херния е най-често срещана при жените по време и след бременността, както и при хора с наднормено тегло.
                                                Пълната херния сама по себе си не е опасна, но има риск, че ще бъде хваната в капан (затворена). Това може да отреже кръвоснабдяването на съдържанието на хернията, причинявайки животозастрашаващи състояния като гангрена или перитонит. Ако не се лекува, вашата херния вероятно ще се увеличи и ще се влоши състояните. В повечето случаи се препоръчва операция за премахване на хернията.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingg">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseg" aria-expanded="false" aria-controls="collapseg">
                                                Жлъчка и камъни в жлъчката
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseg" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingg">
                                        <div class="panel-body">
                                            <p class="udebelen"> Жлъчна чернодробна хирургия - По повод калкулоза(камъни) в жлъчния мехур. <br><br>

                                                - Холецистектомия<br>
                                                - Конвекционална <br>
                                                - Лапороскопска<br><br>

                                                Какви са жлъчните камъни -
                                                Това всъщност не са камъни. Това са парчета твърд материал, които се образуват в жлъчния мехур - малък орган, разположен под черния дроб.

                                                Може дори да не знаете, че ги имате, докато не блокират жлъчния канал, причинявайки болка. При тяхното откриване, трябва да започнете да се лекувате веднага.

                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>


                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <h4 class="malkizaglaviq"><strong> Други Операции</strong></h4><br>
                        <p class="glaventext" style="margin-bottom:0px; text-align:left;">
                            • Бенигнени ( Доброкачестевни) и Малигнени ( Злокачествени) – рак на стомах, рак на тънки черва и рак на дебели черва.<br>
                            • Апендектомии <br>
                            • Лечение на фисури и хемороиди<br>
                            • Всички спешни състояния в коремната хирургия<br>
                            • Премахване на полипи от дебели черва и от стомах ( полипектомия) <br>
                            • Лечение на синдром на дразнимото дебело черво<br>
                            • Хронични колити, улцерозни колити

                        </p><br><br>
                        <div class="deinost">
                        <div style="display: inline-block; text-align: left">
                            Хирургичната дейност се осъществява в партньорство с болнично заведение. <br> Моля, не се колебайте да се свържете с нас по каквито и да е било въпроси като пациент, на номер <strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359887411608">0887411608</a></span></i></strong>. За обаждане може да кликнете върху телефонния номер.</div></div>
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

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!-- <script src="js/form-validation.js"></script> -->
        <script src="js/bootstrap.min.js"></script>

    </div>
</body>

</html>
