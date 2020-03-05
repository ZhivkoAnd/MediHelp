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
    <link rel="canonical" href="https://www.medihelp.center/kolonoskopia.php">
    <link rel=”alternate” href="https://www.medihelp.center/kolonoskopia.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/colonoscopy.php" hreflang="en" />
    <title>Колоноскопия | Бургас | Медицински Център Медихелп</title>
    <meta itemprop="name" content="Колоноскопия | Бургас | Медицински Център Медихелп">
    <meta name="description" content="Колоноскопия е метод за изследване на дебелото черво. Какво трябва да знаем за нея ?">
    <meta itemprop="image" src="img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="МЕДИХЕЛП" />
    <meta property="og:description" content="Колоноскопия" />

    <meta itemprop="description" content="Колоноскопия е метод за изследване на дебелото черво. Какво трябва да знаем за нея ?">
    <meta name="keywords" content="Колоноскопия, Колоноскопия Бургас, Колоноскопия в Бугас, Колоноскопия Приморско, рак на дебелото черво, ендоскопия, долна ендоскопия, Ендоскопия Бургас, Ендоскопия Приморско, Полипектомия Бургас, Полипектомия Приморско, Фиброколоноскопия">
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
    <div class="warlord">

        <div class="container-fluid" style="min-height:73.2%; background-color: #e9f5f5;">
            <div class="inside">

                <h1 id="zanas" class="newh" style="border-bottom: 3px solid black;">Колоноскопия</h1>
                <br>

                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">



                        <div class="wrapper center-block">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                        <h2 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Какво е колоноскопия ( Долна Ендоскопия ) ?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p class="udebelen">Колоноскопия или Долна Ендоскопия, е процедура при която гъвкав ендоскоп се прекарва през ануса и ректума, и където е възможно, в цялото дебело черво до сегмента, където се срещат малкото и дебелото черво. По време на процедурата, хирургът може да вземе малки парчета тъкан (биопсии) за изследване. Полипи също могат да бъдат открити и отстранени и съшо така могат да бъдат открити аномалии, невидими на рентгенови лъчи.<br><br>
                                                Колоноскопията обикновено се прави:<br><br>

                                                • Като част от рутинния скрининг за рак<br>
                                                • Възможност за откритие на рак на дебелото черво<br>
                                                • При пациенти с известни полипи или предишно отстраняване на полип<br>
                                                • Преди и след някои операции<br>
                                                • Да се оцени промяната в навиците на червата или кървенето<br>
                                                • Да се оценят промените в лигавицата на дебелото черво, известни като възпалителни заболявания.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Колоноскопия подготовка
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
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
                                    <div class="panel-heading" role="tab" id="heading11">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                                Какво да се очаква по време на Колоноскопията ?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                        <div class="panel-body">
                                            <p class="udebelen"> По време на изселдването могат да се вземат малки къстчета тъкан ( биопсия ) за хистологично изследване ( изследване под микроскоп) . Повечето от заболяванията достъпни за диагностика при ендоскопия е невъзможно да бъдат установени при рентгеново изследване.<br><br>
                                                • Процедурата обикновено се понася добре<br>
                                                • Ще лежите от лявата страна или по гръб, докато колоноскопът е напреднал. Процедурата обикновено продължава 15-30 минути. <br>
                                                • В редки случаи цялото дебело черво не може да бъде визуализирано и вашият хирург може да поиска допълнителен тест като бариева клизма или КТ колония.<br>
                                                • Леки спазми или подуване от въздуха, поставени по време на прегледа.<br>
                                                • Наблюдение в продължение на 2-3 часа, когато се прилага седация или анестезия. <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Причини да си направим долна ендоскопия
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
                                                • Диария<br>
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
                                                • Откритие на рак на дебелото черво
                                                • Профилактичен преглед без конкретни показания <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingz">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsez" aria-expanded="false" aria-controls="collapsez">
                                                Фиброколоноскопия
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapsez" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingz">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Фиброколоноскопия е ендоскопски метод на изследване, който дава възможност за визуална проверка на състоянието на лигавицата на дебелото черво.
                                                Изследването се извършва с помощта на гъвкав ендоскоп. За осветление се използва специална халогенна или ксенонова лампа, така че да се избягват изгаряния на лигавицата поради т.нар. „Студена светлина”.
                                                <br><br>Колоноскопията понякога се предшества от рентгеново изследване на дебелото черво, което се нарича иригоскопия. Ендоскопското изследване трябва да се извърши два-три дни след иригоскопията.
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

                                                Моля, не се колебайте да се свържете с нас по каквито и да било медицински въпроси. Ние извършваме Колоноскопия в Бургас и Ендоскопия Бургас. Също така обслужваме Приморско, Китен, Лозенец, Созопол и Царево.

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading12">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                                Полипектомия
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Полипектомията е минимално-инвазивна процедура, при която лекарите премахват необичайни израстъци на тъкани, наречени полипи, от вътре в дебелото черво. В допълнение към това, че е част от рутинната колоноскопия и терапевтичната процедура, полипектомията се използва като средство за преценяне дали растежът е раков, предраков или нераков.<br><br>
                                                Може да се нуждаете от полипектомия, ако имате полип вътре в дебелото черво, който може да бъде открит по време на колоноскопия - рутинен преглед, препоръчан на възрастни на 50 години или по-възрастни, за да проверяват за растеж, който може да е индикатор за рак.<br><br>

                                                Полипектомията се извършва винаги, когато се намери полип, който трябва да бъде отстранен, и процедурата обикновено се извършва по време на самата колоноскопия. Полип, който остава вътре в дебелото черво, може да кърви, да расте или да стане рак.<br><br>

                                                Често, когато полип се отстранява, той се изследва под микроскоп като биопсия, така че вие и вашият лекар ще знаете дали е рак и дали има някакви доказателства, че оставащата тъкан също се нуждае от отстраняване.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="text-align:center;">
                        <img class="imagetabs img-responsive" src="img/colonoscopy.png" alt="colonoscopy"><br><br>
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
    <!-- <script src="js/form-validation.js"></script> -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
