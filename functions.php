<?php
	add_theme_support( 'post-thumbnails' );
	//add_image_size('slider_thumbs',150, 150, true);
	//set_post_thumbnail_size(150, 150, true);
	//require_once('opciones.php');
	define('TEMPPATH', get_bloginfo('stylesheet_directory'));
	define('IMAGES', TEMPPATH."/img");
	add_theme_support('nav-menus');
	if(function_exists('register_nav_menus')) {
		register_nav_menus(
			array(
				'menu_top'=>'Menú Principal CloudBits'
				//'menu_footer'=>'Menú Principal CloudBits'
		));
	}

	$args = array(
	'name'          => 'Sidebar Primary', //), $i ),
	'id'            => "sidebar",//-$i",
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>\n",
	);

	$argsSecond = array(
	'name'          => 'Sidebar Secundary', //), $i ),
	'id'            => "sidebarSecond",//-$i",
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>\n",
	);

	$args2 = array(
	'name'          => 'Footer', //), $i ),
	'id'            => "sidebar2",//-$i",
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>\n",
	);
	if (function_exists('register_sidebar')) register_sidebar( $args );
	if (function_exists('register_sidebar')) register_sidebar( $argsSecond );
	if (function_exists('register_sidebar')) register_sidebar( $args2 );

	     /*  Main Sidebar
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Main Sidebar',
           'before_widget' => '<hr>',
            'after_widget' => '',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
     ));
     */

// Permitir comentarios encadenados
function enable_threaded_comments(){
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
       wp_enqueue_script('comment-reply');
    }
}
add_action('get_header', 'enable_threaded_comments');



//
// //lazyload
// function my_lazyload_js() {
//     wp_enqueue_script('jquery_lazy_load', get_stylesheet_directory_uri() . '/plugins/lazyload-master/dist/lazyload.transpiled.min.js', array('jquery'), '');
// }
// add_action('wp_enqueue_scripts', 'my_lazyload_js');
//
// function my_filter_lazyload($content) {
//     // Don't LazyLoad if the thumbnail is in admin, a feed or a post preview.
//     if ( is_admin() || is_feed() || is_preview() || empty( $content ) ) {
//         return $content;
//     }
//
//     return preg_replace_callback('/(<\s*img[^>]+)(src\s*=\s*"[^"]+")([^>]+>)/i', 'my_preg_lazyload', $content);
// }
// add_filter('the_content', 'my_filter_lazyload', PHP_INT_MAX);
// add_filter('get_avatar', 'my_filter_lazyload', PHP_INT_MAX);
// add_filter('widget_text', 'my_filter_lazyload', PHP_INT_MAX);
// add_filter('get_image_tag', 'my_filter_lazyload', PHP_INT_MAX);
// add_filter('post_thumbnail_html', 'my_filter_lazyload', PHP_INT_MAX);
//
// function my_preg_lazyload($html) {
//     // Reemplazamos src por un pixel en blanco, y la imagen original en un data-attribute
//     // $img_replace = $html[1] . ' src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original' . substr($html[2], 3) . $html[3];
// 		$img_replace = $html[1] . ' src'.substr($html[2], 3).' data-original'. substr($html[2], 3) . $html[3];
//     // Para imágenes responsive reemplazamos srcset por un data-attribute
//     $img_replace = preg_replace('/srcset\s*=\s*"/i', 'data-original-set="', $img_replace);
//     // Añadimos una etiqueta noscript con la imagen original para usuarios que tengan desactivado JavaScript
//     $img_replace .= '<noscript>' . $html[0] . '</noscript>';
//     return $img_replace;
// }

?>
