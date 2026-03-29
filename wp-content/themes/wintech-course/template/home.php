<?php 
/**
 * Template Name: Home
 */
get_header();
?>
   <main class="top-page">
        <section class="hero section-bg">
            <div class="container mx-auto max-w-6xl !px-4 xl:!px-0">
                <div class="flex flex-col lg:flex-row">
                    <div class="text-white !pt-4 md:!pt-[50px] pb-[100px] lg:!pb-[140px]" data-aos="fade-right"
                        data-aos-duration="1000">
                        <div class="rounded-[5px] w-[238px] md:w-[325px] text-lg md:text-xl xl:text-2xl leading-[1.6] mx-auto text-center text-[#020202] bg-no-repeat bg-left-top bg-cover bg-origin-content"
                            style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/tag-silver-bg.jpg)" data-aos="zoom-in"
                            data-aos-delay="200">
                            CHƯƠNG TRÌNH ĐÀO TẠO
                        </div>
                        <div class="text-center leading-[1.2] text-5xl xl:text-[75px] mt-1.5 font-semibold tracking-[-5px]"
                            data-aos="fade-up" data-aos-delay="400">
                            <h1 class="gradient-text">TÀI CHÍNH</h1>
                            <h1 class="gradient-text leading-[1.4]">THỰC TIỄN</h1>
                        </div>
                        <div class="flex items-center justify-center text-[25px] md:text-3xl leading-none xl:text-[38px] relative !mt-4"
                            data-aos="fade-up" data-aos-delay="600">
                            <div class="relative text-center w-[473px]">
                                <div class="translate-y-1/2 xl:translate-y-[75%] border-line-top absolute top-0 left-0">
                                </div>
                                <p>CÙNG PHAN HIẾU KỲ</p>
                                <div
                                    class="-translate-y-1/2 xl:-translate-y-[75%] border-line-top absolute bottom-0 left-0">
                                </div>
                            </div>
                        </div>
                        <div class="text-base md:text-lg xl:text-xl leading-[1.6] text-center !mt-5" data-aos="fade-up"
                            data-aos-delay="800">
                            Thời nào làm việc đó – Dòng tiền ở đâu, Kỳ ở đó<br>
                        </div>
                        <div class="md:max-w-[419px] mx-auto text-[15px] md:text-base leading-[1.6] text-center"
                            data-aos="fade-up" data-aos-delay="1000">
                            Khóa học đầu tư tài chính thực chiến cùng Phan Hiếu Kỳ – chuyên
                            gia<span style="font-weight: bold"> 12 năm kinh nghiệm</span>. Học
                            đầu tư <span style="font-weight: bold">từ con số 0</span> và làm chủ
                            tư duy dòng tiền.<br>
                        </div>
                        <div class="relative hidden md:block z-10 w-[205px] h-[50px] !mt-5 mx-auto text-xl leading-[1.6] font-normal"
                            data-aos="zoom-in" data-aos-delay="1200">
                            <a href="#khoa-hoc"
                                class="animate-pulse-small flex justify-center items-center w-full h-full bg-gradient-to-r from-[#f3de58] to-[#fda803] text-black rounded hover:from-[#faf4b0] hover:to-[#faf4b0] transition-colors">
                                TÌM HIỂU THÊM
                            </a>
                        </div>
                    </div>

                    <div class="relative w-full">
                        <div
                            class="absolute w-fit h-fit -top-20 left-0 md:left-1/2 md:top-1/2 md:-translate-x-1/2 md:-translate-y-1/2">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hero-left-center-bg.png" alt="" data-aos="zoom-in"
                                data-aos-delay="300"
                                class="w-[413px] md:w-[626px] md:h-[520px] max-w-[unset] animate-pulse-small">
                        </div>

                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hero-left-center-bg-2.png" alt=""
                            class="md:w-[580px] md:h-[580px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
                        <div class="absolute left-1/2 -top-10 xl:top-14 -translate-x-[80%]">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hero-left-left-person.png" alt=""
                                class="w-[174px] md:w-[343px] md:h-[402px] object-cover max-w-[unset]"
                                data-aos="fade-left" data-aos-offset="40" data-aos-duration="200"
                                data-aos-easing="linear">
                        </div>
                        <div class="absolute right-1/2 -top-14 lg:top-10 translate-x-[120%]">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hero-left-right-person.png" alt="" data-aos="fade-right"
                                data-aos-offset="40" data-aos-duration="200" data-aos-easing="linear"
                                class="w-[123px] md:w-[241.5px] md:h-[442px] max-w-[unset] object-cover">
                        </div>
                        <div class="relative xl:absolute left-0 bottom-0">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hero-left-center-person.png" alt="" data-aos="fade-up"
                                data-aos-duration="500" data-aos-delay="100" data-aos-easing="ease-out"
                                class="w-full md:w-[855px] h-auto max-h-full object-cover">
                        </div>

                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hero-left-bottom-signature.png" alt=""
                            class="w-[100px] md:w-[200px] h-auto absolute bottom-20 left-0" data-aos="fade-in"
                            data-aos-delay="1300">

                        <div class="relative block md:hidden z-10 w-[205px] h-[50px] md:!mt-5 mx-auto text-xl leading-[1.6] font-normal"
                            data-aos="zoom-in" data-aos-delay="1200">
                            <button
                                class="animate-pulse-small w-full h-full bg-gradient-to-r from-[#f3de58] to-[#fda803] text-black rounded hover:from-[#faf4b0] hover:to-[#faf4b0] transition-colors">
                                TÌM HIỂU THÊM
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gioi-thieu" class="course-guideline section-bg"
            style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/course-guideline-bg.jpg)">
            <div class="container mx-auto max-w-6xl !px-4 xl:!px-0 !pb-5">
                <div class="gap-x-6 xl:gap-x-24 pt-8 pb-40 flex-col lg:flex-row flex items-center">
                    <div class="w-full lg:w-2/5 xl:w-[637px] shrink-0" data-aos="fade-right" data-aos-duration="800">
                        <div class="block lg:hidden text-white text-left !mb-2">
                            <h2 class="text-[20px] lg:text-[30px] leading-[1.6]" data-aos="fade-up"
                                data-aos-delay="200">
                                CHƯƠNG TRÌNH ĐÀO TẠO
                            </h2>
                            <p class="gradient-text leading-[1.4] text-[33px] lg:text-[40px] font-semibold"
                                data-aos="fade-up" data-aos-delay="400">
                                ĐẦU TƯ TÀI CHÍNH
                            </p>
                            <p class="text-lg leading-[1.6]" data-aos="fade-up" data-aos-delay="600">
                                THEO DÒNG TIỀN VÀ CHU KỲ KINH TẾ
                            </p>
                        </div>

                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/course-guideline-top-left.png" alt="" width="637" height="446"
                            class="block mx-auto w-[375px] h-[263px] md:w-[637px] md:h-[446px] rounded-[10px] lg:rounded-[20px] object-cover object-center"
                            data-aos="zoom-in" data-aos-delay="300">
                    </div>

                    <div class="text-white text-left" data-aos="fade-left" data-aos-duration="800">
                        <div class="lg:block hidden">
                            <h2 class="text-2xl xl:text-[32px] leading-[1.6] font-semibold" data-aos="fade-up"
                                data-aos-delay="200">
                                CHƯƠNG TRÌNH ĐÀO TẠO
                            </h2>
                            <p class="gradient-text leading-[1.4] text-4xl xl:text-[45px] tracking-[-2px] font-semibold"
                                data-aos="fade-up" data-aos-delay="400">
                                ĐẦU TƯ TÀI CHÍNH
                            </p>
                            <p class="text-xl xl:text-[22px] leading-[1.6]" data-aos="fade-up" data-aos-delay="600">
                                THEO DÒNG TIỀN VÀ CHU KỲ KINH TẾ
                            </p>
                        </div>
                        <div class="!mt-5 text-base leading-[1.4]" data-aos="fade-up" data-aos-delay="800">
                            <p class="mb-3">
                                Qua hơn 12 năm lăn lộn trên thị trường tài chính – từ vàng,
                                chứng khoán, crypto đến bất động sản – Phan Hiếu Kỳ nhận ra một
                                sự thật:
                                <span style="color: rgb(253, 184, 20)">rất nhiều người mất tiền không phải vì thiếu cố
                                    gắng, mà vì
                                    thiếu đúng hướng đi ngay từ đầu.</span><br>
                            </p>
                            <p class="">
                                Từ trăn trở đó,<span style="color: rgb(255, 194, 0)">
                                    <span>chuỗi chương trình đào tạo tài chính thực tiễn cùng
                                        Phan Hiếu Kỳ ra đời</span>.</span>
                                Không phải những khóa học lý thuyết suông, mà là hệ thống kiến
                                thức và chiến lược đã được Kỳ<span style="color: rgb(255, 194, 0)">
                                    <span>đúc kết từ chính trải nghiệm giao dịch, quản lý quỹ, và
                                        làm việc với hàng nghìn nhà đầu tư thực tế.</span></span><br>
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="flex flex-wrap lg:!flex-nowrap justify-center px-1 gap-y-36 gap-10 xl:px-0 xl:gap-[87px] !mb-8">
                    <div class="max-w-80 md:max-w-[unset] w-full md:w-2/5 lg:w-1/3 lg:max-w-[342px] border border-solid border-[#494949] bg-[#282829] rounded-[20px]"
                        data-aos="fade-up" data-aos-delay="200">
                        <img class="-mt-[140px] w-[249px] h-[210px] mx-auto object-cover"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/course-guideline-item-1.png" alt="" data-aos="zoom-in"
                            data-aos-delay="300">
                        <div>
                            <h1 class="text-[#ffc200] text-[25px] leading-[1.6] text-center" data-aos="fade-up"
                                data-aos-delay="400">
                                Mục tiêu chương trình
                            </h1>
                            <ul class="list list-none text-[15px] leading-[1.6] text-white !px-4 !pb-4"
                                data-aos="fade-up" data-aos-delay="500">
                                <li class="pb-2.5">
                                    Giúp người mới
                                    <span style="font-weight: bold">hiểu bản chất thị trường</span>
                                    từ gốc rễ
                                </li>
                                <li class="pb-2.5">
                                    Trang bị tư duy tài chính thực chiến, phù hợp với chu kỳ
                                    kinh tế Việt Nam
                                </li>
                                <li class="pb-2.5">
                                    <span style="font-weight: bold">Tránh sai lầm mất tiền</span>
                                    do thiếu kiến thức nền tảng
                                </li>
                                <li class="">
                                    Dẫn dắt người học
                                    <span style="font-weight: bold">bắt đầu hành trình tài chính cá nhân có chiến
                                        lược.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="max-w-80 md:max-w-[unset] w-full md:w-2/5 lg:w-1/3 lg:max-w-[342px] border border-solid border-[#494949] bg-[#282829] rounded-[20px]"
                        data-aos="fade-up" data-aos-delay="400">
                        <img class="-mt-[140px] w-[249px] h-[210px] mx-auto object-cover"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/course-guideline-item-2.png" alt="" data-aos="zoom-in"
                            data-aos-delay="500">
                        <div>
                            <h1 class="text-[#ffc200] text-[25px] leading-[1.6] text-center" data-aos="fade-up"
                                data-aos-delay="600">
                                Phù hợp với
                            </h1>
                            <ul class="list list-none text-[15px] leading-[1.6] text-white !px-4 !pb-4"
                                data-aos="fade-up" data-aos-delay="700">
                                <li class="pb-2.5">
                                    Người mới bắt đầu đầu tư, chưa biết nên học từ đâu
                                </li>
                                <li class="pb-2.5">
                                    Người đã từng đầu tư nhưng
                                    <span style="font-weight: bold">chưa sinh lời, còn loay hoay
                                    </span>
                                </li>

                                <li class="">
                                    Người đang gặp khủng hoảng tài chính, cần<span style="font-weight: bold">
                                        kế hoạch rõ ràng để thoát ra</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="max-w-80 md:max-w-[unset] w-full md:w-2/5 lg:w-1/3 lg:max-w-[342px] border border-solid border-[#494949] bg-[#282829] rounded-[20px]"
                        data-aos="fade-up" data-aos-delay="600">
                        <img class="-mt-[140px] w-[249px] h-[210px] mx-auto object-cover"
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/course-guideline-item-3.png" alt="" data-aos="zoom-in"
                            data-aos-delay="700">
                        <div>
                            <h1 class="text-[#ffc200] text-[25px] leading-[1.6] text-center" data-aos="fade-up"
                                data-aos-delay="800">
                                Đặc điểm nổi bật
                            </h1>
                            <ul class="list list-none text-[15px] leading-[1.6] text-white !px-4 !pb-4"
                                data-aos="fade-up" data-aos-delay="900">
                                <li class="pb-2.5">
                                    Nội dung đào tạo gắn chặt với
                                    <span style="font-weight: bold">thực tế kinh tế Việt Nam</span>
                                </li>
                                <li class="pb-2.5">
                                    Lộ trình học được xây dựng
                                    <span style="font-weight: bold">theo giai đoạn chu kỳ kinh tế</span>
                                </li>

                                <li class="">
                                    Tư duy đơn giản hóa, dễ tiếp cận và
                                    <span style="font-weight: bold">có chiều sâu chiến lược</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lg:max-w-[757px] text-center mx-auto" data-aos="fade-up" data-aos-delay="800">
                    <h1 class="text-base lg:text-lg leading-[1.4] text-white">
                        "Thời nào làm việc đó – Dòng tiền ở đâu, Kỳ ở đó" không chỉ là triết lý
                        của chuyên gia Phan Hiếu Kỳ, mà là kim chỉ nam cho toàn bộ chương trình
                        đào tạo.
                    </h1>
                </div>
            </div>
        </section>

        <section id="khoa-hoc" class="course-list section-bg">
            <div class="container mx-auto max-w-6xl !px-4 xl:!px-0 pt-11 pb-10">
                <h1 class="!pb-3 gradient-text leading-[1.4] text-[30px] lg:text-[40px] text-center font-semibold tracking-[-2px]"
                    data-aos="fade-up" data-aos-duration="800">
                    DANH SÁCH KHÓA HỌC
                </h1>
                <p class="mx-auto w-full lg:w-[730px] !mb-4 text-lg leading-[1.4] text-white text-center"
                    data-aos="fade-up" data-aos-delay="200">
                    Danh sách khóa học đầu tư tài chính online – học cách đầu tư thông minh, nắm
                    bắt chu kỳ kinh tế và phân bổ dòng tiền hiệu quả.
                </p>
                <div class="mb-[122px]">
                    <div
                        class="flex flex-wrap justify-center gap-x-5 gap-y-6 lg:gap-x-5 lg:gap-y-0 lg:!flex-nowrap lg:justify-between">
                        <div class="max-w-80 md:max-w-[unset] w-full md:w-2/5 lg:w-1/3 lg:max-w-[342px] flex flex-col"
                            data-aos="fade-right" data-aos-delay="300">
                            <div class="flex justify-center items-center mx-auto w-60 lg:w-[280px] h-[62px] text-center bg-no-repeat bg-left-top bg-cover bg-origin-content"
                                style="
                                        border-radius: 20px 20px 0px 0px;
                                        background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/tag-silver-bg.jpg);
                                    ">
                                <h3 class="text-xl leading-[1.2] text-[#020202]">
                                    Xử Lý Nợ
                                </h3>
                            </div>
                            <div
                                class="flex-auto !p-2 border border-solid !border-[#ffc200] bg-[#282828] rounded-[20px]">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/-1755487245.jpg" alt="Xử Lý Nợ" width="326px" height="197px"
                                    class="rounded-[13px] w-full h-[197px] object-cover object-center !mb-3">

                                <div class="flex items-center justify-center gap-x-3.5">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/zoom.png" alt="" width="51" height="51"
                                        class="w-[51px] h-[51px] object-cover object-center">
                                    <p class="text-base leading-[1.4] text-white text-left">
                                        Số lượng bài học: <br><span style="font-weight: bold">
                                            19 buổi qua Zoom
                                        </span>
                                    </p>
                                </div>

                                <div
                                    class="w-[54px] my-2.5 mx-auto !py-2 px-0 !border-0 !border-t-[3px] border-solid border-[#ffc200]">
                                </div>
                                <ul class="list !px-3 text-white text-base">
                                    <li>Bạn đang tìm cách kiếm thêm nguồn thu nhập, tăng thu - giảm chi. Bạn đang mệt
                                        mỏi vì
                                        gánh nặng nợ nần – từ vay ngân hàng...
                                    </li>
                                </ul>
                                <div
                                    class="w-[205px] h-[50px] mt-7 mx-auto text-xl leading-[1.6] font-normal mb-[18px]">
                                    <a href="https://phanhieuky.com/khoa-hoc/xu-ly-no"
                                        class="animate-pulse-small flex justify-center items-center w-full h-full bg-gradient-to-r from-[#f3de58] to-[#fda803] text-black rounded hover:from-[#faf4b0] hover:to-[#faf4b0] transition-colors">
                                        XEM CHI TIẾT
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-80 md:max-w-[unset] w-full md:w-2/5 lg:w-1/3 lg:max-w-[342px] flex flex-col"
                            data-aos="fade-right" data-aos-delay="500">
                            <div class="flex justify-center items-center mx-auto w-60 lg:w-[280px] h-[62px] text-center bg-no-repeat bg-left-top bg-cover bg-origin-content"
                                style="
                                        border-radius: 20px 20px 0px 0px;
                                        background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/tag-silver-bg.jpg);
                                    ">
                                <h3 class="text-xl leading-[1.2] text-[#020202]">
                                    Vàng Là Dễ - Nắm Bắt Siêu Chu...
                                </h3>
                            </div>
                            <div
                                class="flex-auto !p-2 border border-solid !border-[#ffc200] bg-[#282828] rounded-[20px]">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/-1763200168.png"
                                    alt="Vàng Là Dễ - Nắm Bắt Siêu Chu Kỳ Của Vàng" width="326px" height="197px"
                                    class="rounded-[13px] w-full h-[197px] object-cover object-center !mb-3">

                                <div class="flex items-center justify-center gap-x-3.5">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/zoom.png" alt="" width="51" height="51"
                                        class="w-[51px] h-[51px] object-cover object-center">
                                    <p class="text-base leading-[1.4] text-white text-left">
                                        Số lượng bài học: <br><span style="font-weight: bold">
                                            46 buổi qua Zoom
                                        </span>
                                    </p>
                                </div>

                                <div
                                    class="w-[54px] my-2.5 mx-auto !py-2 px-0 !border-0 !border-t-[3px] border-solid border-[#ffc200]">
                                </div>
                                <ul class="list !px-3 text-white text-base">
                                    <li>“Vàng Là Dễ - Nắm Bắt Siêu Chu Kỳ Của Vàng” giúp bạn hiểu vàng từ A-Z: bản chất
                                        vàng, chu kỳ giá, vàng vật chất, vàng ch...
                                    </li>
                                </ul>
                                <div
                                    class="w-[205px] h-[50px] mt-7 mx-auto text-xl leading-[1.6] font-normal mb-[18px]">
                                    <a href="https://phanhieuky.com/khoa-hoc/vang-la-de-nam-bat-sieu-chu-ky-cua-vang"
                                        class="animate-pulse-small flex justify-center items-center w-full h-full bg-gradient-to-r from-[#f3de58] to-[#fda803] text-black rounded hover:from-[#faf4b0] hover:to-[#faf4b0] transition-colors">
                                        XEM CHI TIẾT
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-80 md:max-w-[unset] w-full md:w-2/5 lg:w-1/3 lg:max-w-[342px] flex flex-col"
                            data-aos="fade-right" data-aos-delay="700">
                            <div class="flex justify-center items-center mx-auto w-60 lg:w-[280px] h-[62px] text-center bg-no-repeat bg-left-top bg-cover bg-origin-content"
                                style="
                                        border-radius: 20px 20px 0px 0px;
                                        background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/tag-silver-bg.jpg);
                                    ">
                                <h3 class="text-xl leading-[1.2] text-[#020202]">
                                    MEMBERSHIP
                                </h3>
                            </div>
                            <div
                                class="flex-auto !p-2 border border-solid !border-[#ffc200] bg-[#282828] rounded-[20px]">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/-1758945931.png" alt="MEMBERSHIP" width="326px" height="197px"
                                    class="rounded-[13px] w-full h-[197px] object-cover object-center !mb-3">

                                <div class="flex items-center justify-center gap-x-3.5">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/zoom.png" alt="" width="51" height="51"
                                        class="w-[51px] h-[51px] object-cover object-center">
                                    <p class="text-base leading-[1.4] text-white text-left">
                                        Số lượng bài học: <br><span style="font-weight: bold">
                                            1 buổi qua Zoom
                                        </span>
                                    </p>
                                </div>

                                <div
                                    class="w-[54px] my-2.5 mx-auto !py-2 px-0 !border-0 !border-t-[3px] border-solid border-[#ffc200]">
                                </div>
                                <ul class="list !px-3 text-white text-base">
                                    <li>Khóa Membership 1 năm cùng chuyên gia Phan Hiếu Kỳ là chương trình huấn luyện
                                        đầu tư
                                        chuyên sâu, giúp bạn xây dựng lộ tr...
                                    </li>
                                </ul>
                                <div
                                    class="w-[205px] h-[50px] mt-7 mx-auto text-xl leading-[1.6] font-normal mb-[18px]">
                                    <a href="https://phanhieuky.com/khoa-hoc/membership"
                                        class="animate-pulse-small flex justify-center items-center w-full h-full bg-gradient-to-r from-[#f3de58] to-[#fda803] text-black rounded hover:from-[#faf4b0] hover:to-[#faf4b0] transition-colors">
                                        XEM CHI TIẾT
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="800" class="text-center mt-10">
                        <a href="https://phanhieuky.com/courses"
                            class="bg-gradient-to-b from-[#ff9f15] to-[#e93a00] text-base md:text-lg !px-10 !py-4 text-white rounded-full font-sf-pro-bold pulse-scaled">
                            <i class="bi bi-arrow-right-circle mr-2"></i> XEM THÊM CÁC KHÓA HỌC
                        </a>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row gap-6 xl:gap-[30px]">
                    <div class="lg:w-[500px] xl:max-w-[682px] xl:w-full shrink-0" data-aos="fade-right"
                        data-aos-duration="800">
                        <h1 class="lg:max-w-[416px] gradient-text leading-[1.4] text-center lg:!text-left text-[30px] lg:text-[36px] font-semibold tracking-[-2px]"
                            data-aos="fade-up" data-aos-delay="200">
                            VÌ SAO NÊN HỌC CÙNG PHAN HIẾU KỲ?
                        </h1>
                        <div class="hidden md:block lg:max-w-[438px] text-lg leading-[1.4] text-white"
                            data-aos="fade-up" data-aos-delay="400">
                            Nếu bạn đang tìm kiếm một khóa học đầu tư tài chính dành cho người
                            mới, dễ hiểu và sát thực tế, thì hành trình cùng Phan Hiếu Kỳ là lựa
                            chọn phù hợp.
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/course-list-bottom-right.png" alt="" width="682" height="498"
                            class="w-[474px] h-[276px] max-w-[100vw] md:max-w-screen-sm lg:max-w-full -mx-4 md:mx-auto lg:mx-0 lg:w-[500px] lg:h-[365px] xl:w-[682px] xl:h-[498px] object-cover object-right-top"
                            data-aos="zoom-in" data-aos-delay="600">
                    </div>
                    <div data-aos="fade-left" data-aos-duration="800">
                        <ul class="space-y-[11px]">
                            <li class="bg-gradient-to-r from-[#ffc200] to-[#282828] p-px rounded-[10px]"
                                data-aos="slide-left" data-aos-delay="200">
                                <div
                                    class="!py-3 !px-5 bg-gradient-to-r from-[#282828] to-black rounded-[9px] flex items-center justify-start gap-x-7">
                                    <div
                                        class="leading-[1.4] text-[25px] list-item-no-outer rounded-full pt-[1.5px] pl-[1.5px] size-[51px] shrink-0">
                                        <div
                                            class="list-item-no-inner h-full w-full rounded-full flex justify-center items-center">
                                            <div class="gradient-text">01</div>
                                        </div>
                                    </div>
                                    <div class="text-white text-base leading-[1.4]">
                                        Phương pháp giảng dạy độc đáo, ai nghe cũng có thể hiểu
                                        được.
                                    </div>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-[#ffc200] to-[#282828] p-px rounded-[10px]"
                                data-aos="slide-left" data-aos-delay="250">
                                <div
                                    class="!py-3 !px-5 bg-gradient-to-r from-[#282828] to-black rounded-[9px] flex items-center justify-start gap-x-7">
                                    <div
                                        class="leading-[1.4] text-[25px] list-item-no-outer rounded-full pt-[1.5px] pl-[1.5px] size-[51px] shrink-0">
                                        <div
                                            class="list-item-no-inner h-full w-full rounded-full flex justify-center items-center">
                                            <div class="gradient-text">02</div>
                                        </div>
                                    </div>
                                    <div class="text-white text-base leading-[1.4]">
                                        Được học trực tiếp từ người thực chiến với hơn 12 năm
                                        kinh nghiệm trong lĩnh vực đầu tư.
                                    </div>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-[#ffc200] to-[#282828] p-px rounded-[10px]"
                                data-aos="slide-left" data-aos-delay="300">
                                <div
                                    class="!py-3 !px-5 bg-gradient-to-r from-[#282828] to-black rounded-[9px] flex items-center justify-start gap-x-7">
                                    <div
                                        class="leading-[1.4] text-[25px] list-item-no-outer rounded-full pt-[1.5px] pl-[1.5px] size-[51px] shrink-0">
                                        <div
                                            class="list-item-no-inner h-full w-full rounded-full flex justify-center items-center">
                                            <div class="gradient-text">03</div>
                                        </div>
                                    </div>
                                    <div class="text-white text-base leading-[1.4]">
                                        Tư duy đầu tư đơn giản, dễ hiểu – đặc biệt dành cho
                                        người mới, người từng đầu tư và cả chuyên gia.
                                    </div>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-[#ffc200] to-[#282828] p-px rounded-[10px]"
                                data-aos="slide-left" data-aos-delay="350">
                                <div
                                    class="!py-3 !px-5 bg-gradient-to-r from-[#282828] to-black rounded-[9px] flex items-center justify-start gap-x-7">
                                    <div
                                        class="leading-[1.4] text-[25px] list-item-no-outer rounded-full pt-[1.5px] pl-[1.5px] size-[51px] shrink-0">
                                        <div
                                            class="list-item-no-inner h-full w-full rounded-full flex justify-center items-center">
                                            <div class="gradient-text">04</div>
                                        </div>
                                    </div>
                                    <div class="text-white text-base leading-[1.4]">
                                        Không dạy lý thuyết – chỉ chia sẻ những gì Kỳ đã làm và
                                        có kết quả.
                                    </div>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-[#ffc200] to-[#282828] p-px rounded-[10px]"
                                data-aos="slide-left" data-aos-delay="400">
                                <div
                                    class="!py-3 !px-5 bg-gradient-to-r from-[#282828] to-black rounded-[9px] flex items-center justify-start gap-x-7">
                                    <div
                                        class="leading-[1.4] text-[25px] list-item-no-outer rounded-full pt-[1.5px] pl-[1.5px] size-[51px] shrink-0">
                                        <div
                                            class="list-item-no-inner h-full w-full rounded-full flex justify-center items-center">
                                            <div class="gradient-text">05</div>
                                        </div>
                                    </div>
                                    <div class="text-white text-base leading-[1.4]">
                                        Được tham gia cộng đồng học viên riêng – hỗ trợ suốt
                                        hành trình.
                                    </div>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-[#ffc200] to-[#282828] p-px rounded-[10px]"
                                data-aos="slide-left" data-aos-delay="450">
                                <div
                                    class="!py-3 !px-5 bg-gradient-to-r from-[#282828] to-black rounded-[9px] flex items-center justify-start gap-x-7">
                                    <div
                                        class="leading-[1.4] text-[25px] list-item-no-outer rounded-full pt-[1.5px] pl-[1.5px] size-[51px] shrink-0">
                                        <div
                                            class="list-item-no-inner h-full w-full rounded-full flex justify-center items-center">
                                            <div class="gradient-text">06</div>
                                        </div>
                                    </div>
                                    <div class="text-white text-base leading-[1.4]">
                                        Tài liệu thực tế, cập nhật liên tục theo dòng tiền và
                                        tình hình kinh tế.
                                    </div>
                                </div>
                            </li>
                            <li class="bg-gradient-to-r from-[#ffc200] to-[#282828] p-px rounded-[10px]"
                                data-aos="slide-left" data-aos-delay="500">
                                <div
                                    class="!py-3 !px-5 bg-gradient-to-r from-[#282828] to-black rounded-[9px] flex items-center justify-start gap-x-7">
                                    <div
                                        class="leading-[1.4] text-[25px] list-item-no-outer rounded-full pt-[1.5px] pl-[1.5px] size-[51px] shrink-0">
                                        <div
                                            class="list-item-no-inner h-full w-full rounded-full flex justify-center items-center">
                                            <div class="gradient-text">07</div>
                                        </div>
                                    </div>
                                    <div class="text-white text-base leading-[1.4]">
                                        Là người đào tạo hiếm hoi tại Việt Nam trong lĩnh vực
                                        tài chính – đầu tư.
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="block text-center md:hidden mt-4 text-base leading-[1.4] text-white"
                            data-aos="fade-up" data-aos-delay="900">
                            Nếu bạn đang tìm kiếm một khóa học đầu tư tài chính dành cho người
                            mới, dễ hiểu và sát thực tế, thì hành trình cùng Phan Hiếu Kỳ là lựa
                            chọn phù hợp.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="chuyen-gia" class="professional section-bg">
            <div class="container mx-auto leading-[1.4] max-w-6xl !px-4 xl:!px-0 pt-16 pb-15 md:pb-20">
                <h2 class="gradient-text text-center text-[30px] lg:text-[40px] mb-2.5 font-semibold tracking-[-2px]"
                    data-aos="fade-up" data-aos-duration="800">
                    CHUYÊN GIA ĐỒNG HÀNH - PHAN HIẾU KỲ
                </h2>
                <div class="!mb-4 text-white text-center text-base max-w-[818px] mx-auto" data-aos="fade-up"
                    data-aos-delay="200">
                    Phan Hiếu Kỳ là Chuyên gia đầu tư tài chính thực chiến – người đứng sau hàng
                    loạt
                    <span style="font-weight: bold">khóa học đầu tư tài chính cá nhân</span>
                    giúp hàng nghìn học viên hiểu và<span style="font-weight: bold">
                        đầu tư thông minh </span>theo từng chu kỳ kinh tế.<br>
                </div>
                <div class="relative">
                    <div class="w-full h-full bg-center bg-cover bg-no-repeat"
                        style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/professional-bottom-bg.png)">
                        <div
                            class="absolute gap-y-4 flex flex-col text-[40px] md:text-6xl lg:text-[100px] right-2/3 lg:right-[60%] top-15 lg:top-10 font-bold">
                            <p class="gradient-text">PHAN</p>
                            <p class="gradient-text !-mt-2 !-ml-5 lg:!-mt-6 lg:!-ml-11 leading-[1.4]">HIẾU</p>
                            <p class="gradient-text !-mt-2 lg:!-mt-3 leading-[1.4]">KỲ</p>
                        </div>

                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/professional-bottom-1.png" alt="" width="567" height="612"
                            class="h-[430px] lg:h-[612px] mx-auto w-auto max-w-full object-cover object-left-top md:object-center">
                        <div class="absolute !top-0 md:!top-5 right-0 lg:right-10 text-white w-[120px] md:w-[320px]"
                            data-aos="fade-right" data-aos-delay="100">
                            <h1
                                class="max-w-[150px] lg:max-w-[unset] text-base lg:text-[30px] leading-[1.2] mb-1 font-bold">
                                Chuyên gia đầu tư tài chính thực chiến <br>
                            </h1>
                            <div class="flex items-center gap-2">
                                <h1 class="text-[40px] lg:text-[60px] gradient-text font-bold">12</h1>
                                <div class="text-sm lg:text-lg leading-[19px] max-w-[143px] lg:max-w-[180px] font-bold">
                                    năm kinh nghiệm <br> đa thị trường<br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative" data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="absolute top-2.5 left-2.5 bg-gradient-to-r from-[#fed245] to-[#ff8212] blur-sm w-full h-full rounded-[28px]">
                    </div>
                    <div class="bg-gradient-to-r from-[#ffc200] to-[#282828] rounded-[30px] p-[2px] relative z-[1]">
                        <div class="bg-gradient-to-r from-[#282828] to-black rounded-[28px]">
                            <div class="!p-5 md:!p-10 lg:!p-[68px] !pb-0 md:!pb-0 lg:!pb-0">
                                <div
                                    class="flex flex-col md:flex-row md:gap-x-5 lg:gap-x-28 text-base text-white leading-[1.4]">
                                    <ul class="list w-full md:w-1/2">
                                        <li class="">
                                            <span style="font-weight: bold">Founder - Người sáng lập Giá Vàng Việt
                                                Nam,</span>
                                            đồng thời là chuyên gia đầu tư thực chiến với hơn 12
                                            năm kinh nghiệm trong các thị trường: vàng, chứng
                                            khoán, forex, crypto và bất động sản.
                                        </li>

                                        <div class="w-full !my-2 !border-0 !border-t border-solid border-[#474747]">
                                        </div>

                                        <li class="">
                                            <span style="font-weight: 700">Tư duy đầu tư theo chu kỳ kinh tế và dòng
                                                tiền: </span>"Thời
                                            nào làm việc đó. Dòng tiền ở đâu – mình ở
                                            đó." – giúp học viên hành động đúng thời điểm, tránh
                                            các sai lầm không đáng có, hạn chế rủi ro và tối ưu
                                            lợi nhuận.
                                        </li>
                                    </ul>
                                    <ul class="list w-full md:w-1/2">
                                        <li class="">
                                            <span style="font-weight: 700">Dẫn dắt hơn 4 khóa học nổi bật</span>
                                            như: ProHackMoney, Vàng Là Dễ, Chạy Nợ – với hàng
                                            nghìn học viên theo học
                                        </li>

                                        <div class="w-full !my-2 !border-0 !border-t border-solid border-[#474747]">
                                        </div>

                                        <li class="">
                                            <span style="font-weight: 700">Từng là giảng viên tại Học viện tài chính
                                                PIRISystem </span>– nơi đào tạo hàng trăm nhà đầu tư trẻ mỗi năm
                                        </li>
                                        <div class="w-full !my-2 !border-0 !border-t border-solid border-[#474747]">
                                        </div>
                                        <li class="">
                                            <span style="font-weight: 700">3 năm quản lý quỹ đầu tư vàng (Gold Fund
                                                Trading) </span>và đào tạo chuyên sâu giao dịch
                                        </li>
                                    </ul>
                                </div>

                                <div
                                    class="max-w-[832px] flex justify-center items-center px-4 py-2 lg:!px-0 lg:!py-0 lg:h-20 mt-10 -mb-0.5 mx-auto rounded-t-[30px] border border-solid !border-[#ffc200] bg-black">
                                    <p
                                        class="max-w-[684px] text-lg leading-[1.4] italic text-center text-[#ffc200] border-0 rounded-none p-0">
                                        Kỳ không chỉ giảng dạy kiến thức, mà còn truyền đạt tư
                                        duy chiến lược thực tế, giúp học viên hành động chính
                                        xác trong từng giai đoạn thị trường.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="danh-gia" class="ratings section-bg">
            <div class="container mx-auto max-w-6xl !px-4 xl:!px-0 pt-11 pb-10">
                <h2 class="max-w-[574px] mx-auto gradient-text text-[30px] lg:text-[40px] text-center mb-2.5 font-semibold tracking-[-2px]"
                    data-aos="fade-up" data-aos-duration="800">
                    HỌC VIÊN NÓI GÌ SAU KHI HỌC CÙNG PHAN HIẾU KỲ?
                </h2>
                <p class="!mb-5 text-white text-center text-base md:text-lg leading-[1.4] mx-auto" data-aos="fade-up"
                    data-aos-delay="200">
                    Kết quả thực tế – Trải nghiệm thực chiến – Tư duy thay đổi rõ rệt
                </p>
                <div>
                    <div class="ratings-carousel-container !mb-5 w-full [&_.slick-list]:w-full [&_.slick-list]:overflow-y-visible relative"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <div class="ratings-cards-wrapper">
                            <button
                                class="ratings-nav-btn ratings-nav-prev absolute -left-0 xl:-left-5 top-1/2 transform -translate-y-1/2 z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 -960 960 960"
                                    width="100%" preserveAspectRatio="none" class="" fill="currentColor">
                                    <path d="M400-80 0-480l400-400 56 57-343 343 343 343-56 57Z"></path>
                                </svg>
                            </button>
                            <button
                                class="ratings-nav-btn ratings-nav-next absolute -right-0 xl:-right-10 top-1/2 transform -translate-y-1/2 z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 -960 960 960"
                                    width="100%" preserveAspectRatio="none" class="" fill="currentColor">
                                    <path d="m304-82-56-57 343-343-343-343 56-57 400 400L304-82Z"></path>
                                </svg>
                            </button>
                            <div class="ratings-cards-container ease-in-out py-2 lg:py-6">
                                <div class="relative w-full xl:w-[360px] px-8 lg:px-8 xl:!px-4">
                                    <div class="bg-white rounded-[20px] !p-4">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-1-item-1.jpg" alt=""
                                            class="w-full aspect-square rounded-[10px] !mb-3 max-h-[236px] object-cover object-center">
                                        <div class="text-center text-base leading-[1.4] text-black">
                                            <span style="font-weight: bold">Đầu tiên, rất chân thành cảm ơn Thầy Kỳ.
                                            </span>Đã<span style="font-weight: bold"> </span>chia sẻ
                                            rất thật và chân thành, qua Prohack Money thực lòng
                                            là chưa đạt được kỳ vọng khi bắt đầu tham gia. Kiến
                                            thức vẫn chưa học được nhiều để tự giao dịch. Hy
                                            vọng được đồng hành cùng thầy và mọi người lâu dài,
                                            Mục đích cuối cùng vẫn là kiếm tiền. Xin cảm ơn!
                                        </div>
                                        <p class="text-center text-[#ffc200] text-lg leading-[1.4] !mt-5">
                                            Anh Mạnh Hùng
                                        </p>
                                    </div>
                                </div>
                                <div class="relative w-full xl:w-[360px] px-8 lg:px-8 xl:!px-4">
                                    <div class="bg-white rounded-[20px] !p-4">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-1-item-2.jpg" alt=""
                                            class="w-full aspect-square rounded-[10px] !mb-3 max-h-[236px] object-cover object-center">

                                        <div class="text-center text-base leading-[1.4] text-black">
                                            <span style="font-weight: bold">Theo mình nghĩ cách vận hành vậy là đang đi
                                                đúng hướng
                                            </span>
                                            và các buổi dạy truyền đạt thay đổi tư duy cho mọi
                                            người như vậy là rất tốt. Đặt biệt là nói đúng sự
                                            thật của vấn đề rất quan trọng. Chúc thầy luôn luôn
                                            thành công và truyền lửa nhiệt huyết cho mọi người.
                                            Thank you very much!
                                        </div>
                                        <p class="text-center text-[#ffc200] text-lg leading-[1.4] !mt-5">
                                            Anh Huỳnh Bá
                                        </p>
                                    </div>
                                </div>
                                <div class="relative w-full xl:w-[360px] px-8 lg:px-8 xl:!px-4">
                                    <div class="bg-white rounded-[20px] !p-4">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-1-item-3.jpg" alt=""
                                            class="w-full aspect-square rounded-[10px] !mb-3 max-h-[236px] object-cover object-center">
                                        <div class="text-center text-base leading-[1.4] text-black">
                                            <span style="font-weight: bold">Ngưỡng mộ những kiến thức và trải nghiệm
                                                đáng
                                                quý mà anh Kỳ có được.
                                            </span>
                                            Đó không chỉ là hành trình làm giàu, mà là hành
                                            trình phát triển nội lực, chiến thắng bản thân mà
                                            bản thân mình cũng đang theo đuổi. Rất biết ơn anh
                                            Kỳ đã giúp đỡ mình trong thời gian qua!
                                        </div>
                                        <p class="text-center text-[#ffc200] text-lg leading-[1.4] !mt-5">
                                            Chị Lê Trang
                                        </p>
                                    </div>
                                </div>
                                <div class="relative w-full xl:w-[360px] px-8 lg:px-8 xl:!px-4">
                                    <div class="bg-white rounded-[20px] !p-4">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-1-item-4.jpg" alt=""
                                            class="w-full aspect-square rounded-[10px] !mb-3 max-h-[236px] object-cover object-center">
                                        <div class="text-center text-base leading-[1.4] text-black">
                                            <span style="font-weight: 700">Đây thực sự là thông tin hữu ích cho tất cả
                                                nhà
                                                đầu tư</span>
                                            về Chu Kỳ Kinh Tế và Dòng Tiền Xoay Vòng của các mô
                                            hình tài sản. <br>Cảm ơn anh Kỳ vì những kiến thức
                                            về phân tích kỹ thuật vô cùng độc đáo để hiểu được
                                            tầm quan trọng trong từng cơn sóng thị trường.<br>
                                        </div>
                                        <p class="text-center text-[#ffc200] text-lg leading-[1.4] !mt-5">
                                            Anh Hoài Phong
                                        </p>
                                    </div>
                                </div>
                                <div class="relative w-full xl:w-[360px] px-8 lg:px-8 xl:!px-4">
                                    <div class="bg-white rounded-[20px] !p-4">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-1-item-5.jpg" alt=""
                                            class="w-full aspect-square rounded-[10px] !mb-3 max-h-[236px] object-cover object-center">
                                        <div class="text-center text-base leading-[1.4] text-black">
                                            <span style="font-weight: 700">Rất có tâm, phân tích kỹ, hay</span>
                                            có điều đôi lúc phải rẽ ngang trả lời các câu hỏi
                                            nên mạch bài giảng bị ngắt làm người nghe cũng quên
                                            luôn vấn đề đang phân tích. uôn cháy hết mình truyền
                                            đạt những kiến thức vốn có, chia sẻ nhiều những thực
                                            trạng mang tính chất luật chơi. Giúp người mới vỡ ra
                                            rất nhiều điều.
                                        </div>
                                        <p class="text-center text-[#ffc200] text-lg leading-[1.4] !mt-5">
                                            Chị Thảo Lê
                                        </p>
                                    </div>
                                </div>
                                <div class="relative w-full xl:w-[360px] px-8 lg:px-8 xl:!px-4">
                                    <div class="bg-white rounded-[20px] !p-4">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-1-item-6.jpg" alt=""
                                            class="w-full aspect-square rounded-[10px] !mb-3 max-h-[236px] object-cover object-center">
                                        <div class="text-center text-base leading-[1.4] text-black">
                                            <span style="font-weight: bold">Anh Kỳ là người từng trải, những bài học của
                                                anh được đúc kết và nói thẳng sự thật để ít mất
                                                tiền hơn, </span>giữ tiền rồi mới kiếm được tiền. Suốt hơn 3 tháng
                                            đồng hành học tập, tình hình tài chính cá nhân của
                                            mình và team đã cải thiện dần hơn và từng bước cho
                                            hành trình tích lũy tài sản trong từng mỗi chu kỳ
                                            kinh tế & tài chính. Thực sự biết ơn.
                                        </div>
                                        <p class="text-center text-[#ffc200] text-lg leading-[1.4] !mt-5">
                                            Anh Ros Phạm
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-carousel-container !mb-5 w-full relative" data-aos="fade-up"
                        data-aos-duration="800" data-aos-delay="600">
                        <!-- Cards Container -->
                        <div class="testimonial-cards-wrapper">
                            <button
                                class="testimonial-nav-btn testimonial-nav-prev absolute -left-1 lg:-left-5 top-1/2 transform -translate-y-1/2 z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 -960 960 960"
                                    width="100%" preserveAspectRatio="none" class="" fill="currentColor">
                                    <path d="M400-80 0-480l400-400 56 57-343 343 343 343-56 57Z"></path>
                                </svg>
                            </button>
                            <button
                                class="testimonial-nav-btn testimonial-nav-next absolute -right-1 lg:-right-10 top-1/2 transform -translate-y-1/2 z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 -960 960 960"
                                    width="100%" preserveAspectRatio="none" class="" fill="currentColor">
                                    <path d="m304-82-56-57 343-343-343-343 56-57 400 400L304-82Z"></path>
                                </svg>
                            </button>
                            <div
                                class="testimonial-cards-container  transition-transform duration-300 ease-in-out py-2 lg:py-6">
                                <div class="relative w-full xl:w-[292px] !px-6 lg:!px-5 xl:!px-1">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-2-item-1.jpg" alt=""
                                        class="w-full h-[638px] object-cover object-center">
                                </div>
                                <div class="relative w-full xl:w-[292px] !px-6 lg:!px-5 xl:!px-1">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-2-item-2.jpg" alt=""
                                        class="w-full h-[638px] object-cover object-center">
                                </div>

                                <div class="relative w-full xl:w-[292px] !px-6 lg:!px-5 xl:!px-1">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-2-item-3.jpg" alt=""
                                        class="w-full h-[638px] object-cover object-center">
                                </div>
                                <div class="relative w-full xl:w-[292px] !px-6 lg:!px-5 xl:!px-1">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-2-item-4.jpg" alt=""
                                        class="w-full h-[638px] object-cover object-center">
                                </div>
                                <div class="relative w-full xl:w-[292px] !px-6 lg:!px-5 xl:!px-1">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-2-item-5.jpg" alt=""
                                        class="w-full h-[638px] object-cover object-center">
                                </div>
                                <div class="relative w-full xl:w-[292px] !px-6 lg:!px-5 xl:!px-1">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-2-item-6.jpg" alt=""
                                        class="w-full h-[638px] object-cover object-center">
                                </div>
                                <div class="relative w-full xl:w-[292px] !px-6 lg:!px-5 xl:!px-1">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-2-item-7.jpg" alt=""
                                        class="w-full h-[638px] object-cover object-center">
                                </div>
                                <div class="relative w-full xl:w-[292px] !px-6 lg:!px-5 xl:!px-1">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rating-carousel-2-item-8.jpg" alt=""
                                        class="w-full h-[638px] object-cover object-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="roadmap section-bg">
            <div class="container mx-auto leading-[1.4] text-center max-w-6xl !px-4 xl:!px-0 pt-16 pb-20">
                <h1 class="!pb-3 gradient-text text-[30px] lg:text-[40px] font-semibold tracking-[-2px]"
                    data-aos="fade-up" data-aos-duration="800">
                    HÀNH TRÌNH THỰC TẾ CÙNG HỌC VIÊN
                </h1>
                <p class="mx-auto lg:w-[730px] !mb-4 text-base lg:text-lg text-white" data-aos="fade-up"
                    data-aos-delay="200">
                    Khoảnh khắc chân thật từ các buổi học, workshop và hoạt động cộng đồng.
                </p>

                <div class="grid grid-cols-2 lg:grid-cols-4 grid-rows-4 lg:grid-rows-[314px_81px_314px] gap-x-2.5 gap-y-3"
                    data-aos="fade-up" data-aos-delay="400">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/roadmap-1.jpg" alt="" height="405.4"
                        class="h-full w-full object-cover object-center lg:row-span-2 col-span-1 order-4 lg:!order-[unset]"
                        data-aos="zoom-in" data-aos-delay="500">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/roadmap-2.jpg" alt="" height="405.4"
                        class="h-full w-full object-cover object-center lg:row-span-2 col-span-1 order-3 lg:!order-[unset]"
                        data-aos="zoom-in" data-aos-delay="600">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/roadmap-4.jpg" alt="" height="405.4"
                        class="h-full w-full object-cover object-center lg:row-span-1 col-span-2 row-[1/span_1]"
                        data-aos="zoom-in" data-aos-delay="700">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/roadmap-3.jpg" alt="" height="405.4"
                        class="h-full w-full object-cover object-center lg:row-span-1 col-span-2 row-[2/span_1] lg:row-start-3"
                        data-aos="zoom-in" data-aos-delay="800">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/roadmap-5.jpg" alt="" height="405.4"
                        class="h-full w-full object-cover object-center lg:row-span-2 col-span-1 order-2 lg:!order-[unset]"
                        data-aos="zoom-in" data-aos-delay="900">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/roadmap-6.jpg" alt="" height="405.4"
                        class="h-full w-full object-cover object-center lg:row-span-2 col-span-1 order-1 lg:!order-[unset]"
                        data-aos="zoom-in" data-aos-delay="1000">
                </div>
            </div>
        </section>

        <section id="tin-tuc" class="news section-bg">
            <div class="container mx-auto leading-[1.4] max-w-6xl !px-4 xl:!px-0 pt-16 pb-20">
                <h1 class="!pb-3 gradient-text text-center text-[30px] lg:text-[40px] font-semibold tracking-[-2px]"
                    data-aos="fade-up" data-aos-duration="800">
                    TIN TỨC - KIẾN THỨC
                </h1>
                <div
                    class="flex-wrap flex justify-center lg:!flex-nowrap lg:justify-start gap-x-5 gap-y-5 md:gap-x-6 lg:gap-x-[50px]">
                    <a class="flex flex-col w-full md:w-2/5 lg:w-1/3 cursor-pointer rounded-[20px] overflow-hidden"
                        href="https://phanhieuky.com/tin-tuc/2901-vang-dang-o-giai-doan-nuoc-rut-giu-ky-luat-quan-trong-hon-du-doan-dinh"
                        target="_self" rel="" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/2901-vang-dang-o-giai-doan-nuoc-rut-giu-ky-luat-quan-trong-hon-du-doan-dinh-1769746709.jpg"
                            height="252"
                            alt="29/01 - Vàng đang ở giai đoạn nước rút. Giữ kỷ luật quan trọng hơn dự đoán đỉnh"
                            class="w-full h-[252px] object-cover object-center">
                        <div class="flex-auto bg-white pt-3 px-6 pb-7">
                            <p class="text-sm leading-[1.6] flex items-center gap-x-px !mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 -960 960 960"
                                    width="100%" preserveAspectRatio="none" class="size-[22px]"
                                    fill="rgb(117, 117, 117)">
                                    <path
                                        d="M592-302 450-444v-196h60v171l124 124-42 43ZM450-730v-90h60v90h-60Zm280 280v-60h90v60h-90ZM450-140v-90h60v90h-60ZM140-450v-60h90v60h-90ZM480.27-80q-82.74 0-155.5-31.5Q252-143 197.5-197.5t-86-127.34Q80-397.68 80-480.5t31.5-155.66Q143-709 197.5-763t127.34-85.5Q397.68-880 480.5-880t155.66 31.5Q709-817 763-763t85.5 127Q880-563 880-480.27q0 82.74-31.5 155.5Q817-252 763-197.68q-54 54.31-127 86Q563-80 480.27-80Zm.23-60Q622-140 721-239.5t99-241Q820-622 721.19-721T480-820q-141 0-240.5 98.81T140-480q0 141 99.5 240.5t241 99.5Zm-.5-340Z">
                                    </path>
                                </svg>
                                <span>30/01/2026</span>
                            </p>
                            <p class="text-base leading-[1.4] text-black mb-4 text-truncate-line-3">
                                Giá vàng vẫn đang duy trì trạng thái nước rút liên tục từ tuần trước sang tuần này.
                                Nhịp tăng nhanh và dốc khiến thị tr...
                            </p>
                            <span
                                class="text-base leading-[1.6] block w-fit ml-auto text-[#fdb814] italic border-0 p-0 underline transition-all duration-200 hover:scale-125 hover:text-black">
                                Đọc chi tiết
                            </span>
                        </div>
                    </a>
                    <a class="flex flex-col w-full md:w-2/5 lg:w-1/3 cursor-pointer rounded-[20px] overflow-hidden"
                        href="https://phanhieuky.com/tin-tuc/2801-da-den-giai-doan-ha-ty-trong-vang-chien-luoc-quan-tri-loi-nhuan-ngan-han"
                        target="_self" rel="" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/2801-da-den-giai-doan-ha-ty-trong-vang-chien-luoc-quan-tri-loi-nhuan-ngan-han-1769745572.jpg"
                            height="252"
                            alt="28/01 - Đã đến giai đoạn hạ tỷ trọng vàng. Chiến lược quản trị lợi nhuận ngắn hạn"
                            class="w-full h-[252px] object-cover object-center">
                        <div class="flex-auto bg-white pt-3 px-6 pb-7">
                            <p class="text-sm leading-[1.6] flex items-center gap-x-px !mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 -960 960 960"
                                    width="100%" preserveAspectRatio="none" class="size-[22px]"
                                    fill="rgb(117, 117, 117)">
                                    <path
                                        d="M592-302 450-444v-196h60v171l124 124-42 43ZM450-730v-90h60v90h-60Zm280 280v-60h90v60h-90ZM450-140v-90h60v90h-60ZM140-450v-60h90v60h-90ZM480.27-80q-82.74 0-155.5-31.5Q252-143 197.5-197.5t-86-127.34Q80-397.68 80-480.5t31.5-155.66Q143-709 197.5-763t127.34-85.5Q397.68-880 480.5-880t155.66 31.5Q709-817 763-763t85.5 127Q880-563 880-480.27q0 82.74-31.5 155.5Q817-252 763-197.68q-54 54.31-127 86Q563-80 480.27-80Zm.23-60Q622-140 721-239.5t99-241Q820-622 721.19-721T480-820q-141 0-240.5 98.81T140-480q0 141 99.5 240.5t241 99.5Zm-.5-340Z">
                                    </path>
                                </svg>
                                <span>30/01/2026</span>
                            </p>
                            <p class="text-base leading-[1.4] text-black mb-4 text-truncate-line-3">
                                Sau nhịp tăng mạnh vừa qua, thị trường vàng đang bước vào giai đoạn cần quản trị rủi ro
                                và
                                bảo toàn lợi nhuận.
                                Với nhữn...
                            </p>
                            <span
                                class="text-base leading-[1.6] block w-fit ml-auto text-[#fdb814] italic border-0 p-0 underline transition-all duration-200 hover:scale-125 hover:text-black">
                                Đọc chi tiết
                            </span>
                        </div>
                    </a>
                    <a class="flex flex-col w-full md:w-2/5 lg:w-1/3 cursor-pointer rounded-[20px] overflow-hidden"
                        href="https://phanhieuky.com/tin-tuc/2601-nen-chuan-bi-ban-vang-cho-tuan-nay" target="_self"
                        rel="" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/2601-nen-chuan-bi-ban-vang-cho-tuan-nay-1769421494.webp" height="252"
                            alt="26/01 - Nên chuẩn bị bán vàng cho tuần này??"
                            class="w-full h-[252px] object-cover object-center">
                        <div class="flex-auto bg-white pt-3 px-6 pb-7">
                            <p class="text-sm leading-[1.6] flex items-center gap-x-px !mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 -960 960 960"
                                    width="100%" preserveAspectRatio="none" class="size-[22px]"
                                    fill="rgb(117, 117, 117)">
                                    <path
                                        d="M592-302 450-444v-196h60v171l124 124-42 43ZM450-730v-90h60v90h-60Zm280 280v-60h90v60h-90ZM450-140v-90h60v90h-60ZM140-450v-60h90v60h-90ZM480.27-80q-82.74 0-155.5-31.5Q252-143 197.5-197.5t-86-127.34Q80-397.68 80-480.5t31.5-155.66Q143-709 197.5-763t127.34-85.5Q397.68-880 480.5-880t155.66 31.5Q709-817 763-763t85.5 127Q880-563 880-480.27q0 82.74-31.5 155.5Q817-252 763-197.68q-54 54.31-127 86Q563-80 480.27-80Zm.23-60Q622-140 721-239.5t99-241Q820-622 721.19-721T480-820q-141 0-240.5 98.81T140-480q0 141 99.5 240.5t241 99.5Zm-.5-340Z">
                                    </path>
                                </svg>
                                <span>26/01/2026</span>
                            </p>
                            <p class="text-base leading-[1.4] text-black mb-4 text-truncate-line-3">
                                Khả năng cao trong tuần này thị trường vàng sẽ xuất hiện điểm bán.
                                Đây không phải là nhận định cảm tính, mà đến từ việc...
                            </p>
                            <span
                                class="text-base leading-[1.6] block w-fit ml-auto text-[#fdb814] italic border-0 p-0 underline transition-all duration-200 hover:scale-125 hover:text-black">
                                Đọc chi tiết
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Modal Feedback -->
        <div id="feedback-modal"
            class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center z-[99999]">
            <div class="bg-white rounded-lg p-6 max-w-[500px] w-full mx-4 max-h-[90vh] overflow-hidden">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl text-[#0057E4]">Feedback từ học viên</h3>
                    <button id="close-modal" class="text-gray-500 hover:text-gray-700 text-3xl font-bold">
                        ×
                    </button>
                </div>
                <!-- Loading indicator -->
                <div id="feedback-loading" class="flex items-center justify-center h-[400px]">
                    <div class="flex flex-col items-center">
                        <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-[#0057E4] mb-4"></div>
                        <p class="text-gray-600">Đang tải feedback...</p>
                    </div>
                </div>
                <div class="feedback-slider" style="display: none">
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/1.jpg"
                            alt="Feedback 1"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/2.jpg"
                            alt="Feedback 2"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/3.jpg"
                            alt="Feedback 3"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/4.jpg"
                            alt="Feedback 4"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/5.jpg"
                            alt="Feedback 5"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/6.jpg"
                            alt="Feedback 6"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/7.jpg"
                            alt="Feedback 7"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/8.jpg"
                            alt="Feedback 8"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/9.jpg"
                            alt="Feedback 9"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/10.jpg"
                            alt="Feedback 10"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/11.jpg"
                            alt="Feedback 11"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                    <div class="feedback-item">
                        <img src="https://phanhieuky.com/public/assets/frontend/trainer-hieu/assets/images/feedback/12.jpg"
                            alt="Feedback 12"
                            class="w-full max-h-[500px] object-contain h-auto rounded-lg feedback-image">
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();