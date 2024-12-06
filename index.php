<?php include('header.php'); ?>
        <!-- header-end -->


        <style>
        /* Splash screen container */
        #splash {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column; /* Arrange items vertically */
            align-items: center;
            justify-content: center;
            background-color: #000000; /* Background color */
            z-index: 9999; /* Ensures it is on top */
            transition: transform 0.8s ease-out, opacity 0.8s ease-out; /* Animation */
        }

        /* Center image styling */
        #splash img {
            max-width: 100%;
            max-height: 70%;
            object-fit: contain;
        }

        /* Splash text styling */
        #splash h1 {
            margin-top: 20px;
            font-size: 2rem;
            color:white; /* Text color */
            font-family:'Times New Roman', serif;
        }

        /* Main content styling */
        #main-content {
            display: none; /* Hidden initially */
        }

        /* Hidden splash styling */
        .slide-down {
            transform: translateY(100%); /* Slide down effect */
            opacity: 0; /* Fade out */
        }
    </style>
            <!-- Splash screen -->
    <div id="splash">
        <img src="img/logo/black-logo.jpeg" alt="Splash Screen Image">
        <h1 style=" margin-top: 100px;">Welcome to 7Hills Properties</h1>
    </div>

    <script>
        // Wait for 3 seconds, then slide the splash screen down
        window.addEventListener('load', () => {
            setTimeout(() => {
                const splash = document.getElementById('splash');

                // Add slide-down effect
                splash.classList.add('slide-down');

                // Show main content after animation
                splash.addEventListener('transitionend', () => {
                    splash.style.display = 'none';
                    document.getElementById('main-content').style.display = 'block';
                });
            }, 3000); // 3000ms = 3 seconds
        });
    </script>




        <!-- offcanvas-area -->
                <div class="offcanvas-menu">
                <span class="menu-close"><i class="fas fa-times"></i></span>
              <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
                                <input type="text" name="s" id="search" value="" placeholder="Search"  />
                                <button><i class="fa fa-search"></i></button>
                            </form>

                    
                    <div id="cssmenu3" class="menu-one-page-menu-container">
                        <ul id="menu-one-page-menu-2" class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.html">Home</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="services.html">Services</a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Team </a></li>
                             
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery Study</a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>  
                    
                    <div id="cssmenu2" class="menu-one-page-menu-container">
                        <ul id="menu-one-page-menu-1" class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
                        </ul>
                    </div>                
            </div>
            <div class="offcanvas-overly"></div>
                 <!-- offcanvas-end -->
      
        <!-- main-area -->
        <main>
            
            <!-- search-popup -->
		<div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content search-popup">
					<div class="text-center">
						<a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
					</div>
					<div class="row search-outer">
						<div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
						<div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- /search-popup -->
            <!-- slider-area -->
            <section id="home" class="slider-area slider-four fix p-relative">
                
                <div class="call-box">
                    <ul>
                        <li>
                            <div class="icon"><img src="img/icon/phone-call.png" alt="top-m-icon.png"></div>
                        </li>
                        <li>
                            <div class="text">
                                <span>Call Now !</span>
                                <strong>+91 548 3659 365</strong>
                            </div>
                        </li>

                   </ul>
                </div>
                <div class="slider-line">
                    <img src="img/bg/slider-line.png" alt="slider-line">
                </div>
                
                <div class="slider-active">
				<div class="single-slider slider-bg d-flex align-items-center p-relative" >
                     <!-- Lines -->
                <div class="content-lines-wrapper2">
                    <div class="content-lines-inner2">
                        <div class="content-lines2"></div>
                    </div>
                </div>
                    <!-- Lines -->
                    <div class="image-layer" style="background:url(img/resource/img21.jpg);"></div>
                        <div class="container">  
                            <style>
                              
                            </style>                          
                           <div class="row justify-content-center align-items-center">
                                <div class="col-lg-8 col-md-8">
                                    <div class="slider-content s-slider-content">
                                         <h2 data-animation="fadeInUp" data-delay=".4s"><span style="font-size: 50px;">WELCOME TO <br> 7HILLS  COURTYARD </span></h2>
                                         
                                        <p data-animation="fadeInUp" data-delay=".6s">Residential villa plots near Bengaluru international.</p>
                                        
                                         <div class="slider-btn mt-30" data-animation="fadeInUp" data-delay=".4s">     
                                             <a href="contact.html" class="btn ss-btn mr-15">Get A Consultation</a>
                                             
                                        </div>        
                                                   
                                        
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    
                                </div>
                               
                               
                            </div>
                            
                        </div>
                    </div>
                  <div class="single-slider slider-bg d-flex align-items-center p-relative" >
                          <!-- Lines -->
                            <div class="content-lines-wrapper2">
                                <div class="content-lines-inner2">
                                    <div class="content-lines2"></div>
                                </div>
                            </div>
                           <!-- Lines -->
                    <div class="image-layer" style="background: url(img/resource/img25.jpg)"></div>
                        <div class="container">                            
                           <div class="row justify-content-center align-items-center">
                                <div class="col-lg-8 col-md-8">
                                    <div class="slider-content s-slider-content">
                                         <h2 data-animation="fadeInUp" data-delay=".4s"><span>Luxury & Premium</span> Residences Flats</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Donec sit amet ultrices lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        
                                         <div class="slider-btn mt-30" data-animation="fadeInUp" data-delay=".4s">     
                                             <a href="contact.html" class="btn ss-btn mr-15">Get A Consultation</a>
                                             
                                        </div>        
                                                   
                                        
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    
                                </div>
                               
                               
                            </div>
                            
                        </div>
                    </div>
               
                    
                    </div>
                    
               
            </section>
            <!-- slider-area-end -->
            
           
             <!-- about-area -->
            <section id="about" class="about-area about-p pt-120 pb-120 p-relative fix">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative  wow fadeInLeft  animated"   data-animation="fadeInLeft" data-delay=".4s">
                                <img src="img/7Hills-img/DSC00875.jpg" alt="img">    
                            </div>
                          
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
    <div class="about-content s-about-content wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
        <div class="about-title second-title pb-20">
            <h5>7Hills Courtyard</h5>
            <h2>Developing Quality Projects Since 1988</h2>
        </div>

        <p>At 7Hills Properties <strong>by 7Hills Courtyard</strong>, we’re committed to delivering premium residential, commercial, and retail spaces, always focused on **quality** and innovation.</p>

        <div class="about-content3 mb-25">
            <div class="row">
                <div class="col-md-12">
                    <ul class="green">
                        <li><strong>Trusted Brand:</strong> A leading name in Bengaluru real estate, known for quality and reliability.</li>
                        <li><strong>Quality First:</strong> We deliver high-quality spaces that meet diverse client needs.</li>
                        <li><strong>Visionary Leadership:</strong> Led by Mr. Jagadish Pawar, focused on creating a better future.</li>
                        <li><strong>Proven Success:</strong> Decades of delivering successful projects and earning customer loyalty.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="about-gallery">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/7Hills-img/IMG_4141.jpg" alt="Residential Projects">    
                </div>
                <div class="col-md-4">
                    <img src="img/7Hills-img/IMG_4007.jpg" alt="Commercial Properties">    
                </div>
                <div class="col-md-4">
                    <img src="img/7Hills-img/IMG_4088.jpg" alt="Retail Spaces">    
                </div>
            </div>
        </div>

    </div>
</div>

                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
            <!-- video-area -->
            <section id="video" class="video-area pt-60 pb-60 p-relative" style="background-image:url(http://7hillsproperties.in/img/video-bg.png); background-repeat: no-repeat; background-position: center bottom; background-size:cover;">
                 <!-- Lines -->
                  <style>
                    .video{
                        background-image:url("img/video-bg.png");
                    }
                  </style>
                            <div class="content-lines-wrapper2">
                                <div class="content-lines-inner2">
                                    <div class="content-lines2"></div>
                                </div>
                            </div>
                           <!-- Lines -->
                <div class="container">                   
                     <div class="row">
                        <div class="col-12">
                            <div class="s-video-wrap">
                                <div class="s-video-content">
                                    <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="popup-video mb-50"><img src="img/bg/play-button.png" alt="circle_right"></a>
                                   
                                </div>
                            </div>
                            <div class="section-title center-align text-center">
                                <h2>
                                 View Promo Video
                                </h2>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- video-area-end -->
             <!-- brand-area -->
            <div class="brand-area pt-30 pb-30  p-relative" style="background: #2b2d42;">
                 <!-- Lines -->
                            <div class="content-lines-wrapper2">
                                <div class="content-lines-inner2">
                                    <div class="content-lines2"></div>
                                </div>
                            </div>
                           <!-- Lines -->
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="#" alt="img">
                            </div>
                        </div>
                       <div class="col-xl-2">
                            <div class="single-brand">
                                     <img src="#" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="#" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="#" alt="img">
                            </div>
                        </div>
                         <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="#" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="#" alt="img">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
            
           
              <!-- services-three-area -->
              <section class="services pt-120 pb-80 p-relative fix">
    <div class="container">
        <div class="row">   
            <div class="col-lg-12 p-relative">
                <div class="section-title center-align mb-10 text-center">
                    <h5>02. Our Services</h5>
                    <h2>What 7Hills Courtyard Provides</h2>
                </div>
            </div>                         
        </div>
        <div class="row services-active">
            <!-- Residential Construction -->
            <div class="col-lg-4 col-md-4 bdr">
                <div class="services-08-item">
                    <div class="services-08-thumb">
                        <img src="img/icon/se-icon4.png" alt="img">
                    </div>
                    <div class="services-08-content">
                        <h3><a href="services-detail.html">Residential Construction</a></h3>
                        <p>At 7Hills Courtyard, we specialize in building high-quality residential properties in Bangalore. From apartments to independent homes, we create spaces that meet the modern needs of homeowners with an emphasis on durability and comfort.</p>
                        <div class="number">01</div>
                    </div>
                </div>
            </div>
            <!-- Commercial Construction -->
            <div class="col-lg-4 col-md-4 bdr">
                <div class="services-08-item">
                    <div class="services-08-thumb">
                        <img src="img/icon/se-icon5.png" alt="img">
                    </div>
                    <div class="services-08-content">
                        <h3><a href="services-detail.html">Commercial Construction</a></h3>
                        <p>We offer top-notch commercial construction services, building state-of-the-art office buildings, retail centers, and industrial spaces in prime locations across Bangalore. Our projects focus on functionality and sustainability.</p>
                        <div class="number">02</div>
                    </div>
                </div>
            </div>
            <!-- Property Development & Investment -->
            <div class="col-lg-4 col-md-4 bdr">
                <div class="services-08-item">
                    <div class="services-08-thumb">
                        <img src="img/icon/se-icon6.png" alt="img">
                    </div>
                    <div class="services-08-content">
                        <h3><a href="services-detail.html">Property Development & Investment</a></h3>
                        <p>7Hills Courtyard provides property development and investment services, guiding clients through the construction of lucrative real estate projects. We offer expert insights to maximize returns in Bangalore’s competitive market.</p>
                        <div class="number">03</div>
                    </div>
                </div>
            </div>
            <!-- Infrastructure Development -->
            <div class="col-lg-4 col-md-4 bdr">
                <div class="services-08-item">
                    <div class="services-08-thumb">
                        <img src="img/icon/se-icon5.png" alt="img">
                    </div>
                    <div class="services-08-content">
                        <h3><a href="services-detail.html">Infrastructure Development</a></h3>
                        <p>We also specialize in large-scale infrastructure projects, including roads, bridges, and public utilities. At 7Hills Courtyard, we focus on building sustainable and long-lasting infrastructure that serves the growing needs of Bangalore.</p>
                        <div class="number">04</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

           <!-- services-three-area -->
            <!-- apartments-area -->
            <section class="apartments pb-110">
                <div class="container">
                

              <div class="row">                
				   <div class="col-lg-6 ">
                       <div class="section-title mb-30">
                                <h5>03. Our Plans</h5>
                                <h2> See Our Living Space Of Flat </h2>
                            </div>
                       <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">2200sqft Flat</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">3000sqft Flat</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">3200sqft Flat</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					 <div class="row">						
						<div class="col-lg-12">
							<p>Quisque ultricies eros vel laoreet malesuada. Phasellus aliquam augue elit, nec porttitor purus fringilla ac. Suspendisse ac ex pharetra, semper orci at, porttitor purus. Duis fringilla dolor ut ante sagittis condimentum.</p> 
                            <ul>
                                <li><span class="before">Total Area:</span> <span class="after"> 2200sqft Full Area</span></li>
                                <li><span class="before">Total Floor:</span> <span class="after"> 11 Floors</span></li>
                                <li><span class="before">Parking Lot:</span> <span class="after"> 4 Large</span></li>
                                <li><span class="before">Social Area:</span> <span class="after"> 1000sqft Area</span></li>
                            </ul>
						</div>
						
					</div>
                     
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <div class="row">						
						<div class="col-lg-12">
							<p>Quisque ultricies eros vel laoreet malesuada. Phasellus aliquam augue elit, nec porttitor purus fringilla ac. Suspendisse ac ex pharetra, semper orci at, porttitor purus. Duis fringilla dolor ut ante sagittis condimentum.</p> 
                            <ul>
                                <li><span class="before">Total Area:</span> <span class="after"> 3000sqft Full Area</span></li>
                                <li><span class="before">Total Floor:</span> <span class="after"> 15 Floors</span></li>
                                <li><span class="before">Parking Lot:</span> <span class="after"> 5 Large</span></li>
                                <li><span class="before">Social Area:</span> <span class="after"> 1200sqft Area</span></li>
                            </ul>
						</div>
						
					</div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                     <div class="row">
						<div class="col-lg-12">
							<p>Quisque ultricies eros vel laoreet malesuada. Phasellus aliquam augue elit, nec porttitor purus fringilla ac. Suspendisse ac ex pharetra, semper orci at, porttitor purus. Duis fringilla dolor ut ante sagittis condimentum.</p> 
                            <ul>
                                <li><span class="before">Total Area:</span> <span class="after"> 3200sqft Full Area</span></li>
                                <li><span class="before">Total Floor:</span> <span class="after"> 18 Floors</span></li>
                                <li><span class="before">Parking Lot:</span> <span class="after"> 6 Large</span></li>
                                <li><span class="before">Social Area:</span> <span class="after"> 1300sqft Area</span></li>
                            </ul>
						</div>
						
					</div>
                    </div>
                    
                  </div>
                
                </div>
                  
                  <div class="col-lg-6">
							<div class="apartments-img">
								<img src="img/ab-1.jpg" alt="floor-chart"/>
							</div>
						</div>
                  
              </div>
        </div>

            </section>
            <!-- apartments-area-end -->
             <!-- gallery-area -->          
            <section id="services-area2" class="services-area2 pb-90 fix">
                <div class="container-fluid">
                    <div class="row">
                       <div class="col-lg-12 col-md-12">
                           <div class="section-title center-align mb-50 text-center">
                                 <h5>04. Our Portfolio</h5>
                                <h2>
                                    What We Provide
                                </h2>
                             
                            </div>
                        </div>
                       <div class="col-lg-4 col-md-12 mb-30">
                          <a href="img/gallery/protfolio-img01.png" class="popup-image">
                                <figure class="gallery-image">
                                  <img src="img/gallery/protfolio-img01.png" alt="img" class="img">      
                                    <figcaption>
                                        <h4>Apartment Security </h4>
                                         <span>CCTV Security System</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 mb-30">
                           <a href="img/gallery/protfolio-img02.png" class="popup-image">
                                <figure class="gallery-image">
                                  <img src="img/gallery/protfolio-img02.png" alt="img" class="img">      
                                    <figcaption>
                                        <h4>Apartment Security </h4>
                                         <span>CCTV Security System</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                         
                         <div class="col-lg-4 col-md-12 mb-30">
                           <a href="img/gallery/protfolio-img03.png" class="popup-image">
                                <figure class="gallery-image">
                                  <img src="img/gallery/protfolio-img03.png" alt="img" class="img">      
                                    <figcaption>
                                        <h4>Apartment Security </h4>
                                         <span>CCTV Security System</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        
                          <div class="col-lg-6 col-md-12 mb-30">
                           <a href="img/gallery/protfolio-img04.png" class="popup-image">
                                <figure class="gallery-image">
                                  <img src="img/gallery/protfolio-img04.png" alt="img" class="img">      
                                    <figcaption>
                                        <h4>Apartment Security </h4>
                                         <span>CCTV Security System</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-30">
                           <a href="img/gallery/protfolio-img03.png" class="popup-image">
                                <figure class="gallery-image">
                                  <img src="img/gallery/protfolio-img05.png" alt="img" class="img">      
                                    <figcaption>
                                        <h4>Apartment Security </h4>
                                         <span>CCTV Security System</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        
                        
                    </div>
                </div>
            </section>
            <!-- gallery-area-end -->
            
        <!-- testimonial-area -->
        <section class="testimonial-area pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-align mb-20 text-center">
                    <h5>05. Feedback</h5>
                    <h2>Our Testimonials</h2>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="testimonial-active">
                    <div class="single-testimonial">
                        <div class="testi-author">
                            <img src="img/testimonial/testi_avatar.png" alt="img">
                            <div class="ta-info">
                                <h6>Ravi Kumar</h6>
                                <span>Software Engineer</span>
                            </div>
                        </div>
                        <p>“7Hills Courtyard made my dream home a reality. Their attention to detail and commitment to quality made all the difference. I’m extremely happy with the residential property they developed in Bangalore.”</p>
                        <div class="qt-img">
                            <img src="img/testimonial/qt-icon.png" alt="img">
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="testi-author">
                            <img src="img/testimonial/testi_avatar.png" alt="img">
                            <div class="ta-info">
                                <h6>Ayesha Sharma</h6>
                                <span>Business Owner</span>
                            </div>
                        </div>
                        <p>“The commercial space we built with 7Hills Courtyard has been a game-changer for our business. The project was completed on time, and the quality exceeded our expectations. I highly recommend them for any commercial development.”</p>
                        <div class="qt-img">
                            <img src="img/testimonial/qt-icon.png" alt="img">
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="testi-author">
                            <img src="img/testimonial/testi_avatar.png" alt="img">
                            <div class="ta-info">
                                <h6>Ajay Reddy</h6>
                                <span>Investor</span>
                            </div>
                        </div>
                        <p>“I invested in multiple projects with 7Hills Courtyard, and I’ve seen significant returns. Their knowledge of the Bangalore market and their commitment to quality construction makes them my go-to choice for property investment.”</p>
                        <div class="qt-img">
                            <img src="img/testimonial/qt-icon.png" alt="img">
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="testi-author">
                            <img src="img/testimonial/testi_avatar.png" alt="img">
                            <div class="ta-info">
                                <h6>Priya Desai</h6>
                                <span>Architect</span>
                            </div>
                        </div>
                        <p>“I had the pleasure of working with 7Hills Courtyard on several residential projects. Their team is professional, and their focus on quality and innovative design is evident in every project they undertake.”</p>
                        <div class="qt-img">
                            <img src="img/testimonial/qt-icon.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <!-- testimonial-area-end -->
             <!-- blog-area -->
            
            <section id="blog" class="blog-area p-relative pb-90 fix">
    <div class="container">
        <div class="row align-items-center"> 
            <div class="col-lg-6">
                <div class="section-title center-align mb-50">
                    <h5>06. Our Blog</h5>
                    <h2>Latest News Feed</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title center-align text-right">
                    <a href="blog.html">View All Blog</a>                               
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Blog Post 1 -->
            <div class="col-lg-6 col-md-12">
                <div class="single-post2 mb-15">
                    <div class="blog-thumb2">
                        <a href="blog-details.html"><img src="img/blog/inner_b1.jpg" alt="img"></a>
                    </div>                    
                    <div class="blog-content2">     
                        <div class="b-meta">
                            <div class="meta-info">
                                <ul>
                                    <li><i class="fal fa-user"></i> Admin</li>
                                    <li><i class="fal fa-calendar-alt"></i> 24th March 2024</li>
                                </ul>
                            </div>
                        </div>
                        <h4><a href="blog-details.html">5 Key Trends in Bangalore’s Real Estate Market</a></h4> 
                        <p>Explore the latest trends in the real estate market in Bangalore. From rising demand for luxury properties to new residential developments, we highlight the key factors driving the market in 2024.</p>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="col-lg-6 col-md-12">
                <div class="single-post2 mb-15">
                    <div class="blog-thumb2">
                        <a href="blog-details.html"><img src="img/blog/inner_b2.jpg" alt="img"></a>
                    </div>
                    <div class="blog-content2">     
                        <div class="b-meta">
                            <div class="meta-info">
                                <ul>
                                    <li><i class="fal fa-user"></i> Admin</li>
                                    <li><i class="fal fa-calendar-alt"></i> 18th March 2024</li>
                                </ul>
                            </div>
                        </div>
                        <h4><a href="blog-details.html">The Importance of Quality Construction in Real Estate</a></h4>    
                        <p>Quality construction is at the heart of every successful real estate project. In this blog, we discuss the importance of ensuring strong foundations, the latest construction technology, and how it impacts property value.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <!-- blog-area-end -->
           
        </main>
        <!-- main-area-end -->
        <?php include('footer.php'); ?>