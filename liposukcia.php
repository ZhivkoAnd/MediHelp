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
    <link rel="canonical" href="https://www.medihelp.center/liposukcia.php">
    <link rel=”alternate” href="https://www.medihelp.center/liposukcia.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/liposuction.php" hreflang="en" />
    <title>Липосукция | Бургас | Медицински Център Медихелп</title>
    <meta itemprop="name" content="Липосукция | Бургас | Медицински Център Медихелп">
    <meta name="description" content="Липосукция е хирургическа намеса, подходяща за всички които имат големи натрупвания на мастна тъкан.">
    <meta itemprop="image" src="img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="МЕДИХЕЛП" />
    <meta property="og:description" content="Липосукция" />

    <meta itemprop="description" content="Липосукция е хирургическа намеса, подходяща за всички които имат големи натрупвания на мастна тъкан.">
    <meta name="keywords" content="Липосукция, Липосукция Бургас, Липосукция на корем, Липосукция на корем Бургас">
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

                <h1 id="zanas" class="newh" style="border-bottom: 3px solid black;">Липосукция</h1>
                <br>


                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <div class="wrapper center-block">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                        <h2 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Какво е Липосукция ?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p class="udebelen">Липосукцията е хирургична процедура, която използва техника на засмукване за отстраняване на мазнини от специфични области на тялото, като корема, бедрата, задните части, ръцете или шията. Липосукцията също оформя тези области. Други имена за липосукция включват липопластика и оформяне на тялото.

                                                Липосукция обикновено не се счита за цялостен метод за отслабване или алтернатива за отслабване. Ако сте с наднормено тегло, вероятно ще загубите повече тегло чрез диета и физически упражнения или чрез бариатрични процедури - като стомашна байпасна операция - отколкото при липосукция.

                                                Може да сте кандидат за липосукция, ако имате прекалено много телесни мазнини в определени места, но иначе имате стабилно телесно тегло.<br><br>
                                                • Липосукцията е метод за подобряване на фигурата.<br> • Със специален инструмент /канюла/ се изсмуква мастната тъкан, натрупана в определени области.<br>
                                                • Най-добри са резултатите при хора с нормално тегло и ограничени мастни натрупвания /бедра, ханш, корем /.<br>
                                                • Понякога се прилага и при затлъстяване за подобряване качеството на живот.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingm">
                                        <h2 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsem" aria-expanded="true" aria-controls="collapsem">
                                                Липосукция на корем
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapsem" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingm">
                                        <div class="panel-body">
                                            <p class="udebelen">Липосукция на корем е една от най-често срещаните хирургични процедури в света.<br><br>

                                                Коремната липосукция за жени се извършва под местна или обща анестезия. По време на процедурата Вашият хирург ще използва и тумозен разтвор. Тумесцентният разтвор е комбинация от лидокаин и епинефрин; тази комбинация съкращава кръвоносните съдове, за да намали кървенето по време на операцията, но също така успокоява тази област на лечение, така че пациентът да се чувства комфортно, когато се извършва липосукцията.<br><br>

                                                Когато зоната на лечение е седирана, хирургът ще направи разрез; този разрез е необходим за малката тръба (канюла), която ще се подава през разреза в областта на третиране. Тръбата е свързана с вакуум, който осигурява засмукване за отстраняване на излишната мазнина.<br><br>

                                                След като излишната мазнина бъде премахната от зоната на лечение, хирургът ще източи излишната течност или кръв в района. След това, областта се зашива и се прилага специална компресираща дреха, за да се запази новата форма на корема.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Кога и защо се прави Липосукция
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Липосукцията се използва за отстраняване на мазнините от областите на тялото, които не са отговорили на диетата и физическите упражнения, като:<br><br>

                                                • Липосукция на Корем <br>
                                                • Горни рамена<br>
                                                • Дупе<br>
                                                • Глезени<br>
                                                • Гърдите и гърба<br>
                                                • Бедрата<br>
                                                • Врат и шия<br><br>
                                                В допълнение, липосукцията понякога може да се използва за намаляване на гърдите или лечение на гинекомастия.<br><br>

                                                Когато набирате тегло, мастните клетки се увеличават по размер и обем. От своя страна липосукцията намалява броя на мастните клетки в определена област. Количеството на отстранените мазнини зависи от вида на района и обема на мазнините. Получените контурни промени обикновено са постоянни - докато вашето тегло остава стабилно.<br><br>

                                                След липосукцията, кожата се отдава на новите контури на третираните зони. Ако имате добър тонус и еластичност на кожата, кожата вероятно ще изглежда гладка. Ако кожата ви е тънка с лоша еластичност обаче, кожата в третираните зони може да се появи разхлабена.<br><br>

                                                За да бъдете кандидат за липосукция, трябва да сте в добро здраве без условия, които биха могли да усложнят хирургичната операция - като ограничен кръвен поток, коронарна артерия, диабет или слаба имунна система. </p>
                                        </div>
                                    </div>
                                </div>



                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Рискове от Липосукция
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                • Контурни нередности - Кожата ви може да изглежда неравна, вълнообразна или изсъхнала, поради неравномерното отстраняване на мазнините или лошата еластичност на кожата.
                                                • Натрупване на течности - Под кожата могат да се образуват временни джобове с течност.
                                                • Скованост - Може да почувствате временна или постоянна изтръпване в засегнатата област. Възможно е и временно дразнене на нервите.
                                                • Инфекция - Кожните инфекции са редки, но възможни.
                                                • Вътрешен пробив - Рядко канюлата, която прониква твърде дълбоко, може да пробие вътрешен орган. Това може да изисква спешна хирургична намеса.
                                                • Бъбречни и сърдечни проблеми - Промените в нивата на течности, когато се инжектират и изсмукват течности, могат да причинят потенциално опасни за живота бъбречни, сърдечни и белодробни проблеми.
                                                • Токсичност на лидокаин. Лидокаинът е анестетик, често прилаган с течности, инжектирани по време на липосукцията, за да се помогне за справяне с болката. Въпреки че е безопасна, в редки случаи може да възникне токсичност на лидокаин, причинявайки сериозни проблеми със сърцето и централната нервна система.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Как да се подготвим за липосукцията
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Преди процедурата обсъдете с вашия хирург какво да очаквате от операцията. Вашият хирург ще прегледа вашата медицинска история и ще ви попита за каквито и да е медицински състояния, които може да имате, и всички лекарства, добавки или билки, които може да приемате.

                                                Вашият хирург ще Ви препоръча да спрете приема на някои лекарства, като разредители за кръв или НСПВС, поне три седмици преди операцията. Може да се наложи да получите определени лабораторни тестове преди процедурата.<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingi">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsei" aria-expanded="false" aria-controls="collapsei">
                                                Какво да очакваме след процедурата
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapsei" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingi">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                След процедурата очаквайте болка, подуване и синини. Вашият хирург може да предпише лекарства, които да помогнат да се контролира болката и антибиотиците, за да се намали рискът от инфекция. <br><br>

                                                След процедурата хирургът може да остави разрезите да се отворят и да се поставят временни канали, за да подпомогнат дренирането на течности. Обикновено трябва да носите плътно компресиращо облекло, което спомага за намаляване на отока, в продължение на няколко седмици.<br><br>

                                                Може да се наложи да изчакате няколко дни, преди да се върнете на работа и няколко седмици преди да възобновите обичайните си дейности - включително упражнения.<br><br>

                                                През това време се очакват някои контурни нередности, докато оставащата мазнина се постави на място.<br><br>


                                                Подуването обикновено спада в рамките на няколко седмици. По това време третираната зона трябва да изглежда по-малко обемиста. В рамките на няколко месеца очаквайте третираната зона да има по-стегнат вид.<br><br>

                                                Естествено е кожата да загуби известна твърдост със стареене, но резултатите от липосукцията обикновено са дълготрайни, докато поддържате теглото си. Ако натрупате тегло след липосукция, разпределението на мазнините може да се промени. Например, може да натрупате мазнини около корема си, независимо от кои зони са били първоначално лекувани.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="deinost">
                            <div style="display: inline-block; text-align: left">
                                Хирургичната дейност се осъществява в партньорство с болнично заведение. <br> Моля, не се колебайте да се свържете с нас по каквито и да е било въпроси като пациент, на номер <strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359887411608">0887411608</a></span></i></strong>. За обаждане може да кликнете върху телефонния номер.</div>
                        </div>
                        <br>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align:center;">
                        <div class="jumbotron">
                            <div class="row">

                                <p class="udebelen" style="font-weight: 800; color: #2e3e58;"> Снимки на наши пациенти преди и след липосукцията</p>
                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture1.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture1.jpg" class="zoom img-fluid " alt="">

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture2.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture2.jpg" class="zoom img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture3.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture3.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture4.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture4.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture5.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture5.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture6.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture6.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture7.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture7.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture8.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture8.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture9.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture9.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture10.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture10.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture11.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture11.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture12.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture12.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture13.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture13.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorH/Picture14.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorH/Picture14.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>


                            </div>

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
    <script src="js/Script.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>




</body>

</html>
