<!DOCTYPE html>
<html>
<head>
    <link rel="SHORTCUT ICON" href="favicon.ico"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name = "format-detection" content = "telephone=no">
    <meta name="description" content="Request a quote for web application and mobile application development requirements." />
    <meta name="keywords" content="Offshore Mobile Applications Development, Offshore Web Applications Development, Offshore Hadoop Development, Offshore NoSQL Development, Offshore Cassandra Development, Offshore MongoDB Development, Offshore CouchBase Development, Offshore Ruby on Rails Development, Offshore Spree Development, Offshore Ruby Development, Offshore Java/J2EE Development, Offshore Amazon WebServices Development, Offshore Amazon AWS Development, Offshore Cloud Computing Development, Offshore Heroku Development, Offshore Engine Yard Development, Offshore Google App Engine Development, Offshore iOS Native Application Development, Offshore Android Native Application Development, Offshore Mobile Application Development, Offshore PhoneGap/Apache Cardova Development, Offshore HTML5/CSS3/JavaScript/PHP Development, Offshore Node.js Development, Offshore Backbone.js Development, Offshore Angular.js, Offshore IT Development" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="msvalidate.01" content="F85A57D9955372C1B336AE5022CFA3A2" />
    <title>Mobile|BigData|Cloud...</title>
    <link rel="stylesheet" type="text/css" href="css/master.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/smallslider.css">
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=3.5.1'></script>
    <script src="js/smooth.pack.js" type="text/javascript"></script>
    <script src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/scroll_icons.js"></script>
    <link rel="stylesheet" type="text/css" href="css/scroll_icon.css" />
</head>
<body>
  <!--scrolling icons-->
    <div class="scorlling_left">
      <ul id="contact-us-floating">
        <li class="facebook"> <a href="http://www.facebook.com/MaisaSolutions" title="Maisa Solutions at Facebook" target="blank"></a>
          <div class="right-side"></div>
        </li>
        <li class="twitter"> <a href="https://twitter.com/maisasolutions" title="Maisa Solutions at Twitter" target="blank"></a>
          <div class="right-side"></div>
        </li>
        <li class="email">
          <div class="right-side"> <a href="ContactUs" title="Contact Us" target="blank"></a>
          <div class="box"> <a href="about_us.php#contact">contact@maisasolutions.com</a> </div>
          </div>
        </li>
        <li class="phone">
          <div class="right-side">
          <a href="contactus.php" title="Contact Us"></a>
          <div class="box"> <a href="about_us.php#contact" target="blank">+1-707-709-8961 (USA)<br/>
            +91-040-401-77227 (INDIA)</a> </div>
          </div>
        </li>
      </ul>
</div>
<!-- ####################################################header part ########################################################-->
<a class="scroll-point pt-top" name="top"></a>

<div id="header">
    <div class="wrap">
        <a class="logo" href="index.php"></a>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="index.php#services">Services</a>
            <a href="index.php#process">Process</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="enquire.php">Enquire</a>
            <a href="about_us.php">About Us</a>
        </div>
         <?php include ('commons.php'); ?>
    </div>
    <div class="shadow"></div>
</div>
<div class="wrap">
     <img src="img/contactpage.jpg" style="width: 1008px;height:250px;margin-top: 94px;">
</div>
<!-- ########################################################enquire form start ################################################-->
<div class="wrap">
<section id="main">
    <div class="form_style" >
        <h1>Enquiry Form</h1>
        <form name="enquire_form" method="post" id="enquire_form_id" onsubmit="return validateForm();" action="contact-form-maisa.php">
            <div>
                <label>First Name:</label>
                <input name="first_name" type=text placeholder="First name*" required>

                <label>Last Name:</label>
                <input name="last_name" type=text placeholder="Last name*" required>

                <label>Email Address:</label>
                <input name="email" type=email placeholder="Email Address*" required>

                <label>Skype:</label>
                <input name="skype" type=text placeholder="Skype ID if you have one!">


                <label>Phone Number:</label>
                <input id="phone" name=phone type=number placeholder="Phone Number">

                <label>Company Name:</label>
                <input name="company_name" type=text placeholder="Company Name*" required>

                <label>Company URL:</label>
                <input name="url" type=url placeholder="Company URL">

                <label>City:</label>
                <input name="city" type=text placeholder="City*" required>

                <label>Country:</label>
                <input name="country" type=text placeholder="Country*" required>
            </div>
            <div>
                <fieldset class="roundedbox">
                    <legend class="h9Text">Preferred Work Model:</legend>
                    <input type=radio name="work_model" id = "fixedbid" value = "Fixed-Bid">Fixed Bid<br>
                    <input type=radio name="work_model" id = "timenmaterial" value = "Time-N-Material">Time-N-Material<br>
                    <input type=radio name="work_model" id = "hireadeveloper" value = "Hire-A-Developer(s)" checked = "checked" >Hire-A-Developer(s)<br>
                </fieldset>
                <label>Tell Us About Your Need(s):</label><br/>
                <textarea name="description" placeholder="Short Description*" required></textarea>

                <button class="button" name="submit" value="Submit" />Submit</button><input type="hidden" id="spam_code" name="spam_code" value="Captcha Code Here"  />
            </div>
        </form>
    </div>
</section>
</div>
 <hr/>
 <!-- ####################################################################footerpart #######################################-->
<div class="f1">
<?php include ('footer.php'); ?>
</div>
