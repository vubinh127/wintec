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
    <header class="header relative bg-black !py-4 xl:!py-[18px] top-0 left-0 w-full z-50 !border-0 !border-b lg:!border-b-0 border-solid border-[#fda803]">
        <div class="container mx-auto max-w-6xl !px-6 xl:!px-0">
            <div class="flex justify-between items-center gap-6 8">
                <div class="flex items-center lg:hidden">
                    <button id="mobile-menu-button" class="text-white hover:text-blue-100 focus:outline-none">
                        <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="opacity-0 invisible"></div>
                <?php wintech_menu('main-menu') ?>


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


                <!-- After login  -->
                
                <!-- <div class="relative hidden lg:block" id="user-dropdown-wrapper">
                    <button id="user-dropdown-trigger"
                        class="flex items-center gap-2 px-2 py-1.5 rounded-full border border-gray-600 bg-white hover:bg-white/5 transition-all duration-200 cursor-pointer group">
                        <span class="flex items-center justify-center w-7 h-7 rounded-full bg-gray-700 text-gray-300 shrink-0 overflow-hidden">
                            <img src="https://picsum.photos/200/300" alt="avatar" class="w-full h-full object-cover rounded-full">
                        </span>
                        <span class="text-black text-sm font-medium max-w-[200px] truncate">
                            Vubinhpro
                        </span>
                        <svg id="user-dropdown-chevron" class="w-4 h-4 text-gray-400 transition-transform duration-200 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="user-dropdown-menu" class="hidden absolute right-0 top-[calc(100%+10px)] w-64 bg-white rounded-xl shadow-2xl border border-gray-100 overflow-hidden z-[999]">

                        <div class="flex items-center gap-3 px-4 pt-4 pb-3">
                            <div class="w-12 h-12 rounded-full overflow-hidden shrink-0 bg-gray-200">
                                <img src="https://picsum.photos/200/300" alt="avatar" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="text-gray-900 font-semibold text-sm leading-tight">
                                    Vubinhpro
                                </p>
                                <p class="text-gray-500 text-xs mt-0.5 truncate max-w-[160px]">
                                    vubinhpro@gmail.com
                                </p>
                                <span class="inline-block mt-1.5 text-[10px] font-semibold bg-gray-100 text-gray-600 px-2 py-0.5 rounded">
                                    FREE
                                </span>
                            </div>
                        </div>

                        <div class="h-px bg-gray-100 mx-0"></div>

                        <ul class="py-1.5">
                            <li>
                                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 text-sm hover:bg-gray-50 transition-colors duration-150">
                                    <svg class="w-4 h-4 shrink-0 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                    Khóa Học Của Tôi
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 text-sm hover:bg-gray-50 transition-colors duration-150">
                                    <svg class="w-4 h-4 shrink-0 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    Hồ sơ của tôi
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 text-sm hover:bg-gray-50 transition-colors duration-150">
                                    <svg class="w-4 h-4 shrink-0 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Đối tác liên kết
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 text-sm hover:bg-gray-50 transition-colors duration-150">
                                    <svg class="w-4 h-4 shrink-0 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    Khóa học yêu thích
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 text-sm hover:bg-gray-50 transition-colors duration-150">
                                    <svg class="w-4 h-4 shrink-0 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                    Messages
                                </a>
                            </li>
                        </ul>

                        <div class="h-px bg-gray-100"></div>

                        <div class="py-1.5">
                            <a href=""
                                class="flex items-center gap-3 px-4 py-2.5 text-red-500 text-sm hover:bg-red-50 transition-colors duration-150">
                                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Đăng xuất
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>


            <div id="mobile-menu" class="absolute top-full left-0 w-fit hidden lg:hidden !py-4 bg-black !px-8">
                <div class="flex justify-end -mr-4">
                    <button id="mobile-menu-popup-close-btn" class="size-4 popup-close-btn bg-center bg-no-repeat"></button>
                </div>
<!-- 
                <div class="">
                    <div class="flex items-center gap-3 pb-3">
                        <div class="w-10 h-10 rounded-full overflow-hidden shrink-0 bg-gray-200">
                            <img src="https://picsum.photos/200/300" alt="avatar" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="text-white font-semibold text-sm leading-tight">
                                Vubinhpro
                            </p>
                            <p class="text-white text-xs mt-0.5 truncate max-w-[160px]">
                                vubinhpro@gmail.com
                            </p>
                        </div>
                    </div>

                    <div class="h-px bg-gray-100 mx-0"></div>

                    <ul class="py-1.5">
                        <li>
                            <a href="#" class="flex items-center gap-3 py-2.5 text-white text-sm hover:bg-gray-50 transition-colors duration-150">
                                Khóa Học Của Tôi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 py-2.5 text-white text-sm hover:bg-gray-50 transition-colors duration-150">
                                Hồ sơ của tôi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 py-2.5 text-white text-sm hover:bg-gray-50 transition-colors duration-150">
                                Khóa học yêu thích
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 py-2.5 text-white text-sm hover:bg-gray-50 transition-colors duration-150">
                                Lịch sử mua hàng
                            </a>
                        </li>
                    </ul>

                    <div class="h-px bg-gray-100"></div>

                    <div class="py-1.5">
                        <a href=""
                            class="flex items-center gap-3 py-2.5 text-red-500 text-sm hover:bg-red-50 transition-colors duration-150">
                            Đăng xuất
                        </a>
                    </div>
                </div> -->

                <div class="w-full border-b border-gray-600 pb-3 mb-3"></div>


                <div class="flex flex-col md:flex-row justify-center flex-wrap space-y-2 md:space-y-1 text-white text-base font-medium">
                    <?php wintech_menu('main-menu') ?>
                </div>
            </div>
        </div>
    </header>

    <div class="header-pad"></div>
