<?php
/**
 * Template Name: Forgot Password
 */
get_header('account');
?>

<main>
    <section class="auth-section d-flex align-items-center py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center g-5">

                <div class="col-lg-6 d-none d-lg-flex justify-content-center auth-illustration">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/login.gif"
                         alt="Đăng nhập minh họa">
                </div>

                <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4">
                    <h1 class="fw-800 fs-2 mb-1" style="font-weight:800;">Quên Mật Khẩu</h1>
                    <p class="text-secondary mb-4" style="font-size:.88rem;">Nhập địa chỉ email tài khoản của bạn.</p>

                    <div class="alert alert-success alert-dismissible fade show d-flex align-items-start" role="alert">
                        <i class="fas fa-check-circle me-2 mt-1" style="color: #4caf50; font-size: 18px;"></i>
                        <span>Liên kết đặt lại mật khẩu đã được gửi đến email của bạn. Vui lòng kiểm tra hộp thư (bao gồm cả thư mục Spam).</span>
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close" style="font-size: 12px; opacity: 0.7;"></button>
                    </div>

                    <form id="login-form" novalidate>
                        <div class="mb-3">
                            <label for="login-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="login-email" name="email"
                                   placeholder="Email của bạn" autocomplete="email">
                        </div>

                        <button type="submit" class="btn-submit mb-3">Gửi Yêu Cầu</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>

<?php
get_footer();