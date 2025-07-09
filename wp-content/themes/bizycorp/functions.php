<?php 
function bizycorp_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap', false);
    wp_enqueue_style('bizycorp-style', get_template_directory_uri() . "/assets/css/style.css", array(), $version , 'all');
    wp_enqueue_style('bizycorp-bootstrap',  "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('bizycorp-fontawesome',  "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
    // AOS CSS
    wp_enqueue_style('bizycorp-aos', get_template_directory_uri() . "/assets/vendors/plugins/aos-master/dist/aos.css", array(), '2.3.4', 'all');
    // Owl Carousel CSS
    wp_enqueue_style('bizycorp-owl-carousel', get_template_directory_uri() . '/assets/vendors/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css', array(), '2.3.4', 'all');
    wp_enqueue_style('bizycorp-owl-theme', get_template_directory_uri() . '/assets/vendors/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css', array('bizycorp-owl-carousel'), '2.3.4', 'all');
    
}
add_action('wp_enqueue_scripts', 'bizycorp_register_styles');


function bizycorp_register_scripts() {
    wp_enqueue_script('bizycorp-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('bizycorp-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array('bizycorp-jquery'), '1.16.0', true);
    wp_enqueue_script('bizycorp-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array('bizycorp-jquery', 'bizycorp-popper'), '4.4.1', true);
    wp_enqueue_script('bizycorp-main', get_template_directory_uri() . "/assets/js/main.js", array('bizycorp-jquery'), '1.0', true);
     // AOS JS
    wp_enqueue_script('bizycorp-aos', get_template_directory_uri() . "/assets/vendors/plugins/aos-master/dist/aos.js", array('bizycorp-jquery'), '2.3.4', true);

    // Initialize AOS
    wp_add_inline_script('bizycorp-aos', 'AOS.init();');
    // Owl Carousel JS
    wp_enqueue_script( 'bizycorp-owl-carousel', get_template_directory_uri() . '/assets/vendors/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', array('bizycorp-jquery'), '2.3.4', true
);
}
add_action('wp_enqueue_scripts', 'bizycorp_register_scripts');
?>