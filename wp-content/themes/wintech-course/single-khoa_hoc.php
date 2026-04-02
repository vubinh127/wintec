<?php

/**
 * Template Name: Course Detail
 */

get_header('account');

// Check login
$is_logged_in = is_user_logged_in();
$current_user = wp_get_current_user();

$khoa_hoc_vip = get_field('khoa_hoc_vip');

// Check permission
$has_permission = false;

if ($is_logged_in) {
    $roles = $current_user->roles;

    // Admin luôn được vào
    if (in_array('administrator', $roles)) {
        $has_permission = true;
    }

    // VIP luôn được vào tất cả
    elseif (in_array('hoc_vien_vip', $roles)) {
        $has_permission = true;
    }

    // User thường
    elseif (in_array('hoc_vien', $roles)) {

        // Chỉ bị chặn nếu là khóa VIP
        if (!$khoa_hoc_vip) {
            $has_permission = true;
        }
    }
}
?>

<main class="course-detail-main">

    <?php if ($is_logged_in && $has_permission): ?>

        <!-- ✅ VIEW: ĐƯỢC XEM -->
        <section id="view-logged-in" class="course-lesson">
            <div class="container mx-auto max-w-6xl !px-4 xl:!px-0 !py-10 lg:!py-16">

                <div class="lesson-header" data-x-aos="fade-up">
                    <span class="lesson-badge">Bài học</span>
                    <h1 class="lesson-title"><?php the_title(); ?></h1>
                </div>
                <?php
                $link_khoa_hoc = get_field('link_khoa_hoc');

                if (!empty($link_khoa_hoc)) { ?>
                    <div class="lesson-video-wrapper" data-x-aos="fade-up" data-aos-delay="100">
                        <div class="lesson-video-inner">
                            <iframe
                                src="https://drive.google.com/file/d/1WMeV7FjELiDayTJtHTgTe5RMLN5UiDGT/preview"
                                allow="autoplay"
                                allowfullscreen
                                frameborder="0">
                            </iframe>
                        </div>
                    </div>

                <?php } ?>

                <div class="lesson-entry-content" data-x-aos="fade-up" data-aos-delay="200">
                    <?php the_content(); ?>
                </div>

            </div>
        </section>

    <?php else: ?>

        <!-- ❌ VIEW: KHÔNG CÓ QUYỀN -->
        <section id="view-not-logged-in" class="course-locked">
            <div class="locked-overlay">
                <div class="locked-card" data-x-aos="zoom-in">

                    <div class="locked-icon-wrapper">
                        <i class="bi bi-lock-fill locked-icon"></i>
                    </div>

                    <h1 class="locked-title">Nội dung bị khoá</h1>

                    <p class="locked-desc">
                        <?php if (!$is_logged_in): ?>
                            Bạn chưa đăng nhập.<br>
                            Vui lòng đăng nhập để tiếp tục học tập.
                        <?php else: ?>
                            Bạn không có quyền truy cập khóa học này.
                        <?php endif; ?>
                    </p>

                    <?php if (!$is_logged_in): ?>
                        <a href="<?php echo home_url('/login'); ?>" class="locked-login-btn">
                            <i class="bi bi-box-arrow-in-right"></i> Đăng nhập ngay
                        </a>
                    <?php endif; ?>

                    <?php if ($is_logged_in && !$has_permission): ?>
                        <p class="locked-hint">
                            Tài khoản của bạn chưa được cấp quyền học.
                        </p>
                    <?php endif; ?>

                </div>
            </div>
        </section>

    <?php endif; ?>

</main>

<?php get_footer(); ?>