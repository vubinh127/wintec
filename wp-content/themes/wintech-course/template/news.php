<?php
/**
 * Template Name: Trang Tin Tức
 */
get_header('account');
?>

    <section class="py-12 md:py-16 bg-[#f8f8f8]">
        <div class="container mx-auto max-w-6xl !px-6 xl:!px-0">

            <div class="text-center mb-10">
                <h1 class="text-3xl md:text-4xl font-bold text-black mb-3">
                    Tin Tức
                </h1>
                <p class="text-base md:text-lg text-[#666]">
                    Cập nhật những bài viết mới nhất
                </p>
            </div>

            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $keyword = isset($_GET['keyword']) ? sanitize_text_field($_GET['keyword']) : '';

            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 9,
                'post_status'    => 'publish',
                'paged'          => $paged,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            // Nếu có search keyword thì thêm vào query
            if (!empty($keyword)) {
                $args['s'] = $keyword;
            }

            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
                <div class="flex flex-wrap gap-6">
                    <?php while ($query->have_posts()) : $query->the_post();

                        $title     = get_the_title();
                        $link      = get_permalink();
                        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        $excerpt   = get_the_excerpt();
                        $date      = get_the_date('d/m/Y');

                        if (!$thumbnail) {
                            $thumbnail = get_stylesheet_directory_uri() . '/assets/images/default-news.jpg';
                        }
                        ?>
                        <a class="flex flex-col w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] cursor-pointer rounded-[20px] overflow-hidden bg-white shadow-sm hover:shadow-md transition-all duration-300"
                           href="<?php echo esc_url($link); ?>"
                           data-aos="fade-up">

                            <img src="<?php echo esc_url($thumbnail); ?>"
                                 alt="<?php echo esc_attr($title); ?>"
                                 class="w-full h-[252px] object-cover object-center">

                            <div class="flex-auto bg-white pt-4 px-6 pb-7">
                                <p class="text-sm leading-[1.6] flex items-center gap-x-px !mb-2 text-[#757575]">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 -960 960 960" width="100%" preserveAspectRatio="none" class="size-[22px]" fill="rgb(117, 117, 117)">
                                        <path d="M592-302 450-444v-196h60v171l124 124-42 43ZM450-730v-90h60v90h-60Zm280 280v-60h90v60h-90ZM450-140v-90h60v90h-60ZM140-450v-60h90v60h-90ZM480.27-80q-82.74 0-155.5-31.5Q252-143 197.5-197.5t-86-127.34Q80-397.68 80-480.5t31.5-155.66Q143-709 197.5-763t127.34-85.5Q397.68-880 480.5-880t155.66 31.5Q709-817 763-763t85.5 127Q880-563 880-480.27q0 82.74-31.5 155.5Q817-252 763-197.68q-54 54.31-127 86Q563-80 480.27-80Zm.23-60Q622-140 721-239.5t99-241Q820-622 721.19-721T480-820q-141 0-240.5 98.81T140-480q0 141 99.5 240.5t241 99.5Zm-.5-340Z"></path>
                                    </svg>
                                    <span><?php echo esc_html($date); ?></span>
                                </p>

                                <h3 class="text-lg leading-[1.4] font-semibold text-black mb-3 text-truncate-line-2">
                                    <?php echo esc_html($title); ?>
                                </h3>

                                <p class="text-base leading-[1.5] text-black mb-4 text-truncate-line-3">
                                    <?php echo esc_html(wp_trim_words($excerpt, 22, '...')); ?>
                                </p>

                                <span class="text-base leading-[1.6] block w-fit ml-auto text-[#fdb814] italic border-0 p-0 underline transition-all duration-200 hover:scale-110 hover:text-black">
                                Đọc chi tiết
                            </span>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>

                <!-- Custom Pagination -->
                <div class="mt-10">
                    <?php if ($query->max_num_pages > 1) : ?>
                        <nav class="courses-pagination" aria-label="Phân trang tin tức">
                            <ul class="pagination justify-content-center mb-0">

                                <!-- Prev -->
                                <li class="page-item <?php echo $paged <= 1 ? 'disabled' : ''; ?>">
                                    <a class="page-link"
                                       href="<?php
                                       echo $paged > 1
                                           ? esc_url(
                                               $keyword
                                                   ? add_query_arg('keyword', $keyword, get_pagenum_link($paged - 1))
                                                   : get_pagenum_link($paged - 1)
                                           )
                                           : '#'; ?>"
                                        <?php echo $paged <= 1 ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
                                        <i class="bi bi-chevron-left"></i>
                                    </a>
                                </li>

                                <!-- Numbers -->
                                <?php for ($i = 1; $i <= $query->max_num_pages; $i++) : ?>
                                    <li class="page-item <?php echo $i === (int)$paged ? 'active' : ''; ?>"
                                        <?php echo $i === (int)$paged ? 'aria-current="page"' : ''; ?>>

                                        <a class="page-link"
                                           href="<?php
                                           echo esc_url(
                                               $keyword
                                                   ? add_query_arg('keyword', $keyword, get_pagenum_link($i))
                                                   : get_pagenum_link($i)
                                           ); ?>">
                                            <?php echo $i; ?>
                                        </a>

                                    </li>
                                <?php endfor; ?>

                                <!-- Next -->
                                <li class="page-item <?php echo $paged >= $query->max_num_pages ? 'disabled' : ''; ?>">
                                    <a class="page-link"
                                       href="<?php
                                       echo $paged < $query->max_num_pages
                                           ? esc_url(
                                               $keyword
                                                   ? add_query_arg('keyword', $keyword, get_pagenum_link($paged + 1))
                                                   : get_pagenum_link($paged + 1)
                                           )
                                           : '#'; ?>"
                                        <?php echo $paged >= $query->max_num_pages ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                    <?php endif; ?>
                </div>

            <?php else : ?>
                <div class="text-center py-16">
                    <p class="text-lg text-gray-500">Chưa có bài viết nào.</p>
                </div>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
        </div>
    </section>

<?php get_footer(); ?>