<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang = "bg">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="canonical" href="https://www.medihelp.center/za-nas.php">
    <link rel=”alternate” href="https://www.medihelp.center/za-nas.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/about-us.php" hreflang="en" />
    <meta name="description" content="Научете повече за нашите доктори, оборудване, такси и застраховки.">
    <meta name="keywords" content="ДокторЕндоскоп, Ендоскоп камера, Ехограф, Ехограф Бургас, ехограф цена, 4д ехограф, Доктор Приморско, Доктор Лозенец, Доктор Китен, Доктор Бургас, Гастроентеролог Бургас, Гастроентеролог Приморско">
   <link rel="apple-touch-icon" href="img/favicon-32x32.png" />
    <title>За Нас | Медицински Център Медихелп</title>

    <meta itemprop="name" content="За Нас | Медицински Център Медихелп">
    <meta itemprop="description" content="Научете повече за нашите доктори, оборудване, такси и застраховки.">
    <meta itemprop="image" src="img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="МЕДИХЕЛП" />
    <meta property="og:description" content="За Нас" />

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


    <!-- END OF HEADER -->


    <div class="warlord">

<div class="container-fluid" style="min-height:73.2%; background-color: #e9f5f5;">
            <div class="inside">



                <h1 id="deinosti" class="newh" style="border-bottom:3px solid black;"> За Нас </h1>
                
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a role="tab" data-toggle="tab" href="#doctorA" style="height:40px;">Доктори</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctorB" style="height:40px;">Оборудване</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctorC" style="height:40px;">Такси и застраховки</a></li>
                </ul>
                
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="doctorA">

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">

                                <div class="card hovercard">
                                    <div class="cardheader">

                                    </div>
                                    <div class="avatar">
                                        <img alt="Missing face" src="img/grey2.png">
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <p>Доктор Стойчев</p>
                                        </div>
                                        <div style="display: inline-block; text-align: left;">
                                            <div class="desc">• Специалист</div>
                                            <div class="desc">• Хирург</div>
                                            <div class="desc">• Ендоскопист</div>
                                        </div>


                                    </div>

                                    <!--   <button type="button" class="btn btn-warning">Запази час</button> -->

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">

                                <div class="card hovercard">
                                    <div class="cardheader">

                                    </div>
                                    <div class="avatar">
                                        <img alt="Missing face" src="img/grey2.png">
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <p>Доктор Минков </p>
                                        </div>
                                        <div style="display: inline-block; text-align: left">
                                            <div class="desc">• Вътрешни болести</div>
                                            <div class="desc">• Анестезиология</div>
                                            <div class="desc">• Реанимация</div>

                                        </div>
                                    </div>

                                    <!--   <button type="button" class="btn btn-warning">Запази час</button> -->

                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">

                                <div class="card hovercard">
                                    <div class="cardheader">

                                    </div>
                                    <div class="avatar">
                                        <img alt="Missing face" src="img/grey2.png">
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <p>Доктор Гавазова</p>
                                        </div>
                                        <div style="display: inline-block; text-align: left">
                                            <div class="desc">• Специалист</div>
                                            <div class="desc">• Акушерство</div>
                                            <div class="desc">• Гинекология</div>
                                        </div>
                                    </div>

                                    <!--   <button type="button" class="btn btn-warning">Запази час</button> -->

                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">

                                <div class="card hovercard">
                                    <div class="cardheader">

                                    </div>
                                    <div class="avatar">
                                        <img alt="Missing face" src="img/grey2.png">
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <p>Доктор </p>
                                        </div>
                                        <div style="display: inline-block; text-align: left">
                                            <div class="desc">• Passionate designer</div>
                                            <div class="desc">• Curious developer</div>
                                            <div class="desc">• Tech geek</div>
                                        </div>
                                    </div>

                                    <!--   <button type="button" class="btn btn-warning">Запази час</button> -->

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">

                                <div class="card hovercard">
                                    <div class="cardheader">

                                    </div>
                                    <div class="avatar">
                                        <img alt="Missing face" src="img/grey2.png">
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <p>Доктор Сабахова</p>
                                        </div>
                                        <div style="display: inline-block; text-align: left">
                                            <div class="desc">• Специалист</div>
                                            <div class="desc">• Детски болести</div>
                                        </div>
                                    </div>

                                    <!--   <button type="button" class="btn btn-warning">Запази час</button> -->

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">

                                <div class="card hovercard">
                                    <div class="cardheader">

                                    </div>
                                    <div class="avatar">
                                        <img alt="Missing face" src="img/grey2.png">
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <p>Доктор Банова</p>
                                        </div>
                                        <div style="display: inline-block; text-align: left">
                                            <div class="desc">• Специалист</div>
                                            <div class="desc">• Детски болести</div>
                                        </div>
                                    </div>

                                    <!--   <button type="button" class="btn btn-warning">Запази час</button> -->

                                </div>

                            </div>



                        </div><br>
                       <div class="deinost">
                        <div style="display: inline-block; text-align: left;">
                            Хирургичната дейност се осъществява в партньорство с болнично заведение.<br>Нашите доктори обслужват Бургас, Приморско, Китен, Лозенец, Созопол и Царево. <br> Моля, не се колебайте да се свържете с нас по каквито и да е било въпроси като пациент, <br>на номер <strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359887411608">0887411608</a></span></i></strong>. За обаждане може да кликнете върху телефонния номер.</div>
                    </div>
                    </div>




                    <div role="tabpanel" class="tab-pane" id="doctorB">

                        <div class="container-fluid">
                            <div class="row">


                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">

                                    <div style="text-align:center;">
                                        <h2 class="equiphead">Колоноскоп</h2>
                                        <a href="#"><img class="img-responsive" src="img/Colonoscope.jpg" alt="Colonoscope" style="-webkit-box-shadow: 0px 0px 42px 0px rgba(46, 62, 88);
    -moz-box-shadow: 0px 0px 10px 5px rgba(46, 62, 88);
    box-shadow: 0px 0px 10px 5px rgba(46, 62, 88);"></a>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#colono" style="margin-top:30px;">Вижте Повече</button>
                                    </div>

                                    <div class="modal" id="colono" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h3>Допълнителна информация</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Колоноскопите се използват за отстраняване на чужди тела, изрязване
                                                        тумори или колоректални полипи (полипектомия) и контрола на
                                                        кръвоизлив. Рутинната колоноскопия е важна за диагностицирането
                                                        рак на червата, втората водеща причина за смъртните случаи на рак в България
                                                        Съединените щати. Тези ендоскопски процедури намаляват нуждата
                                                        за инвазивни хирургични диагностични и терапевтични процедури.</p>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                                    <div style="text-align:center;">
                                        <h2 class="equiphead">Колпоскоп</h2>
                                        <a href="#"><img class="img-responsive" src="img/Colposcope.png" alt="Colposcope" style="-webkit-box-shadow: 0px 0px 42px 0px rgba(46, 62, 88);
    -moz-box-shadow: 0px 0px 10px 5px rgba(46, 62, 88);
    box-shadow: 0px 0px 10px 5px rgba(46, 62, 88);"></a>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#colpo" style="margin-top:30px;">Вижте Повече</button>
                                    </div>


                                    <div class="modal" id="colpo" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h3>Допълнителна информация</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Чрез Колпоскопа се извършва процедурата Колпоскопия. Колпоскопията е начин да видите близък план на шийката на матката. Това е бърз и лесен начин да намерите клетъчни промени в шийката на матката, които могат да се превърнат в рак.

                                                        Какво е колпоскопия?
                                                        Колпоскопията е вид тест за рак на маточната шийка. Тя позволява на Вашия лекар или медицинска сестра да разгледат шийката на матката - отварянето към матката. Използва се за откриване на анормални клетки в шийката на матката.

                                                        Какво се случва по време на колпоскопия и биопсия?
                                                        Ще си легнете на маса за изпит, както бихте направили за тазово изследване. Лекарят или медицинската сестра ще поставят спекулум във вагината и ще го отворят. Това разделя стените на вагината, така че те могат да погледнат добре на шийката на матката.

                                                        Те ще измият шийката на матката с разтвор, подобен на оцет. Това улеснява виждането на анормални клетки. След това те ще погледнат към шийката на матката чрез колпоскоп - инструмент, който прилича на бинокъл на стойка с ярка светлина. Колпоскопът не ви докосва или не влиза във вас.</p>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">



                                    <div style="text-align:center;">
                                        <h2 class="equiphead">Ендоскоп</h2>
                                        <a href="#"><img class="img-responsive" src="img/Endoscope.png" alt="Endoscope" style="-webkit-box-shadow: 0px 0px 42px 0px rgba(46, 62, 88);
    -moz-box-shadow: 0px 0px 10px 5px rgba(46, 62, 88);
    box-shadow: 0px 0px 10px 5px rgba(46, 62, 88);"></a>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#endo" style="margin-top:30px;">Вижте Повече</button>
                                    </div>


                                    <div class="modal" id="endo" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h3>Допълнителна информация</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p> Чрез ендоскопа се извършва процедурата Ендоскопия. Какво е ендоскопия?<br>
                                                        Ендоскопия е процедура, при която Вашият лекар използва специализирани инструменти за преглед и опериране на вътрешните органи и съдове на Вашето тяло. Тя позволява на хирурзите да виждат проблеми в тялото ви, без да правят големи разрези.

                                                        Хирургът вкарва ендоскоп през малък разрез или отвор в тялото като устата. Ендоскоп е гъвкава тръба с прикрепена камера, която позволява на Вашия лекар да види. Вашият лекар може да използва форцепс и ножици на ендоскопа, за да оперира или отстрани тъкан за биопсия.</p>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">



                                    <div style="text-align:center;">
                                        <h2 class="equiphead">Ехограф</h2>
                                        <a href="#"><img class="img-responsive" src="img/Echographe.png" alt="Echographe" style="-webkit-box-shadow: 0px 0px 42px 0px rgba(46, 62, 88);
    -moz-box-shadow: 0px 0px 10px 5px rgba(46, 62, 88);
    box-shadow: 0px 0px 10px 5px rgba(46, 62, 88);"></a>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#echo" style="margin-top:30px;">Вижте Повече</button>
                                    </div>


                                    <div class="modal" id="echo" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h3>Допълнителна информация</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Чрез Ехографа се извършва Ултразвуковото изследване. Ултразвуковото изследване, известно още като ехографско изследване, е широко използвано в медицината и дава много нови възможности на лекарите да откриват и лекуват болести. Поне от 50 години насам то се използва в медицината и няма данни да има вреден ефект върху пациентите. Една от най-честите му употреби е за проследяване на развитието на плода по време на бременност.
                                                        Ултразвуковото изследване дава точна и безопасна картина на състоянието на ембриона и майката.</p>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div role="tabpanel" class="tab-pane" id="doctorC">

                        <div class="row">
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                <h2 class="mayo">Такси и застраховки</h2><br>
                                <p class="glaventext" style="margin-bottom:0px;">
                                    Плащане за услуги, включващи всякакви доплащания, са дължими при самото посещение на лекарския кабинет.
                                    Моля помнете, че отговорността за заплащането на здравните разходи зависи от Вас, пациентът.<br><br>
                                    В повечето случай лекарският кабинет с удоволствие ще се свърже със застрахователната Ви компания.<br><br>
                                    Моля помнете, че болнична такса за услугите за хоспитализиран или амбулаторно болен,
                                    включващи такси за тестове като кръвни тестове, рентген (X-ray) или биопсия са отделно от докторските такси, таксите за тестове, транспорт и други, като наш пациент.<br><br>
                                </p>
                                <h2 class="mayo"> Поверителност </h2><br>
                                <p class="textt">
                                    Медицинските лица по закон са длъжни за запазят пълна поверителност на Вашата здравна информация.<br><br>
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5;">
                                <div class="taxx">
                                <img class="imagetabs img-responsive" src="img/Taksi.jpg" alt="Man with computer"><br>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Pov" style="margin-top:20px;">Съхраняване и използване на лични данни
                                </button></div>
                            </div>


                        </div>

                        <div class="modal" id="Pov" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h3>УВЕДОМЛЕНИЕ ЗА ПОВЕРИТЕЛНОСТ</h3>
                                    </div>
                                    <div class="modal-body">
                                        <p>

                                            С настоящото АИПСМП МЕДИХЕЛП ЕООД предоставя информация за Вашите лични данни, които могат да бъдат обработени във връзка с уреждане на претенции по застрахователни договори. <br><br>
                                            Какви Ваши лични данни обработваме? <br><br>
                                            Личните данни, които обикновено се обработват във връзка с уреждане на претенции по застрахователен договор, са следните:<br>
                                            - Име: име, презиме и фамилия;<br>
                                            - ЕГН;<br>
                                            - Контакти: електронна поща, адрес и телефон<br>
                                            - Адрес: постоянен или настоящ <br>
                                            - Банкова информация: номер на банкова сметка<br>
                                            - Здравни данни: информация относно вашето здравно състояние (диагноза, епикризи, други здравни документи), предоставена за целите на предявяването на застрахователна претенция.<br><br>
                                            На какво основание обработваме Вашите лични данни?<br><br>
                                            Обработването на Вашите данни е необходимо за изпълнението на задължения по застрахователен договор.
                                            МЕДИХЕЛП може да обработва Ваши здравни данни (диагноза, здравословно състояние, медицински документи) за установяване, упражняване или защита на законови претенции.
                                            В определени случаи споделяме Вашите данни с доставчици на услуги (експерти и подизпълнители) на основание легитимния интерес на МЕДИХЕЛП да изпълни задълженията си и да повиши качеството на предоставяните услуги. Въз основа на легитимния ни интерес, свързан с вътрешните административни цели на МЕДИХЕЛП, може да споделим Вашите данни със застрахователни компании.<br><br>
                                            За какви цели ще използваме Вашите данни?<br><br>
                                            Предоставените от Вас лични данни ще бъдат използвани за целите на администриране на застрахователното правоотношение, включително, но не само, за целите на:<br>
                                            - обработване на претенции по повод настъпване на застрахователно събитие и изплащане на застрахователно обезщетение при ликвидация на щета;<br>
                                            - предотвратяване на застрахователни измами; <br>
                                            - оценка на риска; <br><br>
                                            С кого можем да споделяме Вашите лични данни? <br><br>
                                            МЕДИХЕЛП зачита и пази поверителността на Вашите лични данни. При спазване на законовите изисквания е възможно МЕДИХЕЛП да разкрие Ваши лични данни на следните лица:<br>
                                            - Доставчици на услуги (консултанти, експерти, оценители, адвокати): Когато използваме доставчици на услуги, свързани с изпълнение на задължения по застрахователен договор, е възможно МЕДИХЕЛП да раз¬крие лични данни. Подобно разкриване на данни се осъществява само при наличие на основателна причи¬на за това и въз основа на писмена договорка получателите да осигурят адекватно ниво на защита.<br><br>
                                            За какъв срок съхраняваме Вашите лични данни?<br><br>
                                            МЕДИХЕЛП съхранява отделните документи, които администрира за целите на изпълнение на задължения по застрахователни договори и претенции, както следва:<br>

                                            - Документи относно заявление за застрахователна претенция – максимален срок до изплащане на медицинската услуга ,а документи свързани с доказване произхода на получени суми – до 5 години години, считано от датата на предявяване на претенция, като срокът е в зависимост от вида застраховка.
                                            За по-подробна информация относно сроковете за съхранение на всички документи, които МЕДИХЕЛП обработва, можете да се обърнете към МЕДИХЕЛП и да поискате копие от Правилата за организацията и реда на архивната дейност на Дружеството.
                                            Вашите права по отношение на личните Ви данни.<br><br>
                                            При спазване на българското законодателство, Вие имате следните права спрямо личните Ви данни, обработвани от МЕДИХЕЛП : <br><br>
                                            1. да получите достъп до Вашите личните данни, които МЕДИХЕЛП обработва, и да получите копие от тях; <br>
                                            2. при непълнота или неточност в данните, които МЕДИХЕЛП обработва, личните Ви данни да бъдат коригирани; <br>
                                            3. да поискате данните Ви да бъдат заличени, когато са налице условията за това. Такива случаи са ако е по¬стигната целта, за която данните са събрани; оттеглили сте съгласието си, когато обработката се базира на съгласие и няма друго законово основание за обработка; данните Ви се обработват незаконосъобразно, и други;<br>
                                            4. в определените от закона случаи да изискате обработката на личните Ви данни да бъде ограничена; <br>
                                            5. в случаите, когато данните Ви се обработват на основание на легитимен интерес (изброени по-горе в това уведомление), можете да възразите срещу обработването на Вашите лични данни на това основание; <br>
                                            6. да упражните правото си на преносимост на данните и да поискате данните Ви да бъдат предоставени в структуриран, общоупотребяван и машинно-четим формат; <br>
                                            7. да оттеглите даденото от Вас съгласие, когато обработването на личните Ви данни се основава на съгласие. <br><br>
                                            Подробна информация относно условията и реда, по който можете да упражните правата си, ще намери¬те в Политиката за упражняване на правата на субектите на личните данни на МЕДИХЕЛП в нашия офис и нашия уебсайт www.medihelp.center
                                            Също така имате право да подадете жалба до Комисия за защита на личните данни, когато са налице съот¬ветните предпоставки за това. <br><br>
                                            Как да се свържете с нас? <br><br>
                                            Можете да се свържете с нас на следния адрес: България, гр. Бургас ,
                                            Ул. Цар Самуил 48 , тел 0887411608
                                            И на адреса на лекарския кбинет гр. Приморско , ММЦ х-л Магнолии.<br><br>

                                            Нашето длъжностното лице по защита на личните данни е д-р Н. Стойчев
                                            Ел. поща: medihelp@abv.bg<br><br>





                                            ДЕКЛАРАЦИЯ<br><br>

                                            От ....................................................................................................................ЕГН ......................................<br>
                                            /име , презиме ,фамилия /<br>
                                            В качеството си на ................................................................................................<br>
                                            На............................................................................................................................<br>
                                            С ЕИК....................................,със седалище и адрес управление:<br>
                                            ......................................................................................................................................................<br><br>
                                            Уведомен/а съм ,относно личните данни по смисъла на ЗЗЛД, като такива по настоящем попадат под специален режим на Регламент (ЕС ) 2016/679 на Европейския парламент и на Съвета от 27.05.2016г. относно защитата на физическите лица във връзка с обработването на личните данни и отностно свободното движение на такива данни Регламентът се прилага пряко във всички държави членки на Европейския съюз от 25.05.2018 г.<br><br>
                                            ПРЕДОСТАВЯМ И ДАВАМ СЪГЛАСИЕТО СИ предоставените от мен лични данни на АИПСМП МЕДИХЕЛП ЕООД , да бъдат обработени , предоставяни , съхранявани с цел изпълнение на нормативните задължения на фирмата. <br><br>
                                            УВЕДОМЕН/А СЪМ , че имам право на :<br><br>
                                            - Достъп на данните , съгласно чл. 15от Регламент (EC) 2016/679 <br>
                                            - Коригиране съгласно чл.16 от Регламент (EC) 2016/679<br>
                                            - Изтриване /право“ да бъдеш забравен“ /, съгласно чл.17 от Регламент (EC) 2016/679<br><br>


                                            Декларатор .............................................<br>

                                            дата: три имена и подпис на клиента: <br><br>

                                            ..................................... .............................................................................................

                                        </p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Table inside doctors tab 
                <div class="jumbotron">  
                  <div class="row">
                 
              <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">  
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="tableclass1">Name</th>
                            <th class="tableclass1">Role</th>
                           
                            <th class="tableclass1">E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                   <th class= "tableclass3" scope="row">Name1</th>
                    <td class="tableclass2">Nurse</td>
                   
                    <td class="tableclass2">example@abv.bg</td>
                        </tr>
                        <tr>
                    <th class= "tableclass3" scope="row">Name1</th>
                    <td class="tableclass2">Nurse</td>
                    
                    <td class="tableclass2">example@abv.bg</td>
                            
                        </tr>
                          <tr>
                    <th scope="row">Name1</th>
                    <td class="tableclass2">Nurse</td>
                   
                    <td class="tableclass2">example@abv.bg</td>
                            
                        </tr>  
                        
                            <tr>
                    <th class= "tableclass3" scope="row">Name1</th>
                    <td class="tableclass2">Nurse</td>
                    
                    <td class="tableclass2">example@abv.bg</td>
                            
                        </tr>
                            <tr>
                    <th class= "tableclass3" scope="row">Name1</th>
                    <td class="tableclass2">Nurse</td>
                   
                    <td class="tableclass2">example@abv.bg</td>
                            
                        </tr>
                    </tbody>
                </table>
              </div>
                     
             </div>
                      
                   <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6"> 
                       
                       <blockquote>
                        “Doctors put a wall up between themselves and their patients; nurses broke it down.” 
                        <cite> Jodi Picoult, Nineteen Minutes</cite>
                        </blockquote>
                       
                   </div>
            
            </div>
           </div>
                  
                 <!-- End of  Table inside doctors tab -->

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

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="js/form-validation.js"></script> -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
