<?php include ('header.php'); ?>      
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