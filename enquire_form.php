<!DOCTYPE html>
<html>
<head>
    <link rel="SHORTCUT ICON" href="favicon.ico"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name = "format-detection" content = "telephone=no">
    <title>Rails|Cloud|HTML5|CSS3|MongoDB|Offshore IT| Several other offshore services...</title>
    <link rel="stylesheet" type="text/css" href="css/master.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/smallslider.css">
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=3.5.1'></script>
    <script src="js/smooth.pack.js" type="text/javascript"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/likebuttons.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/scroll_icons.js"></script>
            <link rel="stylesheet" type="text/css" href="css/scroll_icon.css" />
    <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25285304-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();    
    </script>

      <!-- Start of Zopim Live Chat Script -->
      <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=
    z.s=d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o
      ){z.set._.push(o)};$.setAttribute('charset','utf-8');$.async=!0;z.set.
      _=[];$.src=('https:'==d.location.protocol?'https://ssl':'http://cdn')+
      '.zopim.com/?FnXksRucv8sJ5z3D14sLU8cJkuuPGrPU';$.type='text/java'+s;z.
      t=+new Date;z._=[];e.parentNode.insertBefore($,e)})(document,'script')
      </script>
      <script type="text/javascript">
             $("#slideshowbg > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshowbg > div:first')
    .fadeOut(2000)
    .next()
    .fadeIn(2000)
    .end()
    .appendTo('#slideshowbg');
},  6000);
      </script>
</head>

<body>

<a class="scroll-point pt-top" name="top"></a>

<div id="header">
    <div class="wrap">
        <a class="logo" href="#top"></a>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="index.php #services">Services</a>
            <a href="index.php #process">Process</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="enquire_form.php">Enquire</a>
            <a href="about_us.php">About Us</a>
        </div>
         <?php include ('commons.php'); ?>
         <div class="wrapper">
          <div class="wrapper2">
              <ul id="contact-us-floating">
                <li class="facebook"> <a href="http://www.facebook.com/MaisaSolutions" title="Maisa Solutions at Facebook" target="blank"></a>
                  <div class="right-side"></div>
                </li>
                <li class="twitter"> <a href="https://twitter.com/maisasolutions" title="Maisa Solutions at Twitter" target="blank"></a>
                  <div class="right-side"></div>
                </li>
                <li class="email">
                  <div class="right-side"> <a href="ContactUs" title="Contact Us" target="blank"></a>
                  <div class="box"> <a href="about_us.php #contact">contact@maisasolutions.com</a> </div>
                  </div>
                </li>
                <li class="phone">
                  <div class="right-side">
                  <a href="contactus.php" title="Contact Us"></a>
                  <div class="box"> <a href="about_us.php #contact" target="blank">+1-707-709-8961 (USA)<br/>
                    +91-040-401-77227 (INDIA)</a> </div>
                  </div>  
                </li>
              </ul>
          </div>
         </div> 

    </div>
    <div class="shadow"></div>
</div>

    <div class="wrap">
         <img src="img/contactpage.jpg" style="width: 1008px;height:250px;margin-top: 94px;">
    </div>

<!-- ########################################################enquire form start ################################################-->
<div class="wrap">
<section id="main">
    <!-- <span style="color:#C52128; font-size:20px;">Get Started</span>
    <p>Maisa reduces your total offshore cost significantly by providing high quality, time bound, highly dedicated and cost effective outsourcing through our offshore development services. One of the several key advantages with Maisa is, our customers get 6 days of work by only paying for 5 days. It is 20% more value for your money from week 1 onwards!!!</p>
    <p>To get started please send us the following information about your project. One of our Project Managers shall evaluate your project requirements and give you a formal proposal. Detailed information will help us evaluate your project accurately.<br></p>  -->

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
                
                <input type="image" src="img/submit.jpg" name="submit" value="Submit" /><input type="hidden" id="spam_code" name="spam_code" value="Captcha Code Here"  />
            </div>
        </form>
    </div>
</section>
</div>       
 <hr/>
<div class="f1">    
<?php include ('footer.php'); ?>
</div>