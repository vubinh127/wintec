<?php

/**
 * Template Name: Courses
 */
get_header('account');

// Current page
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

// Search keyword
$keyword = isset($_GET['keyword']) ? sanitize_text_field($_GET['keyword']) : '';


// Query
$query = new WP_Query([
    'post_type'      => 'khoa_hoc',
    'post_status'    => 'publish',
    'posts_per_page' => 6,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
    's'              => $keyword,
]);
?>

<main class="courses-list-main">
    <section class="courses-list-section">

        <!-- Banner -->
        <div class="banner">
            <div class="container">
                <div class="banner-content">
                    <div class="text">
                        <h1>Tất cả khóa học</h1>
                        <p>Khám phá hàng nghìn khóa học chất lượng cao</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search -->
        <div class="search-bar">
            <div class="container mx-auto max-w-6xl !px-4 xl:!px-0 search-wrap">
                <form method="GET" action="<?php echo esc_url(get_permalink()); ?>" class="contents">
                    <div class="search-input">
                        <input type="text" name="keyword"
                            placeholder="Tìm kiếm khóa học..."
                            value="<?php echo esc_attr($_GET['keyword'] ?? ''); ?>">
                    </div>
                    <button type="submit" class="btn-search">🔍 Tìm kiếm</button>
                </form>
            </div>
        </div>

        <div class="container mx-auto max-w-6xl !px-4 xl:!px-0 py-12">

            <!-- Search result info -->
            <?php if ($keyword) : ?>
                <p class="text-gray-500 text-sm mb-6">
                    Kết quả tìm kiếm cho: <strong><?php echo esc_html($keyword); ?></strong>
                    — <?php echo $query->found_posts; ?> khóa học
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="text-red-400 ml-2">✕ Xóa</a>
                </p>
            <?php endif; ?>

            <!-- Grid -->
            <div class="course-grid">
                <?php if ($query->have_posts()) : ?>
                    <?php $delay = 0; ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                        <?php
                        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large')
                            ?: get_stylesheet_directory_uri() . '/assets/images/placeholder-course.png';
                        ?>

                        <article class="course-card shadow-lg hover:shadow-xl transition-shadow duration-300 p-3"
                            data-aos="fade-up"
                            <?php echo $delay ? "data-aos-delay=\"{$delay}\"" : ''; ?>>

                            <a href="<?php the_permalink(); ?>" class="course-card__thumb-link">

                                <div class="course-card__thumb">
                                    <img src="<?php echo esc_url($thumbnail); ?>"
                                        alt="<?php the_title_attribute(); ?>"
                                        onerror="this.src='<?php echo esc_js(get_stylesheet_directory_uri()); ?>/assets/images/placeholder-course.png'">
                                </div>

                                <div class="course-card__body py-3">
                                    <div class="course-card__title-top">
                                        <?php the_title(); ?>
                                    </div>

                                    <div class="course-card__btn">
                                        Tìm hiểu thêm
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>

                            </a>

<!--                            Nếu không phải vip thì dùng đoạn dưới  -->

<!--                            <div class="course-card__lock-overlay">-->
<!--                                <div class="course-card__lock-box">-->
<!--                                    <div class="course-card__lock-icon">-->
<!--                                        <i class="fas fa-lock"></i>-->
<!--                                    </div>-->
<!--                                    <div class="course-card__lock-title">Chỉ dành cho thành viên</div>-->
<!--                                    <div class="course-card__lock-desc">-->
<!--                                        Đăng nhập tài khoản phù hợp để truy cập nội dung này-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        </article>

                        <?php $delay = ($delay + 100) % 400; ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>

                <?php else : ?>
                    <p class="text-gray-500 col-span-3 text-center py-12">
                        <?php echo $keyword ? 'Không tìm thấy khóa học nào phù hợp.' : 'Chưa có khóa học nào.'; ?>
                    </p>
                <?php endif; ?>
            </div>

            <?php if ($query->max_num_pages > 1) : ?>
                <nav class="courses-pagination" aria-label="Phân trang khóa học">
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
    </section>
</main>

<?php get_footer(); ?>