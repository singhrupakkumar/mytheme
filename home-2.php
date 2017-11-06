  <?php /* Template Name: Home 2 Template */ get_header(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/superslides.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">  
    <!-- Elastic grid css file -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/elastic_grid.css"> 
    <link id="orginal" href="<?php echo get_template_directory_uri(); ?>/css/default-theme.css" rel="stylesheet">	
 <link href="<?php echo get_template_directory_uri(); ?>/css/style3.css" rel="stylesheet">  
   <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
  <style type="text/css">
.testi_media {
  margin: 0 auto !important;
  text-align: left;
  padding-top: 10px;
  font-weight: bold;
  text-transform: uppercase;
  font-size: 14px;
}
.slick-dots{display: none !important;}
#testimonial {
  background: #f8f8f8 none repeat scroll 0 0;
  border-bottom: 1px solid #eee;
  border-top: 1px solid #eee;
  display: inline;
  float: left;
  padding: 80px 0 0 0;
  width: 100%;
}
.sticky {
    position: fixed !important;
    top: -40px;
    display: block !important;
    width: 100%;
    z-index: 9999;
    transition:top 0.35s ease 0.1s;
}

#service {
    margin-top: 0px !important;
    padding-top: 0px !important;
}
.slick-track .slick-slide{
    height:auto !important;
}
.contact_form form br{
    display:none;
}
    </style>
	
     <!-- BEGIN SLIDER AREA-->
      <div class="slider_area">
        <!-- BEGIN SLIDER-->          
        <div id="slides">
          <ul class="slides-container">
	<?php	
		$j = 0;
	$args = array( 'post_type' => 'masterslider', 'posts_per_page' => 3);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	 $j++;
		?>
            <!-- THE FIRST SLIDE-->
            <li>
              <!-- FIRST SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- FIRST SLIDE MAIN IMAGE -->
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
              <!-- FIRST SLIDE CAPTION-->
              <div class="slider_caption">
                <h2><?php the_title(); ?></h2>
                <p><?php the_title(); ?></p>
                <a href="<?php bloginfo('url'); ?>" class="slider_btn">Who We are</a>              
              </div>
            </li>

            <!-- THE SECOND SLIDE-->
				 <?php endwhile;
	   wp_reset_postdata();
	 ?> 
          
          </ul>
          <!-- BEGAIN SLIDER NAVIGATION -->
          <nav class="slides-navigation">
            <!-- PREV IN THE SLIDE -->
            <a class="prev" href="/item1">
              <span class="icon-wrap"></span>
              <h3><strong>Prev</strong></h3>
            </a>
            <!-- NEXT IN THE SLIDE -->
            <a class="next" href="/item3">
              <span class="icon-wrap"></span>
              <h3><strong>Next</strong></h3>
            </a>
          </nav>       
        </div>
        <!-- END SLIDER-->          
      </div>
      <!-- END SLIDER AREA -->
  
    <!--=========== End HEADER SECTION ================--> 


    <!--=========== BEGIN ABOUT SECTION ================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about_area">
              <!-- START ABOUT HEADING -->
              <div class="heading">
                <h2 class="wow fadeInLeftBig">About Us</h2>
                <p><?php echo get_field('page_description');?></p>
              </div>

              <!-- START ABOUT CONTENT -->
              <div class="about_content">
                <div class="row">
                  <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="about_featured">
                      <div class="panel-group" id="accordion">
                        <!-- START SINGLE FEATURED ITEAM #1-->
						<?php if( have_rows('about') ): ?>

	<?php
	$i =0;
	while( have_rows('about') ): the_row();

		// vars
		$i++;
		$title = get_sub_field('title');
		$description = get_sub_field('description');
		?>
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>">
                                 <span class="fa fa-check-square-o"></span><?php echo $title; ?>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse<?php echo $i;?>" class="panel-collapse collapse <?php if($i == 1){ echo "in";} ?>">
                            <div class="panel-body">
                            <?php echo $description; ?>
                            </div>
                          </div>
                        </div>
				<?php endwhile;
					endif;
				?>		
                     
                      </div>
                    </div>
                  </div>
               
                </div>
              </div>
            </div>
          </div>
        </div>       
      </div>
       <!-- BEGAIN SKILLS  -->
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <section id="section3" style="width: auto; background: black; color:white; padding-top: 90px; padding-bottom: 90px;">
          <div class="container">
            <h2>My Skills Values</h2>
            <div class="row skill">
              <div class="col-sm-6">
                <h4>Technical Skills</h4>
				          <p><?php echo get_field('our_skills_description');?></p>
<?php if( have_rows('skills_values') ): ?>

	<?php
	$i =0;
	while( have_rows('skills_values') ): the_row();

		// vars
		$i++;
		$title = get_sub_field('title');
		$value = get_sub_field('value');
		?>
                <label class="progress-bar-label"><?php echo $title; ?></label>
                <div class="progress">
                  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo $value; ?>" role="progressbar" class="progress-bar" style="width: <?php echo $value; ?>%;">
                    <span><?php echo $value; ?>%</span>
                  </div> <!-- end .progress-bar -->
                </div> <!-- end .progress -->
				<?php endwhile;
endif;
	?>		
             
              </div> <!-- end .col-sm-6 -->
              <div class="col-sm-6">
                <h4>Knowledge</h4>
                <div class="row">
                  <div class="col-sm-6">
                    <ul class="list-icons purple bold-list">
                      <li><i class="fa fa-long-arrow-right"></i>Install and Configure</li>
                      <li><i class="fa fa-long-arrow-right"></i>Web Usability</li>
                      <li><i class="fa fa-long-arrow-right"></i>Digital Painting</li>
                      <li><i class="fa fa-long-arrow-right"></i>Grid and Layout</li>
                      <li><i class="fa fa-long-arrow-right"></i>Mobile App Design</li>
                      <li><i class="fa fa-long-arrow-right"></i>Graphical Design</li>
                      <li><i class="fa fa-long-arrow-right"></i>SEO Optimization</li>
                    </ul>
                  </div> <!-- end .col-sm-6 -->
                  <div class="col-sm-6">
                    <ul class="list-icons purple bold-list">
                      <li><i class="fa fa-long-arrow-right"></i>UX and UI Design</li>
                      <li><i class="fa fa-long-arrow-right"></i>Logo Design</li>
                      <li><i class="fa fa-long-arrow-right"></i>3D Animation &amp; Visual Effects</li>
                      <li><i class="fa fa-long-arrow-right"></i>Audio Video Editing</li>
                      <li><i class="fa fa-long-arrow-right"></i>Photography</li>
                      <li><i class="fa fa-long-arrow-right"></i>Web Development</li>
                      <li><i class="fa fa-long-arrow-right"></i>Digital Marketing</li>
                    </ul>
                  </div> <!-- end .col-sm-6 -->
                </div> <!-- end .row -->
              </div> <!-- end .col-sm-6 -->
            </div> <!-- end .row -->
            <div class="spacer"></div>
            
              
          </div> <!-- end .container -->
        </section>
          </div>
        </div>
        <!-- END SKILLS  -->
    </section>
    <!--=========== END ABOUT SECTION ================-->

    <!--=========== BEGIN SERVICE SECTION ================-->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN SERVICE HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Our Services</h2>
              <p><?php echo get_field('our_service_description');?></p>
            </div>
          </div>          
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN SERVICE  -->
            <div class="service_area">
              <div class="row">
			  
			  	<?php
	$args = array( 'post_type' => 'services', 'posts_per_page' => 6);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	 	 	$id = get_the_ID();
$category = get_the_terms( $id, 'services_taxo' );
if (is_array($category) || is_object($category))
{		 
foreach ( $category as $cat){
	if($cat->name=='with small image'){ 
		?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <!-- BEGAIN SINGLE SERVICE -->
                  <div class="single_service wow fadeInLeft">
                    <div class="service_iconarea">
					<span class="service_icon">
                      <img class="img-responsive" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
					 </span> 
                    </div>
                    <h3 class="service_title"><?php the_title(); ?></h3>
                    <p><?php the_content();?></p>
                  </div>
                </div>
		   <?php 
	}
}
}
		   endwhile; 
  wp_reset_postdata();
    ?>		
                             
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SERVICE SECTION ================-->

    <!--=========== BEGAIN WORKS SECTION ================-->
    <section id="works">
      <!-- BEGAIN MILESTONE WORSK SECTION -->
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="counter_section">
            <!-- SKILLS COUNTER OVERLAY -->
            <div class="slider_overlay1"></div>
            <div class="container">               
              <div class="counter_area">
               <div class="heading">
                  <h3 class="wow fadeInLeft">Some Milestone Works</h3>             
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="counter wow fadeInUp">
            
                    <h2 class="timer count-title" id="count-number" data-to="940" data-speed="1500">400</h2>
                     <p class="count-text ">Clients</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="counter wow fadeInUp">
                  
                    <h2 class="timer count-title" id="count-number2" data-to="1750" data-speed="1500">300</h2>
                     <p class="count-text ">Projects</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                   <div class="counter wow fadeInUp">
                  
                    <h2 class="timer count-title" id="count-number3" data-to="300" data-speed="1500">200</h2>
                     <p class="count-text ">Cup Of Coffee</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                  <div class="counter wow fadeInUp">
                    
                    <h2 class="timer count-title" id="count-number4" data-to="875" data-speed="1500">100</h2>
                     <p class="count-text ">Subscribers</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END MILESTONE WORSK SECTION -->
    </section>
    <!--=========== END WORKS SECTION ================-->




   


    <!--=========== BEGAIN TESTIMONIAL SECTION ================-->
    <section id="testimonial">
      <div class="container"> 
        <div class="row">
          <div class=" col-lg-7 col-md-7 col-sm-6">

            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2>What Our Clients Say</h2>
              </div>


       <div class="testimonial_customer">
              <!-- BEGAIN TESTIMONIAL SLIDER -->
              <ul class="testimonial_slider">
		  	<?php
	$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 3);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#1 -->
                <li>
                  <div class="media testi_media" style="font-weight: normal; text-transform: capitalize;">
                  <p><?php the_content(); ?></p>
				   <div class="media testi_media">
                   <?php echo get_field('author');?>
                  </div>
                  </div>
                
                </li>
				
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#2 -->
 <?php endwhile; 
  wp_reset_postdata();
    ?>  	
    
            
              </ul>
            </div>

    
          </div>


          <div class=" col-lg-5 col-md-5 col-sm-6">
            <div class="testimonial_customer">
              <!-- BEGAIN TESTIMONIAL SLIDER -->
              <ul class="testimonial_slider">
			  			  		  	<?php
	$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 3);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#1 -->
                <li>
                  <div class="media testi_media">
                    <a class="media-left testi_img" href="#">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </a>
                    
                  </div>
                
                </li>
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#2 -->
<?php endwhile; 
  wp_reset_postdata();
    ?>  	
     =
            
              </ul>
            </div>
          </div>           
        </div>
      </div>
    </section>
    <!--=========== END TESTIMONIAL SECTION ================-->


            
   

    <!--=========== BEGAIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- START CONTACT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Contact Us</h2>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
            </div>
          </div>
        </div>       
        <div class="row">
          <!-- BEGAIN CONTACT CONTENT -->
          <div class="contact_content">
            <!-- BEGAIN CONTACT FORM -->
            <div class="col-lg-5 col-md-5 col-sm-5">
              <div class="contact_form">

                <!-- FOR CONTACT FORM MESSAGE -->
                <div id="form-messages"></div>

              <?php echo do_shortcode( '[contact-form-7 id="346" title="Home 2"]' ); ?>
              </div>
            </div>
            <!-- BEGAIN CONTACT MAP -->
            <div class="col-lg-7 col-md-7 col-sm-7">
              <div class="contact_map">
              <!-- BEGAIN GOOGLE MAP -->
               <div id="map_canvas"><?php echo get_field('google');?></div>
              </div>
            </div>           
          </div>
        </div>      
      </div>             
    </section>
    <!--=========== END CONTACT SECTION ================-->

    <!--=========== BEGAIN CONTACT FEATURE SECTION ================-->
    <section id="contactFeature">
      <!-- SKILLS COUNTER OVERLAY -->
      <div class="slider_overlay2"></div>
      <div class="row">
        <div class="col-lg-12 col-md-12">       
          <div class="container">               
              <div class="contact_feature">
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-phone"></i>
                <h4>Call Us</h4>
                <p><?php echo get_option('nt_phone');?></p>                
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-envelope-o"></i>
                <h4>Email Address</h4>
                <p><?php echo get_option('nt_email');?></p>
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-map-marker"></i>
                <h4>Office Location</h4>
                <p><?php echo get_option('nt_address');?></p>
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-clock-o"></i>
                <h4>Working Hours</h4>
                <p>Monday-Friday 9.00-21.00</p>
              </div>
            </div>
          </div>
          </div>         
        </div>
      </div>
    </section>
    <!--=========== END CONTACT FEATURE SECTION ================-->	
<?php get_footer('home2'); ?>	