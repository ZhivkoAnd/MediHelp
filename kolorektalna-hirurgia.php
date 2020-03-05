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
    <link rel="canonical" href="https://www.medihelp.center/kolorektalna-hirurgia.php">
    <link rel=”alternate” href="https://www.medihelp.center/kolorektalna-hirurgia.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/colorectal-surgery.php" hreflang="en" />
    <title>Лечение на Хемороиди и Фисури | Бургас | М.Ц. Медихелп</title>
    <meta itemprop="name" content="Лечение на Хемороиди и Фисури | Бургас | М.Ц. Медихелп">
    <meta name="description" content="Симптоми и Лечение на хемороиди и остри и хронични фисури. Какво да направим, за да ги избегнем ?">
    <meta itemprop="image" src="img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="МЕДИХЕЛП" />
    <meta property="og:description" content="Гастроскопия" />

    <meta itemprop="description" content="Симптоми и Лечение на хемороиди и остри и хронични фисури. Какво да направим, за да ги избегнем ?">
    <meta name="keywords" content="Хемороиди, хемороиди при деца, хемороиди лечение, лечение на хемороиди Бургас, фисура, фисура лечение, лечение на фисури Бургас, лечение на фисура Бургас,">

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

                <h1 id="zanas" class="newh" style="border-bottom: 3px solid black;">Хемороиди и фисури</h1>
                <br>


                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">



                        <div class="wrapper center-block">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                        <h2 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Хемороиди - Какво са Хемороидите
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p class="udebelen"> Хемороидите са подути вени в долната част на ануса и ректума. Когато стените на тези съдове са много опънати, те се дразнят.
                                                Въпреки че хемороидите могат да бъдат неприятни и болезнени, те лесно се лекуват и могат да бъдат предотвратени. Тъй като хемороидите обикновено се влошават с времето, лекарите предполагат, че трябва да бъдат лекувани веднага щом се появят.<br><br>
                                                • Жените са по-склонни да получат хемороиди по време на бременност.<br>
                                                • Вероятността за развитие на хемороиди се увеличава с възрастта на човек.<br>
                                                • Хемороидите се появяват, когато вените около ануса са наранени или увеличени.<br>
                                                • Понякога, лекарства и дори хирургия са необходими за лечение на хемороиди.

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Хемороиди при деца
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Тъй като бебетата не могат да ви кажат какво ги притеснява, важно е да сте бдителни и внимателни за някои симптоми, за да определите дали детето ви има хемороиди.<br><br>

                                                Въпреки че това ще бъде изключително рядка поява, ако видите подути, раздразнени бучки около ануса на вашето бебе, това може да е индикация за хемороиди.<br><br>

                                                Симптомите за хемороиди при деца вероятно са причинени от състояния като запек или анална цепка. Тези симптоми включват:<br><br>

                                                ивици ярко червена кръв в изпражненията<br>
                                                слузта изтича от ануса<br>
                                                плач по време на движение на червата<br>
                                                твърди, сухи изпражнения<br><br>
                                                Ако смятате, че вашето бебе има хемороиди, трябва да получите диагноза от педиатър на детето си, тъй като това вероятно е нещо различно. В някои екстремни случаи симптомите на кръвта в изпражненията могат да означават по-тежко състояние.<br><br>

                                                След като Вашият лекар е поставил диагноза, има различни подходи за лечение на болката и нервността на Вашето бебе.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingg">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseg" aria-expanded="false" aria-controls="collapseg">
                                                Хемороиди лечение
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseg" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingg">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                В повечето случаи прости мерки ще облекчат симптомите, докато хемороидите се подобряват без лечение. Въпреки това понякога може да са необходими лекарства и дори хирургични операции.<br>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Фисура - Какво са фисурите ?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Различни травми или наранявания могат да разтегнат аналния канал и да създадат разкъсване в лигавицата на ануса. Тези разкъсвания, известни като анални фисури, обикновено могат да дойдат и от преминаване на големи или твърди изпражнения. Те могат да причинят болка и кървене по време и след дефекация.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Фисура лечение
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Острите анални пукнатини - тези, които не продължават повече от 6 седмици, са често срещани и обикновено се лекуват самостоятелно с грижа за себе си. Хроничните анални пукнатини, тези, които продължават повече от 6 седмици, може да се нуждаят от лекарство или операция, за да им помогнат да се излекуват.<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>

                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="text-align:center;">
                        <img class="imagetabs img-responsive" src="img/Surgery1.jpg" alt="surgery"><br><br>
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
