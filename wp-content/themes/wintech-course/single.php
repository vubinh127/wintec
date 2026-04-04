<?php get_header('account'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();

    $title     = get_the_title();
    $date      = get_the_date('d/m/Y');
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');

    if (!$thumbnail) {
        $thumbnail = get_stylesheet_directory_uri() . '/assets/images/default-news.jpg';
    }
    ?>


    <div class="breadcrumb-single-page">
        <div class="container mx-auto max-w-6xl !px-6 xl:!px-0 h-full flex flex-col justify-between py-6">
            <nav aria-label="Breadcrumb">
                <ol class="flex flex-wrap items-center gap-x-2 gap-y-1 text-sm md:text-[15px] leading-[1.6] text-[#666]">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>"
                           class="hover:text-[#fdb814] transition-colors duration-200">
                            Trang chủ
                        </a>
                    </li>
                    <li class="text-[#bbb]">/</li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/tin-tuc')); ?>"
                           class="hover:text-[#fdb814] transition-colors duration-200">
                            Tin tức
                        </a>
                    </li>
                    <li class="text-[#bbb]">/</li>
                    <li class="text-black font-medium max-w-full md:max-w-[500px] truncate">
                        <?php the_title(); ?>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="pb-12 md:pb-16 single-content-section">
        <div class="container mx-auto max-w-6xl !px-6 xl:!px-0">
            <div class="bg-white rounded-[24px] overflow-hidden shadow-sm">
                <div class="px-4 md:px-10 py-8 md:py-10">
                    <h1 class="text-2xl md:text-4xl font-bold leading-[1.3] text-black mb-6">
                        <?php echo esc_html($title); ?>
                    </h1>

                    <p class="text-sm leading-[1.6] flex items-center gap-x-px text-[#757575] !mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 -960 960 960" width="100%" preserveAspectRatio="none" class="size-[22px]" fill="rgb(117, 117, 117)">
                            <path d="M592-302 450-444v-196h60v171l124 124-42 43ZM450-730v-90h60v90h-60Zm280 280v-60h90v60h-90ZM450-140v-90h60v90h-60ZM140-450v-60h90v60h-90ZM480.27-80q-82.74 0-155.5-31.5Q252-143 197.5-197.5t-86-127.34Q80-397.68 80-480.5t31.5-155.66Q143-709 197.5-763t127.34-85.5Q397.68-880 480.5-880t155.66 31.5Q709-817 763-763t85.5 127Q880-563 880-480.27q0 82.74-31.5 155.5Q817-252 763-197.68q-54 54.31-127 86Q563-80 480.27-80Zm.23-60Q622-140 721-239.5t99-241Q820-622 721.19-721T480-820q-141 0-240.5 98.81T140-480q0 141 99.5 240.5t241 99.5Zm-.5-340Z"></path>
                        </svg>
                        <span><?php echo esc_html($date); ?></span>
                    </p>


                    <img src="<?php echo esc_url($thumbnail); ?>"
                         alt="<?php echo esc_attr($title); ?>"
                         class="w-full mx-auto rounded-[16px]">


                    <div class="single-news-content text-[#222] leading-[1.8] text-base md:text-lg">
                        <?php the_content(); ?>
                    </div>

                </div>
            </div>
        </div>

        <?php
        $current_post_id = get_the_ID();

        $related_args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
            'post__not_in'   => array($current_post_id),
            'orderby'        => 'date',
            'order'          => 'DESC',
        );

        $related_query = new WP_Query($related_args);

        if ($related_query->have_posts()) :
            ?>
            <div class="max-w-6xl mx-auto mt-14">
                <h2 class="text-2xl md:text-3xl font-bold text-black mb-8 text-center">
                    Bài viết liên quan
                </h2>

                <div class="flex flex-wrap gap-6">
                    <?php while ($related_query->have_posts()) : $related_query->the_post();

                        $related_title     = get_the_title();
                        $related_link      = get_permalink();
                        $related_thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        $related_excerpt   = get_the_excerpt();
                        $related_date      = get_the_date('d/m/Y');

                        if (!$related_thumbnail) {
                            $related_thumbnail = get_stylesheet_directory_uri() . '/assets/images/default-news.jpg';
                        }
                        ?>
                        <a class="flex flex-col w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] cursor-pointer rounded-[20px] overflow-hidden bg-white shadow-sm hover:shadow-md transition-all duration-300"
                           href="<?php echo esc_url($related_link); ?>">

                            <img src="<?php echo esc_url($related_thumbnail); ?>"
                                 alt="<?php echo esc_attr($related_title); ?>"
                                 class="w-full h-[220px] object-cover object-center">

                            <div class="flex-auto bg-white pt-4 px-6 pb-7">
                                <p class="text-sm leading-[1.6] text-[#757575] mb-2">
                                    <?php echo esc_html($related_date); ?>
                                </p>

                                <h3 class="text-lg leading-[1.4] font-semibold text-black mb-3 text-truncate-line-2">
                                    <?php echo esc_html($related_title); ?>
                                </h3>

                                <p class="text-base leading-[1.5] text-black mb-4 text-truncate-line-3">
                                    <?php echo esc_html(wp_trim_words($related_excerpt, 18, '...')); ?>
                                </p>

                                <span class="text-base leading-[1.6] block w-fit ml-auto text-[#fdb814] italic underline transition-all duration-200 hover:scale-110 hover:text-black">
                            Đọc chi tiết
                        </span>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php
        endif;
        wp_reset_postdata();
        ?>
    </section>

<?php
endwhile;
endif;
?>

<?php get_footer(); ?>