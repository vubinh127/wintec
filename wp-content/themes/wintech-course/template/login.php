<?php

/**
 * Template Name: Login
 */
if (is_user_logged_in()) {
    wp_redirect(home_url('/courses'));
    exit;
}

$errors = [
    'email'    => '',
    'password' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_nonce'])) {

    if (!wp_verify_nonce($_POST['login_nonce'], 'custom_login')) {
        $errors['email'] = 'Yêu cầu không hợp lệ.';
    } else {
        $email    = sanitize_email($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $remember = !empty($_POST['remember']);

        if (empty($email) || !is_email($email)) {
            $errors['email'] = 'Email không hợp lệ.';
        }

        if (empty($password)) {
            $errors['password'] = 'Vui lòng nhập mật khẩu.';
        }

        if (empty(array_filter($errors))) {
            $user = wp_authenticate($email, $password);

            if (is_wp_error($user)) {
                // Không nói rõ sai email hay sai password → bảo mật hơn
                $errors['email'] = 'Email hoặc mật khẩu không đúng.';
            } else {
                // Kiểm tra có phải hoc_vien không
                $allowed = ['hoc_vien', 'hoc_vien_vip', 'administrator'];
                if (empty(array_intersect($allowed, $user->roles))) {
                    $errors['email'] = 'Tài khoản chưa được cấp quyền học viên.';
                } else {
                    wp_set_current_user($user->ID);
                    wp_set_auth_cookie($user->ID, $remember);

                    // Admin redirect về wp-admin, học viên về my-courses
                    if (in_array('administrator', $user->roles)) {
                        wp_redirect(admin_url());
                    } else {
                        wp_redirect(home_url('/courses'));
                    }
                    exit;
                }
            }
        }
    }
}
get_header('account');
?>
<section class="auth-section d-flex align-items-center py-5">
    <div class="container">
        <div class="row align-items-center justify-content-center g-5">

            <div class="col-lg-6 d-none d-lg-flex justify-content-center auth-illustration">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/login.gif"
                    alt="Đăng nhập minh họa">
            </div>

            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4">
                <h1 class="fw-800 fs-2 mb-1" style="font-weight:800;">Đăng Nhập</h1>
                <p class="text-secondary mb-4" style="font-size:.88rem;">
                    Xem sự phát triển của bạn và nhận hỗ trợ tư vấn!
                </p>

                <form method="POST" novalidate>
                    <?php wp_nonce_field('custom_login', 'login_nonce'); ?>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="login-email" class="form-label">Email</label>
                        <input type="email"
                            class="form-control <?php echo $errors['email'] ? 'is-invalid' : ''; ?>"
                            id="login-email" name="email"
                            placeholder="Email của bạn" autocomplete="email"
                            value="<?php echo esc_attr($_POST['email'] ?? ''); ?>">
                        <?php if ($errors['email']) : ?>
                            <div class="invalid-feedback"><?php echo esc_html($errors['email']); ?></div>
                        <?php endif; ?>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="login-password" class="form-label">Mật khẩu</label>
                        <input type="password"
                            class="form-control <?php echo $errors['password'] ? 'is-invalid' : ''; ?>"
                            id="login-password" name="password"
                            placeholder="*********" autocomplete="current-password">
                        <?php if ($errors['password']) : ?>
                            <div class="invalid-feedback"><?php echo esc_html($errors['password']); ?></div>
                        <?php endif; ?>
                    </div>

                    <!-- Remember + Forgot -->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" id="login-remember" name="remember"
                                <?php echo !empty($_POST['remember']) ? 'checked' : 'checked'; ?>
                                style="accent-color:#f2994a;">
                            <label class="form-check-label" for="login-remember" style="font-size:.875rem;">
                                Nhớ tôi
                            </label>
                        </div>
                        <a href="<?php echo home_url('/forgot-password'); ?>" class="forgot-link">Quên mật khẩu?</a>
                    </div>

                    <button type="submit" class="btn-submit mb-3">Đăng Nhập</button>

                    <p class="switch-text">Chưa có tài khoản?
                        <a href="<?php echo home_url('/register'); ?>">Tạo tài khoản</a>
                    </p>
                </form>
            </div>

        </div>
    </div>
</section>
<?php
get_footer();
