<?php
/**
 * Template Name: Courses
 */
get_header('account');
?>
    <main class="courses-list-main">
        <section class="courses-list-section">
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

            <div class="search-bar">
                <div class="container mx-auto max-w-6xl !px-4 xl:!px-0 search-wrap">
                    <div class="search-input">
                        <input type="text" placeholder="Tìm kiếm khóa học..." />
                    </div>

                    <div class="category">
                        <label>Danh mục:</label>
                        <select>
                            <option>Tất cả</option>
                        </select>
                    </div>

                    <button class="btn-search">🔍 Tìm kiếm</button>
                </div>
            </div>


            <div class="container mx-auto max-w-6xl !px-4 xl:!px-0 py-12">
                <div class="course-grid">
                    <article class="course-card shadow-lg hover:shadow-xl transition-shadow duration-300 p-3" data-x-aos="fade-up">
                        <a href="/course-detail.html" class="course-card__thumb-link">
                            <div class="course-card__thumb">
                                <img src="https://phanhieuky.com/public/uploads/course-thumbnail/-1755487245.jpg"
                                     alt="Xử Lý Nợ"
                                     onerror="this.style.background='linear-gradient(135deg,#1a1a1a,#2a2a2a)';this.style.display='block';this.style.height='200px';">
                            </div>

                            <div class="course-card__body py-3">
                                <div class="course-card__title-top">Xử Lý Nợ</div>
                                <div class="course-card__meta">
                                    <span class="course-card__meta-icon"><i class="fas fa-book-open text-[#6B7385]"></i></span>
                                    <span>19 bài học</span>
                                </div>
                                <div class="course-card__btn">
                                    Tìm hiểu thêm
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </article>

                    <article class="course-card shadow-lg hover:shadow-xl transition-shadow duration-300 p-3" data-x-aos="fade-up" data-aos-delay="100">
                        <a href="/course-detail.html" class="course-card__thumb-link">
                            <div class="course-card__thumb">
                                <img src="https://phanhieuky.com/public/uploads/course-thumbnail/-1763200168.png"
                                     alt="Vàng Là Dễ"
                                     onerror="this.style.background='linear-gradient(135deg,#fda803,#f3de58)';this.style.display='block';this.style.height='200px';">
                            </div>

                            <div class="course-card__body py-3">
                                <div class="course-card__title-top">Vàng Là Dễ - Nắm Bắt Siêu Chu...</div>
                                <div class="course-card__meta">
                                    <span class="course-card__meta-icon"><i class="fas fa-book-open text-[#6B7385]"></i></span>
                                    <span>19 bài học</span>
                                </div>
                                <div class="course-card__btn">
                                    Tìm hiểu thêm
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </article>

                    <article class="course-card shadow-lg hover:shadow-xl transition-shadow duration-300 p-3" data-x-aos="fade-up" data-aos-delay="200">
                        <a href="/course-detail.html" class="course-card__thumb-link">
                            <div class="course-card__thumb">
                                <img src="https://phanhieuky.com/public/uploads/course-thumbnail/-1758945931.png"
                                     alt="Membership"
                                     onerror="this.style.background='linear-gradient(135deg,#0a0a0a,#1a1a1a)';this.style.display='block';this.style.height='200px';">
                            </div>

                            <div class="course-card__body py-3">
                                <div class="course-card__title-top">MEMBERSHIP</div>
                                <div class="course-card__meta">
                                    <span class="course-card__meta-icon"><i class="fas fa-book-open text-[#6B7385]"></i></span>
                                    <span>9 bài học</span>
                                </div>
                                <div class="course-card__btn">
                                    Tìm hiểu thêm
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </article>

                </div>

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