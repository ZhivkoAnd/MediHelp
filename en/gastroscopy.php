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
    <link rel="canonical" href="https://www.medihelp.center/en/gastroscopy.php">
    <link rel=”alternate” href="https://www.medihelp.center/gastroskopia.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/gastroscopy.php" hreflang="en" />
    <title>Gastroscopy | Burgas | Medical Center Medihelp</title>
    <meta itemprop="name" content="Gastroscopy | Burgas | Medical Center Medihelp">
    <meta name="description" content="Gastroscopy is a method of examining the esophagus, stomach and duodenum. What do we need to know about it ?">
    <meta itemprop="image" src="../img/MediIcon.png" alt="IconLogo">
    <link rel="apple-touch-icon" href="../img/favicon-32x32.png" />
    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MEDIHELP" />
    <meta property="og:description" content="Gastroscopy" />

    <meta itemprop="description" content="Gastroscopy is a method of examining the esophagus, stomach and duodenum. What do we need to know about it ?">
    <meta name="keywords" content="Gastroscopy, Gastroscopy Burgas, Gastroscopy Primorsko, Fibrogastroscopy, Atrophic gastritis, polyps, stomach polyps">
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
                <h1 id="zanas" class="newh" style="border-bottom: 3px solid black;">Gastroscopy</h1>
                <br>

                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">



                        <div class="wrapper center-block">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                        <h2 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What is a Gastroscopy ?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p class="textt">In this procedure, a flexible endoscope is passed through the mouth and into the esophagus, stomach and duodenum. The purpose of this procedures is to diagnose abnormalities in this organs.
                                                During the endoscopy the doctor obtains biopsies by using a specialized instrument and these samples are sent to a laboratory to be analyzed. Your surgeon can also stretch narrowed areas, remove polyps, swallowed objects, or stop gastrointestinal bleeding.
                                                It is an excellent method for finding the cause and to evaluate a lot of symptoms: <br><br>
                                                • Persistent upper abdominal pain<br>
                                                • Nausea and vomiting <br>
                                                • Problems swallowing <br>
                                                • Heartburn <br>
                                                • Unexpected weight loss <br>
                                                • Bleeding <br> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How do I prepare for a Gastroscopy?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p class="textt"> Your doctor will give you complete instructions on how to prepare for your endoscopy.
                                                Talk with your doctor about your past medical history and all the prescribed medicines, including:<br><br>
                                                • Aspirin and medicines that contain aspirin<br>
                                                • Arthritis medicines <br>
                                                • Nonsteroidal anti-inflammatory drugs <br>
                                                • Blood thinners<br>
                                                • Blood pressure medicines<br>
                                                • Diabetes Do not eat or drink before the procedure<br>
                                                • You will be most often advised not to eat, drink, smoke, or chew gum during the 8 hours before the procedure <br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What are the risks and complications that can occur ?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="textt"> • Bleeding <br>
                                                • Perforation of the lining of the GI tract <br>
                                                • An abnormal reaction to the sedative including respiratory and cardiac problems. <br>
                                                • Discharge instructions <br><br>
                                                Limit your activity for the rest of the day.
                                                You should not drive or operate an equipment on the same day.
                                                You should not drink alcohol until the day after.
                                                Diet: We may resume oral intake unless otherwise instructed.
                                                Medication: If a polyp was removed do not take aspirin or anti-inflammatory drugs for 2 weeks unless directed by your physician. When home the day after the procedure you will receive a phone call from a nurse to inquire about your recovery and answer questions. <br> </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Gastroscopy can find the cause of abnormal lab test such as:
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <p class="textt"> • Anemia <br>
                                                • Nutritional deficiencies<br><br>
                                                It can also identify many diseases:<br><br>
                                                • Anemia <br>
                                                • Gastroesophageal reflux disease <br>
                                                • Ulcers <br>
                                                • Cancer <br>
                                                • Inflammation and swelling <br>
                                                • Precancerous abnormalities <br>
                                                • Celiac disease <br><br>
                                                It is more accurate than the X-rays. <br></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                What can be expected during the upper endoscopy
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <p class="textt"> You may have your throat sprayed with a local anesthetic, or if you prefer to be given medication through a vein to help you relax, or to sleep during the examination.
                                                You will be laid on your left side in a comfortable position as the endoscope is gently passed through your mouth into esophagus, then stomach and duodenum. Air is introduced into your stomach to allow a better view. The procedure usually lasts 3-15 minutes.
                                                Remember –The endoscope does not interfere with your breathing. After the procedure is done, you will have to
                                                stay at the medical center for 2-3 hours so the sedative or anesthetic can wear off.
                                                You can also expect Bloating or nausea FOR A SHORT TIME.
                                                A sore throat for a day or two –extremely rare.
                                                To rest at home for the remainder of the day.<br></p>
                                        </div>
                                    </div>
                                </div>



                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingb">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseb" aria-expanded="false" aria-controls="collapseb">
                                                SEEK CARE RIGHT AWAY IF YOU HAVE ANY OF THE FOLLOWING SYMPTOMS
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseb" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingb">
                                        <div class="panel-body">
                                            <p class="textt"> • CHEST PAIN <br>
                                                • PROBLEMS BREATHING <br>
                                                • PROBLEMS SWALLOWING <br>
                                                • THROAT PAIN WHICH GETS WORSE <br>
                                                • VOMITING –PARTICULARLY IF IT IS BLOODY OR LOOKS LIKE COFFE <br>
                                                • PAIN IN THE ABDOMEN <br>
                                                • BLOODY OR BLACK STOOLS <br><br>

                                                Make an appointment to see your visition,it is your responsibility to call your surgeon for the result.<br>
                                                Call the office if you have any question </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingv">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsev" aria-expanded="false" aria-controls="collapsev">
                                                Atrophic Gastritis
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapsev" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingv">
                                        <div class="panel-body">
                                            <p class="textt"> Atrophic gastritis is one of the varieties of gastritis, which accounts for about 20% of all cases of gastritis. In addition, this form is one of the most serious, causing anxiety in gastroenterologists. In atrophic gastritis, there is a strong thinning of the lining of the stomach, the atrophyrhythous gland responsible for the production of gastric juice.<br><br>

                                                Another quite unpleasant phenomenon accompanying atrophic gastritis is a disruption of the normal functioning of the immune system of the sick person's body. This happens for several reasons. First, the production of immunoglobulin A is impaired. And, secondly, specific antibodies are produced that begin to destroy cells in the stomach. In fact, just as thinning of the lining of the stomach occurs - it is an atrophic process.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingx">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsex" aria-expanded="false" aria-controls="collapsex">
                                                Polyps and Stomach Polyps
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapsex" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingx">
                                        <div class="panel-body">
                                            <p class="textt">Polyp means grower that forms and hangs from the inner wall of the organ - by its type and its name - "polyp" in Greek means foot. Polyp does not mean tissue adherent to the body.<br>

                                                The polyps can also be applied with microscopic dimensions.<br><br>

                                                The polyps most often develop in the organs of the digestive system - especially a hundred, the right and the large intestine. It is included in one organ, but there are cases where two or more organs are imposed.<br><br>

                                                Stomach polyps<br><br>
                                                They are often found randomly in X-ray or gastroscopy. There are no peculiarities in the clinical picture in polyps. Often describe moderate pain and feeling of weight under the spoon after meals, as well as burping and nausea. Bleeding of the polyps may be a cause of bleeding from the stomach. Usually, such bleeding is poor, but requires medical attention. Occasionally, the fall of the polyp from the anthral stomach to the duodenum leads to obstruction. In this case there is a strong sharp and crackling pain in the upper stomach, as long as there is vomiting. One third of the patients have asymptomatic leakage.
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="text-align:center;">
                        <img class="imagetabs img-responsive" src="../img/gastroscopy.jpg" alt="gastroscopy">
                        <div class="deinost">
                            <div style="display: inline-block; text-align: left">
                                Surgery is done in partnership with a hospital. <br> Please do not hesitate to contact us with any questions as a patient, on number<strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359887411608">0887411608</a></span></i></strong>. To call us, click on the phone number.</div>
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
