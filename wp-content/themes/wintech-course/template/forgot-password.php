<?php
/**
 * Template Name: Forgot Password
 */

if (is_user_logged_in()) {
    wp_safe_redirect(home_url('/courses'));
    exit;
}

$error   = '';
$success = isset($_GET['sent']) && $_GET['sent'] === '1';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['forgot_nonce'])) {

    if (!wp_verify_nonce($_POST['forgot_nonce'], 'custom_forgot_password')) {
        $error = 'Yêu cầu không hợp lệ.';
    } else {
        $email = sanitize_email($_POST['email'] ?? '');

        if (empty($email) || !is_email($email)) {
            $error = 'Email không hợp lệ.';
        } else {
            $user = get_user_by('email', $email);

            if ($user) {
                $allowed = ['hoc_vien', 'hoc_vien_vip', 'administrator'];
                if (!empty(array_intersect($allowed, $user->roles))) {
                    $reset_key = get_password_reset_key($user);

                    if (!is_wp_error($reset_key)) {
                        $reset_url = add_query_arg([
                            'key'   => $reset_key,
                            'login' => rawurlencode($user->user_login),
                        ], home_url('/reset-password'));

                        $subject = 'Đặt lại mật khẩu của bạn';
                        $message = "Xin chào {$user->display_name},\n\n"
                                 . "Nhấn vào liên kết bên dưới để đặt lại mật khẩu (hết hạn sau 24 giờ):\n\n"
                                 . $reset_url . "\n\n"
                                 . "Nếu bạn không yêu cầu điều này, hãy bỏ qua email này.\n\n"
                                 . "Trân trọng,\n" . get_bloginfo('name');

                        $headers = ['Content-Type: text/plain; charset=UTF-8'];
                        wp_mail($user->user_email, $subject, $message, $headers);
                    }
                }
            }

            // PRG: luôn redirect dù email có tồn tại hay không
            wp_safe_redirect(add_query_arg('sent', '1', home_url('/forgot-password')));
            exit;
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
                         alt="Quên mật khẩu minh họa">
                </div>

                <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4">
                    <h1 class="fw-800 fs-2 mb-1" style="font-weight:800;">Quên Mật Khẩu</h1>
                    <p class="text-secondary mb-4" style="font-size:.88rem;">
                        Nhập địa chỉ email tài khoản của bạn.
                    </p>

                    <?php if ($success) : ?>
                        <div class="alert alert-success alert-dismissible fade show d-flex align-items-start" role="alert">
                            <i class="fas fa-check-circle me-2 mt-1" style="color:#4caf50;font-size:18px;"></i>
                            <span>Nếu email tồn tại trong hệ thống, liên kết đặt lại mật khẩu đã được gửi. Vui lòng kiểm tra hộp thư (kể cả thư mục Spam).</span>
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
                                    aria-label="Close" style="font-size:12px;opacity:.7;"></button>
                        </div>
                        <script>
                            history.replaceState(null, '', '<?php echo esc_js(home_url('/forgot-password')); ?>');
                        </script>
                    <?php endif; ?>

                    <?php if ($error) : ?>
                        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-start" role="alert">
                            <i class="fas fa-exclamation-circle me-2 mt-1" style="font-size:18px;"></i>
                            <span><?php echo esc_html($error); ?></span>
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
                                    aria-label="Close" style="font-size:12px;opacity:.7;"></button>
                        </div>
                    <?php endif; ?>

                    <form method="POST" novalidate>
                        <?php wp_nonce_field('custom_forgot_password', 'forgot_nonce'); ?>

                        <div class="mb-3">
                            <label for="forgot-email" class="form-label">Email</label>
                            <input type="email"
                                    class="form-control <?php echo $error ? 'is-invalid' : ''; ?>"
                                    id="forgot-email" name="email"
                                    placeholder="Email của bạn" autocomplete="email"
                                    value="<?php echo esc_attr($_POST['email'] ?? ''); ?>">
                        </div>

                        <button type="submit" class="btn-submit mb-3">Gửi Yêu Cầu</button>

                        <p class="switch-text">
                            Nhớ mật khẩu rồi? <a href="<?php echo home_url('/login'); ?>">Đăng nhập</a>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>