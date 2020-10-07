<?php $pageTitle = "CONTACT US";
include('includes/header.php'); ?>

<div class="church-subheader">
	<div class="church-subheader-text">
		<span class="church-subheader-transparent"></span>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Contact Us</h1>
					<div class="clearfix"></div>
					<p>Always feel free to talk us</p>
				</div>
			</div>
		</div>
	</div>
	<div class="church-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul>
						<li>
							<a href="index.php">Home  <i class="fas fa-arrow-right"></i></a>
						</li>
						<li class="active">Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="church-main-content">

	<div class="church-main-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="church-contactus-wrap">
						<div class="row">
							<div class="col-md-4">
								<div class="church-contact-info">
									<h2 class="church-section-heading">[ Get In Touch ]</h2>
										<p>
											You can reach us via the following addresses and social media platforms
										</p>
									<ul class="church-contact-info-list">
										<li>
											<i class="fas fa-phone-volume"></i>
											<h5>Call Us At</h5>
											<span>
												Safaricom: <a href="tel:+254743304418">0743-304-418</a><br>
												Airtel: <a href="tel:+254753271113">0753-271-113</a>
											</span>
										</li>
										<li>
											<i class="fas fa-envelope"></i>
											<h5>Mail Us At</h5>
											<a href="mailto: officialpwanicu@gmail.com">
												officialpwanicu@gmail.com
											</a>
										</li>
										<li>
											<i class="fas fa-print"></i>
											<h5>Fax Us At</h5>
											<span>Coming soon </span>
										</li>
										<li>
											<i class="fas fa-home"></i>
											<h5>PHYSICAL ADDRESS</h5>
											<span>P.O. BOX 195-80108<br/>Kilifi </span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-8">
								<div class="church-contact-form">
									<h2 class="church-section-heading">Contact Us Now</h2>
									<form method="post" class="myform" action="process-form.php">
										<p>Your email address will not be published. Required fields are marked *</p>
										<ul>
											<li class="full-form">
												<label>Comment</label>
												<textarea placeholder="Type here" name="Message"></textarea>
											</li>
											<li>
												<label>Name</label>
												<input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="text" name="name" required>
											</li>
											<li>
												<label>Email</label>
												<input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="email" name="email" required>
											</li>
											<li class="full-form"><input type="submit" value="Submit Now"> <span class="output_message float-right"></span></li>
										</ul>
									</form>
								</div>
							</div>
						</div>


			<!-- Social Media -->
						<div class="row social-media">
							<div class="col-xs-2">
								<a href="#">
									<i class="fab fa-whatsapp-square"></i>
								</a>
							</div>
							<div class="col-xs-2">
								<a href="#">
									<i class="fab fa-facebook-square"></i>
								</a>
							</div>
							<div class="col-xs-2">
								<a href="#">
									<i class="fab fa-youtube-square"></i>
								</a>
							</div>
							<div class="col-xs-2">
								<a href="#">
									<i class="fab fa-twitter-square"></i>
								</a>
							</div>
							<div class="col-xs-2">
								<a href="#">
									<i class="fab fa-instagram-square"></i>
								</a>
							</div>
							<div class="col-xs-2">
								<a href="#">
									<i class="fab fa-google-plus-g"></i>
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div style="width: 100%"><iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=450&amp;hl=en&amp;q=Pwani%20%20University%20+(Pwani%20Univerity%20CU)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm">Road Trip Planner</a></div>
	</div>



</div>

<?php include('includes/footer.php'); ?>