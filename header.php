<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="viewport" content="width=480, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="author" content="">
<link rel="shortcut icon" type="image/jpg" href="<?php echo get_option( 'nt_favicon' ); ?>"/>
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

 
 <!-- Common Css Include Here -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/style5.css" rel="stylesheet">
 
<?php
	$id = get_the_ID();
	$temp_name =  get_page_template_slug($id);
	if($temp_name =='about2.php'||$temp_name =='about1.php'||$temp_name =='about.php'||$temp_name =='home-1.php'||$temp_name =='page-home.php'||$temp_name =='home-2.php'){
?>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
<?php 
}
if($temp_name =='home-1.php'||$temp_name =='home-2.php'||$temp_name =='service2.php'){
?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css"/>
<?php 
}
if($temp_name =='home-1.php'||$temp_name =='service2.php'){ 
?> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style1.css">

<?php 
}
if($temp_name =='home-2.php'){ 
?>

<!-- Index2 -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/superslides.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">  
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/elastic_grid.css"> 
<link id="orginal" href="<?php echo get_template_directory_uri(); ?>/css/default-theme.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/style3.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<?php } ?>

<!--style>
.recent-work-inner > p {
	padding-left: 0;
	width: 94%;
}
#feature {
    background: #f2f2f2 none repeat scroll 0 0;
    margin-top: -112px !important;
    padding-bottom: 40px;
}
<?php //echo get_option( 'nt_custom_css' ); ?>
</style -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<style>
.loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('<?php echo get_template_directory_uri(); ?>/images/loader1.gif') 50% 50% no-repeat rgb(249,249,249);
}		

	</style>	
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>

<?php wp_head(); ?>
</head>
<body class="homepage" <?php body_class(); ?>>
<div class="loader"></div>
  
<header id="header">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-6">
          <div class="top-number">
		 
            <p><i class="fa fa-phone-square"></i> <?php echo get_option( 'nt_phone' ); ?></p>
          </div>
        </div>
        <div class="col-sm-6 col-xs-6">
          <div class="social">
            <ul class="social-share">
              <li><a href="<?php echo get_option( 'nt_facebook_social_link' ); ?>"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php echo get_option( 'nt_twitter_social_link' ); ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php echo get_option( 'nt_linkedin_social_link' ); ?>"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="<?php echo get_option( 'nt_dribbble_social_link' ); ?>"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="<?php echo get_option( 'nt_skype_social_link' ); ?>"><i class="fa fa-skype"></i></a></li>
            </ul>
            <div class="search">
              <form role="form" method="get" action="<?php bloginfo('url');?>">
                <input type="text" name="s" class="search-form" autocomplete="off" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <div class="navbar-header">
       
        <a class="navbar-brand" href="<?php bloginfo('url') ;?>"><img src="<?php echo get_option( 'nt_logo' ); ?>" alt="logo"></a></div>
     <nav class="nav navbar-right">

		  <?php html5blank_nav(); ?>

        </nav>
</div> 


</nav> 
</header>