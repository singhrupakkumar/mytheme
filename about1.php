<?php /* Template Name: About 1 */ get_header(); ?>

<style type="text/css">
.about-bg {
  background: #c52d2f none repeat scroll 0 0;
  color: white;
  float: left;
  padding: 40px;
  width: 100%;
}
.team {
    margin-top: 160px;
}
#footer {
  background: #2e2e2e none repeat scroll 0 0;
  color: #fff;
  float: left;
  padding-bottom: 30px;
  padding-top: 30px;
  width: 100%;
}
.about-txt {
  left: 0;
  position: absolute;
  right: 0;
  text-align: center;
  top: 5%;
}

.left {
    color: white;
    margin-top: 35px;
    text-align: left;
}

.left > p {
    padding-top: 14px;
}

.left > h2 {
  color: white;
}
.fa.fa-pencil {
  border: 2px solid;
  border-radius: 50%;
  margin-right: 15px;
  padding: 10px;
}
.fa.fa-mobile {
  border: 2px solid;
  border-radius: 50%;
  margin-right: 15px;
  padding: 10px 15px;
  text-align: center;
}
.fa.fa-code {
  border: 2px solid;
  border-radius: 50%;
  margin-right: 15px;
  padding: 11px 9px;
  text-align: center;
}

.fa.fa-desktop {
  border: 2px solid;
  border-radius: 50%;
  font-size: 12px;
  margin-right: 15px;
  padding: 13px 12px;
  text-align: center;
}
.readmore {
  margin-top: 10px;
  clear: both;
  display: block;
  width: 18%;
}
.ab{margin-bottom: 30px;}
#about-us {
  float: left;
  padding: 0;
  position: relative;
  width: 100%;
}
.center {
  padding-bottom: 20px;
  text-align: center;
}


.home-newsletter {
  background: #c52d2f none repeat scroll 0 0;
  color: white;
  padding: 80px 0;
}

.home-newsletter .single {
max-width: 650px;
margin: 0 auto;
text-align: center;
position: relative;
z-index: 2; }
.home-newsletter .single h2 {
font-size: 22px;
color: white;
text-transform: uppercase;
margin-bottom: 40px; }
.home-newsletter .single .form-control {
height: 50px;
background:#fff;
border-color: transparent;
border-radius: 20px 0 0 20px; }
.home-newsletter .single .form-control:focus {
box-shadow: none;
border-color: #243c4f; }
.home-newsletter .single .btn {
  background: #2e2e2e none repeat scroll 0 0;
  border-radius: 0 20px 20px 0;
  color: #fff;
  min-height: 50px;
}

#about-us {
    margin-top: 0;
    padding-bottom: 0;
}
.col-sm-3.ab img{
    width:100%;
}
</style>

<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<h2>ABOUT US</h2>
					<div class="lead"><?php echo get_field('page_description');?></div>
				</div>

				</div>
	
	<div class="about-bg">
	<div class="col-sm-12">
	<div class="container">
	<h1>OUR COMPANY</h1>
<p><?php echo get_field('company_description');?></p>

	<a href="<?php bloginfo('url'); ?>"><button style="border-radius: 80px; margin-top: 15px; margin-bottom: 15px; background-color: white; color: black;" class="btn btn-red">Read More</button></a></div>
	</div></div>
    
<section id="about-us">
<div class="center wow fadeInDown">
<img src="<?php echo get_template_directory_uri(); ?>/images/about-bg.jpg">
</div>
<div class="about-txt">
<h2 style="text-align:center; color:white; text-transform: uppercase; font-size: 40px;">What we do best</h2>
<div class="container">
<div class="row">
<?php
	$args = array( 'post_type' => 'works', 'posts_per_page' => 6);
	$loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post();
$id = get_the_ID();	 
?>	
<div class="col-sm-6 left">
<h2><i class="fa fa-pencil"></i><?php the_title(); ?></h2>
<?php the_content(); ?>
</div>
<?php endwhile; 
  wp_reset_postdata();
?>

</div>
</div></div>
</section>


<div class="container">
<div class="row">
<div class="col-sm-9 ab">
<h2 style="font-size: 30px;">How We Work</h2>
<p><?php echo get_field('page_description');?></p>
<a href="<?php bloginfo('url');?>" class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a>
</div>

<div class="col-sm-3 ab">
<img src="<?php echo get_the_post_thumbnail_url(); ?>">
</div></div></div>


<section class="home-newsletter">
<div class="container">
<div class="row">
<div class="col-sm-12">
	<div class="single">
		<h2>Subscribe to our Newsletter</h2>
	<div class="input-group">
         <input type="email" class="form-control" placeholder="Enter your email">
         <span class="input-group-btn">
         <button class="btn btn-theme" type="submit">Subscribe</button>
         </span>
          </div>
	</div>
</div>
</div>
</div>
</section>

<?php 
get_footer();	
?>