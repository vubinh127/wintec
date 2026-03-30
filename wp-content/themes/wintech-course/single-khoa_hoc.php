<?php get_header() ?>
<main class="course-detail-main">


    <!-- Login -->

    <section id="view-logged-in" class="course-lesson">
        <div class="container mx-auto max-w-6xl !px-4 xl:!px-0 !py-10 lg:!py-16">
            <div class="lesson-header" data-x-aos="fade-up">
                <span class="lesson-badge">Bài học</span>
                <h1 class="lesson-title">Xử Lý Nợ</h1>
                <p class="lesson-subtitle">Bạn đang tìm cách kiếm thêm nguồn thu nhập, tăng thu - giảm chi. Bạn đang
                    mệt mỏi vì gánh nặng nợ nần – từ vay ngân hàng, thẻ tín dụng, đến những khoản cam kết tài chính
                    dồn dập. Bạn muốn thoát ra nhưng không biết bắt đầu từ đâu, càng xoay càng rối. Khóa học này
                    chính xác dành cho bạn</p>
            </div>

            <div class="lesson-video-wrapper" data-x-aos="fade-up" data-aos-delay="100">
                <div class="lesson-video-inner">
                    <iframe id="lesson-video"
                        src="https://drive.google.com/file/d/1WMeV7FjELiDayTJtHTgTe5RMLN5UiDGT/preview"
                        allow="autoplay" allowfullscreen frameborder="0"></iframe>
                </div>
            </div>

            <div class="lesson-entry-content" data-x-aos="fade-up" data-aos-delay="200">
                <p></p>
                <p>
                </p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Cras a risus bibendum, ullamcorper eros vel, pretium tellus.</li>
                    <li>Ut malesuada nibh et quam sollicitudin, vel pretium eros ullamcorper.</li>
                    <li>Sed laoreet est at mauris dignissim, rhoncus fermentum lacus porta.</li>
                </ul>
                <p></p>
                <p>
                </p>
                <ul>
                    <li>Donec sit amet enim luctus, rhoncus risus nec, laoreet massa.</li>
                    <li>Mauris sed sapien sagittis, blandit est maximus, bibendum enim.</li>
                </ul>
                <p></p>
                <p>
                </p>
                <ul>
                    <li>Etiam quis odio pellentesque leo mollis gravida et ut ligula.</li>
                    <li>Suspendisse sagittis magna quis facilisis aliquam.</li>
                    <li>Quisque in urna feugiat, iaculis nibh sit amet, blandit libero.</li>
                    <li>Aenean auctor orci ac tellus finibus, eu tincidunt massa fringilla.</li>
                </ul>
                <p></p>
                <p>
                </p>
                <ul>
                    <li>Vivamus id augue sed nisi maximus luctus.</li>
                    <li>In ultrices justo vitae dapibus efficitur.</li>
                    <li>Nam id justo at dui finibus finibus lacinia vel velit.</li>
                    <li>Maecenas hendrerit neque ullamcorper magna auctor, ultrices faucibus mi consectetur.</li>
                    <li>Integer ac diam vel erat varius auctor.</li>
                    <li>Nulla facilisis dui tristique dictum gravida.</li>
                </ul>
                <p></p>
                <p>
                </p>
                <ul>
                    <li>Fusce vel mi at risus tincidunt pellentesque.</li>
                </ul>
                <p></p>
            </div>

        </div>
    </section>


    <!-- No login  -->

    <section id="view-not-logged-in" class="course-locked hidden">
        <div class="locked-overlay">
            <div class="locked-card" data-x-aos="zoom-in">
                <div class="locked-icon-wrapper">
                    <i class="bi bi-lock-fill locked-icon"></i>
                </div>
                <h1 class="locked-title">Nội dung bị khoá</h1>
                <p class="locked-desc">Bạn chưa có quyền truy cập bài học này.<br>Vui lòng đăng nhập để tiếp tục học
                    tập.</p>
                <a id="go-to-login-btn" href="#" class="locked-login-btn">
                    <i class="bi bi-box-arrow-in-right"></i> Đăng nhập ngay
                </a>
                <p class="locked-hint">Chưa có tài khoản? <a href="#" id="go-to-register-btn">Đăng ký miễn phí</a>
                </p>
            </div>
        </div>
    </section>

</main>

<?php get_footer() ?>