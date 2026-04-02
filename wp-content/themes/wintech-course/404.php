<?php get_header('account'); ?>

    <section class="py-16 md:py-24 bg-[#f8f8f8] min-h-[70vh] flex items-center">
        <div class="container mx-auto px-4">

            <div class="max-w-4xl mx-auto text-center">

                <div class="mb-6">
                    <h1 class="text-[80px] md:text-[140px] font-black leading-none text-[#fdb814] drop-shadow-sm">
                        404
                    </h1>
                </div>

                <h2 class="text-2xl md:text-4xl font-bold text-black mb-4">
                    Trang bạn tìm không tồn tại
                </h2>

                <p class="text-base md:text-lg text-[#666] leading-[1.8] max-w-2xl mx-auto mb-10">
                    Có thể đường dẫn đã bị thay đổi, bài viết đã bị xoá hoặc bạn đã nhập sai địa chỉ.
                    Hãy thử quay lại trang chủ hoặc tiếp tục khám phá nội dung khác trên website.
                </p>

                <div class="flex flex-wrap justify-center gap-4 mb-10">
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                       class="min-w-[180px] h-[50px] px-6 inline-flex justify-center items-center rounded-full bg-gradient-to-r from-[#f3de58] to-[#fda803] text-black font-medium hover:from-[#faf4b0] hover:to-[#faf4b0] transition-all duration-300">
                        Về trang chủ
                    </a>
                </div>

                <div class="max-w-xl mx-auto">
                    <form method="GET" action="<?php echo esc_url(home_url('/tin-tuc')); ?>" class="flex flex-col justify-center sm:flex-row gap-3">
                        <div class="w-full">
                            <input type="text"
                                   name="keyword"
                                   placeholder="Tìm kiếm tin tức..."
                                   value="<?php echo esc_attr($_GET['keyword'] ?? ''); ?>"
                                   class="w-full h-[52px] px-5 rounded-full border border-[#ddd] bg-white text-black outline-none focus:border-[#fdb814]">
                        </div>

                        <button type="submit" class="h-[52px] px-8 rounded-full bg-black text-white hover:bg-[#fdb814] hover:text-black transition-all duration-300 whitespace-nowrap">
                            🔍 Tìm kiếm
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>