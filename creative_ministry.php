<?php $pageTitle = "CM DEPT"; include('includes/header.php'); ?>


<div class="church-subheader">
	<div class="church-subheader-text">
		<span class="church-subheader-transparent"></span>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Creative Ministry</h1>
					<div class="clearfix"></div>
					<p class="text-uppercase text-monocase">
						DEPARTMENT OVERVIEW
					</p>
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
							<a href="index.php">Home</a>
							<i class="fas fa-arrow-right"></i>
						</li>
						<li class="active">Creative Ministry Departments</li>
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

				<aside class="col-md-3">

					<div class="widget widget_cetagories">
						<?php include('includes/department_links.php'); ?>
					</div>

				</aside>

				<div class="col-md-9">
					<div class="church-blog church-blog-large">
						<ul class="row">
							<li class="col-md-12">
								<div class="church-blog-large-wrap">
									<figure><a href="blog-detail.html"><img src="extra-images/pu/creative.JPG" alt=""><i class="fab fa-algolia"></i></a>
										<figcaption class="church-time-date"><small>Creative Ministry</small></figcaption>
									</figure>
									<div class="church-blog-large-text">
										<p class="text-justify">
										<strong>Greetings!</strong> We thank God that even though we are in a period of uncertainties, where we aren't able to meet physically, as the creative Ministry department. We have been meeting together online in our WhatsApp platform. We have been helping each other grow in the talents the Lord has blessed us with.</p>
										<p class="text-justify"> 
											In the last few months, we have had two discussions on; King Solomon and “Why does God have so many rules?”.... attendance was encouraging! I am inviting all of us to be a part of this! Blessings!
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
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
					<div class="church-team-detail">
						<div class="row">
							<div class="col-md-6">
								<h2 class="church-section-heading"> Creative Ministry Members </h2>
								<div class="church-team-info">
									<p>Etiam auctor dignissim bibendum. Nunc pulvinar massa nunc, quis pellentesq ue felis suscipit eu.</p>
									<ul>
										<li>
											<h6>John Doe:</h6>
											<span>123456</span>
										</li>
										<li>
											<h6>Jane Doe:</h6>
											<span>123456</span>
										</li>
										<li>
											<h6>John Doe:</h6>
											<span> 123456</span>
										</li>
										<li>
											<h6>John Doe:</h6>
											<span>123456</span>
										</li>
										<li>
											<h6>Jane Doe:</h6>
											<span>123456</span>
										</li>
										<li>
											<h6>John Doe:</h6>
											<span> 123456</span>
										</li>
										<li>
											<h6>Jane Doe:</h6>
											<span>123456</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<h2 class="church-section-heading">Get in Touch With Us</h2>
								<div class="church-team-contact">
									<p>Your email address will not be published. Required fields are marked *</p>
									<form>
										<ul>
											<li>
												<label>Name</label>
												<input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="text">
											</li>
											<li>
												<label>Email</label>
												<input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="email">
											</li>
											<li>
												<label>Message</label>
												<textarea placeholder="Type here"></textarea>
											</li>
											<li><input type="submit" value="Send Now"></li>
										</ul>
									</form>
								</div>
							</div>
						</div>
						<!-- <h2 class="church-section-heading">[ Related Members ]</h2> -->
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php include('includes/footer.php'); ?>