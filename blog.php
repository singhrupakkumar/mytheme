<?php /* Template Name: Blog */ get_header(); ?>
<style type="text/css">
.readmore{
    display:table;
    text-align:center;
    border-radius:80px;
}  
.single_comments{
    width:100%;
    float:left;
}
.single_comments img{
    width:64px;
}
span.page-numbers.current {
    background: #cd2e2f!important;
    color: #fff;
}
</style>
</style>
<section id="blog" class="container">
<div class="center">
<h2>Blogs</h2>
<div class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</div>
</div>
<div class="blog">
<div class="row">
<div class="col-md-8">
<?php	

$number     = 2;
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

//$dom = simplexml_load_string(get_the_post_thumbnail());
//$src = $dom->attributes()->src;
?>
<div class="blog-item">
<div class="row">
<div class="col-xs-12 col-sm-2 text-center">
<div class="entry-meta">
<span id="publish_date"><?php echo get_the_date(); ?></span>
<span><i class="fa fa-user"></i> <a href="<?php echo get_the_author_link(); ?>"><?php the_author(); ?></a></span>
<span><i class="fa fa-comment"></i> <a href="#"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) );?></a></span>



<span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
</div>
</div>
<div class="col-xs-12 col-sm-10 blog-content">
<a href="<?php echo get_post_permalink($id );?>"><img class="img-responsive img-blog" src="<?php echo get_the_post_thumbnail_url(); ?>" width="100%" alt=""/></a>
<h2><a href="<?php echo get_post_permalink($id );?>"><?php the_title();?></a></h2>
<h3><?php the_content();?></h3>
<a class="btn btn-primary readmore" href="<?php echo get_post_permalink($id );?>">Read More <i class="fa fa-angle-right"></i></a>
</div>
</div>
</div> 
<?php endwhile;

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

</div> 
<aside class="col-md-4">
<div class="widget search">
<form role="form" role="search" method="get">
<input type="text" class="form-control search_box" name="term" autocomplete="off" placeholder="Search Here">
<!--button type="submit" class="search-submit fa fa-search" value="Search">&nbsp;</button-->
</form>
</div> 
<div class="widget categories">
<h3>Recent Comments</h3>
<div class="row">
<div class="col-sm-12">
<?php $args = array(
	'author_email' => '',
	'author__in' => '',
	'author__not_in' => '',
	'include_unapproved' => '',
	'fields' => '',
	'ID' => '',
	'comment__in' => '',
	'comment__not_in' => '',
	'karma' => '',
	'number' => '',
	'offset' => '',
	'orderby' => '',
	'order' => 'DESC',
	'posts_per_page'=>3,
	'parent' => '',
	'post_author__in' => '',
	'post_author__not_in' => '',
	'post_ID' => '', // ignored (use post_id instead)
	'post_id' => 0,
	'post__in' => '',
	'post__not_in' => '',
	'post_author' => '',
	'post_name' => '',
	'post_parent' => '',
	'post_status' => '',
	'post_type' => 'post',
	'status' => 'all',
	'type' => '',
        'type__in' => '',
        'type__not_in' => '',
	'user_id' => '',
	'search' => '',
	'count' => false,
	'meta_key' => '',
	'meta_value' => '',
	'meta_query' => '',
	'date_query' => null, // See WP_Date_Query
);
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
if ( $comments ) {
	foreach ( $comments as $comment ) {
 ?>



								<div class="single_comments">
								<img src="<?php echo get_avatar_url($comment->comment_author_email)?>" alt="<?php echo $comment->comment_author; ?>"/>
								<p><?php echo $comment->comment_content; ?></p>
								<div class="entry-meta small muted">
								<span>By <a href="#"><?php echo $comment->comment_author; ?></a></span <span>On <a href="#">Creative</a></span>
								</div>
								</div>
									<?php
	}
} else {
	echo 'No comments found.';
}
    ?>
                   
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                     

                    <div class="widget categories">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="#">Computers <span class="badge">04</span></a></li>
                                    <li><a href="#">Smartphone <span class="badge">10</span></a></li>
                                    <li><a href="#">Gedgets <span class="badge">06</span></a></li>
                                    <li><a href="#">Technology <span class="badge">25</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
    				
    	
    				
    				
    				<div class="widget blog_gallery">
                        <h3>Our Gallery</h3>
                        <ul class="sidebar-gallery">
						<?php
							$args = array( 'post_type' => 'works', 'posts_per_page' => 6);
							$loop = new WP_Query( $args );
							 while ( $loop->have_posts() ) : $loop->the_post();
						$id = get_the_ID();	 
								?>	
                            <li><a href="<?php echo  get_post_permalink($id );?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="100" height="100" /></a></li>
							
						<?php 
						endwhile; 
						wp_reset_postdata();
						?>
                        
                        </ul>
                    </div><!--/.blog_gallery-->
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
<?php get_footer(); ?>
   