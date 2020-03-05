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
    <link rel="canonical" href="https://www.medihelp.center/ugolemiavane-na-gurdi.php">
    <link rel=”alternate” href="https://www.medihelp.center/ugolemiavane-na-gurdi.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/breasts-enlargement.php" hreflang="en" />
    <title>Уголемяване на гърди | Бургас | М.Ц. Медихелп</title>
    <meta itemprop="name" content="Уголемяване на гърди | Бургас | М.Ц. Медихелп">
    <meta name="description" content="Големината на гърдите е от голямо значение за много жени. Големите гърди носят голямо самочуствие.">
    <meta itemprop="image" src="img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="МЕДИХЕЛП" />
    <meta property="og:description" content="Уголемяване на гърди" />

    <meta itemprop="description" content="Големината на гърдите е от голямо значение за много жени. Големите гърди носят голямо самочуствие.">
    <meta name="keywords" content="Уголемяване на гърди, Уголемяване на гърди Бургас, Повдигане на гърди, Повдигане на гърди Бургас, Уголемяване на бюста, увеличаване на бюста, силикон в гърдите,
                                  силиконови гърди, силиконови гърди Бургас, силиконови гърди преди и след, Намаляване на бюста, Намаляване на бюста Бургас">
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

                <h1 id="zanas" class="newh" style="border-bottom: 3px solid black;">Уголемяване на гърди</h1>
                <br>


                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">


                        <!--<p class="textop" style="display: inline-block; text-align: left;">• Увеличаване с импланти <br>
                                • Повдигане<br>
                                • Реконструкция след ампутация на гърдата</p> -->
                        <div class="wrapper center-block">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                        <h2 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Уголемяване на гърди
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p class="udebelen">Уголемяване на гърдите (понякога известно като мамопластика) е хирургична процедура, която използва гръдни импланти за увеличаване на размера и формата на гърдите на жената. Това е популярна процедура, която може да подобри външния вид на жената и да помогне на нейното самочувствие или да върне формата на гърдата след загуба на тегло, бременност или кърмене.<br><br>

                                                Ще имате полза от уголемяване на бюста, ако за вас важи едно или повече от следните условия:<br><br>
                                                • За вас е важен размерът на гърдите ви.<br>
                                                • Вашите гърди са станали по-малки поради бременност или от загуба на тегло.<br>
                                                • Едната ви гърда е забележимо по-малка от другата (асиметрия на гърдата).<br><br>

                                                Вашият хирург ще ви прецени и ще ви каже, ако увеличаването на бюста е подходящо за вас. Това включва вземане на съгласувани снимки за вашите медицински досиета, преглед на гърдите ви и дискусии за вашата медицинска история. Ако планирате да забременеете в близкото бъдеще, моля уведомете Вашия хирург, тъй като бременността може да промени размера на гърдите Ви и може да повлияе на дългосрочните резултати от операцията.<br><br>

                                                Най-известната употреба на силикон е като гръдни импланти за хирургия на гърдата. Гръдните импланти са медицински устройства, имплантирани под гръдната тъкан или мускул на гърдите, за да се увеличи размерът на гърдите или да се подпомогне възстановяването на гърдата. Гръдните импланти са или напълнени с физиологичен разтвор, или със силиконов гел. И двата вида импланти имат силиконова външна обвивка.<br><br>

                                                При пациенти със силиконови гел-напълнени гръдни импланти се препоръчва те да получат МРТ скрининг за тиха руптура три години след имплантацията и на всеки две години след това. Безшумното разкъсване е изтичането на силикон от импланта в тъканта, която се образува около импланта. Разкъсаният силиконов имплант може да причини болка в гърдите или промени във формата на гърдата.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingk">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsek" aria-expanded="false" aria-controls="collapsek">
                                                Силикон в гърдите
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapsek" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingk">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                 Силикони импланти в гърдите <br><br>

                                                Налични са различни форми и размери на силиконовите импланти. Вашият хирург ще обсъди най-подходящия вид и размер за вас, като използвате измерванията, които се правят при Вашата консултация.<br><br>
                                            
                                                Най-известната употреба на силикон е като гръдни импланти за хирургия на гърдата. Гръдните импланти са медицински устройства, имплантирани под гръдната тъкан или мускул на гърдите, за да се увеличи размерът на гърдите или да се подпомогне възстановяването на гърдата. Гръдните импланти са или напълнени с физиологичен разтвор, или със силиконов гел. И двата вида импланти имат силиконова външна обвивка.<br><br>

                                                При пациенти със силиконови гърди се препоръчва да получат МРТ скрининг за разкъсване три години след имплантацията и на всеки две години след това. Разкъсаният силиконов имплант може да причини болка в гърдите или промени във формата на гърдата.<br><br>

                                                Безопасни ли са силиконовите гърди ?<br><br>
                                                FDA издаде актуализация за безопасността през 2011 г. и посочи, че силиконовите импланти са сравнително безопасни, когато се използват по предназначение. Те казват, че "Няма видима връзка между силиконови гел-изпълнени гръдни импланти и заболявания на съединителната тъкан, рак на гърдата или репродуктивни проблеми".

                                                </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Повдигане на гърди
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <p class="udebelen">

                                                Повдигане на гърди е хирургична процедура, извършвана от пластичен хирург за промяна на формата на гърдите ви. По време на повдигане на гърдата се премахва излишната кожа и се променя формата на тъканта на гърдата, за да може тя да се вдигне.<br><br>

                                                Може да изберете тази процедура, ако гърдите ви са наклонени или зърната ви сочат надолу.Повдигането на гърдите няма да промени значително размера на гърдите ви. Въпреки това, повдигане на гърдите може да се направи в комбинация с увеличаване на гърдите или намаляване на гърдите.С напредването на възрастта гърдите ви се променят - губят еластичността и твърдостта. Има много причини за такива промени в гърдите, включително:<br><br>

                                                • Бременност. <br>
                                                • Промените на теглото. <br>
                                                • Напредване на възрастта<br><br>

                                                Повдигането на гърдите може да намали увисването и да повиши позицията на зърната и по-тъмната област около зърната (ареолите). Размерът на ареолите също може да бъде намален по време на процедурата, за да се запазят пропорционално на новообразуваните гърди.<br><br>

                                                Може да помислите за повдигане на гърдите, ако:<br><br>

                                                • Вашите гърди са увиснали - те са загубили форма и обем, или са станали по-плоски и по-дълги<br>
                                                • Вашите зърна - когато гърдите ви не се поддържат - попадат под гънките на гърдите<br>
                                                • Вашите зърна и ареола се насочват надолу<br>
                                                • Вашите ареоли са се простирали пропорционално на гърдите ви<br>
                                                • Една от гърдите ви пада по-ниско от другата<br><br>

                                                Повдигането на гърдите не е за всеки. По време на бременността гърдите ви могат да се разтегнат и да провалят резултатите от лифта. Кърменето също е съображение. Въпреки че кърменето обикновено е възможно след повдигане на гърдата - тъй като зърната не са отделени от основната тъкан на гърдата - някои жени могат да имат трудности при производството на достатъчно мляко.<br><br>

                                                Докато повдигане на гърдите може да се направи на гърди с всякакъв размер, жените с по-малки увиснали гърди вероятно ще имат по-дълготрайни резултати. По-големите гърди са по-тежки, което ги прави по-склонни отново да се свиват.</p>
                                        </div>
                                    </div>
                                </div>



                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Реконструкция на гърди
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Може да сте имали или да имате мастектомия, защото сте били диагностицирани с рак на гърдата или сте изложени на много висок риск да го развиете в бъдеще. Ако е така, Вашият лекар може да ви е казал за възможност за възстановяване на гърдите - операция, наречена реконструкция на гърдата. Обикновено, реконструкцията на гърдата се осъществява по време или малко след мастектомия, а в някои случаи и лумпектомия. Реконструкцията на гърдата също може да се направи много месеци или дори години след мастектомия или лумпектомия. По време на реконструкцията пластичният хирург създава форма на гърдата, използвайки изкуствен имплант, респираторна тъкан от друго място на вашето тяло (автоложна реконструкция) или и двете. Реконструкцията се прави след ампутация на гърдата или гърдите, поради различни здравословни причини.


                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Намаляване на бюста
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Какво е намаляване на бюста?<br><br>
                                                Намаляването на бюста е операция, която прави гърдите ви по-малки и подобрява тяхната форма.<br><br>

                                                Какво включва операцията?<br><br>
                                                Операцията се извършва под обща упойка и обикновено отнема около 90 минути. Вашият хирург ще направи рязане по линията на ареолата (по-тъмната зона около зърното ви) и вертикален разрез под ареолата. Те ще премахнат част от тъканта на гърдата, излишната мазнина и кожата. Вашият хирург ще промени формата на гърдите и ще повдигне зърното ви, така че да е в по-висока позиция.<br><br>

                                                На следващия ден трябва да можете да се приберете у дома. След две до три седмици трябва да можете да се върнете към нормални дейности.<br><br>

                                                След седмица вече да можете да се върнете на работа, в зависимост от вида на вашата работа. След около две седмици трябва да сте в състояние да извършвате ограничена дейност, като например повдигане на малки деца. Редовните упражнения трябва да ви помогнат да се върнете към нормални дейности възможно най-скоро. Преди да започнете да тренирате, попитайте здравен екип или вашия лекар за съвет.<br><br>

                                                Резултатите от намаляването на гърдите се подобряват постепенно с течение на времето. Вашите гърди трябва да станат по-меки и по-естествени.

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

                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="text-align:center;">
                        <div class="jumbotron">
                            <div class="row">
                                <p class="udebelen" style="font-weight: 800; color: #2e3e58;"> Силиконови гърди преди и след</p>

                                <div class="col-lg-3 col col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture1.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture1.jpg" class="zoom img-fluid " alt="">

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture2.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture2.jpg" class="zoom img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture3.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture3.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture4.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture4.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture5.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture5.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture6.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture6.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture7.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture7.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture8.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture8.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture9.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture9.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture10.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture10.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture11.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture11.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture12.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture12.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture13.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture13.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture14.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture14.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture15.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture15.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture16.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture16.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture17.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture17.jpg" class="zoom img-fluid " alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                                    <a href="img/doctorI/Picture18.jpg" class="fancybox" rel="ligthbox">
                                        <img src="img/doctorI/Picture18.jpg" class="zoom img-fluid " alt="">
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
