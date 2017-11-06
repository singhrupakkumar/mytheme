<?php /* Template Name: Blog layout2 */ get_header(); ?>
<style type="text/css">
.text1 {
  padding: 15px;
}


.media-body.post_reply_comments {
  margin-top: 10px;
  height: 400px;
    overflow: hidden;
    position: relative;
}

.media-body.post_reply_comments > h2 {
  border-radius: 5px;
  color: black;
  cursor: pointer;
  float: right;
  font-size: 14px;
  margin-right: 15px;
  padding: 9px;
}

.post_reply_comments p {

    padding: 15px;
}
.post-img img {
    max-width: 100%;
	
}
.post-img{ height: 200px;
    overflow: hidden;
    position: relative;}   

</style>

<section id="blog" class="container">
<div class="center">
<h2>Blogs</h2>
<div class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</div>
</div>


<div class="blog">
<div class="row">
<div class="col-md-8">
<div class="media comment_section">
<?php	

$number     = 8;
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
$content = substr( get_the_content(),0, 100);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);

/* $dom = simplexml_load_string(get_the_post_thumbnail());
$src = $dom->attributes()->src; */
?>

<div class="col-sm-6">
<div class="media-body post_reply_comments pst_cmt">
<div class="post-img">
<img src="<?php echo get_the_post_thumbnail_url(); ?>">
</div>
<span class="title"><b><?php the_title();?></b></span>
<p class="text1"><?php echo $content;?></p>
<h2><a href="<?php echo get_post_permalink($id );?>">Read More</a></h2>
</div>

</div>

<?php endwhile;?>

</div>
</div> 



<div class="col-sm-4 side-blog">
<?php
$args2 = array( 'posts_per_page' => 4,'orderby' => 'ID',
	'order' => 'DESC','post_type' => 'post');
$loop1 = new WP_Query( $args2 );
   while ( $loop1->have_posts() ) : $loop1->the_post();

$id = get_the_ID();	 
$content = substr( get_the_content(),0, 100);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
?>
<div class="media-body post_reply_comments pst_cmt"> 
<div class="post-img">
  <img src="<?php echo get_the_post_thumbnail_url(); ?>">
  </div>
  <span class="title"><b><?php the_title();?></b></span>
<p class="text1"><?php echo  $content;?></p>
<h2><a href="<?php echo get_post_permalink($id );?>">Read More</a></h2>
</div>
<?php endwhile; ?>

</div>
<?php

if ($total_post > $total_query) {
//echo '<ul class="pagination pagination-lg">';
  $current_page = max(1, get_query_var('paged'));
/*   echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%/',
        'current' => $current_page,
        'total' => $total_pages,
        'prev_next'    => true,
        'prev_text'          => __( 'Previous page', 'mytheme' ),
		'next_text'          => __( 'Next page', 'mytheme' ),
		'type' => 'list'
    ));
echo '</ul>'; */

$links = paginate_links( array(
  'prev_next'          => true,
   'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%/',
        'current' => $current_page,
        'total' => $total_pages,
  'type'               => 'array'
) );

if ( $links ) :

    echo '<ul class="pagination pagination-lg">';

    // get_previous_posts_link will return a string or void if no link is set.
    if ( $prev_posts_link = get_previous_posts_link( __( 'Previous Page' ) ) ) :
      /*   echo '<li class="prev-list-item">';
        echo $prev_posts_link;
        echo '</li>'; */
    endif;

    echo '<li>';
    echo join( '</li><li>', $links );
    echo '</li>';

    // get_next_posts_link will return a string or void if no link is set.
    if ( $next_posts_link = get_next_posts_link( __( 'Next Page' ) ) ) :
        echo '<li class="next-list-item">';
        echo $next_posts_link;
        echo '<i class="fa fa-long-arrow-right"></i></li>';
    endif;
    echo '</ul>';
endif;

}
?>
            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
	<?php get_footer(); ?>