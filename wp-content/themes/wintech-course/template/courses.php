<?php
/**
 * Template Name: Courses
 */
get_header();
?>
<main class="courses-list-main">

        <!-- Page Hero -->
        <section class="courses-list-hero">
            <div class="container mx-auto max-w-6xl !px-4 xl:!px-0">
                <p class="courses-list-hero__eyebrow" data-x-aos="fade-up">Danh sách</p>
                <h1 class="courses-list-hero__title" data-x-aos="fade-up" data-aos-delay="80">Khóa Học Của Chúng Tôi</h1>
                <p class="courses-list-hero__sub" data-x-aos="fade-up" data-aos-delay="160">Chọn lộ trình phù hợp và bắt đầu hành trình làm chủ tài chính cùng chuyên gia Phan Hiếu Kỳ.</p>
            </div>
        </section>

        <!-- Course Grid -->
        <section class="courses-list-section">
            <div class="container mx-auto max-w-6xl !px-4 xl:!px-0">

                <div class="course-grid">

                    <article class="course-card" data-x-aos="fade-up">
                        <div class="course-card__header">
                            <span class="course-card__title-top">Xử Lý Nợ</span>
                        </div>
                        <a href="/course-detail.html" class="course-card__thumb-link">
                            <div class="course-card__thumb">
                                <img src="https://phanhieuky.com/public/uploads/course-thumbnail/-1755487245.jpg"
                                    alt="Xử Lý Nợ"
                                    onerror="this.style.background='linear-gradient(135deg,#1a1a1a,#2a2a2a)';this.style.display='block';this.style.height='200px';">
                            </div>
                        </a>
                        <div class="course-card__body">
                            <div class="course-card__meta">
                                <span class="course-card__meta-icon"><i class="bi bi-camera-video-fill"></i></span>
                                <span>Số lượng bài học: <strong>19 buổi qua Zoom</strong></span>
                            </div>
                            <p class="course-card__desc">
                                Bạn đang tìm cách kiếm thêm nguồn thu nhập, tăng thu – giảm chi. Bạn đang mệt mỏi vì gánh nặng nợ nần – từ vay ngân hàng...
                            </p>
                            <a href="/course-detail.html" class="course-card__btn">XEM CHI TIẾT</a>
                        </div>
                    </article>

                    <article class="course-card" data-x-aos="fade-up" data-aos-delay="100">
                        <div class="course-card__header">
                            <span class="course-card__title-top">Vàng Là Dễ - Nắm Bắt Siêu Chu...</span>
                        </div>
                        <a href="/course-detail.html" class="course-card__thumb-link">
                            <div class="course-card__thumb">
                                <img src="https://phanhieuky.com/public/uploads/course-thumbnail/-1763200168.png"
                                    alt="Vàng Là Dễ"
                                    onerror="this.style.background='linear-gradient(135deg,#fda803,#f3de58)';this.style.display='block';this.style.height='200px';">
                            </div>
                        </a>
                        <div class="course-card__body">
                            <div class="course-card__meta">
                                <span class="course-card__meta-icon"><i class="bi bi-camera-video-fill"></i></span>
                                <span>Số lượng bài học: <strong>46 buổi qua Zoom</strong></span>
                            </div>
                            <p class="course-card__desc">
                                "Vàng Là Dễ – Nắm Bắt Siêu Chu Kỳ Của Vàng" giúp bạn hiểu vàng từ A-Z: bản chất vàng, chu kỳ giá, vàng vật chất, vàng ch...
                            </p>
                            <a href="/course-detail.html" class="course-card__btn">XEM CHI TIẾT</a>
                        </div>
                    </article>

                    <article class="course-card" data-x-aos="fade-up" data-aos-delay="200">
                        <div class="course-card__header">
                            <span class="course-card__title-top">MEMBERSHIP</span>
                        </div>
                        <a href="/course-detail.html" class="course-card__thumb-link">
                            <div class="course-card__thumb">
                                <img src="https://phanhieuky.com/public/uploads/course-thumbnail/-1758945931.png"
                                    alt="Membership"
                                    onerror="this.style.background='linear-gradient(135deg,#0a0a0a,#1a1a1a)';this.style.display='block';this.style.height='200px';">
                            </div>
                        </a>
                        <div class="course-card__body">
                            <div class="course-card__meta">
                                <span class="course-card__meta-icon"><i class="bi bi-camera-video-fill"></i></span>
                                <span>Số lượng bài học: <strong>1 buổi qua Zoom</strong></span>
                            </div>
                            <p class="course-card__desc">
                                Khóa Membership 1 năm cùng chuyên gia Phan Hiếu Kỳ là chương trình huấn luyện đầu tư chuyên sâu, giúp bạn xây dựng lộ tr...
                            </p>
                            <a href="/course-detail.html" class="course-card__btn">XEM CHI TIẾT</a>
                        </div>
                    </article>

                </div><!-- /.course-grid -->

                <!-- Pagination -->
                <nav class="courses-pagination" aria-label="Phân trang khóa học">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </section>

    </main>
<?php
get_footer();