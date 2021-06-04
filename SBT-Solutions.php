<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {

    /* $mailHost = "ffcservicetraining.com";
        $mailUserName="noreply@ffcservicetraining.com";
        $mailPassword = "zaq123!@#";
        $sendEmail = "noreply@ffcservicetraining.com";
        $receiveEmail="ffcservicetraining@gmail.com";
        $replyEmail = "noreply@ffcservicetraining.com";
        */


    $mailHost = "smtp.gmail.com";
    $mailUserName = "noreplyffcservice@gmail.com";
    $mailPassword = "1234@Qazx";
    $sendEmail = "noreplyffcservice@gmail.com";
    $receiveEmail = "info@ffcservicetraining.com";
    $replyEmail = "ffcservicetraining@gmail.com";
    //$replyEmail = "anhnd1503@gmail.com";

    $mail = new PHPMailer(true);
    $mail->CharSet = "utf-8";
    $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host = $mailHost; // specify main and backup server

    $mail->SMTPAuth = true; // turn on SMTP authentication
    // $mail->SMTPAutoTLS = false;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Username = $mailUserName; // your SMTP username or your gmail username
    $mail->Password = $mailPassword; // your SMTP password or your gmail password

    // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($sendEmail, 'Noreply');
    $mail->addAddress($receiveEmail, 'FFC Team');
    $mail->addReplyTo($replyEmail, 'Noreply');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['fullname'] . " - From SBT Solutions";
    $mail->Body    = "Name: " . $_POST['fullname'] . "<br>Email: " . $_POST['email'];
    //$mail->AltBody = $_POST['fullname']."\n".$_POST['email']."\n".$_POST['phone']."\n".$_POST['message']."\n";


    try {
        $mail->send();
    } catch (Exception  $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    /*if(!$mail->send()) {
			echo '';
		} else {
			echo '';
		}
		*/
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Site made with FFCServiceTraining Website Builder v4.11.5, https://ffcservicetraining.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="FFCServiceTraining v4.11.5, ffcservicetraining.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-122x41.png" type="image/x-icon">
    <meta name="description" content="">

    <title>SBT Solutions</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

    <meta property="og:title" content="SBT SOLUTIONS">
    <meta property="og:description" content="SmartBizTech Solutions. You build the system once, then you get passive income as a long term one...">
    <meta property="og:image" content="sbtthumbnail.jpg">
    <style>
        #footer5-j {
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>

    <!-- <section once="footers" class="cid-rT7Xrgmc1y" id="footer6-1">

    

    

    <div class="container">
        <div class="media-container-row align-right mbr-white">
            <div class="col-12">
                <div style="padding-left: 2rem;background-image: url(assets/images/langicon.png);background-repeat: no-repeat;padding-right: 2rem;width:165px;float: right;" id="translate_select"></div>
					 
            </div>
        </div>
    </div>
</section> -->
    <section class="menu cid-rT7UIVKgoZ" once="menu" id="menu1-0">

        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center  navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="https://ffcservicetraining.com">
                            <img src="assets/images/logo-122x41.png" alt="FFCServiceTraining" title="" style="height: 3.8rem;">
                        </a>
                    </span>

                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="about.html">
                            About Us</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link link text-black display-4" href="expert.html">
							Our Experts & Business Coaches</a>
					</li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="service.html">
                            Service & Training</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="SBT-Solutions.html">
                            SBT Solutions</a></li>

                    <li class="nav-item"><a class="nav-link link text-black display-4" href="edu.html">
                            Education</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="member.html">
                            Membership</a></li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="contact.html">
                            Contact</a>
                    </li>
                </ul>

            </div>
        </nav>
    </section>
    <section class="mbr-section form1 cid-rT8iQJ6bep" id="goto">




        <div class="container">
            <div class="row justify-content-center" style=" font-family:Arial;">
                <div>
                    <h2> SBT Solutions </h2>
                </div>
            </div>
            <div class="row justify-content-center" style="padding-top:8%;">


                <div class="title col-12 col-lg-8">
                    <img src="assets/images/ok.png" alt="FFCServiceTraining" title="">
                    <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-7 mt-5">
                        Thanks for contacting. We will reply to you as soon as possible.<br><br>Best regards!<br>FFC Team
                    </h3>
                </div>
            </div>
        </div>

    </section>

    <section class="cid-rT8fWwWMB1" id="footer5-j">

        <div class="container">

            <div class="footer-lower">

                <div class="media-container-row mbr-white">

                    <div class="col-md-6 mbr-figure">
                        <div class="social-list align-right">

                            <div class="soc-item">
                                <a href="https://twitter.com/ffcservice?s=09" target="_blank">
                                    <img src="assets/images/twitter.png" alt="FFCServiceTraining" title="">
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.facebook.com/ffcservicetraining.global" target="_blank">
                                    <img src="assets/images/facebook.png" alt="FFCServiceTraining" title="">
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.youtube.com/channel/UCQYj04trT1YC2P0iJFX-Jdg" target="_blank">
                                    <img src="assets/images/youtube.png" alt="FFCServiceTraining" title="">
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://instagram.com/p/B9eodboFf3S/?igshid=3a6hgg9924v5" target="_blank">
                                    <img src="assets/images/instagram.png" alt="FFCServiceTraining" title="">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 copyright mbr-figure">
                        <span class="mbr-fonts-style display-7 mbr-white">
                            ©2019 FFC SERVICE &amp; TRAINING - All rights reserved.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/parallax/jarallax.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/theme/js/script.js"></script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'translate_select');
        }
    </script>
    <script type="text/javascript">
        $('#translate_select').on('click', function(data) {
            if (this.firstChild.firstChild.firstChild.value === 'vi')
                window.location.href = 'vi';
        });
    </script>


    <script type="text/javascript">
        // Get the modal
        var modal = document.getElementById("myModal");
        var modalRegistered = document.getElementById("Registered");
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        var btn1 = document.getElementById("myBtn1");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        var spanRegistered = document.getElementsByClassName("close")[1];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }
        btn1.onclick = function() {
            modal.style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        spanRegistered.onclick = function() {
            modalRegistered.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }

        }
        $(window).on("load", function() {

            modalRegistered.style.display = "block";
        });
    </script>

    <script type="text/javascript">
        _atrk_opts = {
            atrk_acct: "hQFZq1hNdI20fn",
            domain: "ffcservicetraining.com",
            dynamic: true
        };
        (function() {
            var as = document.createElement('script');
            as.type = 'text/javascript';
            as.async = true;
            as.src = "https://certify-js.alexametrics.com/atrk.js";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(as, s);
        })();
    </script>
    <noscript><img src="https://certify.alexametrics.com/atrk.gif?account=hQFZq1hNdI20fn" style="display:none" height="1" width="1" alt="" /></noscript>
    <!-- End Alexa Certify Javascript -->
</body>

</html>