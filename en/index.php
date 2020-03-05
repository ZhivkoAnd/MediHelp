<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="WlzDGxc23h7qmpRC46NObnPNSuFu4zt_NJMZq0JRUC0" />
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <title>Medical Center Medihelp - Primorsko</title>
    <meta itemprop="name" content="Medical Center Medihelp - Primorsko">
    <meta itemprop="description" content="Medihelp is a private medical center in Primorsko for general and specialized healthcare.">
    <meta itemprop="image" src="../img/MediIcon.png" alt="IconLogo">
    <link rel="canonical" href="https://www.medihelp.center/en/">
    <link rel=”alternate” href="https://www.medihelp.center/" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/" hreflang="en" />
    <link rel="apple-touch-icon" href="../img/favicon-32x32.png" />

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MEDIHELP" />
    <meta property="og:description" content="Medical Center Medihelp" />
    <meta property="og:site_name" content="MEDIHELP" />

    <meta name="description" content="Medihelp is a private medical center in Primorsko for general and specialized healthcare.">
    <meta name="keywords" content="Medical Center, Medical Center Primorsko, Medical Center Medihelp Primorsko, Doctor Primorsko, Pediatrician Primorsko, Surgeon Primorsko, Еmergency cabinet Primorsko, Medical transport Primorsko, Doctor Kiten, Doctor Lozenec, Doctor Burgas, Pediatrician Burgas, Surgeon Burgas">
    
    <!-- Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/MainCss.css" rel="stylesheet" type="text/css" />

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
                <a class="navbar-brand hidden-xs" href="index.php"><img class="logo" src="../img/jivko_logooo.png" alt="logo"></a>

                <!-- Prozor4e s ezici i telefoni -->

                <div class="lang hidden-xs">

                    <a href="../index.php"> <img class="hvr-grow" src="../img/bg-flag.gif" alt="bg" style="width:35px; -webkit-box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);
                                            -moz-box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);
                                            box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="index.php"> <img class="hvr-grow" src="../img/uk-flag.gif" alt="uk" style="width:35px; -webkit-box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);
                                            -moz-box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);
                                            box-shadow: 0px 0px 5px 1px rgba(46, 62, 88);">
                    </a>
                    <div class="btn2">
                        <div class="button2"><img src="../img/icon_phone.png" alt="phone" />&nbsp;&nbsp;00359887411608</div>
                        <div class="button2"><img src="../img/email_icon.png" alt="email" />&nbsp;&nbsp;medihelp@abv.bg</div>
                    </div>
                </div>
                <div style="text-align: center;  margin-top: 13px;">




                </div>

                <div class="lang2 hidden-md hidden-lg hidden-sm">


                    <a href="../index.php"> <img class="hvr-grow" src="../img/bg-flag.gif" alt="bg" style="width:35px; -webkit-box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);
                                            -moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
                                            box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);">
                    </a>
                    <a href="index.php"> <img class="hvr-grow" src="../img/uk-flag.gif" alt="uk" style="width:35px; -webkit-box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);
                                            -moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
                                            box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);">
                    </a>
                </div>



                <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
                            {
                            ?>
                <p class="regii">Welcome
                    <?php echo $_SESSION['username']; ?>!</p> <a href="logout.php" class="regiii"> [ Logout ]</a>
                <?php }else{ ?>
                <a href="login.php" class="regi"> Login | Register </a>
                <?php } ?>

            </div>

            <!-- Krai na Prozor4e s ezici i telefoni -->

        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Surgeries<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-certificate"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="abdominal-surgery.php">Abdominal Surgery</a></li>
                        <li><a href="plastic-surgery.php">Plastic Surgery</a></li>
                        <li><a href="colorectal-surgery.php">Colorectal Surgery</a></li>

                        <li><a href="colonoscopy.php">Colonoscopy</a></li>
                        <li><a href="gastroscopy.php">Gastroscopy</a></li>
                    </ul>
                </li>
                <li><a href="contacts.php">Contacts<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-phone"></span></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="about-us.php">Doctors</a></li>
                        <li><a href="about-us.php">Equipment</a></li>
                        <li><a href="about-us.php">Fees and Insurance</a></li>
                        <!--  <li class="divider"></li>
                                                             <li><a href="#">Separated link</a></li>
                                                             <li class="divider"></li>
                                                             <li><a href="#">One more separated link</a></li> -->
                    </ul>
                </li>

    
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-picture"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="gallery.php">Pictures</a></li>
                        <li><a href="virtual-reality.php">VR Image</a></li>

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

            <div class="banner auto-size" id="toppheader" style="background: url('../img/Slider1.jpg') no-repeat;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: cover; ">

                <div class="container">
                    <h1 class="KaRappa">
                        <div class="minih3">Medical Center</div>MEDIHELP
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
                                            <img src="../img/Slider2.png" alt="stethoscope">
                                              <div class="carousel-caption">
                                            <p class="caruhead">Welcome to<span style="text-transform:uppercase"> Medihelp</span></p>
                                            <p class="carutext">Thank You, for choosing our medical services, for Your medical needs.</p>
                                        </div> 
                                        </div>
                                        <div class="item">
                                            <img src="../img/Slider1.jpg" alt="Doctors-performing-surgery">
                                                 <div class="carousel-caption">
                                            <p class="caruhead">Welcome to<span style="text-transform:uppercase"> Medihelp</span></p>
                                            <p class="carutext">Thank You, for choosing our medical services, for Your medical needs.</p>
                                        </div> 
                                        </div>
                                        <div class="item">
                                            <img src="../img/Slider3.png" alt="Doctors-performing-surgery-2">
                                                  <div class="carousel-caption">
                                            <p class="caruhead">Welcome to<span style="text-transform:uppercase"> Medihelp</span></p>
                                            <p class="carutext">Thank You, for choosing our medical services, for Your medical needs.</p>
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

                <h2 class="mayo">About Medihelp</h2>
                <br>


                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" ;>

                         <p class="glaventext">
                            MediHelp Medical Center is a private medical center in Primorsko for general and specialized medical care.
                            The practice was started in 2004 by Doctor Nickolay Stoychev to meet the healthcare needs of the
                            tourists visiting the Bulgarian Black sea coast to the south of Burgas.<br><br>

                            We believe that wellness begins with good primary care so we offer primary care physician practice
                            focused on diagnosing and treating conditions of all ages.
                            The experienced staff of doctors and nurses can treat all of your symptoms.
                            Our doors are open to patients of all age groups 7 days a week.<br>

                          <br>  • Appointments are not necessary. 
                           <br> • Most insurance are accepted. 
                         <br><br>
                            We serve Primorsko, Kiten, Lozenets, Sozopol, Tsarevo and the coastal hotels, tourist settlements and complexes. We are the only medical establishment in the region that offers specialized medical care.We have the necessary equipment for diagnosis and treatment, and in many cases emergency situations will be controlled in the center.<br><br>
                            We have an emergency cabinet in Primorsko, we also provide medical transport in Primorsko and the surrounding towns. Our doctors also serve Burgas in partnership with a hospital. Both in Primorsko and Burgas, as well as in Kiten, Lozenets, Sozopol and Tsarevo we have a doctor, surgeon, pediatrician, therapist and resuscitation team.
                                       <br>          
                                                            
                            <br> <span style="font-size:19px; color:#990000; font-weight:800;">• For MMC Primorsko guests, the first review for emergency and urgent conditions, including injuries and injuries, is <span style="text-decoration:underline" ;>FREE.</span></span> <br> • If necessary, we will provide you with free medical transportation with a medical team to the nearest medical facility.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="lekari">
                            <p class="textt">
                                Specialists provided: <br> <br> • Surgeon<br> • Pediatrician<br> • Reanimation Team<br> • Transport Unit <br><br>

                                The center operates without a break from 08:00 to 20:00, and an emergency team is answered at night at 0887411608.</p>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="../img/Kontakti.jpg" alt="Man with telephone" class="d-block w-full">

                            <div class="px-2 py-2">


                                 <a href="Kontakti.php" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                                Contacts
                            </a>

                                <p class="mb-1">
                                    Please, do not hesitate to contact us with any questions regarding our medical services.
                                </p>

                            </div>

                           

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="../img/Deinosti.jpg" alt="Surgery" class="d-block w-full">

                            <div class="px-2 py-2">


                                 <a href="abdominal-surgery.php" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                               Surgeries
                            </a>

                                <p class="mb-1">
                                    Here you can check information about our service and performed surgeries.
                                </p>

                            </div>

                           

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="../img/ZaNas.jpg" alt="Man with stethoscope" class="d-block w-full img-responsive">

                            <div class="px-2 py-2">


                                <a href="about-us.php" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                               About us
                            </a>

                                <p class="mb-1">
                                    Here you can check information about our doctors, equipment and Terms.
                                </p>

                            </div>

                           

                        </div>
                    </div>
                </div>



            </div>
            <!--     <div class="row">
                        <div class ="col-lg-4 col-sm-4">
                     <h4 class="malkizaglaviq">Мисия</h4> <br>

                                   <p class="textt">Да лекуваме, подкрепяме и предразполагаме всеки, когото обслужваме.</p><br>
                    </div>
                        <div class ="col-lg-4 col-sm-4">
                     <h4 class="malkizaglaviq">Цел</h4><br>

                                   <p class="textt">Да бъдем предпочитаните в града и областният здравен партньор на общността от пациенти, терапевти и служители.</p><br>
                        </div>
                     <div class ="col-lg-4 col-sm-4">
                     <h4 class="malkizaglaviq">Ценности</h4><br>

                                  <p class="textt">   
                                     Отнасяй се с другите с респект и достойнство.<br>
                            Очаквай най-доброто от себе си и всеки друг.<br>
                            Склонни към себе си по етичен начин.

                                  </p>
                      </div>
                    </div> -->

            <br>



            <br>
        </div>

        <!-- Footer -->


    <footer class="site-footer">
            <div class="container-fluid">
                <div class="foter">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="foter2">
                            <img class="logo" src="../img/jivko_logooo.png" alt="Medihelp logo" style="width:150px; margin-bottom:16px;">
                            <p>
                                Medihelp serves Primorsko,Burgas, Kiten,<br> Lozenec, Sozopol, Tsarevo and the coastal<br>hotels and tourist resorts.</p>
                            <div>Follow us&nbsp;&nbsp;<a href="https://www.facebook.com/Медицински-Център-Медихелп-667364060355224/" target="_blank"><img src="../img/fb.png" alt="facebook-icon" style="width:35px" /></a></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="foter2">
                            <p style="font-size:22px;"> Working hours </p>
                            <p> Monday to Sunday
                                от 8:00 до 22:00
                            </p><br>
                            <p style="font-size:22px;"> Contacts </p>
                            <p style="font-size:"> Phone:&nbsp;00359887411608 <br>
                                E-mail: medihelp@abv.bg<br>
                                Address: Primorsko, <br>Les Magnolias Club Hotel </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="foter2">
                            <p><a href="sitemap.php" style="font-size:22px; color:whitesmoke; text-decoration:underline;">Sitemap</a></p>
                            <br>
                            © 2004 - 2019 "Medihelp" - Primorsko.<br>
                            All Rights Reserved.<br><br>
                            Created by: Zhivko Andreev
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
