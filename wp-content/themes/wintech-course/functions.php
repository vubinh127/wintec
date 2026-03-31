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
        'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lexend:wght@100..900&display=swap',
        [],
        null
    );

    wp_enqueue_style('min-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    wp_enqueue_style('slick-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('slick-theme-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
    wp_enqueue_style('bootraps-font-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    wp_enqueue_script('tailwind', get_stylesheet_directory_uri() . '/assets/js/tailwind.js', [], time(), false);

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

function create_post_type_khoa_hoc()
{
    register_post_type('khoa_hoc', [
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
            'slug' => 'khoa-hoc',
        ],
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        'show_in_rest' => true, // dùng Gutenberg + API
    ]);
}
add_action('init', 'create_post_type_khoa_hoc');

function create_khoa_hoc_taxonomy()
{
    register_taxonomy('course_category', 'khoa_hoc', [
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
add_action('init', 'create_khoa_hoc_taxonomy');

function add_custom_roles() {
    add_role('hoc_vien', 'Học Viên', [
        'read' => true,
        'access_courses' => true,
    ]);
    // Học viên VIP
    add_role('hoc_vien_vip', 'Học Viên VIP', [
        'read'              => true,
        'access_courses'    => true,
        'access_vip_lessons'=> true,
    ]);
}
add_action('init', 'add_custom_roles');

// Chặn truy cập trang khóa học nếu không đủ quyền
// function restrict_course_pages() {
//     if (is_page('khoa-hoc') || is_singular('lesson')) { // đổi theo slug/CPT của bạn

//         if (!is_user_logged_in()) {
//             wp_redirect(home_url('/dang-nhap'));
//             exit;
//         }

//         $user = wp_get_current_user();
//         $allowed_roles = ['hoc_vien', 'hoc_vien_vip', 'administrator'];

//         if (empty(array_intersect($allowed_roles, $user->roles))) {
//             wp_redirect(home_url('/khong-co-quyen'));
//             exit;
//         }
//     }
// }
// add_action('template_redirect', 'restrict_course_pages');

function is_hoc_vien() {
    if (!is_user_logged_in()) return false;
    $user = wp_get_current_user();
    return array_intersect(['hoc_vien', 'hoc_vien_vip'], $user->roles);
}


function restrict_course_pages() {
    if (is_page('khoa-hoc') || is_singular('lesson')) {
        if (!is_hoc_vien()) {
            wp_redirect(home_url('/dang-nhap'));
            exit;
        }
    }
}
add_action('template_redirect', 'restrict_course_pages');


// Chặn hoc_vien vào wp-admin
function block_hoc_vien_from_admin() {
    if (is_admin() && !defined('DOING_AJAX')) {
        $user = wp_get_current_user();
        $blocked = ['hoc_vien', 'hoc_vien_vip'];

        if (!empty(array_intersect($blocked, $user->roles))) {
            wp_redirect(home_url('/'));
            exit;
        }
    }
}
add_action('admin_init', 'block_hoc_vien_from_admin');

// Ẩn luôn thanh admin bar phía trên trang
function hide_admin_bar_for_hoc_vien() {
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        $hidden = ['hoc_vien', 'hoc_vien_vip'];

        if (!empty(array_intersect($hidden, $user->roles))) {
            show_admin_bar(false);
        }
    }
}
add_action('after_setup_theme', 'hide_admin_bar_for_hoc_vien');