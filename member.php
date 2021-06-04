<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
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

	<title>Membership</title>
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

	<style>
		#footer5-j {
			position: absolute !important;
			width: 100% !important;
			bottom: 0 !important;
		}
	</style>

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


	<?php
	$txt = "";
	if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {



		/*
		$mailHost = "ffcservicetraining.com";
        $mailUserName="info@ffcservicetraining.com";
        $mailPassword = "zaq123!@#";
        $sendEmail = "info@ffcservicetraining.com";
		$receiveEmail="ffcservicetraining@gmail.com";
		$replyEmail = "info@ffcservicetraining.com";
		*/

		$mailHost = "smtp.gmail.com";
		$mailUserName = "noreplyffcservice@gmail.com";
		$mailPassword = "1234@Qazx";
		$sendEmail = "noreplyffcservice@gmail.com";
		$receiveEmail = "info@ffcservicetraining.com";
		$replyEmail = "ffcservicetraining@gmail.com";


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
		$mail->addAddress($receiveEmail, 'Info');
		$mail->addReplyTo($replyEmail, 'Noreply');

		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $_POST['fullname'] . " - From membership page";
		$mail->Body    = "Full name: " . $_POST['fullname'] . "<br>Email: " . $_POST['email'] . "<br>Phone: " . $_POST['phone'] . "<br>Address: " . $_POST['address'] . "<br>Country: " . $_POST['country'] . "<br>Question 01: " . $_POST['question01'] . "<br>Question 02: " . $_POST['question02'] . "<br>Question 03: " . $_POST['question03'] . "<br>Question 04: " . $_POST['question04'];
		//$mail->AltBody = $_POST['fullname']."\n".$_POST['email']."\n".$_POST['phone']."\n".$_POST['message']."\n";

		$mail->send();



	?>
		<section class="mbr-section form1 cid-rT8iQJ6bep" id="goto">




			<div class="container">
				<div class="row justify-content-center" style=" font-family:Arial;">

					<h2>Consultancy Application Form & Approvalontact </h2>

				</div>
				<div class="row justify-content-center" style=" font-family:Arial;">

					<h3>Financial Franchise 4.0</h3>

				</div>
				<div class="row justify-content-center" style="padding-top:8%;">
					<div class="title col-12 col-lg-8">
						<img src="assets/images/ok.png" alt="FFCServiceTraining" title="">
						<h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-7 mt-5">
							Congratulations You have successfully registered. We will review & respond to You as soon as possible.<br><br>Best regards!<br>FFC Team
						</h3>
					</div>
				</div>
			</div>

		</section>

	<?php
	} else {
	?>
		<section class="mbr-section form1 cid-rT8iQJ6bep" id="goto">




			<div class="container">
				<div class="row justify-content-center">
					<div class="title col-12 col-lg-8">
						<h2 class="mbr-section-title align-center pb-0 mbr-fonts-style display-2">
							Consultancy Application Form & Approval
						</h2>
						<h3 class="mbr-section-subtitle align-center pb-3 mbr-fonts-style display-5">
							Financial Franchise 4.0
						</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="media-container-column col-lg-8" data-form-type="formoid">
						<!---Formbuilder Form--->
						<form action="member.php" method="POST" class="mbr-form form-with-styler" data-form-title="FFCServiceTraining Form"><input type="hidden" name="email" data-form-email="true" value="x0F6t1z0Tuj9jqzBpjlBZQGu4q8tbKkr6iIJwk5uqcpk4unMwlB6+AkGHySk9rh7vMggGZBAatzhVO3bJFSXn0oF8uU8TtqfbNL+DvadXqchZaE8s7su1mbJ5386acVW">
							<div class="row">
								<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
								<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
								</div>
							</div>
							<div class="dragArea row">
								<div class="col-md-12  form-group">

									<input type="text" name="fullname" required="required" class="form-control display-7" placeholder="Your Full Name">
								</div>
								<div class="col-md-12  form-group">

									<input type="email" name="email" required="required" class="form-control display-7" placeholder="Your Email">
								</div>
								<div data-for="phone" class="col-md-12  form-group">

									<input type="tel" name="phone" required="required" data-form-field="Phone" class="form-control display-7" placeholder="Your Phone Number">
								</div>
								<div class="col-md-12  form-group">
									<input type="text" name="address" required="required" class="form-control display-7" placeholder="Your Address">
								</div>
								<div class="col-md-12  form-group">
									<select name="country" required class="form-control display-7">
										<option value="" selected disabled>Your Nation</option>
										<option value="Afganistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antigua & Barbuda">Antigua & Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bonaire">Bonaire</option>
										<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Canary Islands">Canary Islands</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Channel Islands">Channel Islands</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos Island">Cocos Island</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote DIvoire">Cote DIvoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Curaco">Curacao</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Ter">French Southern Ter</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Great Britain">Great Britain</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Hawaii">Hawaii</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="Indonesia">Indonesia</option>
										<option value="India">India</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Isle of Man">Isle of Man</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea North">Korea North</option>
										<option value="Korea Sout">Korea South</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macau">Macau</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Malawi">Malawi</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Midway Islands">Midway Islands</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Nambia">Nambia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherland Antilles">Netherland Antilles</option>
										<option value="Netherlands">Netherlands (Holland, Europe)</option>
										<option value="Nevis">Nevis</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau Island">Palau Island</option>
										<option value="Palestine">Palestine</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Phillipines">Philippines</option>
										<option value="Pitcairn Island">Pitcairn Island</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Republic of Montenegro">Republic of Montenegro</option>
										<option value="Republic of Serbia">Republic of Serbia</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russia</option>
										<option value="Rwanda">Rwanda</option>
										<option value="St Barthelemy">St Barthelemy</option>
										<option value="St Eustatius">St Eustatius</option>
										<option value="St Helena">St Helena</option>
										<option value="St Kitts-Nevis">St Kitts-Nevis</option>
										<option value="St Lucia">St Lucia</option>
										<option value="St Maarten">St Maarten</option>
										<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
										<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
										<option value="Saipan">Saipan</option>
										<option value="Samoa">Samoa</option>
										<option value="Samoa American">Samoa American</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome & Principe">Sao Tome & Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syria">Syria</option>
										<option value="Tahiti">Tahiti</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad & Tobago">Trinidad & Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks & Caicos Is">Turks & Caicos Is</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Erimates">United Arab Emirates</option>
										<option value="United States of America">United States of America</option>
										<option value="Uraguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican City State">Vatican City State</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
										<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
										<option value="Wake Island">Wake Island</option>
										<option value="Wallis & Futana Is">Wallis & Futana Is</option>
										<option value="Yemen">Yemen</option>
										<option value="Zaire">Zaire</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>
								<div class="col-md-12  form-group">
									<textarea type="text" name="question01" required="required" class="form-control display-7" placeholder="Who introduced you to this opportunity – Finance Franchise 4.0?"></textarea>
								</div>
								<div class="col-md-12  form-group">
									<textarea type="text" name="question02" required="required" class="form-control display-7" placeholder="How many leaders with the highest level - 1.2% can you build up within 1 year from the date you join?"></textarea>
								</div>
								<div class="col-md-12  form-group">
									<textarea type="text" name="question03" required="required" class="form-control display-7" placeholder="How much sales volumes (total deposits) in $US in 1 year from the date you join?"></textarea>
								</div>
								<div class="col-md-12  form-group">
									<textarea type="text" name="question04" required="required" class="form-control display-7" placeholder="How much income in $US do you expect to earn in 1 year from the date you join?"></textarea>
								</div>
								<div class="col-md-12 input-group-btn align-center">
									<button type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
								</div>
							</div>
						</form>
						<!---Formbuilder Form--->
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
	<script>
		window.scrollTo(0, document.getElementById('goto').offsetTop);
	</script>
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