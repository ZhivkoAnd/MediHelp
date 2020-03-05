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
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <title>Plastic Surgery | Burgas | Medical Center Medihelp</title>
    <meta itemprop="name" content="Plastic Surgery | Burgas | Medical Center Medihelp">
    <meta name="description" content="Correction and treatment of aesthetic defects of different origins. Check what operations we do.">
    <meta itemprop="image" src="../img/MediIcon.png" alt="IconLogo">
    <link rel="apple-touch-icon" href="../img/favicon-32x32.png" />
    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MEDIHELP" />
    <meta property="og:description" content="Plastic Surgery" />

    <meta itemprop="description" content="Correction and treatment of aesthetic defects of different origins. Check what plastic surgeries we do.">
    <meta name="keywords" content="Plastic Surgery, Plastic Surgery Burgas, Aesthetic surgery, Aesthetic surgery Burgas, Plastic operations, Plastic Operations Burgas, Ear correction, Ear correction Burgas, Mole Removal, Mole removal Burgas">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/MainCss.css" rel="stylesheet">
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


    <!-- HEADER -->


    <!-- END OF HEADER -->


    <div class="warlord">

        <div class="container-fluid" style="background-color: #e9f5f5;">
            <div class="inside">


                <h1 id="deinosti" class="newh" style="border-bottom:3px solid #2e3e58; text-align:center"> Plastic Surgery </h1>
       <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="../img/boobs.png" alt="pretty boobs" class="d-block w-full">

                            <div class="px-2 py-2">


                                  <a href="breasts-enlargement.php" class="text-uppercase d-inline-block lts-2px ml-2 mb-2 text-center styled-link" ;>
                                Breasts Enlargement
                            </a>

                                <p class="mb-1">
                                   • Breast Enlargemnt with implants<br>
                                   • Breast Lifting<br>
                                   • Breasts Reconstruction<br>
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="../img/lips.png" alt="juicy lips" class="d-block w-full">

                            <div class="px-2 py-2">


                                <a href="lips-enlargement.php" class="text-uppercase d-inline-block lts-2px ml-2 mb-2 text-center styled-link" ;>
                                 Lip augmentation
                            </a>

                                <p class="mb-1">
                                   • Enlargement with hyaluronic acid<br>
                                   • Adding Implants<br>
                                   • Lipofilling<br>
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="../img/Ass.png" alt="Nice Ass" class="d-block w-full img-responsive">

                            <div class="px-2 py-2">


                                 <a href="liposuction.php" class="text-uppercase d-inline-block lts-2px ml-2 mb-2 text-center styled-link" ;>
                               Liposuction
                            </a>

                               <p class="mb-1">
                                   • Removal of fat deposits<br>
                                   • Cellulite Removal<br>
                                   • Skin smoothing<br>
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="deinost">
                  
                    <div style="display: inline-block; text-align: left">


                        Other than plastic surgery like liposuction, breasts or lips enlargement,<br> in Medihelp we also perform aesthetic surgery - correction and treatment of aesthetic <br>defects from differebt origins, like ear correction, mole removal and others.</div>
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a role="tab" data-toggle="tab" href="#doctor1">Plastic of the anterior abdominal wall</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor2">Treatment of wounds with skin plastic</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor3">Operative treatment of skin formations</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor4">Operative treatment of scars</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor5">Treatment of burns</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor6">Dermabrasion</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor7">Treatment of trauma and facial wounds</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor8">Mole removal</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor10">Ear correction</a></li>
                    <li role="presentation"><a role="tab" data-toggle="tab" href="#doctor11">Treatment of difficult healing wounds</a></li>
                </ul>
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="doctor1">

                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Plastic surgery of the anterior abdominal wall / abdominoplasty /</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">• The operation is done for cosmetic reasons or medical evidence / obesity /<br>• The plastic surgery of the anterior abdominal wall is a serious surgical operation. <br>• It is under general anesthesia and sometimes lasts for three to four hours.</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorA/Picture1.png" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorA/Picture1.png" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorA/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorA/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorA/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorA/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorA/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorA/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorA/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorA/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorA/Picture6.png" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorA/Picture6.png" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorA/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorA/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorA/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorA/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>




                                </div>

                            </div>
                        </div>

                    </div>

                    <div role="tabpanel" class="tab-pane" id="doctor2">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Treatment of wounds with skin plastic</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">Wounds that have a defect / lack of tissues / can successfully be treated by transferring skin from another part of the body. It's necessary:<br><br>
                                • Remove necrotic / dead / tissues<br>
                                • In the wound, a fresh, well-rounded / granular / tissue is formed</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture9.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture9.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture10.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture10.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture11.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture11.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture12.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture12.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorB/Picture13.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorB/Picture13.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="doctor3">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Operative treatment of skin formations<br>/ benign and malignant /</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">• Applied radically / to healthy tissues / cuts.<br>
                                • The resulting skin defect is covered with adjacent tissues.<br>
                                • Material for histological / microscopic examination is required.</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture9.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture9.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture10.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture10.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture11.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture11.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture12.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture12.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture13.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture13.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture14.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture14.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture15.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture15.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture16.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture16.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture17.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture17.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorC/Picture18.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorC/Picture18.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                </div>



                            </div>
                        </div>
                    </div>



                    <div role="tabpanel" class="tab-pane" id="doctor4">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Operative treatment of scars</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">• Operational scar correction (scarring) is required because of limiting the function or for cosmetic reasons.<br>
                                • Operations are multi-step.</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture9.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture9.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture10.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture10.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture11.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture11.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture12.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture12.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture13.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture13.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture14.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture14.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture15.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture15.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture16.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture16.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture17.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture17.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorD/Picture18.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorD/Picture18.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                </div>



                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" class="tab-pane" id="doctor5">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Treatment of burns</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">Proper, conservative / non-operative / burn burning is usually good.</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorE/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorE/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorE/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorE/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorE/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorE/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorE/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorE/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorE/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorE/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorE/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorE/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorE/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorE/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorE/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorE/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>




                                </div>


                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="doctor6">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Dermabrasion</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">• With special discs rotating at high speed, the surface layer of the skin is removed.<br>
                                • The surgeon's experience is of great importance for the good result.<br>
                                • Dermabrasion is sometimes required in several stages. Patience and physician's patience is required.</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorF/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorF/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorF/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorF/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorF/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorF/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorF/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorF/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" class="tab-pane" id="doctor7">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Treatment of trauma and facial wounds</h2><br>
                            <p class="textop" style="display: inline-block; text-align: left;">Facial wounds require careful and literate treatment. Their processing (stitching) can be postponed for even 1-2 days.<br>
                                Better use a bandage to stop bleeding and look for a qualified surgeon. Sewing thick threads or filling the wound with adhesive results in ugly scars for life.</p><br><br>
                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture7.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture7.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture8.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture8.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture9.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture9.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture10.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture10.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture11.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture11.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture12.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture12.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture13.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture13.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorG/Picture14.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorG/Picture14.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" class="tab-pane" id="doctor8">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Mole Removal</h2><br>
                            <p class="ushi" style="display: inline-block; text-align: left;">Nowadays, the methods of mole removal are many - from electrocoagulation to surgical removal, laser excision, and more. The first two methods have a number of pain-related imperfections, greater discomfort for the patient as well as significant impairment of the surrounding skin's integrity and scarring. For each of us, it is most important to spare our skin as much as possible and at the same time qualitatively and without consequences to remove unwanted formations. With the advancement of new technologies, the most advanced method that can help us is the laser removal of skin CO2 laser formations. </p><br><br>
                        </div>
                    </div>



                    <div role="tabpanel" class="tab-pane" id="doctor10">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Ear correction</h2>
                            <p class="ushi" style="display: inline-block; text-align: left;">


                                <p class="ushi" style="display: inline-block; text-align: left;">
                                    Otoplasty occurs most often in pre-school or early school age, as growth and cartilage tissue growth have been completed within 7 to 8 years, but are often also subject to adulthood with defects or unpleasant memories from your childhood.<br><br>

                                    This intervention is not performed in the case of ear loss or so-called small ear that are the result of unilateral facial atrophy. Then more massive surgical intervention and transplantation of cartilage implants is required.<br><br>

                                    Besides protruding ears, there may be other imperfections that can be corrected by otoplasty. This includes a tapered ears adjustment - when the tip of the ears looks down, "cupped" ears, which are usually small, ears in the shape of a claw where the edges of the ears are swollen with no natural curvature and folds on the ears.<br><br>

                                    The ear correction can be performed with local anesthesia (local anesthesia) or under general anesthesia (complete anesthesia). Through otoplasty, various ear defects are observed, which are most common - the so-called erect ears. The duration of the plastic surgery on the ear is 30 minutes to 60 minutes. In otoplasty it is important to preserve the anatomical and physiological integrity of all parts - ear, mussel, wing, cartilage and pendant. The wrist and the pendant must not be firmly attached to the hair of the head.</p><br><br>
                                <div class="jumbotron">
                                    <div class="row">


                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a href="../img/doctorJ/Picture1.jpg" class="fancybox" rel="ligthbox">
                                                <img src="../img/doctorJ/Picture1.jpg" class="zoom img-fluid " alt="">

                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a href="../img/doctorJ/Picture2.jpg" class="fancybox" rel="ligthbox">
                                                <img src="../img/doctorJ/Picture2.jpg" class="zoom img-fluid" alt="">
                                            </a>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a href="../img/doctorJ/Picture3.jpg" class="fancybox" rel="ligthbox">
                                                <img src="../img/doctorJ/Picture3.jpg" class="zoom img-fluid " alt="">
                                            </a>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a href="../img/doctorJ/Picture4.jpg" class="fancybox" rel="ligthbox">
                                                <img src="../img/doctorJ/Picture4.jpg" class="zoom img-fluid " alt="">
                                            </a>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a href="../img/doctorJ/Picture5.jpg" class="fancybox" rel="ligthbox">
                                                <img src="../img/doctorJ/Picture5.jpg" class="zoom img-fluid " alt="">
                                            </a>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a href="../img/doctorJ/Picture6.jpg" class="fancybox" rel="ligthbox">
                                                <img src="../img/doctorJ/Picture6.jpg" class="zoom img-fluid " alt="">
                                            </a>
                                        </div>


                                    </div>


                                </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="doctor11">
                        <div class="kontakt" style="text-align:center;">
                            <h2 class="malkizaglaviq">Treatment of difficult healing wounds</h2><br>

                            <div class="jumbotron">
                                <div class="row">


                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorK/Picture1.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorK/Picture1.jpg" class="zoom img-fluid " alt="">

                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorK/Picture2.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorK/Picture2.jpg" class="zoom img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorK/Picture3.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorK/Picture3.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorK/Picture4.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorK/Picture4.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorK/Picture5.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorK/Picture5.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="../img/doctorK/Picture6.jpg" class="fancybox" rel="ligthbox">
                                            <img src="../img/doctorK/Picture6.jpg" class="zoom img-fluid " alt="">
                                        </a>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>

                </div>

                <div class="deinost">
                    <div style="display: inline-block; text-align: left">
                        Surgery is done in partnership with a hospital. <br> Please do not hesitate to contact us with any questions as a patient, <br>on number<strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359887411608">0887411608</a></span></i></strong>. To call us, click on the phone number.</div>
                </div>

            </div>


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
    <!-- <script src="js/form-validation.js"></script> -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/Script.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>



</body>

</html>
