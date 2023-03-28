@extends('user.layouts.master')
@section('content')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div
                    class="banner_content d-md-flex justify-content-between align-items-center"
                >
                    <div class="mb-3 mb-md-0">
                        <h2>Giỏ hàng</h2>
                        <p>Hãy mua sắm hợp lý theo tài chính của bạn</p>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Trang chủ</a>
                        <a href="cart.html">Giỏ hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img width="100px"
                                            src="./user/img/demo.jpg"
                                            alt=""
                                        />
                                    </div>
                                    <div class="media-body">
                                        <p>Minimalistic shop for multipurpose use</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>1.000.000 vnđ</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input
                                        type="text"
                                        name="qty"
                                        id="sst"
                                        maxlength="12"
                                        value="1"
                                        title="Quantity:"
                                        class="input-text qty"
                                    />
{{--                                    <button--}}
{{--                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"--}}
{{--                                        class="increase items-count"--}}
{{--                                        type="button"--}}
{{--                                    >--}}
{{--                                        <i class="lnr lnr-chevron-up"></i>--}}
{{--                                    </button>--}}
{{--                                    <button--}}
{{--                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"--}}
{{--                                        class="reduced items-count"--}}
{{--                                        type="button"--}}
{{--                                    >--}}
{{--                                        <i class="lnr lnr-chevron-down"></i>--}}
{{--                                    </button>--}}
                                </div>
                            </td>
                            <td>
                                <h5>1.000.000 vnđ</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img width="100px"
                                             src="./user/img/demo.jpg"
                                             alt=""
                                        />
                                    </div>
                                    <div class="media-body">
                                        <p>Minimalistic shop for multipurpose use</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>1.000.000 vnđ</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input
                                        type="text"
                                        name="qty"
                                        id="sst"
                                        maxlength="12"
                                        value="1"
                                        title="Quantity:"
                                        class="input-text qty"
                                    />
                                    {{--                                    <button--}}
                                    {{--                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"--}}
                                    {{--                                        class="increase items-count"--}}
                                    {{--                                        type="button"--}}
                                    {{--                                    >--}}
                                    {{--                                        <i class="lnr lnr-chevron-up"></i>--}}
                                    {{--                                    </button>--}}
                                    {{--                                    <button--}}
                                    {{--                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"--}}
                                    {{--                                        class="reduced items-count"--}}
                                    {{--                                        type="button"--}}
                                    {{--                                    >--}}
                                    {{--                                        <i class="lnr lnr-chevron-down"></i>--}}
                                    {{--                                    </button>--}}
                                </div>
                            </td>
                            <td>
                                <h5>1.000.000 vnđ</h5>
                            </td>
                        </tr>
                        <tr class="bottom_button">
                            <td>
                                <a class="gray_btn" href="#">Cập nhật giỏ hàng</a>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
{{--                                <div class="cupon_text">--}}
{{--                                    <input type="text" placeholder="Coupon Code" />--}}
{{--                                    <a class="main_btn" href="#">Apply</a>--}}
{{--                                    <a class="gray_btn" href="#">Close Coupon</a>--}}
{{--                                </div>--}}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Thành tiền</h5>
                            </td>
                            <td>
                                <h5>1.000.000 vnđ</h5>
                            </td>
                        </tr>
{{--                        <tr class="shipping_area">--}}
{{--                            <td></td>--}}
{{--                            <td></td>--}}
{{--                            <td>--}}
{{--                                <h5>Shipping</h5>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <div class="shipping_box">--}}
{{--                                    <ul class="list">--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Flat Rate: $5.00</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Free Shipping</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Flat Rate: $10.00</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="active">--}}
{{--                                            <a href="#">Local Delivery: $2.00</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <h6>--}}
{{--                                        Calculate Shipping--}}
{{--                                        <i class="fa fa-caret-down" aria-hidden="true"></i>--}}
{{--                                    </h6>--}}
{{--                                    <select class="shipping_select">--}}
{{--                                        <option value="1">Bangladesh</option>--}}
{{--                                        <option value="2">India</option>--}}
{{--                                        <option value="4">Pakistan</option>--}}
{{--                                    </select>--}}
{{--                                    <select class="shipping_select">--}}
{{--                                        <option value="1">Select a State</option>--}}
{{--                                        <option value="2">Select a State</option>--}}
{{--                                        <option value="4">Select a State</option>--}}
{{--                                    </select>--}}
{{--                                    <input type="text" placeholder="Postcode/Zipcode" />--}}
{{--                                    <a class="gray_btn" href="#">Update Details</a>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
                        <tr class="out_button_area">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="checkout_btn_inner">
                                    <a class="gray_btn" href="#">Tiếp tục mua sắm</a>
                                    <a class="main_btn" href="#">Tiến hành thanh toán</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
