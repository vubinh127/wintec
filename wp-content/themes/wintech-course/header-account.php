<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://phanhieuky.com/public/uploads/favicon/favicon-1744713456.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="account-header bg-white border-b border-gray-200 sticky top-0 left-0 w-full z-50">
        <div class="container mx-auto max-w-6xl !px-6 xl:!px-0">
            <div class="flex items-center justify-between h-[75px]">

                <a href="<?php echo home_url() ?>" class="flex items-center gap-2 no-underline">
                    <svg width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 0L0 16H9L8 28L22 12H13L13 0Z" fill="url(#acc-logo-grad)" />
                        <defs>
                            <linearGradient id="acc-logo-grad" x1="0" y1="0" x2="22" y2="28" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#f3de58" />
                                <stop offset="100%" stop-color="#fda803" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <span style="font-family:'Lexend',sans-serif;" class="font-bold text-[15px] tracking-widest text-gray-900 uppercase">
                        PHAN HIEU KY
                    </span>
                </a>

                <div class="flex items-center gap-2">

                    <?php
                    if (is_user_logged_in()) { 
                        $avatar = get_avatar_url(get_current_user_id(), ['size' => 44]);
                        ?>
                        <div class="relative hidden lg:block" id="acc-dropdown-wrapper">
                            <button id="acc-dropdown-trigger"
                                class="flex items-center gap-1.5 p-1 rounded-full hover:bg-gray-100 transition-colors duration-150 focus:outline-none cursor-pointer">
                                <span class="w-8 h-8 rounded-full overflow-hidden block border-2 border-gray-200 shrink-0">
                                    <img src="<?php echo esc_url($avatar); ?>" alt="avatar" class="w-full h-full object-cover">
                                </span>
                                <svg id="acc-dropdown-chevron"
                                    class="w-3.5 h-3.5 text-gray-500 transition-transform duration-200 shrink-0"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div id="acc-dropdown-menu"
                                class="hidden absolute right-0 top-[calc(100%+8px)] bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden z-[999]"
                                style="min-width:230px;">
                                <!-- <div class="flex items-center gap-3 px-4 pt-4 pb-3">
                                    <div class="w-11 h-11 rounded-full overflow-hidden shrink-0 bg-gray-100 border border-gray-200">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/placeholder-course.png" alt="avatar" class="w-full h-full object-cover">
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="text-gray-900 font-bold text-sm leading-tight truncate">Phan Hieu Ky</p>
                                        <p class="text-gray-400 text-xs mt-0.5">Student</p>
                                    </div>
                                </div> -->
                                <div class="flex items-center gap-3 px-4 pt-4 pb-3">
                                    <div class="w-11 h-11 rounded-full overflow-hidden shrink-0 bg-gray-100 border border-gray-200">
                                        
                                        <img src="<?php echo esc_url($avatar); ?>" alt="avatar" class="w-full h-full object-cover">
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="text-gray-900 font-bold text-sm leading-tight truncate">
                                            <?php echo esc_html(wp_get_current_user()->display_name); ?>
                                        </p>
                                        <p class="text-gray-400 text-xs mt-0.5">
                                            <?php
                                            $roles = wp_get_current_user()->roles;
                                            $role_labels = [
                                                'administrator'  => 'Quản Trị Viên',
                                                'hoc_vien_vip'   => 'Học Viên VIP',
                                                'hoc_vien'       => 'Học Viên',
                                            ];
                                            $role = $roles[0] ?? '';
                                            echo esc_html($role_labels[$role] ?? ucfirst($role));
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="h-px bg-gray-100"></div>
                                <!-- <ul class="py-1">
                                    <li><a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 text-[13.5px] hover:bg-gray-50 transition-colors duration-150">
                                            <svg class="w-[18px] h-[18px] shrink-0 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z" />
                                                <polyline stroke-linecap="round" stroke-linejoin="round" points="17 21 17 13 7 13 7 21" />
                                                <polyline stroke-linecap="round" stroke-linejoin="round" points="7 3 7 8 15 8" />
                                            </svg>
                                            Khóa Học Của Tôi</a></li>
                                    <li><a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 text-[13.5px] hover:bg-gray-50 transition-colors duration-150">
                                            <svg class="w-[18px] h-[18px] shrink-0 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                                                <circle cx="12" cy="7" r="4" />
                                            </svg>
                                            Hồ sơ của tôi</a></li>
                                    <li><a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 text-[13.5px] hover:bg-gray-50 transition-colors duration-150">
                                            <svg class="w-[18px] h-[18px] shrink-0 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                                <circle cx="9" cy="7" r="4" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
                                            </svg>
                                            Đối tác liên kết</a></li>
                                    <li><a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 text-[13.5px] hover:bg-gray-50 transition-colors duration-150">
                                            <svg class="w-[18px] h-[18px] shrink-0 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z" />
                                            </svg>
                                            Khóa học yêu thích</a></li>
                                    <li><a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 text-[13.5px] hover:bg-gray-50 transition-colors duration-150">
                                            <svg class="w-[18px] h-[18px] shrink-0 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                                            </svg>
                                            Tin nhắn</a></li>
                                    <li><a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 text-[13.5px] hover:bg-gray-50 transition-colors duration-150">
                                            <svg class="w-[18px] h-[18px] shrink-0 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                                <polyline stroke-linecap="round" stroke-linejoin="round" points="12 8 12 12 14 14" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.05 11a9 9 0 108.94-8.95" />
                                                <polyline stroke-linecap="round" stroke-linejoin="round" points="1 4 3 11 10 9" />
                                            </svg>
                                            Lịch sử mua hàng</a></li>
                                </ul> -->
                                <div class="h-px bg-gray-100"></div>
                                <div class="py-1">
                                    <a href="<?php echo wp_logout_url(home_url('/login')); ?>"
                                        class="flex items-center gap-3 px-4 py-2.5 text-red-500 text-[13.5px] hover:bg-red-50 transition-colors duration-150">
                                        <svg class="w-[18px] h-[18px] shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4" />
                                            <polyline stroke-linecap="round" stroke-linejoin="round" points="16 17 21 12 16 7" />
                                            <line stroke-linecap="round" stroke-linejoin="round" x1="21" y1="12" x2="9" y2="12" />
                                        </svg>
                                        Đăng xuất
                                    </a>
                                </div>
                            </div>
                        </div>

                        <button id="acc-mobile-menu-btn"
                            class="lg:hidden flex items-center justify-center w-9 h-9 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors duration-150 focus:outline-none cursor-pointer">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    <?php } else { ?>
                        <div class="w-[135px] h-[35px] text-sm font-normal">
                            <a id="open-auth-modal" class="animate-pulse-small flex items-center justify-center w-full h-full bg-gradient-to-r from-[#f3de58] to-[#fda803] text-black rounded hover:from-[#faf4b0] hover:to-[#faf4b0] transition-colors cursor-pointer">
                                ĐĂNG NHẬP
                            </a>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </header>

    <div id="acc-mobile-overlay"
        class="fixed inset-0 bg-black/40 z-[998] hidden lg:hidden"
        style="backdrop-filter:blur(2px);"></div>
    <div id="acc-mobile-drawer"
        class="fixed top-0 right-0 h-full w-full bg-white z-[999] translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto lg:hidden"
        style="box-shadow:-4px 0 24px rgba(0,0,0,0.12);">

        <div class="flex items-center justify-between px-3 h-[60px] border-b border-gray-100">
            <a href="" class="flex items-center gap-2 no-underline">
                <svg width="20" height="25" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 0L0 16H9L8 28L22 12H13L13 0Z" fill="url(#acc-drawer-logo-grad)" />
                    <defs>
                        <linearGradient id="acc-drawer-logo-grad" x1="0" y1="0" x2="22" y2="28" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#f3de58" />
                            <stop offset="100%" stop-color="#fda803" />
                        </linearGradient>
                    </defs>
                </svg>
                <span style="font-family:'Lexend',sans-serif;" class="font-bold text-[15px] tracking-widest text-gray-900 uppercase">
                    PHAN HIEU KY
                </span>
            </a>
            <button id="acc-mobile-drawer-close"
                class="w-8 h-8 flex items-center justify-center text-gray-500 hover:bg-gray-100 rounded-lg transition-colors cursor-pointer focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="flex items-center gap-3 px-3 py-4 border-b border-gray-100">
            <div class="w-11 h-11 rounded-full overflow-hidden shrink-0 bg-gray-100 border border-gray-200">
                <img src="<?php echo esc_url($avatar); ?>" alt="avatar" class="w-full h-full object-cover">
            </div>
            <div class="flex-1 overflow-hidden">
                <p class="text-gray-900 font-semibold text-sm leading-tight truncate">Phan Hieu Ky</p>
                <p class="text-gray-400 text-xs mt-0.5 truncate">@gmail.com</p>
            </div>
            <a href=""
                class="shrink-0 w-8 h-8 flex items-center justify-center text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4" />
                    <polyline stroke-linecap="round" stroke-linejoin="round" points="16 17 21 12 16 7" />
                    <line stroke-linecap="round" stroke-linejoin="round" x1="21" y1="12" x2="9" y2="12" />
                </svg>
            </a>
        </div>

        <!-- <ul class="py-1">
            <li>
                <a href="#" class="flex items-center justify-between px-3 py-3.5 text-gray-800 text-[15px] hover:bg-gray-50 transition-colors duration-150">
                    Khóa Học Của Tôi
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between px-3 py-3.5 text-gray-800 text-[15px] hover:bg-gray-50 transition-colors duration-150">
                    <span>Khóa học yêu thích</span>
                    <span class="inline-flex items-center justify-center min-w-[20px] h-5 px-1.5 text-[11px] font-bold bg-violet-600 text-white rounded-full">0</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-3 py-3.5 text-gray-800 text-[15px] hover:bg-gray-50 transition-colors duration-150">
                    Hồ sơ của tôi
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-3 py-3.5 text-gray-800 text-[15px] hover:bg-gray-50 transition-colors duration-150">
                    Tin nhắn
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-3 py-3.5 text-gray-800 text-[15px] hover:bg-gray-50 transition-colors duration-150">
                    Lịch sử mua hàng
                </a>
            </li>
        </ul> -->

        <div class="h-px bg-gray-200 mx-5 my-1"></div>

        <!-- <ul class="py-1">
            <li>
                <a href="" class="flex items-center px-3 py-3.5 text-gray-800 text-[15px] hover:bg-gray-50 transition-colors duration-150">
                    Nhà
                </a>
            </li>
            <li>
                <button id="acc-nav-courses-toggle"
                    class="w-full flex items-center justify-between px-3 py-3.5 text-gray-800 text-[15px] hover:bg-gray-50 transition-colors duration-150 focus:outline-none cursor-pointer">
                    <span>Khóa học</span>
                    <svg id="acc-nav-courses-chevron"
                        class="w-4 h-4 text-gray-400 transition-transform duration-200"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="acc-nav-courses-submenu" class="hidden bg-gray-50 border-t border-gray-100">
                    <li><a href="#" class="block px-8 py-3 text-gray-600 text-[14px] hover:text-gray-900 hover:bg-gray-100 transition-colors duration-150">Tất cả khóa học</a></li>
                    <li><a href="#" class="block px-8 py-3 text-gray-600 text-[14px] hover:text-gray-900 hover:bg-gray-100 transition-colors duration-150">Khóa học miễn phí</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="flex items-center px-3 py-3.5 text-gray-800 text-[15px] hover:bg-gray-50 transition-colors duration-150">
                    Học livestream
                </a>
            </li>
        </ul> -->

    </div>

    <div class="header-pad"></div>