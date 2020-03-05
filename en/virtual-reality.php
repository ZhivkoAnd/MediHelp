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
      <link rel="canonical" href="https://www.medihelp.center/en/virtual-reality.php">
       <link rel=”alternate” href="https://www.medihelp.center/virtualna-realnost.php" hreflang="bg" />
    <link rel=”alternate” href="https://www.medihelp.center/en/virtual-reality.php" hreflang="en" />
    <meta name="description" content="Take a look at the Medical Center from the inside with our new Virtual Reality.">
    <meta name="keywords" content="Virtual Reality, Medical Center virtual reality">
   <link rel="apple-touch-icon" href="../img/favicon-32x32.png" />
    <title>Virtual Reality | Medical Center Medihelp</title>

    <meta itemprop="name" content="Virtual Reality | Medical Center Medihelp">
    <meta itemprop="description" content="Take a look at the Medical Center from the inside with our new Virtual Reality.">
    <meta itemprop="image" src="../img/MediIcon.png" alt="IconLogo">

    <meta property="og:image" content="https://medihelp.center/img/MediIcon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MEDIHELP" />
    <meta property="og:description" content="Virtual Reality" />

    <!-- Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/MainCss.css" rel="stylesheet" type="text/css" />

  
    <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Philosopher|Russo+One&display=swap" rel="stylesheet">

    <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
    <script src="https://npmcdn.com/aframe-animation-component@3.0.1"></script>
    <script src="https://npmcdn.com/aframe-event-set-component@3.0.1"></script>
    <script src="https://npmcdn.com/aframe-layout-component@3.0.1"></script>
    <script src="https://npmcdn.com/aframe-template-component@3.1.1"></script>
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


   
        <!-- Main content -->


        <div class="AR">


            <a-scene>
                <a-assets>
                    <img id="parking-lot" crossorigin="anonymous" src="../img/SAM_100_0161.jpg">
                    <img id="parking-lot-thumb" crossorigin="anonymous" src="../img/SAM_100_0161.jpg">
                    <img id="main-hall-thumb" crossorigin="anonymous" src="../img/SAM_100_0120.jpg">
                    <img id="administration-thumb" crossorigin="anonymous" src="../img/SAM_100_0142.jpg">
                    <audio id="click-sound" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/audio/click.ogg"></audio>
                    <img id="main-hall" crossorigin="anonymous" src="../img/SAM_100_0120.jpg">
                    <img id="administration" crossorigin="anonymous" src="../img/SAM_100_0142.jpg">

                    <!-- Image link template to be reused. -->
                    <script id="link" type="text/html">
                        <a-entity class="link"
                          geometry="primitive: plane; height: 1; width: 1"
                          material="shader: flat; src: ${thumb}"
                          event-set__1="_event: mousedown; scale: 1 1 1"
                          event-set__2="_event: mouseup; scale: 1.2 1.2 1"
                          event-set__3="_event: mouseenter; scale: 1.2 1.2 1"
                          event-set__4="_event: mouseleave; scale: 1 1 1"
                          set-image="on: click; target: #image-360; src: ${src}"
                          sound="on: click; src: #click-sound"></a-entity>
            </script>

                </a-assets>

                <!-- 360-degree image. -->
                <a-sky id="image-360" radius="10" src="#parking-lot"></a-sky>
                <!--<a-text id="123" font="kelsonsans" value="Parking lot new campus;" width="2" position="-1 1 -2.9"
                rotation="0 15 0"></a-text>-->


                <!-- Image links. -->
                <a-entity id="links" layout="type: line; margin: 1.5" position="-1 0 -3">
                    <a-entity template="src: #link" data-src="#main-hall" data-thumb="#main-hall-thumb"></a-entity>
                    <a-entity template="src: #link" data-src="#parking-lot" data-thumb="#parking-lot-thumb"></a-entity>
                    <a-entity template="src: #link" data-src="#administration" data-thumb="#administration-thumb"></a-entity>
                </a-entity>

                <!-- Camera + cursor. -->
                <a-entity camera look-controls>
                    <a-cursor id="cursor" animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150" animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500" event-set__1="_event: mouseenter; color: springgreen" event-set__2="_event: mouseleave; color: black" fuse="true" raycaster="objects: .link"></a-cursor>
                </a-entity>
            </a-scene>
            <script>
                /* global AFRAME */

                /**
                 * Component that listens to an event, fades out an entity, swaps the texture, and fades it
                 * back in.
                 */
                AFRAME.registerComponent('set-image', {
                    schema: {
                        on: {
                            type: 'string'
                        },
                        target: {
                            type: 'selector'
                        },
                        src: {
                            type: 'string'
                        },
                        dur: {
                            type: 'number',
                            default: 300
                        }
                    },

                    init: function() {
                        var data = this.data;
                        var el = this.el;

                        this.setupFadeAnimation();

                        el.addEventListener(data.on, function() {
                            // Fade out image.
                            data.target.emit('set-image-fade');
                            // Wait for fade to complete.
                            setTimeout(function() {
                                // Set image.
                                data.target.setAttribute('material', 'src', data.src);
                            }, data.dur);
                        });
                    },

                    /**
                     * Setup fade-in + fade-out.
                     */
                    setupFadeAnimation: function() {
                        var data = this.data;
                        var targetEl = this.data.target;

                        // Only set up once.
                        if (targetEl.dataset.setImageFadeSetup) {
                            return;
                        }
                        targetEl.dataset.setImageFadeSetup = true;

                        // Create animation.
                        targetEl.setAttribute('animation__fade', {
                            property: 'material.color',
                            startEvents: 'set-image-fade',
                            dir: 'alternate',
                            dur: data.dur,
                            from: '#FFF',
                            to: '#000'
                        });
                    }
                });

            </script>


        </div>


    <!-- Footer -->
    <footer class="site-footer" style="background-color:transparent;">
        <div class="container-fluid">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <p style="font-size:30px; color:black; font-family:'Philosopher'; font-weight:bold;">Hover any of the pictures for a 3D Virtual Reality Image</p><br>

            </div>

        </div>

    </footer>

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <!-- <script src="js/form-validation.js"></script> -->
 <script src="../js/bootstrap.min.js"></script>

</body>

</html>
