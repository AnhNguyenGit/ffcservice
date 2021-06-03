<?php
	use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;

		// Load Composer's autoloader
		require '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with FFCServiceTraining Website Builder v4.11.5, https://ffcservicetraining.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="FFCServiceTraining v4.11.5, ffcservicetraining.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-122x41.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Liên hệ</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section once="footers" class="cid-rT7Xrgmc1y" id="footer6-1">

    

    

    <div class="container">
        <div class="media-container-row align-right mbr-white">
            <div class="col-12">
                <div style="padding-left: 2rem;background-image: url(assets/images/langicon.png);background-repeat: no-repeat;padding-right: 2rem;width:165px;float: right;" id="translate_select"></div>
					 
            </div>
        </div>
    </div>
</section>

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
                    <a href="https://ffcservicetraining.com/vi/">
                         <img src="assets/images/logo-122x41.png" alt="FFCServiceTraining" title="" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="gioi-thieu.html">
                        Giới Thiệu</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="dich-vu-va-dao-tao.html">
                        Dịch Vụ &amp; Đào Tạo</a></li>
						<li class="nav-item"><a class="nav-link link text-black display-4" href="SBT-Solutions.html">
                        SBT Solutions</a></li>
						<li class="nav-item"><a class="nav-link link text-black display-4" href="giao-duc.html">
                        Giáo Dục</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="thanh-vien.html">
                        Thành Viên</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="lien-he.html">
                        Liên hệ</a>
                </li></ul>
            
        </div>
    </nav>
</section>
<section class="cid-rT7YdDrmJQ mbr-fullscreen mbr-parallax-background" id="header2-2">

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                
                
                
                
            </div>
        </div>
    </div>
    
</section>
<?php
	$txt="";
	if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
		
		$mailHost = "smtp.gmail.com";
        $mailUserName="noreplyffcservice@gmail.com";
        $mailPassword = "1234@Qazx";
        $sendEmail = "noreplyffcservice@gmail.com";
		//$receiveEmail="ffcservicetraining@gmail.com";
		$receiveEmail="info@ffcservicetraining.com";
		$replyEmail = "ffcservicetraining@gmail.com";
		
		$mail = new PHPMailer(true);
		$mail->CharSet = "utf-8";
		$mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
// 		$mail->Host = "mail.ffcservicetraining.com"; // specify main and backup server
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
// 		$mail->Username = "noreply@ffcservicetraining.com"; // your SMTP username or your gmail username
// 		$mail->Password = "1234@Qazx"; // your SMTP password or your gmail password
	    $mail->Username = $mailUserName; // your SMTP username or your gmail username
		$mail->Password = $mailPassword; // your SMTP password or your gmail password
									  // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
// 		$mail->setFrom('noreply@ffcservicetraining.com', 'Noreply');
// 		$mail->addAddress('ffcservicetraining@gmail.com', 'FFC Team');     // Add a recipient
// 		$mail->addReplyTo('noreply@ffcservicetraining.com', 'Noreply');

        $mail->setFrom($sendEmail, 'Noreply');
		$mail->addAddress($receiveEmail, 'FFC Team');     // Add a recipient
		$mail->addReplyTo($replyEmail, 'Noreply');
		
		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $_POST['fullname']." - From contact page";
		$mail->Body    = "Full name: ".$_POST['fullname']."<br>Email: ".$_POST['email']."<br>Phone: ".$_POST['phone']."<br>Content: ".$_POST['message']."\n";
		//$mail->AltBody = $_POST['fullname']."\n".$_POST['email']."\n".$_POST['phone']."\n".$_POST['message']."\n";

		$mail->send();
?>
<section class="mbr-section form1 cid-rT8iQJ6bep" id="lh">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
			<img src="assets/images/ok.png" alt="FFCServiceTraining" title="">
                <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-7 mt-5">
                    Cảm ơn Bạn đã liên hệ. Chúng tôi sẽ hồi âm cho Bạn sớm nhất. <br><br>Trân trọng! <br>FFC Team
                </h3>                
            </div>
        </div>
    </div>
    
</section>

<?php
	}else{
?>
<section class="mbr-section form1 cid-rT8jn7oxzA" id="goto">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-0 mbr-fonts-style display-2">
                    LIÊN HỆ
                </h2>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="lien-he.php" method="POST" class="mbr-form form-with-styler" data-form-title="FFCServiceTraining Form"><input type="hidden" name="email" data-form-email="true" value="x0F6t1z0Tuj9jqzBpjlBZQGu4q8tbKkr6iIJwk5uqcpk4unMwlB6+AkGHySk9rh7vMggGZBAatzhVO3bJFSXn0oF8uU8TtqfbNL+DvadXqchZaE8s7su1mbJ5386acVW">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-12  form-group">
                            
                            <input type="text" name="fullname" required="required" class="form-control display-7" placeholder="Họ & Tên">
                        </div>
                        <div class="col-md-12  form-group">
                            
                            <input type="email" name="email" required="required" class="form-control display-7" placeholder="Email">
                        </div>
                        <div data-for="phone" class="col-md-12  form-group">
                            
                            <input type="tel" name="phone" required="required" data-form-field="Phone" class="form-control display-7" placeholder="Số điện thoại">
                        </div>
						
						
                        <div class="col-md-12  form-group">                            
                            <textarea type="text" name="message" required="required" class="form-control display-7" placeholder="Nội dung"></textarea>
                        </div>
						
                        <div class="col-md-12 input-group-btn align-center">
                            <button type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
                        </div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>
<?php
}
?>
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
                            <a href="https://www.facebook.com/FFCServiceTrainingAsia/" target="_blank">
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
<script type="text/javascript" 
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'vi'}, 'translate_select');
        }
    </script>
  
  
<script type="text/javascript">
    $('#translate_select').on('click', function(data) {
  if(this.firstChild.firstChild.firstChild.value==='en')
 window.location.href ='https://ffcservicetraining.com';
});
</script>
  <script>window.scrollTo(0, document.getElementById('goto').offsetTop);</script>
  
  
<script type="text/javascript">
_atrk_opts = { atrk_acct:"hQFZq1hNdI20fn", domain:"ffcservicetraining.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=hQFZq1hNdI20fn" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->

</body>
</html>