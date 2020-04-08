@extends('master')
@section('content')

    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Produk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area  border_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                            <div class="l_w_title">
                                <h3>Cari Kategori</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="{{route('produk_pria')}}">Pakaian Pria</a>
                                    </li>
                                    <li>
                                        <a href="{{route('produk_wanita')}}">Pakaian Wanita</a>
                                    </li>
                                    <li>
                                        <a href="{{route('produk_anak')}}">Pakaian Anak</a>
                                    </li>
                                    <li>
                                        <a href="{{route('produk_sepatu')}}">Sepatu</a>
                                    </li>
                                    <li>
                                        <a href="{{route('produk_tas')}}">Tas</a>
                                    </li>
                                    <li class="sub-menu">
                                        <a href="#" class=" d-flex justify-content-between">
                                            Aksesoris
                                            <div class="right ti-plus"></div>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{route('produk_topi')}}">Topi</a>
                                            </li>
                                            <li>
                                                <a href="{{route('produk_gelang')}}">Gelang</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu product_bar_item">
                                    <h2>Produk</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/category/category_2.png" alt="">
                                    <div class="category_social_icon">
                                        <ul>
                                            <li><a href="#"><i class="ti-eye"></i></a></li>
                                            <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="category_product_text">
                                        <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                        <p>$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/category/category_6.png" alt="">
                                    <div class="category_social_icon">
                                        <ul>
                                            <li><a href="#"><i class="ti-eye"></i></a></li>
                                            <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="category_product_text">
                                        <a href="single-product.html"><a href="single-product.html"><h5>Long Sleeve TShirt</h5></a></a>
                                        <p>$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/category/category_8.png" alt="">
                                    <div class="category_social_icon">
                                        <ul>
                                            <li><a href="#"><i class="ti-eye"></i></a></li>
                                            <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="category_product_text">
                                        <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                        <p>$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/category/category_12.png" alt="">
                                    <div class="category_social_icon">
                                        <ul>
                                            <li><a href="#"><i class="ti-eye"></i></a></li>
                                            <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="category_product_text">
                                        <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                        <p>$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <a href="#" class="btn_2">More Items</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->

<!-- free shipping here -->
<section class="shipping_details section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="img/icon/login.png" alt="">
                    <h4>Masuk/Daftar Akun</h4>
                    <p>Untuk Melanjutkan Transaksi anda harus Masuk atau Daftar akun terlebih dahulu</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="img/icon/checklist.png" alt="">
                    <h4>Pilih Produk</h4>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="img/icon/icon_3.png" alt="">
                    <h4>Lakukan pembayaran</h4>
                    <p>Pembayaran bisa melalui Transfer Bank, Kemudian Upload bukti pembayaran.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_shopping_details">
                    <img src="img/icon/product.png" alt="">
                    <h4>Produk dikirim</h4>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- free shipping end -->
    
    @endsection