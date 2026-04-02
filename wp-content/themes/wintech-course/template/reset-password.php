<?php
/**
 * Template Name: Reset Password
 */

$error = '';
$success = false;

// Lấy key & login từ URL
$key   = $_GET['key'] ?? '';
$login = $_GET['login'] ?? '';

// Validate key
$user = check_password_reset_key($key, $login);

if (is_wp_error($user)) {
    $error = 'Link không hợp lệ hoặc đã hết hạn.';
}

// Handle submit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset_nonce'])) {

    if (!wp_verify_nonce($_POST['reset_nonce'], 'custom_reset_password')) {
        $error = 'Yêu cầu không hợp lệ.';
    } else {

        $pass1 = $_POST['password'] ?? '';
        $pass2 = $_POST['confirm_password'] ?? '';

        if (empty($pass1) || empty($pass2)) {
            $error = 'Vui lòng nhập đầy đủ mật khẩu.';
        } elseif ($pass1 !== $pass2) {
            $error = 'Mật khẩu không khớp.';
        } elseif (strlen($pass1) < 8) {
            $error = 'Mật khẩu phải ít nhất 8 ký tự.';
        } elseif (!is_wp_error($user)) {

            // Reset password
            reset_password($user, $pass1);

            $success = true;
        }
    }
}

get_header('account');
?>

<main>
    <section class="auth-section d-flex align-items-center py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center g-5">

                <div class="col-lg-6 d-none d-lg-flex justify-content-center auth-illustration">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/login.gif"
                         alt="Reset password">
                </div>

                <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4">

                    <h1 class="fw-800 fs-2 mb-1">Đặt lại mật khẩu</h1>
                    <p class="text-secondary mb-4" style="font-size:.88rem;">
                        Nhập mật khẩu mới của bạn.
                    </p>

                    <!-- SUCCESS -->
                    <?php if ($success) : ?>
                        <div class="alert alert-success">
                            Đổi mật khẩu thành công.
                            <a href="<?php echo home_url('/login'); ?>">Đăng nhập ngay</a>
                        </div>
                    <?php endif; ?>

                    <!-- ERROR -->
                    <?php if ($error) : ?>
                        <div class="alert alert-danger">
                            <?php echo esc_html($error); ?>
                        </div>
                    <?php endif; ?>

                    <!-- FORM -->
                    <?php if (!$success && !is_wp_error($user)) : ?>

                        <form method="POST">

                            <?php wp_nonce_field('custom_reset_password', 'reset_nonce'); ?>

                            <div class="mb-3">
                                <label class="form-label">Mật khẩu mới</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" name="confirm_password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn-submit mb-3">
                                Đặt lại mật khẩu
                            </button>

                        </form>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>