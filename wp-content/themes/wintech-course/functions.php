<?php
if (!function_exists('wintech_theme_setup')) {
    function wintech_theme_setup()
    {

        add_theme_support('automatic-feed-links');

        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        // menu
        register_nav_menus(array(
            'main-menu' => __('Main Menu', 'text_domain'),
            'footer-menu' => __('Footer Menu', 'text_domain'),
        ));




        $sidebar = array(
            'name' => 'Main Sidebar',
            'id'    => 'main-sidebar',
            'description' => 'main-sidebar',
            'class' => 'main-sidebar',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   =>  '</h3>',
        );
        register_sidebar($sidebar);
    }
    add_action('init', 'wintech_theme_setup');
}

if (!function_exists('wintech_menu')) {
    function wintech_menu($menu)
    {
        $menu = array(
            'theme_location'    => $menu,
            'container'     => 'nav',
            'container_class'   => $menu,
        );
        wp_nav_menu($menu);
    }
}

function loadStyle()
{
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lexend:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap',
        [],
        null
    );

    wp_enqueue_style('min-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    wp_enqueue_style('slick-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('slick-theme-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
    wp_enqueue_style('bootraps-font-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', [], time(), false);

    wp_enqueue_style('aos-min-css', get_stylesheet_directory_uri() . '/assets/css/aos.min.css');
    wp_enqueue_style('custom-fonts-css', get_stylesheet_directory_uri() . '/assets/css/custom-fonts.css');
    wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/assets/css/style.css');

    wp_add_inline_script('tailwind', '
    tailwind.config = {
        theme: {
                extend: {
                    spacing: {
                        15: "60px",
                        18: "72px",
                        22: "88px",
                    },
                    maxWidth: {
                        "6xl": "1200px",
                    },
                    keyframes: {
                        "pulse-small": {
                            "0%, 100%": { transform: "scale(1)" },
                            "50%": { transform: "scale(1.1)" },
                        },
                    },
                    animation: {
                        "pulse-small": "pulse-small 1s infinite",
                    },
                },
            },
            plugins: [],
        }
    ');

    // wp_enqueue_script('jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', ['jquery']);
    // if (!is_admin()) {
    //     wp_deregister_script('jquery');
    //     wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', [], null, true);
    //     wp_enqueue_script('jquery');
    // }
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootraps-bundle-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], time(), true);
    wp_enqueue_script('slick-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', ['jquery'], time(), true);
    wp_enqueue_script('aos-min-js', get_stylesheet_directory_uri().'/assets/js/aos.min.js', [], time(), true);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri().'/assets/js/main.js', ['jquery'], time(), true);

}
add_action('wp_enqueue_scripts', 'loadStyle');

function create_post_type_courses()
{
    register_post_type('courses', [
        'labels' => [
            'name' => 'Courses',
            'singular_name' => 'Course',
            'add_new' => 'Add New Course',
            'add_new_item' => 'Add New Course',
            'edit_item' => 'Edit Course',
            'new_item' => 'New Course',
            'view_item' => 'View Course',
            'search_items' => 'Search Courses',
            'not_found' => 'No courses found',
            'menu_name' => 'Courses',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'courses',
        ],
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'custom-fields',
        ],
        'show_in_rest' => true, // dùng Gutenberg + API
    ]);
}
add_action('init', 'create_post_type_courses');

function create_course_taxonomy()
{
    register_taxonomy('course_category', 'courses', [
        'labels' => [
            'name' => 'Course Categories',
            'singular_name' => 'Course Category',
        ],
        'hierarchical' => true,
        'rewrite' => [
            'slug' => 'course-category',
        ],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_course_taxonomy');