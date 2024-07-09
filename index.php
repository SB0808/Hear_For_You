<?php

include 'database.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $age = $_POST['age'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact_info`(`name`, `age`, `contact_number`, `email`, `message`) VALUES('$name', '$age', '$contact_number', '$email', '$message')";

    mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HFY</title>
<link rel="shortcut icon" href="images/logo_2.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<!--<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> //-->
							<a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwPVpdqrmRlgskGkVdtlcNNfzQnKJbDtLnvgcvFhCBQgqbPzsRGxMTJbBZRVRhwFwrWrVSM"><span class="fa fa-paper-plane mr-1"></span> hearforyoucommunity@gmail.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="https://www.instagram.com/hearforyoucommunity/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">

<a class="navbar-brand" >  </a>
	      <a class="navbar-brand" href="index.php">
    <img src="images\logo-2.png" width="200" height="50" alt="Hear For You Logo">
    
</a>





	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="team.php" class="nav-link">Our Team</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('https://static.vecteezy.com/system/resources/previews/027/110/165/large_2x/buddha-in-a-green-mystical-background-free-photo.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text w-100">
	            <h1 class="mb-4" >Open Hearts, No Judgments</h1>
	            <p class="mb-4">In open hearts, judgment disappears. Here, your words find a home, and your feelings are welcome. A simple space for comfort and connection.</p>
	            <p><a href="contact.php" class="btn btn-primary py-3 px-4">Contact us</a> 
            </div>
          </div>
          
          </a>
        </div>
      </div>
    </div>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="intro aside-stretch d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-checklist"></span>
    					</div>
    					<div class="text">
    						<h2>100% Confidential</h2>
    						<p>Our sessions are held in a non-judgmental and confidential environment, where you can share your thoughts and feelings without fear.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-1 d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-employee"></span>
    					</div>
    					<div class="text">
    						<h2>Qualified Team</h2>
    						<p>Our trained professionals bring a wealth of experience to guide you through your healing process.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-2 d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-umbrella"></span>
    					</div>
    					<div class="text">
    						<h2>Approach Us</h2>
    						<p>Take the first step toward positive change. Book your 45-minute session today and let's have an honest conversation.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Services</span>
            <h2>How It Works</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-calendar"></span>
	    					</div>
    					</div>
    					<h2>Make a Schedule</h2>
    					<p>Choose a convenient time from our available slots.</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-qa"></span>
	    					</div>
    					</div>
    					<h2>Fill Form</h2>
  						<p>Fill out a brief form to help us better understand your needs.</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-checklist"></span>
	    					</div>
    					</div>
    					<h2>Confirmation</h2>
  						<p>Receive a confirmation with details for your upcoming session.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(https://www.pixel4k.com/wp-content/uploads/2022/01/way-to-moon-minimal-4k_1641809067.jpg.webp);">
					</div>
					<div class="col-md-6 wrap-about px-md-5 ftco-animate py-5 bg-light">
	          <div class="heading-section">
	          	<span class="subheading">Welcome to HFY</span>
	            <b class="keywords"><h3 class="mb-4">A Safe and Comfortable Space where Listening goes beyond Words.</h3></b>

	            <p>This place is crafted for you to be your true self rather than putting yourself in a role that world has given you. Our mission is rooted in the belief that everyone deserves a safe haven to express themselves, free from judgment or expectation.</p>
	            <p>Our purpose is simple yet profound—to create a haven where open hearts replace judgment, and empathy knows no bounds. We understand that everyone's story is unique, and we celebrate the strength that comes from sharing those stories.</p>

	            
	          </div>

					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Our Services</span>
            <h2 class="mb-3">What to Expect</h2>
          </div>
        </div>
				<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1">Safe Space</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2">Supportive Listening</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3">Duration</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4">Empathy</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5">Expertise</a>
						  </li>
						  
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url(https://img.freepik.com/premium-photo/safe-space-words-wooden-alphabet-letters-isolated-background_999476-1311.jpg);"></div>
						  	<h3><a href="#">Safe Space</a></h3>
						  	<p>Our sessions are held in a non-judgmental and confidential environment, where you can share your thoughts and feelings without fear.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url(https://t3.ftcdn.net/jpg/05/16/86/22/360_F_516862226_LZa6Au2Kpx56UDdK6ZRdClLMGtKEyJcK.jpg);"></div>
						  	<h3><a href="#">Supportive Listening</a></h3>
						  	<p>Our trained professionals are here to actively listen, offering compassionate guidance and understanding tailored to your unique journey.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url(https://media.istockphoto.com/id/1299079421/photo/hour-glass-and-calendar-important-appointment-date-schedule-and-deadline.jpg?s=170667a&w=0&k=20&c=FetJMeteZFMQSmV0rw4i2zs7s0YCn1GBO45_tfEKrBM=);"></div>
						  	<h3><a href="#">Duration</a></h3>
						  	<p>Each session is 45 minutes, offering ample time for meaningful conversation and connection.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url(https://t3.ftcdn.net/jpg/02/51/08/54/360_F_251085444_5HlXMbmEDOibIDXPKC089B3AGoVUI5sE.jpg);"></div>
						  	<h3><a href="#">Empathy</a></h3>
						  	<p>Our team genuinely cares about your well-being, providing a supportive space for your emotional journey.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="img" style="background-image: url(https://i.pinimg.com/originals/d3/f6/34/d3f634a34d123abc00bbb41786670786.jpg);"></div>
						  	<h3><a href="#">Expertise</a></h3>
						  	<p>Our trained professionals bring a wealth of experience to guide you through your healing process.</p>
						  </div>
						  
						</div>
					</div>
				</div>
			</div>
		</section>

  
   <!-- <section class="ftco-section testimony-section">
    	<div class="img img-bg border" style="background-image: url(https://e0.pxfuel.com/wallpapers/445/253/desktop-wallpaper-best-soothing-background-calming-relaxing.jpg);"></div>
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Team Thoughts</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>   //-->


		<!--<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Price &amp; Plans</span>
            <h2>Affordable Packages</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mo</sub></span>
		            <span class="excerpt d-block">For Adults</span>
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Individual Counseling</li>
		              <li><span class="fa fa-check mr-2"></span>Couples Therapy</li>
		              <li><span class="fa fa-check mr-2"></span>Family Therapy</li>
		            </ul>

		            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mo</sub></span>
		            <span class="excerpt d-block">For Children</span>
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Counseling for Children</li>
		              <li><span class="fa fa-check mr-2"></span>Behavioral Management</li>
		              <li><span class="fa fa-check mr-2"></span>Educational Counseling</li>
		            </ul>

		            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mo</sub></span>
		            <span class="excerpt d-block">For Business</span>
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Consultancy Services</li>
		              <li><span class="fa fa-check mr-2"></span>Employee Counseling</li>
		              <li><span class="fa fa-check mr-2"></span>Psychological Assessment</li>
		            </ul>

		            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>//-->
		
		<section class="ftco-appointment ftco-section img" style="background-image: url(https://blogger.googleusercontent.com/img/a/AVvXsEhCTVfh6esrp-WT9OQMCVPo7ONoCp_kIFy7rWIlT7kcXJn5lUt0P1DikYTwzqbAQpij_CtJIM7uq6GMp6GAIQH57DRnBGVJk77orKIWPyisa8Uw5VENikl8pu9-3fh0XjrqUxiUvAMu0zJj4VXw1K_9KFdJXRvNQZSp8Ir3NpapsxSOasRIbh-jmLFBlYM=w640-h360);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 half ftco-animate">
    				<h2 class="mb-4">Book A Session &amp; Get in touch!</h2>
    				<form action="index.php" method="post" class="appointment">
    					<div class="row">
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="name" class="form-control" placeholder="Your Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="age" class="form-control" placeholder="Age">
			            </div>
								</div>
<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="contact_number" class="form-control" placeholder="Contact Number">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="email" class="form-control" placeholder="Email">
			            </div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
			              <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Brief info."></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>

<!--    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text text-center">
              	<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
	              </a>
	              <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                	<div>
                		<span class="day">18</span>
                		<span class="mos">April</span>
                		<span class="yr">2020</span>
                	</div>
                </div>
                <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text text-center">
              	<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
	              </a>
	              <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                	<div>
                		<span class="day">18</span>
                		<span class="mos">April</span>
                		<span class="yr">2020</span>
                	</div>
                </div>
                <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text text-center">
              	<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
	              </a>
	              <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                	<div>
                		<span class="day">18</span>
                		<span class="mos">April</span>
                		<span class="yr">2020</span>
                	</div>
                </div>
                <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a mb-3></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>              
							</div>
            </div>
          </div>
        </div>
      </div>
    </section>	//-->

    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="index.php"><img src="images\logo-2.png" width="200" height="50" alt="Hear For You Logo"></a></h2>
              <p>In open hearts, judgment disappears. Here, your words find a home, and your feelings are welcome. A simple space for comfort and connection.</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/hearforyoucommunity/"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Explore</h2>
              <ul class="list-unstyled">
                <li><a href="about.php"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                <li><a href="contact.php"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                <li><a href="services.php"><span class="fa fa-chevron-right mr-2"></span>What to Expect</a></li>
               
              </ul>
            </div>
          </div>
          
         
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	               
	            <!--    <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>//-->
	                <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwPVpdqrmRlgskGkVdtlcNNfzQnKJbDtLnvgcvFhCBQgqbPzsRGxMTJbBZRVRhwFwrWrVSM"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">hearforyoucommunity@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
      	<div class="container">
      		<div class="row">
	          <div class="col-md-12">
		
	            <p class="mb-0" style="color: rgba(255,255,255,.5);">
	  </script> All rights not reserved | This website is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="index.php">HYF TEAM</a>
	  </p>
	          </div>
	        </div>
      	</div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>