<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/




//require_once get_template_directory() . '/class-tgm-plugin-activation.php';

require_once get_template_directory() . '/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'shop_isle_register_required_plugins');
function shop_isle_register_required_plugins() {	
	
	$plugins = array(
				array(
					'name'      => 'Contact Form 7',
					'slug'      => 'contact-form-7',
					'required'  => false
				),
					array(
					'name'      => 'Advanced custom fields pro',
					'slug'      => 'advanced-custom-fields-pro',
		            'source'    => 'advanced-custom-fields-pro.zip',
					'required'  => true
				)
			);
	
    $config = array(
        'default_path' => get_stylesheet_directory() . '/plugins/', // default absolute path,
        'menu' => 'tgmpa-install-plugins',
        'has_notices' => true,
        'dismissable' => true,
        'dismiss_msg' => '',
        'is_automatic' => false,
        'message' => '',
        'strings' => array(
            'page_title' => __('Install Required Plugins', 'mytheme'),
            'menu_title' => __('Install Plugins', 'mytheme'),
            'installing' => __('Installing Plugin: %s', 'mytheme'),
            'oops' => __('Something went wrong with the plugin API.', 'mytheme'),
            'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.','mytheme'),
            'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.','mytheme'),
            'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.','mytheme'),
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.','mytheme'),
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.','mytheme'),
            'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.','mytheme'),
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.','mytheme'),
            'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.','mytheme'),
            'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins','mytheme'),
            'activate_link' => _n_noop('Begin activating plugin', 'Begin activating plugins','mytheme'),
            'return' => __('Return to Required Plugins Installer', 'mytheme'),
            'plugin_activated' => __('Plugin activated successfully.', 'mytheme'),
            'complete' => __('All plugins installed and activated successfully. %s', 'mytheme'),
            'nag_type' => 'updated'
        )
    );
    tgmpa($plugins, $config);
}
//add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {
	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		/** This is an example of how to include a plugin pre-packaged with a theme */
		array(
			'name'     => 'ACF', // The plugin name
			'slug'     => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name)
			'source'   => 'https://rupak.crystalbiltech.com/advanced-custom-fields-pro.zip', // The plugin source
			'required' => true,
		),
		/** This is an example of how to include a plugin from the WordPress Plugin Repository */
		array(
			'name' => 'Edit Howdy',
			'slug' => 'edit-howdy',
		),
	);
	/** Change this to your theme text domain, used for internationalising strings */
	$theme_text_domain = 'themetest';
	/**
	 * Array of configuration settings. Uncomment and amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * uncomment the strings and domain.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       => $theme_text_domain,         // Text domain - likely want to be the same as your theme. */
		'default_path' => '',                         // Default absolute path to pre-packaged plugins */
		'menu'         => 'install-my-theme-plugins', // Menu slug */
		'strings'      	 => array(
			'page_title'             => __( 'Install Required Plugins', $theme_text_domain ), // */
			'menu_title'             => __( 'Install Plugins', $theme_text_domain ), // */
			'instructions_install'   => __( 'The %1$s plugin is required for this theme. Click on the big blue button below to install and activate %1$s.', $theme_text_domain ), // %1$s = plugin name */
			'instructions_activate'  => __( 'The %1$s is installed but currently inactive. Please go to the <a href="%2$s">plugin administration page</a> page to activate it.', $theme_text_domain ), // %1$s = plugin name, %2$s = plugins page URL */
			'button'                 => __( 'Install %s Now', $theme_text_domain ), // %1$s = plugin name */
			'installing'             => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name */
			'oops'                   => __( 'Something went wrong with the plugin API.', $theme_text_domain ), // */
			'notice_can_install'     => __( 'This theme requires the %1$s plugin. <a href="%2$s"><strong>Click here to begin the installation process</strong></a>. You may be asked for FTP credentials based on your server setup.', $theme_text_domain ), // %1$s = plugin name, %2$s = TGMPA page URL */
		    'notice_cannot_install'  => __( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', $theme_text_domain ), // %1$s = plugin name */
		'notice_can_activate'    => __( 'This theme requires the %1$s plugin. That plugin is currently inactive, so please go to the <a href="%2$s">plugin administration page</a> to activate it.', $theme_text_domain ), // %1$s = plugin name, %2$s = plugins page URL */
			'notice_cannot_activate' => __( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', $theme_text_domain ), // %1$s = plugin name */
			'return'                 => __( 'Return to Required Plugins Installer', $theme_text_domain ), // */
		),
	);
	tgmpa( $plugins, $config );
}


if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
//add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-blank', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

/////////////custom post services/////////////////
add_action( 'init', 'register_cpt_services' );
function register_cpt_services() {
$labels = array( 
            'name' => _x( 'Services', 'services' ),
            'singular_name' => _x( 'Services', 'services' ),
            'add_new' => _x( 'Add New', 'services' ),
            'add_new_item' => _x( 'Add New Services', 'services' ),
            'edit_item' => _x( 'Edit Services', 'services' ),
            'new_item' => _x( 'New Services', 'services' ),
            'view_item' => _x( 'View Services', 'services' ),
            'search_items' => _x( 'Search Services', 'services' ),
            'not_found' => _x( 'No Services found', 'services' ),
            'not_found_in_trash' => _x( 'No Services found in Trash', 'services' ),
            'parent_item_colon' => _x( 'Parent Services:', 'services' ),
            'menu_name' => _x( 'Services', 'services' ),
        );

        $args = array( 
            'labels' => $labels,
            'hierarchical' => true,
            
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'custom-fields', 'page-attributes' ),
          //  'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
            'public' => true,
            'show_ui' => true,
			'menu_icon'   => 'dashicons-admin-generic',
            'show_in_menu' => true,
            
            
            'show_in_nav_menus' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'post'
        );

        register_post_type( 'services', $args );
		create_my_taxonomies1();
		
    }

function create_my_taxonomies1() {
    register_taxonomy(
        'services_taxo',
        'services',
        array(
            'labels' => array(
                'name' => 'services category',
                'add_new_item' => 'Add New Category',
                'new_item_name' => "New Category"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}

/////////////custom post Works/////////////////
add_action( 'init', 'register_cpt_works' );
function register_cpt_works() {
$labels = array( 
            'name' => _x( 'Works', 'works' ),
            'singular_name' => _x( 'Works', 'works' ),
            'add_new' => _x( 'Add New', 'works' ),
            'add_new_item' => _x( 'Add New Works', 'works' ),
            'edit_item' => _x( 'Edit Works', 'works' ),
            'new_item' => _x( 'New Works', 'works' ),
            'view_item' => _x( 'View Works', 'works' ),
            'search_items' => _x( 'Search Works', 'works' ),
            'not_found' => _x( 'No Works found', 'works' ),
            'not_found_in_trash' => _x( 'No Works found in Trash', 'works' ),
            'parent_item_colon' => _x( 'Parent works:', 'works' ),
            'menu_name' => _x( 'Works', 'works' ),
        );

        $args = array( 
            'labels' => $labels,
            'hierarchical' => true,
            
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'custom-fields', 'page-attributes' ),
          //  'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
            'public' => true,
            'show_ui' => true,
			'menu_icon'   => 'dashicons-universal-access-alt',
            'show_in_menu' => true,
            
            
            'show_in_nav_menus' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'post'
        );

        register_post_type( 'works', $args );
		create_my_taxonomies2();
		
    }

function create_my_taxonomies2() {
    register_taxonomy(
        'works_taxo',
        'works',
        array(
            'labels' => array(
                'name' => 'works category',
                'add_new_item' => 'Add New Category',
                'new_item_name' => "New Category"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}

/////////////custom post Master slider/////////////////

add_action( 'init', 'register_cpt_masterslider' );
function register_cpt_masterslider() {
$labels = array( 
            'name' => _x( 'Master Slider', 'masterslider' ),
            'singular_name' => _x( 'Master Slider', 'masterslider' ),
            'add_new' => _x( 'Add New', 'masterslider' ),
            'add_new_item' => _x( 'Add New Master Slider', 'masterslider' ),
            'edit_item' => _x( 'Edit Master Slider', 'masterslider' ),
            'new_item' => _x( 'New Master Slider', 'masterslider' ),
            'view_item' => _x( 'View Master Slider', 'masterslider' ),
            'search_items' => _x( 'Search Master Slider', 'masterslider' ),
            'not_found' => _x( 'No Master Slider found', 'masterslider' ),
            'not_found_in_trash' => _x( 'No Master Slider found in Trash', 'masterslider' ),
            'parent_item_colon' => _x( 'Parent masterslider:', 'masterslider' ),
            'menu_name' => _x( 'Master Slider', 'masterslider' ),
        );

        $args = array( 
            'labels' => $labels,
            'hierarchical' => true,
            
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'custom-fields', 'page-attributes' ),
          //  'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
            'public' => true,
            'show_ui' => true,
			'menu_icon'   => 'dashicons-image-flip-horizontal',
            'show_in_menu' => true,
            
            
            'show_in_nav_menus' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'post'
        );

        register_post_type( 'masterslider', $args );

    }
	
	/////////////custom post Testimonial/////////////////
	
add_action( 'init', 'register_cpt_testimonial' );
function register_cpt_testimonial() {
$labels = array( 
            'name' => _x( 'Testimonial', 'testimonial' ),
            'singular_name' => _x( 'Testimonial', 'testimonial' ),
            'add_new' => _x( 'Add New', 'testimonial' ),
            'add_new_item' => _x( 'Add New Testimonial', 'testimonial' ),
            'edit_item' => _x( 'Edit Testimonial', 'testimonial' ),
            'new_item' => _x( 'New Testimonial', 'testimonial' ),
            'view_item' => _x( 'View Testimonial', 'testimonial' ),
            'search_items' => _x( 'Search Testimonial', 'testimonial' ),
            'not_found' => _x( 'No Testimonial found', 'testimonial' ),
            'not_found_in_trash' => _x( 'No Testimonial found in Trash', 'testimonial' ),
            'parent_item_colon' => _x( 'Parent testimonial:', 'testimonial' ),
            'menu_name' => _x( 'Testimonial', 'testimonial' ),
        );

        $args = array( 
            'labels' => $labels,
            'hierarchical' => true,
            
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'custom-fields', 'page-attributes' ),
          //  'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
            'public' => true,
            'show_ui' => true,
			'menu_icon'   => 'dashicons-testimonial',
            'show_in_menu' => true,
            
            
            'show_in_nav_menus' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'post'
        );

        register_post_type( 'testimonial', $args );
		create_my_taxonomies3();
		
    }

function create_my_taxonomies3() {
    register_taxonomy(
        'testimonial_taxo',
        'testimonial',
        array(
            'labels' => array(
                'name' => 'testimonial category',
                'add_new_item' => 'Add New Category',
                'new_item_name' => "New Category"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}

	
	/////////////custom post Team/////////////////
	
add_action( 'init', 'register_cpt_team' );
function register_cpt_team() {
$labels = array( 
            'name' => _x( 'Team Member', 'team' ),
            'singular_name' => _x( 'Team Member', 'team' ),
            'add_new' => _x( 'Add New', 'team' ),
            'add_new_item' => _x( 'Add New Team Member', 'team' ),
            'edit_item' => _x( 'Edit Team Member', 'team' ),
            'new_item' => _x( 'New Team Member', 'team' ),
            'view_item' => _x( 'View Team Member', 'team' ),
            'search_items' => _x( 'Search Team Member', 'team' ),
            'not_found' => _x( 'No Team Member found', 'team' ),
            'not_found_in_trash' => _x( 'No Team Member found in Trash', 'team' ),
            'parent_item_colon' => _x( 'Parent team:', 'team' ),
            'menu_name' => _x( 'Team Member', 'testimonial' ),
        );

        $args = array( 
            'labels' => $labels,
            'hierarchical' => true,
            
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'custom-fields', 'page-attributes' ),
          //  'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
            'public' => true,
            'show_ui' => true,
			'menu_icon'   => 'dashicons-groups',
            'show_in_menu' => true,
            
            
            'show_in_nav_menus' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'post'
        );

        register_post_type( 'team', $args );
		create_my_taxonomies4();
		
    }

function create_my_taxonomies4() {
    register_taxonomy(
        'team_taxo',
        'team',
        array(
            'labels' => array(
                'name' => 'Team Category',
                'add_new_item' => 'Add New Category',
                'new_item_name' => "New Category"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}


//***************************theme option*******************

 $themename = "Theme Options";
$shortname = "nt";

$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift($wp_cats, "Choose a category"); 

$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 

array( "name" => "General",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Logo URL",
	"desc" => "Enter the link to your logo image",
	"id" => $shortname."_logo",
	"type" => "text",
	"std" => ""),
	
	array( "name" => "Phone",
	"desc" => "Enter the phone number",
	"id" => $shortname."_phone",
	"type" => "text",
	"std" => ""),
	
	array( "name" => "Email",
	"desc" => "Enter the email Id",
	"id" => $shortname."_email",
	"type" => "text",
	"std" => ""),
	
	array( "name" => "Shop Address",
	"desc" => "Enter the address",
	"id" => $shortname."_address",
	"type" => "textarea",
	"std" => ""),
	
		array( "name" => "Map",
	"desc" => "Map iframe",
	"id" => $shortname."_map",
	"type" => "textarea",
	"std" => ""),
	
	
array( "name" => "Custom CSS",
	"desc" => "Want to add any custom CSS code? Put in here, and the rest is taken care of. This overrides any other stylesheets. eg: a.button{color:green}",
	"id" => $shortname."_custom_css",
	"type" => "textarea",
	"std" => ""),		
	
array( "type" => "close"),
array( "name" => "Social Icons",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Facebook URL",
	"desc" => "Enter the link to your facebook fan page.",
	"id" => $shortname."_facebook_social_link",
	"type" => "text",
	"std" => ""),

	
array( "name" => "Twitter URL",
	"desc" => "Enter the link to your twitter.",
	"id" => $shortname."_twitter_social_link",
	"type" => "text",
	"std" => ""),

	
array( "name" => "Linkedin URL",
	"desc" => "Enter the link to your Linkedin.",
	"id" => $shortname."_linkedin_social_link",
	"type" => "text",
	"std" => ""),
	array( "name" => "Google plus URL",
	"desc" => "Enter the link to your Google plus.",
	"id" => $shortname."_googleplus_social_link",
	"type" => "text",
	"std" => ""),
	array( "name" => "Dribbble URL",
	"desc" => "Enter the link to your dribbble.",
	"id" => $shortname."_dribbble_social_link",
	"type" => "text",
	"std" => ""),
	array( "name" => "Skype URL",
	"desc" => "Enter the link to your Skype.",
	"id" => $shortname."_skype_social_link",
	"type" => "text",
	"std" => ""),
array( "type" => "close"),
array( "name" => "Footer",
	"type" => "section"),
array( "type" => "open"),
	
array( "name" => "Footer copyright text",
	"desc" => "Enter text used in the right side of the footer. It can be HTML",
	"id" => $shortname."_footer_text",
	"type" => "text",
	"std" => ""),
	
array( "name" => "Google Analytics Code",
	"desc" => "You can paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.",
	"id" => $shortname."_ga_code",
	"type" => "textarea",
	"std" => ""),	
	
array( "name" => "Custom Favicon",
	"desc" => "A favicon is a 16x16 pixel icon that represents your site; paste the URL to a .ico image that you want to use as the image",
	"id" => $shortname."_favicon",
	"type" => "text",
	"std" => get_bloginfo('url') ."/favicon.ico"),	
	
array( "name" => "Feedburner URL",
	"desc" => "Feedburner is a Google service that takes care of your RSS feed. Paste your Feedburner URL here to let readers see it in your website",
	"id" => $shortname."_feedburner",
	"type" => "text",
	"std" => get_bloginfo('rss2_url')),

 
array( "type" => "close")
 
);


function mytheme_add_admin() {
 
global $themename, $shortname, $options;
 
if ( $_GET['page'] == basename(__FILE__) ) {
 
	if ( 'save' == $_REQUEST['action'] ) {
 
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
 
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
 
	header("Location: admin.php?page=functions.php&saved=true");
die;
 
} 
else if( 'reset' == $_REQUEST['action'] ) {
 
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
 
	header("Location: admin.php?page=functions.php&reset=true");
die;
 
}
}
 
add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
}

function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/functions/rm_script.js", false, "1.0");

}
function mytheme_admin() {
 
global $themename, $shortname, $options;
$i=0;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>
<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> Settings</h2>
 
<div class="rm_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
 
<?php break;
 
case "close":
?>
 
</div>
</div>
<br />

 
<?php break;
 
case "title":
?>
<p>To easily use the <?php echo $themename;?> theme, you can use the menu below.</p>

 
<?php break;
 
case 'text':
?>

<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
<?php
break;
 
case 'textarea':
?>

<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
  
<?php
break;
 
case 'select':
?>

<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;
 
case "checkbox":
?>

<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />


	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; 
case "section":

$i++;

?>

<div class="rm_section">
<div class="rm_title"><h3><img src="<?php bloginfo('template_directory')?>/functions/images/trans.gif" class="inactive" alt=""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" class="savebtn" value="Save changes" />
</span><div class="clearfix"></div></div>
<div class="rm_options">

 
<?php break;
 
}
}
?>
 
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" class="savebtn" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<div style="font-size:9px; margin-bottom:10px;">Icons: <a href="http://www.woothemes.com/2009/09/woofunction/">WooFunction</a></div>
 </div> 
 

<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
//_________theme option_---------------------



function title_filter( $where, &$wp_query )
{
    global $wpdb;
    if ( $search_term = $wp_query->get( 'search_post_title' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\'';
    }
    return $where;
}

function get_my_suggestions() {

    $search_term = $_GET['term'];
    //$cat = $_GET['scat'];

    $args = array(
        'post_type' => 'post',
        'search_post_title' => $search_term,
        //'cat' => $cat,
        'post_status' => 'publish',
        'orderby'     => 'title', 
        'order'       => 'ASC'        
    );

    add_filter( 'posts_where', 'title_filter', 10, 2 );
    $wp_query = new WP_Query($args);
    remove_filter( 'posts_where', 'title_filter', 10, 2 );    

    $tests_labs = $wp_query->posts;
    //echo '<pre>';print_r($tests_labs);exit;

      if($cat != 'undefined')
    {

    $postsList = '[';
    if (!empty($tests_labs)) {
        $posts = array();
        $i = 1;
        foreach ($tests_labs as $post) { 
		
		print_r($post);
		
		?>
		


			
		<?php
        }
		wp_reset_postdata();
    } else
        $postsList .= '';

    $postsList .= ']';

  //  echo $postsList;

  //  exit;
}
}
add_shortcode('resd','get_my_suggestions');



?>
