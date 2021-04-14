@extends('layout.head')
@section('body')
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-inverse">
            <div class="topheader1">
                <div class="loginin">
                    <a href=""><i class="fas fa-shopping-cart mr-4"></i></a>
                    <i class="fas fa-user mr-1"> </i>
                    <a href="/webnoithat/public/khachhang/donmua">Name User</a>
                    
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-md bg-light">
            <img src="{{asset('bootstrap/image/EasyAccomod.png')}}" alt="" width="200px" class="ml-5">
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
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('bootstrap/image/nen.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
            <div class="col">
                <div class="card">
                    <img src="{{asset('bootstrap/image/noithatphongngu.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-img-top"></div>
                    <div class="card-img-overlay">
                        <a href="">
                            <div class="noidung">
                                <h1>NỘI THẤT PHÒNG KHÁCH</h1>
                                <div class="baohanh">BẢO HÀNH MIỄN PHÍ</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('bootstrap/image/noithatphongngu.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-img-top"></div>
                    <div class="card-img-overlay">
                        <a href="">
                            <div class="noidung">
                                <h1>NỘI THẤT PHÒNG NGỦ</h1>
                                <div class="baohanh">BẢO HÀNH MIỄN PHÍ</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('bootstrap/image/noithatphongngu.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-img-top"></div>
                    <div class="card-img-overlay">
                        <a href="">
                            <div class="noidung">
                                <h1>NỘI THẤT PHÒNG BẾP</h1>
                                <div class="baohanh">BẢO HÀNH MIỄN PHÍ</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2>CÁC SẢN PHẨM ĐANG BÁN</h2>
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-3@l" uk-grid>
                <div class="sanpham">
                    <a href="">
                        <div class="uk-card uk-card-default uk-card-hover">
                            <div class="uk-cover-container">
                                <img src="{{asset('bootstrap/image/phongkhach.jpg')}}" alt="" class="uk-cover" uk-cover=" ">
                                <canvas width="600 " height="400 "></canvas>

                            </div>
                            <div class="uk-card-body  uk-padding-small">
                                <div class="ten_san_pham">
                                    <p>Tên sản phẩm</p>
                                </div>
                                <div class="gia_san_pham">
                                    <p>Giá sản phẩm</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="thongtin">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
                <div class="col-sm">
                    <div class="diamond"></div>
                    <!-- <div class="thongtin"> -->
                    <h4>MIỄN PHÍ VẬN CHUYỂN</h4>
                    <h5>Chúng tôi vận chuyển đơn hàng miễn phí trên 100.000 nghìn đồng</h5>
                    <!-- </div> -->
                </div>
                <div class="col-sm">
                    <div class="diamond"></div>
                    <!-- <div class="thongtin"> -->
                    <h4>KHUYẾN MẠI CUỐI TUẦN</h4>
                    <h5>Giảm giá tới 30% vào các ngày thứ 7 chủ nhật hàng tuần</h5>
                    <!-- </div> -->

                </div>
                <div class="col-sm">
                    <div class="diamond"></div>
                    <!-- <div class="thongtin"> -->
                    <h4>HỖ TRỢ ĐUỔI TRẢ</h4>
                    <h5>Hỗ trợ miễn phí đổi trả sản phẩm trong 30 ngày đầu tiên từ khi mua hàng</h5>
                    <!-- </div> -->

                </div>

            </div>
        </div>
    </div>

    <h2>CÁC SẢN PHẨM ĐANG KHUYẾN MẠI</h2>

    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-3@l" uk-grid>
                <div class="sanpham">
                    <a href="">
                        <div class="uk-card uk-card-default uk-card-hover">
                            <div class="uk-cover-container">
                                <img src="{{asset('bootstrap/image/phongkhach.jpg')}}" alt="" class="uk-cover" uk-cover=" ">
                                <canvas width="600 " height="400 "></canvas>

                            </div>
                            <div class="uk-card-body  uk-padding-small">
                                <div class="ten_san_pham">
                                    <p>Tên sản phẩm</p>
                                </div>
                                <div class="gia_san_pham_km">
                                    <p>2.000.000 Đ</p>
                                    <p><strike>2.000.000 Đ</strike></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
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
@stop()