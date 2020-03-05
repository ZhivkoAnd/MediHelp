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
     <link rel="canonical" href="https://www.medihelp.center/en/about-us.php">
    <link rel=”alternate” href="https://www.medihelp.center/za-nas.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/about-us.php" hreflang="en" />
    <meta name="description" content="Learn more about our doctors, equipment, fees and insurances.">
    <meta name="keywords" content="Endoscope, Echographe, Colonoscope, Colposcope, Doctors Primorsko, Doctors Lozenec, Doctors Kiten, Doctors Burgas, Operations">
   <link rel="apple-touch-icon" href="../img/favicon-32x32.png" />
    <title>About Us | Medical Center Medihelp</title>

    <meta itemprop="name" content="About Us | Medical Center Medihelp">
    <meta itemprop="description" content="Learn more about our doctors, equipment, fees and insurances.">
    <meta itemprop="image" src="../img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MEDIHELP" />
    <meta property="og:description" content="About Us" />

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


    <!-- END OF HEADER -->


  <div class="warlord">

        <div class="container-fluid" style="min-height:73.2%; background-color: #e9f5f5;">
            <div class="inside">
               
                   
                        <h1 id="deinosti" class="newh"> About us </h1>
                        <br>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a role="tab" data-toggle="tab" href="#doctorA">Our Doctors</a></li>
                            <li role="presentation"><a role="tab" data-toggle="tab" href="#doctorB">Equipment</a></li>
                            <li role="presentation"><a role="tab" data-toggle="tab" href="#doctorC">Fees and Insurance</a></li>
                        </ul>

                        
                        
                        
                        
                        
                        <div class="tab-content">

                          <div role="tabpanel" class="tab-pane active" id="doctorA">

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">

                                        <div class="card hovercard">
                                            <div class="cardheader">

                                            </div>
                                            <div class="avatar">
                                                  <img alt="Missing face" src="../img/grey2.png">
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <p>Doctor Stoichev </p>
                                                </div>
                                                <div style="display: inline-block; text-align: left;">
                                                    <div class="desc">• Specialist</div>
                                                    <div class="desc">• Surgeon</div>
                                                    <div class="desc">• Endoscopist</div>
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
                                                 <img alt="Missing face" src="../img/grey2.png">
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <p>Doctor Minkov </p>
                                                </div>
                                                <div style="display: inline-block; text-align: left">
                                                    <div class="desc">• Internal diseases</div>
                                                    <div class="desc">• Anesthesiology</div>
                                                    <div class="desc">• Reanimation</div>

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
                                              <img alt="Missing face" src="../img/grey2.png">
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <p>Doctor Gavazova</p>
                                                </div>
                                                <div style="display: inline-block; text-align: left">
                                                    <div class="desc">• Specialist</div>
                                                    <div class="desc">• Obstetrics</div>
                                                    <div class="desc">• Gynecology</div>
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
                                                <img alt="Missing face" src="../img/grey2.png">
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <p>Doctor... </p>
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
                                               <img alt="Missing face" src="../img/grey2.png">
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <p>Doctor Sabahova</p>
                                                </div>
                                                <div style="display: inline-block; text-align: left">
                                                    <div class="desc">• Specialist</div>
                                                    <div class="desc">• Children's Diseases</div>
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
                                                <img alt="Missing face" src="../img/grey2.png">
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <p>Doctor Banova</p>
                                                </div>
                                                <div style="display: inline-block; text-align: left">
                                                    <div class="desc">• Specialist</div>
                                                    <div class="desc">• Children's Diseases</div>
                                                </div>
                                            </div>

                                            <!--   <button type="button" class="btn btn-warning">Запази час</button> -->

                                        </div>

                                    </div>



                                </div>

                            </div>

                            <div role="tabpanel" class="tab-pane" id="doctorB">
                               
                                    <div class="container-fluid">
                                        <div class="row">


                                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                                                <div style="text-align:center;">
                                                    <h2 class="equiphead">Colonoscope</h2>
                                                    <a href="#"><img class="img-responsive" src="../img/Colonoscope.jpg" alt="Colonoscope" style="-webkit-box-shadow: 0px 0px 42px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.75);"></a>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#colono" style="margin-top:30px;">Read More</button>
                                                </div>

                                                <div class="modal" id="colono" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h3>Additional Information</h3>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Colonoscopes are used for the removal of foreign bodies, excision
of tumors or colorectal polyps (polypectomy), and control of
hemorrhage. Routine colonoscopy is important in diagnosing
intestinal cancer, the second leading cause of cancer deaths in
the United States. These endoscopic procedures reduce the need
for invasive surgical diagnostic and therapeutic procedures.</p>
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
                                                    <h2 class="equiphead">Colposcope</h2>
                                                    <a href="#"><img class="img-responsive" src="../img/Colposcope.png" alt="Colposcope" style="-webkit-box-shadow: 0px 0px 42px 0px rgba(0,0,0,0.75);
   -moz-box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.75);"></a>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#colpo" style="margin-top:30px;">Read More</button>
                                                </div>


                                                <div class="modal" id="colpo" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h3>Additional Information</h3>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Colposcopy is a non-invasive study that examines the external genital organs, the vagina, and the cervix. The study is conducted with a device called a colposcope. It consists of an optical part, a system that is a source of light and a directional part. With the colposcope, the tissues can be examined and, if necessary, material for histological examination. The increase can be between 4 and 40 times. </p>
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
                                                    <h2 class="equiphead">Endoscope</h2>
                                                    <a href="#"><img class="img-responsive" src="../img/Endoscope.png" alt="Endoscope" style="-webkit-box-shadow: 0px 0px 42px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.75);"></a>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#endo" style="margin-top:30px;">Read More</button>
                                                </div>


                                                <div class="modal" id="endo" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h3>Additional Information</h3>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>The endoscope is a tool that allows doctors to look at the organs of your body. There are different types of endoscopes: it tests both joints (eg knee), lungs and trachea, large intestine and bladder, as well as esophagus, stomach and duodenum.

Earlier generation of appliances used lenses and mirrors. 30 years later they were replaced with fibro-elastic optical devices, giving a clear and direct image of the organs. Modern endoscopes are modern and expensive devices made up of an elastic-flexible section of the tube, the end of which is controlled by an operator.</p>
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
                                                    <h2 class="equiphead">Echographe</h2>
                                                    <a href="#"><img class="img-responsive" src="../img/Echographe.png" alt="Echographe" style="-webkit-box-shadow: 0px 0px 42px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.75);"></a>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#echo" style="margin-top:30px;">Read more</button>
                                                </div>


                                                <div class="modal" id="echo" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h3>Additional Information</h3>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Ultrasound diagnosis, also known as echography, is a diagnostic procedure that is based on conducting high-frequency sound waves. Different organs reflect differently these waves and create a certain image that is projected on a video screen. Through this method, the organs can be seen in real time and in their natural movement.</p>
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
                                <div class="Stesnen">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                            <h2 class="mayo">Fees and insurance</h2><br>
                                            <p class="textt">
                                                Payment for office, including any co-payment, is due at the time of the office visit.
                                                Please remember that the responsibility for the payment of the medical bills rests with you, the patient.<br><br>
                                                In most cases the office will gladly file with your insurance company.<br><br>
                                                Please note that your hospital bill for inpatient or outpatient services,including fees for tests such as blood tests,
                                                X-rays or biopsies are separate from the doctor’s fees, fees for tests, transport and other, as our outdoor patient.<br><br>
                                            </p>
                                              <h2 class="mayo">Privacy obligations</h2><br>
                                            <p class="textt">
                                                The health Professionals each are required by law to maintain the privacy of your health information.<br>
                                            </p>
                                              <br>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Pov" style="margin-top:20px;">Terms And Conditions</button>
                                        </div>
                                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5;">
                                             <br><br> <img class="imagetabs img-responsive" src="../img/Taksi.jpg" alt="Man with computer">
                                        </div>


                                    </div>
                                </div>
                                <div class="modal" id="Pov" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h3>Terms and Conditions</h3>
                                            </div>
                                            <div class="modal-body">
                                                <p> CONFIDENTIALITY NOTICE <br><br>

                                                    With this notice, AIPSMP MEDIHELP EOOD, individual practice for first aid and emergencies, provide information about your personal data, which might be processed with respect to the settlements of claims under insurance contracts. <br><br>

                                                    What type of personal data we process? <br><br>
                                                    Personal data that is usually processed with respect to the settlement of claims under insurance contracts is the following:<br><br>
                                                    • Names: forename, second and family name<br>
                                                    • Personal number<br>
                                                    • Contact details: email, postal address and telephone<br>
                                                    • Address: permanent and current <br>
                                                    • Bank information: bank account number<br>
                                                    • Health status: information about your health status (diagnosis, medical report, other medical documentation), provided with the purpose of submitting your insurance claim.<br><br>

                                                    What is the base on which we process your personal data?<br><br>
                                                    We need to process your personal data in order to fulfill an obligation under an insurance contract.<br>
                                                    MEDIHELP may process your health status data (diagnosis, health status, medical documentation) to find out, exercise or protect lawful claims.<br>
                                                    In certain occasions, we share your data with service suppliers (experts and subcontractors) on the grounds of the legitimate interest of MEDIHELP to fulfil its obligations and raise the quality of the rendered services. Based on such legitimate interest related to internal administrative goals and objectives of MEDIHELP, we can share your personal data with insurance companies.<br><br>

                                                    What are the goals we use your personal data for?<br><br>
                                                    The personal data you provide will be used for the goals of administration of insurance relations, including but not limited to the following:<br><br>
                                                    • Processing claims related to the occurrence of insurance event and payment of insurance compensation upon liquidation of damage;<br>
                                                    • Protection against insurance-related fraud;<br>
                                                    • Risk assessment<br>
                                                    Who can we share your personal data with?<br><br>
                                                    MEDIHELP respect and keep confidential all your personal data. While we try to observe the applicable legal regulations, it is possible that MEDIHELP could disclose your personal data to the following people:<br><br>
                                                    • Service suppliers (consultants, experts, appraisers, lawyers): When we use service suppliers related to the fulfillment of our obligations under insurance contract, it is possible that MEDIHELP would disclose personal data. Such disclosure of data is done only when there is sufficient and justified reason to do that and based on prior written agreement the receivers of such data shall provide adequate level of protection.<br>

                                                    What is the period during which we store your personal data?<br><br>
                                                    MEDIHELP store individual documents, which we administer for the purpose of fulfilling our obligations under insurance contracts and claims, as follows:<br>
                                                    • Documents related to application of insurance claim – maximum term till the payment of the medical service, and documents related to the proof of the origin of the received amounts – up to 5 years as of the date of submitting the claim, where this term depends on the type of the insurance.<br>
                                                    For more detailed information about the terms of storage of all documents, which MEDIHELP process, you can contact directly MEDIHELP and ask for a copy of the corporate rules about the order of documents handling and archiving within the company.<br>
                                                    Your rights regarding your personal data<br><br>
                                                    Under the provisions of the applicable Bulgarian law, you have the following rights regarding your personal data, processed by MEDIHELP:<br><br>
                                                    1. To have access to your personal data, which MEDIHELP process, and receive a copy of it;<br>
                                                    2. If data processed by MEDIHELP is not full or unclear, your personal data will be corrected accordingly;<br>
                                                    3. To ask your personal data to be deleted when the relevant preconditions for that are available. Such events include: when the goal for which such data is collected is achieved; you have revoked your consent, when processing is based in such consent and there are not any other legal grounds to process your data; your data has been processed unlawfully, etc.;<br>
                                                    4. In the events provided by the law, you may require to apply some restrictions in the processing of your personal data; <br>
                                                    5. In the events when your personal data is processed on the base of legitimate interest (as enlisted above in this notice), you may object the processing of your personal data on such grounds;<br>
                                                    6. To exercise your right of transferability of data and require your data to be provided in a structured, generally used and machine-readable format.<br>
                                                    7. To revoke the consent, you have given, when the processing of your personal data is based on consent.<br>
                                                    You may find more detailed information about the terms and conditions under which you may exercise your rights in the Policy of exercising the rights of the subjects of personal data of MEDIHELP available in our office.<br>
                                                    Furthermore, you may submit a claim to the Personal Data Protection Commission when the relevant preconditions for that are available.<br>
                                                    How to contact us?<br><br>
                                                    You may find us at the following address: 48 Tsar Samuil Street, Burgas, Bulgaria, Tel: 0887411608 and at the address of the doctor’s office in Primorsko: Magnolii Hotel, International Youth Center.<br>
                                                    Our representative responsible for the protection of personal data is Dr. N. Stoychev, email: medihelp@abv.bg.<br>

                                                    Date, customer’s full names and signature:<br>
                                                    ……………………………………………….
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
            <br><br><br>
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
