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
      <link rel="canonical" href="https://www.medihelp.center/en/liposuction.php">
    <link rel=”alternate” href="https://www.medihelp.center/liposukcia.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/liposuction.php" hreflang="en" />
    <meta name="description" content="Liposuction is a surgical intervention suitable for everybody who have large amounts of fatty tissue.">
    <meta name="keywords" content="Liposuction, Liposuction Burgas, Tummy liposuction, Tummy liposuction Burgas, Belly Liposuction, Belly liposuction Burgas, Abdominal Liposuction">
   <link rel="apple-touch-icon" href="../img/favicon-32x32.png" />
    <title>Liposuction | Burgas | Medical Center Medihelp</title>
    <meta itemprop="name" content="Liposuction | Burgas | Medical Center Medihelp">
    <meta itemprop="description" content="Visit our gallery and take a look at our Medical Center.">
    <meta itemprop="image" src="../img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MEDIHELP" />
    <meta property="og:description" content="Liposuction" />

   <!-- Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/MainCss.css" rel="stylesheet" type="text/css" />
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

  <div class="warlord">

       <div class="container-fluid" style="background-color: #e9f5f5;">
            <div class="inside">

                <h1 id="zanas" class="newh" style="border-bottom: 3px solid black;">Liposuction</h1>
                <br>
               

                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">



                        <div class="wrapper center-block">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                        <h2 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                               ...
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p class="udebelen">...
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                ..
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                              ...<br>
                                        </div>
                                    </div>
                                </div>



                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                ...
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                               ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                ...
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                               ...<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        
                           <div class="deinost">
                                <div style="display: inline-block; text-align: left">
                                   Surgery is done in partnership with a hospital. <br> Please do not hesitate to contact us with any questions as a patient, on number <strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359887411608">0887411608</a></span></i></strong>. To call us, click on the phone number.</div>
                            </div>
                        <br>

                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="text-align:center;">
                             <div class="jumbotron">
                                  <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture9.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture9.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture10.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture10.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture11.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture11.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture12.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture12.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture13.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture13.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorH/Picture14.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorH/Picture14.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>


                                </div>



                            </div>
                      
                    </div>
                </div>
            </div>
            <br>




       

          
            <!-- END OF GALLERY -->
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
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/Script.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


</body>

</html>
