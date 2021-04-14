@extends('layout.head')
@section('body')
<body>
<div>
        <nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-dark navbar-inverse">
            <div class="topheader1">
                <div class="loginin">
                    <li class="donmua">
                        <i class="fas fa-shopping-cart"></i>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <img src="{{asset('bootstrap/image/noithatphongngu.jpg')}}" class="align-self-start mr-3" style="width:20%">
                                        <div class="media-body">
                                            <div>Name Shop</div>
                                            <p>Name product</p>
                                        </div>
                                    </div>
                                </a>
                                <hr>
                            </li>
                            <a href="" class="btn btn-dark mr-2 mt-2">Xem giỏ hàng</a>
                            
                        </ul>
                    </li>
                    <li class="info">
                        <i class="fas fa-user mr-1"> </i>
                        <ul class="sub-menu">
                            <li><a href="#">Tài khoản của tôi</a></li>
                            <li><a href="#">Đơn mua</a></li>
                            <li><a href="#">Đăng xuất</a></li>
                        </ul>
                        <a href="/webnoithat/public/khachhang/donmua">Name User</a>
                    </li>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md bg-light">
            <img src="{{asset('bootstrap/image/EasyAccomod.png')}}" alt="" width="220px" class="ml-5 mt-5">
            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon navbar-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SẢN PHẨM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">QUÀ TẶNG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TIN TỨC</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    @yield('section')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="diachi">
                        <img src="{{asset('bootstrap/image/EasyAccomod.png')}}" alt="">
                        <h6><i class="fas fa-map-marker-alt"></i> 144 - Xuân Thuỷ - Cầu Giấy - Hà Nội</h6>
                        <h6><i class="fas fa-mobile-alt"></i> 0353000112 - 056710100</h6>
                        <h6><i class="far fa-envelope"></i> trannhung1234@gmail.com</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <div class="taikhoan">
                        <div class="td_footer">TÀI KHOẢN</div>
                        <h6>Tìm kiếm</h6>
                        <h6>Đăng ký</h6>
                        <h6>Đăng nhập</h6>
                        <h6>Giỏ hàng</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-7">
                    <div class="chinhsach">
                        <div class="td_footer">CHÍNH SÁCH</div>
                        <h6>Chính sách thanh toán</h6>
                        <h6>Chính sách vận chuyển</h6>
                        <h6>Chính sách đổi trả</h6>
                        <h6>Chính sách bảo hành</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-5">
                    <div class="dieukhoan">
                        <div class="td_footer">ĐIỀU KHOẢN</div>
                        <h6>Điều khoản sử dụng</h6>
                        <h6>Điều khoản</h6>
                        <h6>Chính sách đổi trả</h6>
                        <h6>Chính sách bảo hành</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="dieukhoan">
                        <div class="td_footer">HƯỚNG DẪN</div>
                        <h6>Hướng dẫn mua hàng</h6>
                        <h6>Giao nhận, thanh toán</h6>
                        <h6>Đổi trả và bảo hành</h6>
                        <h6>Đổi trả và bảo hành</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                &copy; Bản quyền thuộc về .... 2005-2020 | Cung cấp bởi vn4u
            </div>
        </div>
    </footer>
</body>
