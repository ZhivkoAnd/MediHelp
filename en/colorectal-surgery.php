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
    <link rel="canonical" href="https://www.medihelp.center/en/colorectal-surgery.php">
    <link rel=”alternate” href="https://www.medihelp.center/kolorektalna-hirurgia.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/colorectal-surgery.php" hreflang="en" />
    <title>Hemorrhoids and Fissures treatment | Burgas | M.C. Medihelp</title>
    <meta itemprop="name" content="Hemorrhoids and Fissures treatment | Burgas | M.C. Medihelp">
    <meta name="description" content="Symptoms and Treatment of hemorrhoids and acute and chronic fissures. What should we do to avoid them?">
    <meta itemprop="image" src="../img/MediIcon.png" alt="IconLogo">
    <link rel="apple-touch-icon" href="../img/favicon-32x32.png" />
    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MEDIHELP" />
    <meta property="og:description" content="Hemorrhoids and Fissures" />

    <meta itemprop="description" content="Symptoms and Treatment of hemorrhoids and acute and chronic fissures. What should we do to avoid them?">
    <meta name="keywords" content="Hemorrhoids, Child hemorrhoids, hemorrhoids treatment, hemorrhoids treatment Burgas, fissure, fissure treatment, fissure treatment Burgas, fissures treatment Burgas">

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
                <h1 id="zanas" class="newh" style="border-bottom: 3px solid black;">Hemorrhoids and Fissures</h1>
                <br>
                <br>

                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">



                        <div class="wrapper center-block">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                        <h2 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Hemorrhoids - What are Hemorrhoids ?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p class="udebelen"> Hemorrhoids are present in the body of every person. They are connective tissue, cavernous bodies and muscle fibers covered by the lining of the right gut and the anal canal. Their function is to help the anal sphincter in the retention of gases and faeces. There are external and internal hemorrhoids. Internal hemorrhoids are located at the transition between the right gut and the anal canal, and the external - between the anal canal and the surrounding skin.

                                                How Common are Hemorrhoids?<br><br>

                                                Hemorrhoids are very common and affect both sexes equally. About 50% of people over 50 years old. have hemorrhoids. Hemorrhoids are very common in pregnant women, but they are usually a temporary problem.<br><br>

                                                Factors contributing to their emergence:<br><br>

                                                enetic predisposition-weakness of connective tissue and vascular walls
                                                Frequent and prolonged pushing for defecation-constipation, chronic diarrhea, long sitting in the toilet
                                                Increased intraocular pressure - pregnancy and childbirth, some liver diseases
                                                Solid stools
                                                Occupations associated with prolonged sitting </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Child Hemorrhoids
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <p class="udebelen"> The classic symptoms of hemorrhoids, which are manifested by itching and burning in the anus, the feeling that there is something "hindering" in children, occurs with the same frequency as the adults. However, only a "conscious" child can complain about these alarming signs. The baby and more babies will at best show some anxiety during defecation and often even experience this condition without external symptoms.<br><br>

                                                Careful parents can find a hemorrhoidal node that appears when stretched and then retracts. The resulting anus fracture is easier to detect - in this case, blood may appear in the child's stools.<br><br>

                                                Acute pain occurs in acute hemorrhoids. With this pathology a thrombus is formed in the hemorrhoid node, which blocks blood flow and requires immediate medical intervention.<br><br>

                                                The onset of any of these symptoms should lead the parents to think about visiting a doctor rather than self-medication. The fact is that similar signs of hemorrhoids may have other pathologies, for example, bowel prolapse, tumor-like formation. Therefore, the child should be shown to the doctor (this is the responsibility of a surgeon and proctor) who will diagnose and prescribe the right treatment.
                                            </p>
                                        </div>
                                    </div>
                                </div>



                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Hemorrhoids Treatment
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Some people achieve success with the use of natural natural methods to treat and stop chronic hemorrhoids. In severe cases, however, they require surgical measures.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Fissure - What are fissures ?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Anal fissures are tears of the skin and / or the rectal mucosa around the anus, which can be differently large - from small, localized tears to tears extending to the anal sphincter. Their usual dimensions are 1.5 cm in length, 3 - 5 mm in length and 2 - 3 mm in depth. They are common in clinical practice. Statistics show that they are the third most common rectal disease after chronic constipation and hemorrhoids. Affects men and women equally often, at any age. Anal fissures are the most common cause of rectal bleeding in infants.<br><br>

                                                Anal fissures occur in the special tissue that fasted the anus and the anal canal called the anode. On a line located in the anus, called an interstitial groove, the skin passes into an anode. Unlike the skin, the anemic does not contain sweat and sebaceous glands, and hairs, and a much larger number of nerve endings experiencing touch and pain. This is why anal fissures are severely painful in most cases, especially after stomach.
                                                <br><br>
                                                The pain may be short or long. In addition, pruritus and bleeding are possible as well as the release of an unpleasant smell - a sputum mixed with pus from the fissure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingh">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseh" aria-expanded="false" aria-controls="collapseh">
                                                Fissures Treatment
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseh" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingh">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                About 9 out of 10 sharp fissures are cured successfully at home. Still, there are ones that require additional treatment. If the fissure does not cure after 30 days, you may need medication on prescription. These may include nitroglycerin cream, high blood pressure medicines in the form of pills or gel, or botulinum toxin (Botox) injections. If medicines do not relieve your condition, you may need surgical treatment. The most commonly used surgery is lateral internal sphinctrotomy. In this procedure, the doctor cuts a portion of the inner sphincter to release the spasm that causes the fissure. Further diarrheic coagulation, laser coagulation and sphincter dilation with subsequent seam of the lining are also used.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="deinost">
                            <div style="display: inline-block; text-align: left">
                                Surgery is done in partnership with a hospital. <br> Please do not hesitate to contact us with any questions as a patient, on number<strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359887411608">0887411608</a></span></i></strong>. To call us, click on the phone number.</div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="text-align:center;">
                        <img class="imagetabs img-responsive" src="../img/Surgery1.jpg" alt="surgery">

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
    <script src="../js/bootstrap.min.js"></script>



</body>

</html>
