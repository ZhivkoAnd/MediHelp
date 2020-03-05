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
    <link rel="apple-touch-icon" href="../img/favicon-32x32.png" />
    <link rel="canonical" href="https://www.medihelp.center/en/abdominal-surgery.php">
    <link rel=”alternate” href="https://www.medihelp.center/koremna-hirurgia.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/abdominal-surgery.php" hreflang="en" />
    <title>Hernia and Bile Surgery | Burgas | Medical Center Medihelp</title>
    <meta itemprop="name" content="Hernia and Bile Surgery | Burgas | Medical Center Medihelp">
    <meta name="description" content="We perform all kinds of operations in the field of abdominal surgery - Hernia, Bile and others.">
    <meta itemprop="image" src="../img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MEDIHELP" />
    <meta property="og:description" content="Abdominal Surgery" />

    <meta itemprop="description" content="We perform all kinds of operations in the field of abdominal surgery - Hernia, gall and others.">
    <meta name="keywords" content="Hernia, Hernia Surgery Burgas, Inguinal hernia Surgery Burgas, Umbilical hernia surgery burgas, gall, gall surgery, gall surgery Burgas">

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
                <h1 id="zanas" class="newh" style="border-bottom: 3px solid black;">Hernia and Bile Surgery</h1>

                <br>

                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">


                        <div class="wrapper center-block">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                        <h2 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Hernia of the anterior abdominal wall
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p class="udebelen"> What is hernia ?<br><br>
                                                The hernia is the passage of the contents of a body cavity, to the surface of the body or other cavity. In the case of inguinal hernia, abdominal organs (most often the intestine or large vein) pass through the so-called inguinal canal. The inguinal canal is a normal anatomical structure, a channel of about 4-5 cm in length, which contains the seminal cord in the male and the female uterine ligament. Under certain circumstances, the walls of this channel are weakened and part of the abdominal cavity passes through it. This can lead to pain and an inability to return the abdominal contents - possible damage to the wall, requiring emergency surgical intervention. The disease occurs in both sexes, the incidence is 10 times higher in males. It may be inborn or develop at some point in life. The hernia does not back up and grows over time.<br><br>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headinga">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsea" aria-expanded="false" aria-controls="collapsea">
                                                Inguinal Hernia
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapsea" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinga">
                                        <div class="panel-body">
                                            <p class="udebelen">

                                                The hernia is a passage of abdominal organs or parts of them (small intestine, colon, vein, stomach) wrapped in a herniated sac, through abdominal wall defects or other cavities. What complications can happen from this? The hernia may most commonly occur. It can not be predicted with certainty. Conditions for getting this complication are a narrow hernial opening, hernially grown, advanced age. The disease is accompanied by severe pain in the area, inability to retract the hernia, abdominal swelling, stopping the excretion of gases and stools. In case of untimely treatment, entrapment may lead to a breakthrough in the wall of the bowel or other hollow organ and the development of widespread inflammation of the abdomen - peritonitis.<br><br>

                                                Peritonitis is a condition that directly threatens your life and requires urgent surgical treatment.

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headings">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapses" aria-expanded="false" aria-controls="collapses">
                                                Umbilical hernia
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapses" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headings">
                                        <div class="panel-body">
                                            <p class="udebelen">
                                                Umbilical hernia is a common surgical pathology that is treated in the Clinic of Pediatric Surgery. Predisposing factors are low weight and prematurity.
                                                It is a defect in the area of ​​the umbilical ring through which peritoneum, preperitoneal adipose tissue is perforated.
                                                It is usually noticed by parents soon after birth. It is represented by the "protrusion" of the navel in crying or pushing the child. Most umbilical hernias are asymptomatic. There are almost no complications such as stomach trapping.
                                                Children under the age of 1 years are given conservative treatment by placing a patch patch, trying to maximize the edges of the right corneal muscles. Defects with a size above 1.5 cm rarely respond to conservative treatment.
                                                An indication of surgical treatment is the lack of effect of bandaged bandages, as well as defects in the umbilical region about 2 cm. It is performed after 1 year of age if there are no other indications for an earlier operation. Patients with minor herbal defects and without subjective complaints can also be treated after 2 years of age.<br><br>
                                                To perform the operative intervention in a planned order, it is necessary for the child to be healthy, not to have been ill for at least 10-14 days before the hospitalization. Allergic testing and pre-operative anti-allergy preparation are performed in a history of allergy.
                                                Operative intervention is performed under general anesthesia and consists of a semi-molar incision around the navel and performing a plastic reconstruction of the abdominal wall. The skin is stitched aesthetically.
                                                Children usually return to normal physical activity within 24 hours.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h2 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Bile and Gallstones
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <p class="udebelen">

                                                How do we know we have Gallstones ?<br><br>

                                                1. Stomach pain<br><br>

                                                Repeated dull pain in the area around the liver is the most common sign of bile stones. It often occurs after a meal and lasts for several hours. It is possible that the pain may also appear in the upper back or in the center of the abdomen.

                                                It is very important that we feel the pain. If this happens during a meal or immediately afterwards, the cause may be bile stones.<br><br>

                                                2. Nausea<br><br>

                                                Many people confuse gallbladder problems with an upset stomach or acid reflux. Sometimes people can even confuse the pain of the gallbladder with muscle pain as a result of physical exercise.

                                                But if there are repetitive episodes of nausea or vomiting, along with pain after eating, this may be an indication of gallbladder disease.

                                                More on the topic
                                                Permanent headache? It may be due to these reasons
                                                6 strange things that lead to memory loss
                                                Although nausea is not as common a symptom as abdominal pain, if there is intense nausea or vomiting, these are signs that we need to go to a doctor.<br><br>

                                                3. Obesity or sudden weight loss<br><br>

                                                These are problems associated with bile stones, and are not necessarily symptoms. Typically, weight gain or loss occurs first and then gallstones develop.

                                                Overweight people are at greater risk of forming bile stones. And while weight reduction can help reduce risk, rapid weight loss can also make us more prone to get affected by bile stones.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <h4 class="malkizaglaviq"><strong> Other Operations</strong></h4><br>
                        <p class="glaventext" style="margin-bottom:0px; text-align:left;">
                            •  Benign (Benign) and Malignant (Malignant) - stomach cancer, small bowel cancer and large intestine cancer.<br>
                            • Appendectomies<br>
                            • Treatment of fissures and hemorrhoids<br>
                            • All emergencies in abdominal surgery<br>
                            • Removal of polyps from the large intestine and stomach (polypectomy)<br>
                            • Treatment of irritable bowel syndrome<br>
                            • Chronic colitis, ulcerative colitis

                        </p><br><br>
                         <div class="deinost">
                            <div style="display: inline-block; text-align: left">
                                Surgery is done in partnership with a hospital. <br> Please do not hesitate to contact us with any questions as a patient, on number<strong><i><span style="color:#990000;text-decoration:underline;font-family:'Russo One';letter-spacing:1px;"><a href="tel:+359887411608">0887411608</a></span></i></strong>. To call us, click on the phone number.</div>
                        </div>
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
    <!-- <script src="js/form-validation.js"></script> -->
    <script src="../js/bootstrap.min.js"></script>


</body>

</html>
