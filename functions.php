<?php 

// Отключение лишних тегов WP srart
    add_filter('show_admin_bar', '__return_false');

    remove_action('wp_head',             'print_emoji_detection_script', 7 );
    remove_action('admin_print_scripts', 'print_emoji_detection_script' );
    remove_action('wp_print_styles',     'print_emoji_styles' );
    remove_action('admin_print_styles',  'print_emoji_styles' );

    remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
    remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
    remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
    remove_action('wp_head', 'rsd_link'); // remove EditURI
    remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
    remove_action('wp_head', 'rel_canonical'); //remove canonical
    remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
    remove_action('wp_head', 'wp_oembed_add_discovery_links'); 
// Отключение лишних тегов WP srart

// Функция для подключения стилей и скриптов start
    add_action('wp_enqueue_scripts', 'site_scripts'); 
        function site_scripts() {
            // Переменная для версии иначе '0.0.0.0'
            $version = '0.0.0.0';

            // Отключение стандартных стилей WP
            wp_dequeue_style( 'wp-block-library' );
            wp_deregister_script( 'wp-embed' );

            // Подключение файлов стилей
            wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap', [], $version);
            wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], $version);
            wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', [], $version);

            // Перерегистрация Jquery
            wp_deregister_script( 'jquery' );
            wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.min.js');
            wp_enqueue_script( 'jquery' );

            // Подключение скриптов
            wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', ['jquery'], $version, true);
            wp_enqueue_script('script-valid', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', ['jquery'], $version, true);
            wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], $version, true);

            wp_localize_script('script', 'WPJS', [
                'siteUrl' => get_template_directory_uri(),
                'ajaxUrl' => admin_url('admin-ajax.php'),
            ]); 
        };
// Функция для подключения стилей и скриптов end


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
  require_once( 'includes/carbon-fields-options/theme-options.php' );
};

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

// Конвертация в WEBP (функция) start
function convertToWebpSrc($src) {
  $src_webp = $src . '.webp';
  return preg_replace('/uploads/', 'uploads-webpc/uploads', $src_webp, 1);
}
// Конвертация в WEBP (функция) end