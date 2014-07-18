<?php include ('header.php'); ?> 
<div class="grid">
    <div class="wrap">
         <img src="img/contactpage.jpg" style="width: 1008px;height:250px;margin-top: 94px;">
    </div>
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
<?php include ('footer.php'); ?>