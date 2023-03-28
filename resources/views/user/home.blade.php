@extends('user.layouts.master')
@section('content')
    <section class="home_banner_area mb-40">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-12">
                        <p class="sub text-uppercase">Nước hoa nam</p>
                        <h3><span>Thể hiện</span> Phong cách <br />Riêng <span>Của bạn</span></h3>
                        <h4>Hãy để chúng tôi giúp bạn!</h4>
                        <a class="main_btn mt-40" href="#">Xem bộ sưu tập</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!-- Start feature Area -->
    <section class="feature-area section_gap_bottom_custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-money"></i>
                            <h3>ĐẢM BẢO HOÀN LẠI TIỀN</h3>
                        </a>
                        <p>100% khi không đạt yêu cầu</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-truck"></i>
                            <h3>GIAO HÀNG MIỄN PHÍ</h3>
                        </a>
                        <p>Toàn quốc</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-support"></i>
                            <h3>Hỗ trợ khách hàng</h3>
                        </a>
                        <p>Mọi lúc, mọi nơi</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-blockchain"></i>
                            <h3>Bảo mật thông tin</h3>
                        </a>
                        <p>Bảo mật mọi thông tin thanh toán</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!--================ Feature Product Area =================-->
    <section class="feature_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Sản phẩm nổi bật</span></h2>
                        <p>Mang lại chất lượng tốt nhất cho khách hàng</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Nước Hoa Nam Jean Paul Gaultter Le Beau</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">1.000.000vnđ</span>
                                <del>1.500.000vnd</del>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Nước Hoa Nam Jean Paul Gaultter Le Beau</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">1.000.000vnđ</span>
                                <del>1.500.000vnd</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Nước Hoa Nam Jean Paul Gaultter Le Beau</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">1.000.000vnđ</span>
                                <del>1.500.000vnd</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Feature Product Area =================-->

    <!--================ Offer Area =================-->
    <section class="offer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="offset-lg-4 col-lg-6 text-center">
                    <div class="offer_content">
                        <h3 class="text-uppercase mb-40">Tất cả bộ sưu tập cho nữ</h3>
                        <h2 class="text-uppercase">Giảm 50%</h2>
                        <a href="#" class="main_btn mb-20 mt-5">Khám phá ngay</a>
                        <p>Thời gian có hạn</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Offer Area =================-->

    <!--================ New Product Area =================-->
    <section class="new_product_area section_gap_top section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Sản phẩm mới</span></h2>
                        <p> Không một ai chán nản khi họ đang cố gắng tạo ra thứ gì đó đẹp đẽ, hoặc khám phá ra một sự thật nào đó.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="new_product">
                        <h5 class="text-uppercase">Bộ sưu tập 2023</h5>
                        <h3 class="text-uppercase">Nước hoa cho nam và nữ</h3>
                        <div class="product-img">
                            <img class="img-fluid" src="./user/img/demo.jpg" alt="" />
                        </div>
                        <h4>1.000.000 vnđ</h4>
                        <a href="#" class="main_btn">Thêm vào giỏ hàng</a>
                    </div>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product">
                                <div class="product-img">
                                    <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-btm">
                                    <a href="#" class="d-block">
                                        <h4>Jean Paul Gaultter</h4>
                                    </a>
                                    <div class="mt-3">
                                        <span class="mr-4">1.000.000 vnđ</span>
                                        <del>1.000.000 vnđ</del>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-product">
                                <div class="product-img">
                                    <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-btm">
                                    <a href="#" class="d-block">
                                        <h4>Jean Paul Gaultter</h4>
                                    </a>
                                    <div class="mt-3">
                                        <span class="mr-4">1.000.000 vnđ</span>
                                        <del>1.000.000 vnđ</del>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-product">
                                <div class="product-img">
                                    <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-btm">
                                    <a href="#" class="d-block">
                                        <h4>Jean Paul Gaultter</h4>
                                    </a>
                                    <div class="mt-3">
                                        <span class="mr-4">1.000.000 vnđ</span>
                                        <del>1.000.000 vnđ</del>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-product">
                                <div class="product-img">
                                    <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-btm">
                                    <a href="#" class="d-block">
                                        <h4>Jean Paul Gaultter</h4>
                                    </a>
                                    <div class="mt-3">
                                        <span class="mr-4">1.000.000 vnđ</span>
                                        <del>1.000.000 vnđ</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End New Product Area =================-->

    <!--================ Inspired Product Area =================-->
    <section class="inspired_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>sản phẩm truyền cảm hứng</span></h2>
                        <p>Những sản phẩm mang cảm hứng mãnh liệt cho người dùng</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>X-Men</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">1.000.000 vnđ</span>
                                <del>1.000.000 vnđ</del>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>X-Men</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">1.000.000 vnđ</span>
                                <del>1.000.000 vnđ</del>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>X-Men</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">1.000.000 vnđ</span>
                                <del>1.000.000 vnđ</del>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>X-Men</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">1.000.000 vnđ</span>
                                <del>1.000.000 vnđ</del>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>X-Men</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">1.000.000 vnđ</span>
                                <del>1.000.000 vnđ</del>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>X-Men</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">1.000.000 vnđ</span>
                                <del>1.000.000 vnđ</del>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>X-Men</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">1.000.000 vnđ</span>
                                <del>1.000.000 vnđ</del>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="./user/img/demo.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>X-Men</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">1.000.000 vnđ</span>
                                <del>1.000.000 vnđ</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Inspired Product Area =================-->

    <!--================ Start Blog Area =================-->
{{--    <section class="blog-area section-gap">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="main_title">--}}
{{--                        <h2><span>latest blog</span></h2>--}}
{{--                        <p>Bring called seed first of third give itself now ment</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-blog">--}}
{{--                        <div class="thumb">--}}
{{--                            <img class="img-fluid" src="img/b1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="short_details">--}}
{{--                            <div class="meta-top d-flex">--}}
{{--                                <a href="#">By Admin</a>--}}
{{--                                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>--}}
{{--                            </div>--}}
{{--                            <a class="d-block" href="single-blog.html">--}}
{{--                                <h4>Ford clever bed stops your sleeping--}}
{{--                                    partner hogging the whole</h4>--}}
{{--                            </a>--}}
{{--                            <div class="text-wrap">--}}
{{--                                <p>--}}
{{--                                    Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light--}}
{{--                                    Forth.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-blog">--}}
{{--                        <div class="thumb">--}}
{{--                            <img class="img-fluid" src="img/b2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="short_details">--}}
{{--                            <div class="meta-top d-flex">--}}
{{--                                <a href="#">By Admin</a>--}}
{{--                                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>--}}
{{--                            </div>--}}
{{--                            <a class="d-block" href="single-blog.html">--}}
{{--                                <h4>Ford clever bed stops your sleeping--}}
{{--                                    partner hogging the whole</h4>--}}
{{--                            </a>--}}
{{--                            <div class="text-wrap">--}}
{{--                                <p>--}}
{{--                                    Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light--}}
{{--                                    Forth.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-blog">--}}
{{--                        <div class="thumb">--}}
{{--                            <img class="img-fluid" src="img/b3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="short_details">--}}
{{--                            <div class="meta-top d-flex">--}}
{{--                                <a href="#">By Admin</a>--}}
{{--                                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>--}}
{{--                            </div>--}}
{{--                            <a class="d-block" href="single-blog.html">--}}
{{--                                <h4>Ford clever bed stops your sleeping--}}
{{--                                    partner hogging the whole</h4>--}}
{{--                            </a>--}}
{{--                            <div class="text-wrap">--}}
{{--                                <p>--}}
{{--                                    Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light--}}
{{--                                    Forth.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
