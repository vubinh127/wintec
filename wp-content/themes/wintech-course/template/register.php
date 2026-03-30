<?php

/**
 * Template Name: Register
 */
if (is_user_logged_in()) {
    wp_redirect(home_url('/courses'));
    exit;
}

$errors = [
    'email'    => '',
    'password' => '',
    'phone'    => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_nonce'])) {

    if (!wp_verify_nonce($_POST['register_nonce'], 'custom_register')) {
        $errors['email'] = 'Yêu cầu không hợp lệ.';
    } else {
        $email    = sanitize_email($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $phone    = sanitize_text_field($_POST['phone'] ?? '');

        if (empty($email) || !is_email($email)) {
            $errors['email'] = 'Email không hợp lệ.';
        } elseif (email_exists($email)) {
            $errors['email'] = 'Email này đã được đăng ký.';
        }

        if (strlen($password) < 8) {
            $errors['password'] = 'Mật khẩu phải có ít nhất 8 ký tự.';
        }

        if (!empty($phone) && !preg_match('/^[0-9]{10}$/', $phone)) {
            $errors['phone'] = 'Số điện thoại không hợp lệ (cần đúng 10 chữ số).';
        }

        $has_error = array_filter($errors);

        if (empty($has_error)) {
            $user_id = wp_create_user($email, $password, $email);

            if (is_wp_error($user_id)) {
                $errors['email'] = 'Không thể tạo tài khoản: ' . $user_id->get_error_message();
            } else {
                $user = new WP_User($user_id);
                $user->set_role('hoc_vien');

                if (!empty($phone)) {
                    update_user_meta($user_id, 'phone_number', $phone);
                }

                wp_set_current_user($user_id);
                wp_set_auth_cookie($user_id, true);

                wp_redirect(home_url('/courses'));
                exit;
            }
        }
    }
}


get_header('account');

?>
<main class="auth-section d-flex align-items-center py-5">
    <div class="container">
        <div class="row align-items-center justify-content-center g-5">

            <div class="col-lg-6 d-none d-lg-flex justify-content-center auth-illustration">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/signup.gif"
                    alt="Đăng ký minh họa">
            </div>

            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4">
                <h1 class="fs-2 mb-1" style="font-weight:800;">Đăng ký</h1>
                <p class="text-secondary mb-4" style="font-size:.88rem;">
                    Xem sự phát triển của bạn và nhận hỗ trợ tư vấn!
                </p>

                <?php
                if (!empty($errors)) : ?>
                    <div class="auth-alert auth-alert--error">
                        <?php
                        foreach ($errors as $error) {
                            echo '<div>' . $error . '</div>';
                        }
                        ?>
                    </div>
                <?php endif; ?>

                <form method="POST" novalidate>
                    <?php wp_nonce_field('custom_register', 'register_nonce'); ?>

                    <div class="mb-3">
                        <label for="register-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="register-email" name="email"
                            placeholder="Your Email" autocomplete="email"
                            value="<?php echo esc_attr($_POST['email'] ?? ''); ?>">
                        <?php if ($errors['email']) : ?>
                            <div class="invalid-feedback"><?php echo esc_html($errors['email']); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="register-password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="register-password" name="password"
                            placeholder="*********" autocomplete="new-password">
                        <?php if ($errors['password']) : ?>
                            <div class="invalid-feedback"><?php echo esc_html($errors['password']); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-4">
                        <label for="register-phone" class="form-label">Số điện thoại</label>
                        <input type="tel" class="form-control" id="register-phone" name="phone"
                            placeholder="Để nhận hỗ trợ tốt nhất" maxlength="10"
                            value="<?php echo esc_attr($_POST['phone'] ?? ''); ?>">
                        <?php if ($errors['phone']) : ?>
                            <div class="invalid-feedback"><?php echo esc_html($errors['phone']); ?></div>
                        <?php endif; ?>
                        <p class="field-hint">Số điện thoại giúp chúng tôi hỗ trợ bạn hiệu quả hơn</p>
                    </div>

                    <button type="submit" class="btn-submit mb-3">Đăng ký</button>

                    <p class="switch-text">Bạn đã có tài khoản?
                        <a href="<?php echo home_url('/login'); ?>">Đăng nhập</a>
                    </p>
                </form>
            </div>

        </div>
    </div>
</main>

<?php
get_footer();
