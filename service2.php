<?php /* Template Name: Service 2 */ get_header(); ?>
<style>
.service {
  margin: 0px;
  padding: 60px 0 60px;
  position: relative;
  background: url("<?php echo get_stylesheet_directory_uri(); ?>/images/service.jpg");
  width: 100%;
  background-size: cover;
}
.service p {
  color: #7e8287;
  font-size: 16px;
  margin-top: 35px;
}
.navbar-inverse .navbar-brand{font-size:36px; margin-top:6px;line-height:43px;color:#fff;}
.single-service {
  background: #f5f5f1 none repeat scroll 0 0;
  margin-left: 0;
  margin-top: 50px;
  padding-left: 20px;
}
.single-service:hover {
  background: #c52d2f none repeat scroll 0 0;
}
.single-service p {
  color: #7e8287;
  font-size: 11px;
  margin-top: 5px;
}

.service-overlay {
  background-color: rgba(255, 255, 255, 0.43);
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.single-service i.fa {
  color: #c52d2f;
  font-size: 30px;
  padding-top: 15px;
}
.single-service i.fa:hover {
  color: #fff;
}
.single-service.single-service:hover h3 {
  color: #fff;
}
.single-service.single-service:hover p {
  color: #fff;
}
.single-service.single-service:hover i.fa {
  color: #fff;
}
.service-box {
  display: inline-block;
  margin: 0 0 0px;
}
.text {
  margin-bottom: 15px;
  margin-top: 15px;
  float: left;
}
.single-service:nth-child(odd){
    float:left;
}
.single-service:nth-child(even){
    float:right;
}



.btn-red:hover{color:white;}
</style>


	

	<!--SERVICE START-->
	<div id="service" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="page-title text-center">
					<h1 style="color:#c52d2f;">Our Service</h1>
					<p><?php echo get_field('our_service_description');?></p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
					<?php
	$args = array( 'post_type' => 'services', 'posts_per_page' => -1);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	 	$id = get_the_ID();
$category = get_the_terms( $id, 'services_taxo' );
if (is_array($category) || is_object($category))
{		 
foreach ( $category as $cat){
	if($cat->name=='with small image'){ 
		?>
				<div class="col-md-4">
					<div class="service-box">
						<div class="service-icon"><img class="img-responsive" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>"></div>
						<div class="service-text">
							<h3><?php the_title();?></h3>
							<?php the_content();?>
						</div>
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
	<!--SERVICE END-->

<section id="sec3" class="service text-left">
        <div class="container">
            <div class="row">
                <div class="service-overlay"></div>
                <div class="col-md-12">
                    <h2>SERVICES</h2>
                
                    <div class="row">
                        <div class="col-sm-6">
                            <p><?php echo get_field('our_service_description');?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 services">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                									<?php
	$args = array( 'post_type' => 'services', 'posts_per_page' =>-1);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	 	$id = get_the_ID();
$category = get_the_terms( $id, 'services_taxo' );
if (is_array($category) || is_object($category))
{		 
foreach ( $category as $cat){
	if($cat->name=='with small image'){ 
		?>
                    <div class="col-md-5 single-service col-xs-12 col-sm-6">
                        <i class="fa fa-tachometer"></i>
                        <h3><?php the_title();?></h3>
                       <?php the_content();?>
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
        </div>
    </section>


    <div class="box" style="background: #c52d2f; padding: 76px 0 50px 0px; text-align: center; color:white; font-size: 25px; line-height: 1;">
    <h3 style="font-size: 30px; padding-bottom: 10px; text-transform: uppercase; color: white;">We've got what you need!</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do<br>
tempor incididunt ut labore et dolore magna aliqua.</p>
	<button class="btn btn-red" style="border-radius: 80px; margin-top: 15px; margin-bottom: 15px; background-color: white; color: black;">Read More</button>
    </div>
	
<div class="container">
<div class="text">
<?php
	$args = array( 'post_type' => 'services', 'posts_per_page' => -1);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post(); 
	 	$id = get_the_ID();

		?>
<?php the_content();?>
	<a href="<?php echo get_post_permalink($id); ?>"><button class="btn btn-red" style="margin-top: 15px;">Read More</button></a><br><br>
<?php 
  endwhile; 
  wp_reset_postdata();
    ?>	


</div></div>

<?php get_footer('home1'); ?>