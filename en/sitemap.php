<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang = "en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
     <link rel="canonical" href="https://www.medihelp.center/en/sitemap.php">
     <link rel=”alternate” href="https://www.medihelp.center/sitemap.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/sitemap.php" hreflang="en" />
    <title>Sitemap | Medical Center Medihelp</title>
    <meta itemprop="name" content="Sitemap | Medical Center Medihelp">
    <meta name="description" content="Medical Center Medihelp sitemap.">
    <meta itemprop="image" src="../img/MediIcon.png" alt="IconLogo">
   <link rel="apple-touch-icon" href="../img/favicon-32x32.png" />
    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MEDIHELP" />
    <meta property="og:description" content="Sitemap" />

    <meta itemprop="description" content="Medical Center Medihelp sitemap.">
    <meta name="keywords" content="sitemap, Medical Center Medihelp sitemap">
   <!-- Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/MainCss.css" rel="stylesheet">

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


    <!-- END OF HEADER -->


    <div class="warlord">
        
    <div class="container-fluid" style="min-height:73.2%; background-color: #e9f5f5;">
   <div class="inside">
                    <h1 id="zanas" class="newh" style="border-bottom: 3px solid black;">Sitemap</h1>

                   

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                            <h2 class="sredni"><a href="index.php"><span style="color:black; font-size:27px;">Home</span></a></h2>
                            <h2 class="sredni"><span style="color:black;  font-size:27px;">Surgeries</span></h2>
                            <p class="textt" style="font-family:'Philosopher'; font-weight:bold; font-size:19px; ">
                                <a href="koremna-hirurgia.php"> &nbsp;&nbsp; <span style="color:black; font-size:22px;">• Abdominal Surgery</span></a><br>
                                <a href="plastichna-hirurgia.php"> &nbsp;&nbsp;<span style="color:black;font-size:22px;"> •  Plastic Surgery</span></a><br>
                                 <a href="liposuction.php"> &nbsp;&nbsp;<span style="color:black;font-size:22px;"> &nbsp;&nbsp; - Liposuction</span></a><br>
                            <a href="breasts-enlargement.php"> &nbsp;&nbsp;<span style="color:black;font-size:22px;"> &nbsp;&nbsp; - Breasts enlargement</span></a><br>
                            <a href="lip-augmentation.php"> &nbsp;&nbsp;<span style="color:black;font-size:22px;"> &nbsp;&nbsp; - Lip augmentation</span></a><br>
                                  <a href="kolorektalna-hirurgia.php"> &nbsp;&nbsp;<span style="color:black;font-size:22px;"> •  Colorectal Surgery</span></a><br>
                                <a href="kolonoskopia.php"> &nbsp;&nbsp;<span style="color:black;font-size:22px;"> •  Colonoscopy</span></a><br>
                                <a href="gastroskopia.php"> &nbsp;&nbsp;<span style="color:black;font-size:22px;"> •  Gastroscopy</span> </a><br><br>
                            

                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <h2 class="sredni"><a href="Kontakti.php"><span style="color:black; font-size:27px;"> Contacts</span></a></h2>
                            <h2 class="sredni"><a href="about-us.php"><span style="color:black; font-size:27px;">About Us</span></a></h2>
                            <p class="textt" style="font-family:'Philosopher'; font-weight:bold; font-size:19px; ">
                                <a href="#"> &nbsp;&nbsp; <span style="color:black;font-size:22px;">•  Doctors</span></a><br>
                                <a href="#"> &nbsp;&nbsp;<span style="color:black;font-size:22px;"> •  Equipment</span></a><br>
                                <a href="#"> &nbsp;&nbsp;<span style="color:black;font-size:22px;"> •  Fees and Insurance</span></a><br><br></p>
                            <h2 class="sredni"><span style="color:black; font-size:27px;"> Gallery</span></h2>
                            <p class="textt" style="font-family:'Philosopher'; font-weight:bold; font-size:19px; ">
                                <a href="gallery.php"> &nbsp;&nbsp;<span style="color:black;font-size:22px;"> •  Pictures</span></a><br>
                                <a href="virtual-reality.php"> &nbsp;&nbsp;<span style="color:black;font-size:22px;"> •  VR Image</span> </a><br>
                            </p>

                        </div>

                    </div>
                </div>
        
            <br>



            <br><br>
        </div>

    <!-- Footer -->
     <footer class="site-footer">
            <div class="container-fluid">
                <div class="foter">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="foter2">
                            <img class="logo" src="../img/jivko_logooo.png" alt="Medihelp logo" style="width:150px; margin-bottom:16px;">
                            <p>
                                Medihelp serves Primorsko,Burgas,  Kiten,<br> Lozenec, Sozopol, Tsarevo and the coastal<br>hotels and tourist resorts.</p>
                             <div>Follow us&nbsp;&nbsp;<a href="https://www.facebook.com/Медицински-Център-Медихелп-667364060355224/" target="_blank"><img src="../img/fb.png" alt="facebook-icon" style="width:35px"/></a></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="foter2">
                            <p style="font-size:22px;"> Working hours </p>
                            <p> Monday to Sunday
                                от 8:00 до 22:00
                            </p><br>
                            <p style="font-size:22px;"> Contacts </p>
                            <p style="font-size:">  Phone:&nbsp;00359887411608 <br>
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

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <!-- <script src="js/form-validation.js"></script> -->
    <script src="../js/bootstrap.min.js"></script>


</body>

</html>
