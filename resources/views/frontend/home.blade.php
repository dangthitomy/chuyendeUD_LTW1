
@extends('layouts.site')
@section('title', 'Trang chủ')
@section( 'content')
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        MOC@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        0905 649 073
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.html" class="nav-item nav-link active">Trang chủ</a>
                            <a href="product.html" class="nav-item nav-link">Sản phẩm</a>
                            <a href="product_detail.html" class="nav-item nav-link">Chi tiết sản phẩm</a>
                            <a href="cart.html" class="nav-item nav-link">Giỏ hàng</a>
                            <a href="checkout.html" class="nav-item nav-link">Thanh toán</a>
                            <a href="my-account.html" class="nav-item nav-link">Tài khoản</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Thêm</a>
                                <div class="dropdown-menu">
                                    <!-- <a href="wishlist.html" class="dropdown-item">Wishlist</a> -->
                                    <a href="login.html" class="dropdown-item">Đăng nhập & Đăng ký</a>
                                    <a href="contact.html" class="dropdown-item">Liên hệ với chúng tôi</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tài khoản người dùng</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Đăng nhập</a>
                                    <a href="#" class="dropdown-item">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Tìm kiếm">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Bán chạy nhất</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>Hàng mới</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Thời trang</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Quần áo nam & nữ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Phụ kiện</a>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <x-slider/>
                            </div>
                            {{-- <div class="header-slider-item">
                                <img src="img/slider-2.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                 <p>Hãy mua những gì bạn thích</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Mua ngay</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-3.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                 <p>Hãy mua những gì bạn thích</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Mua ngay</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        {{-- <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div> --}}
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Thanh toán</h2>
                            <p>
                                Liên kết với ngân hàng của bạn
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Giao hàng toàn quốc</h2>
                            <p>
                                Giao hàng nhanh chóng
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>Hoàn trả</h2>
                            <p>
                                Hoàn trả trong vòng 90 ngày
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>Hỗ trợ 24/7</h2>
                            <p>
                               Luôn hỗ trợ khách hàng 24/7
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <!-- <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-3.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/category-4.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/category-5.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/category-6.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/category-7.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-8.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Liên hệ cho chúng tôi nếu bạn có bất kỳ thắc mắc nào</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0905649073">0905 649 073</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
       
        <!-- Featured Product End -->       
        
        <!-- Newsletter Start -->
        <!-- <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Subscribe Our Newsletter</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <input type="email" value="Your email here">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Newsletter End -->        
        
        <!-- Recent Product Start -->
      <x-flash-sale/>
      <x-product-new/>
        <!-- Recent Product End -->
        
        <!-- Review Start -->
        <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    {{-- <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-1.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>NEW</h2>
                                
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div> --}}
                   <x-last-post/>
                   
                </div>
            </div>
        </div>
        <!-- Review End -->        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Liên hệ</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>235F,Đình Phong Phú, Tăng Nhơn Phú B,TP.Thủ Đức, TP.HCM</p>
                                <p><i class="fa fa-envelope"></i>MOC@gmail.com</p>
                                <p><i class="fa fa-phone"></i>0905 649 073</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Theo dõi</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Thông tin cửa hàng</h2>
                            <ul>
                                <li><a href="#">Về chúng tôi</a></li>
                                <li><a href="#">Chính sách quyền riêng tư</a></li>
                                <li><a href="#">Điều khoản & Điều kiện</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Thông tin mua hàng</h2>
                            <ul>
                                <li><a href="#">Chính sách đổi trả</a></li>
                                <li><a href="#">Chính sách vận chuyển</a></li>
                                <li><a href="#">Chính sách thanh toán</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>Chúng tôi đồng ý:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Được đảm bảo bởi:</h2>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; MOC. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p><a href="https://htmlcodex.com"></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        @endsection
        @section('header')
        <link rel="stylesheet" href="home.css">
        @endsection
