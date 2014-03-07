<?php include ('header_head.php'); ?>
<?php include ('services_menu.php'); ?>
	<section id="slideshow" class="slideshow">
		<section id="wowslider-container">
			<section id="wowslider-images">
				<img src="img/webpage_slide.png">
			</section>
		</section>
	</section>
	<section class="slideline"></section>

	<section id="main">
		<section id="pagecontent">
			<span style="color:#C52128; font-size:20px";><b>Ruby on Rails Development</b></span><br>
			<b>DRY</b><br>
			<p>Simply means "Don't Repeat Yourself." We use it when we need it in an application. Through the power of Ruby, it is being used for Rails to bring it to lofe.</p>
			<b>Convention Over Configuration</b><br>
			<p>With the fact that Rails has defaults for just about every aspect, following Conventions allow us to write a Rails application using less code and cutting time, money and energy spent in developing.</p>
			<b>Representational State Transfer</b><br>
			<p>This is the very foundation of the RESTful architecture. By organizing your application around resources and standard HTTP verbs, we deliver in the fastest way possible.</p><br>
			<span style="color:#C52128; font-size:16px";><b>MVC Architecture</b></span><br>
			<span style="color:#000; font-size:14px";><b>Model</b></span><br>
				<ul id="phonelist">
					<li>The model is aware of all the data being displayed.</li>
					<li>The model represents the enterprise data and business rules that govern access to and updates of this data.</li>
					<li>The model is actually not aware about the presentation data and how that data will be displayed on the browser.</li>
				</ul>
			<span style="color:#000; font-size:14px";><b>View</b></span><br>
				<ul id="phonelist">
					<li>It is a representation of a model, wherein there can be various views associated with it.</li>
					<li>It interacts with a model via reference to the model object itself.</li>
					<li>Since the View is not dependent on the application logic, it remains the same even if there are modifications in the business logic itself.</li>
				</ul>
			<span style="color:#000; font-size:14px";><b>Controller</b></span><br>
				<ul id="phonelist">
					<li>Every user request always goes through the controller.</li>
					<li>The controller is responsible for intercepting requests from the view to the model.</li>
					<li>During after each action has been taken on the data, the controller is responsible for directing the appropriate view to the user.</li>
				</ul>
			<span style="color:#C52128; font-size:16px";><b>RAILS STRENGTH</b></span>
			<p>RAILS is abundant with great features that ensures productivity and efficiency. These features build on one another, allowing for a more complex and aggressive system.</p>
				<ol id="phonelist">
					<li><span style="color:#C52128";>Metaprogramming</span> - Ruby is one of the best languages for metaprogramming, and rails takes good advantage of this capability.</li>
					<li><span style="color:#C52128";>Active Record</span> - The Rails version of Active Record saves objects to the database, thus guaranteeing efficiency.</li>
					<li><span style="color:#C52128";>Convention Over Configuration</span> - By following suggested naming conventions, Rails doesn't need much configuration.</li>
					<li><span style="color:#C52128";>Scaffolding</span> - Rails automatically creates the scaffolding you need, shielding you from unnecessary temporary coding work.</li>
					<li><span style="color:#C52128";>Build-in testing</span> - Since Rails provides a supporting code called harnesses and fixtures, it makes it easier to run test cases. In the end, Ruby can actually execute all the automated tests with the rake utility.</li>
					<li><span style="color:#C52128";>Three environments</span> - Rails makes available three default environments: development, testing, production. As each behaves differently, it make your entire software development cycle easier.</li>	
				</ol>
			<span style="color:#C52128; font-size:16px";><b>THE ADVANTAGES</b></span>
				<ul id="phonelist">
					<li>Crud</li>
					<li>Scaffolding</li>
					<li>Dry</li>
					<li>Ajax</li>
				</ul>
		</section>		
	</section><br>
<?php include ('footer_foot.php'); ?>