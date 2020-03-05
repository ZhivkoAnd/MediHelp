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
       <link rel="apple-touch-icon" href="img/favicon-32x32.png" />
    <link rel="canonical" href="https://www.medihelp.center/kontakti.php">
    <link rel=”alternate” href="https://www.medihelp.center/kontakti.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/contacts.php" hreflang="en" />
    <title>Контакти | Приморско | Медицински Център Медихелп</title>
    <meta itemprop="name" content="Контакти | Приморско | Медицински Център Медихелп">
    <meta itemprop="description" content="Свържете се с нас на телефон 00359887411608 | Работно време: Всеки ден от 8:00 до 20:00">
    <meta itemprop="image" src="img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="МЕДИХЕЛП" />
    <meta property="og:description" content="Контакти" />

    <meta name="description" content="Свържете се с нас на телефон 00359887411608 | Работно време: Всеки ден от 8:00 до 20:00">
    <meta name="keywords" content="Медицински център Медихелп контакти, Медицински център Приморско контакти, Медицински център Медихелп телефон, Медицински център Приморско телефон">


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
        
  <div class="container-fluid" style="background-color: #e9f5f5;">
   <div class="inside">
          
            <h1 id="kontakti" class="newh" style="border-bottom:3px solid black;">Контакти</h1>
            <div class="kontakt">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">




                            <h2 class="sredni"> <span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Адрес:</h2>
                            <p class="textt">
                                България <br>
                                Приморско <br>
                                ММЦ хотелски комплекс<br>
                                Les Magnolias Club Hotel</p>

                            <h2 class="sredni"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;&nbsp;Телефон за връзка:</h2>
                            <p class="textt">
                                Медицинска линия:&nbsp;<strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359887411608">0887411608</a></span></i></strong> <br>
                                Информация и контакти:&nbsp;<strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359898939421">0898939421</a></span></i></strong>
                            </p>
                            <h2 class="sredni"> <span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp; Работно време:<br></h2>
                            <p class="textt"> Всеки ден от 8:00 до 22:00</p>
                            <h2 class="sredni"> <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp; Свържете се с нас на:</h2>
                            <p class="textt"> Български;&nbsp;Английски;&nbsp;Руски;</p>
                            <h2 class="sredni"> <span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp; E-mail:&nbsp;<a href="mailto:medihelp@abv.bg"><span style="color:#990000; text-decoration:underline;">medihelp@abv.bg</span></a> </h2>


                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">


                            <h2 class="sredni"> <span class="glyphicon glyphicon-bell"></span>&nbsp;&nbsp; Задай ни въпрос от тук:</h2><br>


                            <div class="formbg">
                                <form id="contact-form" method="post" action="contact.php" role="form">

                                    <div class="messages"></div>

                                    <div class="controls">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Име</label>
                                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Напишете своето име *" required="required" data-error="Въведете име.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Фамилия</label>
                                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Напишете своята фамилия *" required="required" data-error="Въведете фамилия.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Е-мейл</label>
                                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Напишете своят Е-мейл *" required="required" data-error="Нужен е валиден Е-мейл.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_need">Категория</label>
                                                    <select id="form_need" name="need" class="form-control" required="required" data-error="Моля изберете категория.">
                                                        <option value=""></option>
                                                        <option value="Treatment">Лечение</option>
                                                        <option value="Symptoms">Симптоми</option>
                                                        <option value="Free Hours">Свободни часове</option>
                                                        <option value="Other">Други</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_message">Съобщение</label>
                                                    <textarea id="form_message" name="message" class="form-control" placeholder="Напишете своето съобщение *" rows="4" required="required" data-error="Моля, оставете съобщение."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" class="btn btn-default btn-send" value="Изпрати">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-muted">
                                                    <!--  <strong>*</strong> Тези полета са задължителни.</p>     -->
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                      
                            <!--     <div class="col-sm-6">
                      <div class="embed-responsive embed-responsive-4by3">
                         <video class="embed-responsive-item" src= "Waysons - Eternal Minds [NCS Release].mp4"
                          controls ></video>
                      </div>                     
                  </div> -->

                            <br><br>

                        </div>

                    </div>
                    <br>

                  <div class="udebelen" ; style="text-align:center">Моля, не се колебайте да се свържете с нас по каквито и да било медицински въпроси. <br>Нашите доктори обслужват Бургас, Приморско, Китен, Лозенец, Созопол и Царево. </div><br><br>

                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d17196.071946477696!2d27.735173562329404!3d42.250215805508965!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb30ab19bf3f0f607!2sPark+Hotel+%26+SPA+Les+Magnolias+Primorsko!5e0!3m2!1sbg!2sdk!4v1543072034478" width="600" height="350" frameborder="0" style="border:0; width:100%;" allowfullscreen></iframe>

                    </div>

                </div>
            </div>


            <!-- END OF IMAGES + MODALS POP -->

            <br><br>
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

        </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
     <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
     <script src="js/contact.js"></script>

   
</body>

</html>