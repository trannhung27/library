<!DOCTYPE html>
<html>

<head>
    <title>Đơn mua</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('bootstrap/js/app.js')}}"></script>

    <link rel="stylesheet" href="{{asset('asset/css/uikit.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-min')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('bootstrap/css/style.css')}}">
    
</head>

<body>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-inverse">
            <div class="topheader1">
                <div class="loginin">
                    <a href=""><i class="fas fa-shopping-cart mr-4"></i></a>
                    <i class="fas fa-user mr-1"> </i>
                    <a href="./dangnhap.html">Đăng nhập /</a>
                    <a href="./dangky.html">Đăng ký</a>
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
    <div class="container-fluid">
        <div class="row">
            <nav class="col-lg-3 col-md-5 col-sm-4 bg-light sidebar" style="margin-top: 156px;">
                <div class="user_info ml-3">
                    <a href="#" class="clearfix">
                        <div class="user_avatar"><img src="{{asset('asset/image/boy_1544603222.png')}}"></div>
                        <div class="user_meta">
                            <div class="inner">

                                <div class="user_name">trinhthikim</div>

                                <div class="user_verify" style="color: #555; font-size: 0.9rem;">Admin</div>
                            </div>
                        </div>
                    </a>

                    <ul>
                        <li><span>Mã thành viên:</span> <span style="font-weight: 700;"> 101028</span></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>                                Tài Khoản của tôi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>                                Đơn mua
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>                                Thông báo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>                                Ví voucher
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>                                Chat
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="col-lg-9 col-md-7 col-sm-8" style="margin-top: 170px;">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tất cả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Chờ xác nhận</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Chờ lấy hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đang giao</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đã giao</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="media mt-4">
                    <img src="{{asset('bootstrap/image/noithatphongngu.jpg')}}" class="align-self-start mr-3" style="width:20%">
                    <div class="media-body">
                        <p>Name Shop</p>
                        <p>Name product</p>
                        <p>Number</p>
                        <p>Price</p>
                        <p>Total amount</p>
                        <a type="button" href="" class="btn btn-dark mr-2 mt-2">Đánh giá</a>
                        <a type="button" href="" class="btn btn-dark mr-2 mt-2">Xem chi tiết đơn hàng</a>
                        <a type="button" href="" class="btn btn-dark mr-2 mt-2">Mua lần nữa</a>
                        <a type="button" href="" class="btn btn-dark mr-2 mt-2">Chat</a>
                    </div>
                </div>
                <hr>
            </nav>
        </div>
    </div>
    </form>

    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="diachi">
                        <img src="bootstrap/image/EasyAccomod.png" alt="">
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

</html>