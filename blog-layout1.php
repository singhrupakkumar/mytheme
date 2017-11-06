<?php /* Template Name: Blog layout1 */ get_header(); ?>
<style type="text/css">
.text1 {
  color: white;
  font-size: 16px;
  left: 0;
  margin-bottom: 0;
  margin-left: auto;
  margin-right: auto;
  position: absolute;
  right: 0;
  text-align: center;
  top: 50%;
  transform: translateY(-50%);
  width: 86%;
} 

.overlay:hover {
  background: black none repeat scroll 0 0;
  transition: 4s;
}

.post_reply_comments a {
  background: #c52d2f none repeat scroll 0 0;
  border-radius: 5px;
  bottom: 25px;
  color: #fff;
  font-size: 14px;
  padding: 0 15px;
  position: absolute;
  right: 10px;
  text-transform: uppercase;
}

.show {
    bottom: 24px !important;
    left: 15px;
    position: absolute;
}
.post_reply_comments a{background: none; color: white;}
.media-body.post_reply_comments img{
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}
.overlay {
    height: 100%;
    width: 100%;
    left: 0;
    opacity: 0.80;
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
}
.post_reply_comments p{
    padding-bottom: 30px;
    position: relative;
    text-shadow: none !important;
    width: 100%;
    float: left;
    color: #fff;
    text-align: center;
}
.comment_section .media-body{
    position:relative;
    padding:0px;
    margin-bottom:15px;
}
.comment_section .media-body{
    width:100%;
    float:left;
    height:178px;
}
</style>
<div class="container">
<div class="col-sm-3">
<div class="filter">
<a href="#">DROPDOWN FILTER <i class="fa fa-angle-down ul-arrow-angle" aria-hidden="true"></i></a>
</div>
<div class="filter-drop">
<ul>
<li><a href="#">FASHION</a></li>
<li><a href="#">FEATURED</a></li>
<li><a href="#">NONE</a></li>
</ul>
</div>
</div>

<div class="col-sm-9">
<div class="filter1">
<a href="#">SORT BY NONE  <i class="fa fa-angle-down ul-arrow-angle" aria-hidden="true"></i></a>
</div>
<div class="filter1-drop">
<ul>
<li><a href="#">SORT BY DATE </a></li>
<li><a href="#">SORT BY TITLE </a></li>
<li><a href="#">NONE</a></li>
</ul>
</div>
</div>
</div>
<section id="blog" class="container">
<div class="center h2blog1">
<h2>Blogs</h2>
<div class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud</div>
</div>


<div class="blog">
<div class="row">
<div class="col-md-12">
<div class="media comment_section">
<?php	

$number     = -1;
$paged      = (get_query_var('paged')) ? get_query_var('paged') : 1;
$offset     = ($paged - 1) * $number;

			
$args1 = array( 'posts_per_page' => $number,'offset' => $offset,'post_type' => 'post');


	$loop1 = new WP_Query( $args1 );

$count_posts = wp_count_posts();

$published_posts = $count_posts->publish;
	
$total_post = $published_posts;
$total_query = $number;

$total_pages = intval($total_post / $number);	

     while ( $loop1->have_posts() ) : $loop1->the_post();

$id = get_the_ID();	 

$content = substr( get_the_content(),0, 250);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
?>

<div class="col-sm-4">
<div class="media-body post_reply_comments">
<img src="<?php echo get_the_post_thumbnail_url(); ?>">
<div class="overlay"></div>
<?php echo $content;?>
<div class="bottom_link">
<h2><a href="#" class="show"><i class="fa fa-share-alt" aria-hidden="true"></i>
 share</a></h2>
<h2><a href="<?php echo get_post_permalink($id); ?>">read more <i class="fa fa-angle-double-right ul-readmore-icon" aria-hidden="true"></i></a></h2>
</div>
</div>
</div>


<?php endwhile ; ?>

</div>


 
 <div class="load text-center">
<h2><a href="#">LOAD MORE</a></h2>
 </div>

</div> 

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
<?php get_footer(); ?>
