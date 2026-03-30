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
    <header
        class="header relative bg-black !py-4 xl:!py-[18px] top-0 left-0 w-full z-50 !border-0 !border-b lg:!border-b-0 border-solid border-[#fda803]">
        <div class="container mx-auto max-w-6xl !px-6 xl:!px-0">
            <div class="flex justify-between items-center gap-6 8">
                <!-- Mobile Menu Button -->
                <div class="flex items-center lg:hidden">
                    <button id="mobile-menu-button" class="text-white hover:text-blue-100 focus:outline-none">
                        <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="opacity-0 invisible"></div>
                <!-- Navigation Links -->
                <?php wintech_menu('main-menu') ?>

                <!-- <nav class="main-nav">
                    <ul class="main-nav__menu">
                        <li class="main-nav__item main-nav__item--current">
                            <a href="/gioi-thieu" class="main-nav__link">Giới thiệu</a>
                        </li>
                        <li class="main-nav__item main-nav__item--has-children">
                            <a href="#khoa-hoc" class="main-nav__link">Khóa học</a>
                            <ul class="main-nav__submenu">
                                <li class="main-nav__item">
                                    <a href="https://ufoclass.com/course-category/tieng-han/"
                                        class="main-nav__link">Tiếng
                                        Hàn</a>
                                </li>
                                <li class="main-nav__item">
                                    <a href="https://ufoclass.com/course-category/tieng-anh/"
                                        class="main-nav__link">Tiếng
                                        Anh</a>
                                </li>
                            </ul>
                        </li>
                        <li class="main-nav__item">
                            <a href="#chuyen-gia" class="main-nav__link">Chuyên gia</a>
                        </li>
                        <li class="main-nav__item">
                            <a href="/tin-tuc" class="main-nav__link">Tin Tức</a>
                        </li>
                        <li class="main-nav__item">
                            <a href="/blogs" class="main-nav__link">Blogs</a>
                        </li>
                        <li class="main-nav__item">
                            <a href="#danh-gia" class="main-nav__link">Đánh giá</a>
                        </li>
                    </ul>
                </nav> -->

                <div class="w-[135px] h-[35px] text-sm font-normal">
                    <a id="open-auth-modal"
                        class="animate-pulse-small flex items-center justify-center w-full h-full bg-gradient-to-r from-[#f3de58] to-[#fda803] text-black rounded hover:from-[#faf4b0] hover:to-[#faf4b0] transition-colors cursor-pointer">
                        ĐĂNG NHẬP
                    </a>
                </div>

            </div>

            <div id="mobile-menu" class="absolute top-full left-0 w-fit hidden lg:hidden !py-4 bg-black !px-8">
                <div class="flex justify-end -mr-4">
                    <button id="mobile-menu-popup-close-btn"
                        class="size-4 popup-close-btn bg-center bg-no-repeat"></button>
                </div>
                <div
                    class="flex flex-col md:flex-row justify-center flex-wrap space-y-2 md:space-y-1 text-white text-base font-medium">
                    <nav class="main-nav">
                        <ul class="main-nav__menu">
                            <li class="main-nav__item main-nav__item--current">
                                <a href="https://ufoclass.com/" class="main-nav__link">Trang chủ</a>
                            </li>
                            <li class="main-nav__item">
                                <a href="https://ufoclass.com/gioi-thieu/" class="main-nav__link">Giới Thiệu</a>
                            </li>
                            <li class="main-nav__item main-nav__item--has-children">
                                <a href="#" class="main-nav__link">Khóa học</a>
                                <ul class="main-nav__submenu">
                                    <li class="main-nav__item">
                                        <a href="https://ufoclass.com/course-category/tieng-han/"
                                            class="main-nav__link">Tiếng
                                            Hàn</a>
                                    </li>
                                    <li class="main-nav__item">
                                        <a href="https://ufoclass.com/course-category/tieng-anh/"
                                            class="main-nav__link">Tiếng
                                            Anh</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="main-nav__item">
                                <a href="https://ufoclass.com/category/tin-tuc/" class="main-nav__link">Tin Tức</a>
                            </li>
                            <li class="main-nav__item">
                                <a href="https://ufoclass.com/document-category/tai-lieu/" class="main-nav__link">Tài
                                    Liệu</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="header-pad"></div>
