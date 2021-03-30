<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>memorial books</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="main-layout home_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="/library/public/reader/home">Trang chủ</a> </li>
                                        <li> <a href="/library/public/reader/about">Giới thiệu</a> </li>
                                        <li><a href="/library/public/reader/newbook">Sách mới</a></li>
                                        <li><a href="/library/public/reader/library">Thư viện</a></li>
                                        <li><a href="/library/public/reader/contact">Liên hệ</a></li>
                                        <li class="mean-last">
                                            <a href="#search"><img src="{{asset('images/search_icon.png')}}" alt="#" /></a>
                                        </li>
                                        <li class="mean-last" id="header-dn">
                                            <a href="#">
                                                <img src="{{asset('images/top-icon.png')}}" alt="" />
                                                <span>{{Auth::user()->name}}</span>
                                            </a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{asset('images/banner.jpg')}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                            <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut enim ad minim<br> veniam, quis nostrud exercitation </p>
                            <div class="button_section"> <a class="main_bt" href="#">Read more</a> </div>
                            <ul class="locat_icon">
                                <li>
                                    <a href="#"><img src="{{asset('icon/facebook.png')}}"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('icon/Twitter.png')}}"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('icon/linkedin.png')}}"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('icon/instagram.png')}}"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{asset('images/banner2.png')}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                            <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut enim ad minim<br> veniam, quis nostrud exercitation </p>
                            <div class="button_section"> <a class="main_bt" href="#">Read More</a> </div>
                            <ul class="locat_icon">
                                <li>
                                    <a href="#"><img src="{{asset('icon/facebook.png')}}"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('icon/Twitter.png')}}"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('icon/linkedin.png')}}"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('icon/instagram.png')}}"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{asset('images/banner3.png')}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                            <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut enim ad minim<br> veniam, quis nostrud exercitation </p>
                            <div class="button_section"> <a class="main_bt" href="#">Read More</a> </div>
                            <ul class="locat_icon">
                                <li>
                                    <a href="#"><img src="{{asset('icon/facebook.png')}}"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('icon/Twitter.png')}}"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('icon/linkedin.png')}}"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('icon/instagram.png')}}"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- about -->
    <!-- <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="aboutheading">
                     <h2>About <strong class="black">Us</strong></h2>
                     <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
                  </div>
               </div>
            </div>
            <div class="row border">
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                  <div class="about-box">
                     <p> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                     <a href="#">Read More</a>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                  <div class="about-box">
                     <figure><img src="images/about.png" alt="img" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
    <!-- search books -->
    <div id="search">
        <div class="header-search">
            &#8212; Tìm kiếm tại đây &#8212;
        </div>
        <div class="search">
            <div class="search-book">
                <input type="text" placeholder="Tìm kiếm từ khóa..." />
                <button><img src="{{asset('images/search_icon.png')}}" /></button>
            </div>
            <div class="search-theloai">
                <select>
                  <option>Thể loại</option>
                  <option>Khoa học</option>
                  <option>Kinh tế</option>
                  <option>Kỹ năng</option>
                  <option>Luận văn</option>
                  <option>Ngoại ngữ</option>
                  <option>Giáo trình</option>
                  <option>Truyện</option>
                  <option>Sức khỏe</option>
                  <option>Văn học</option>
               </select>
            </div>
        </div>
    </div>

    <!-- end search books -->
    <!-- end about -->
    <!--Books -->
    <div id="books" class="Books">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage" style="margin-top:30px; padding-bottom: 20px;">
                        <h2>Danh mục<strong class="black"> Sách</strong></h2>
                    </div>
                </div>
            </div>
            <div class="row box">
            @foreach($book as $row)
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="book-box">
                        <a href="/library/public/reader/book/{{$row->id}}">
                        <figure><img src="{{asset('images/'.$row->image)}}" alt="img" /></figure>
                        </a>
                        <div class="book-header">{{$row->name}}</div>
                        <a href="/library/public/reader/book/{{$row->id}}"><button>Xem thêm</button></a>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="read-more">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Books -->

    <!-- Library -->
    <div id="library" class="Library">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <h2>Our <strong class="black">Library </strong></h2>
                        <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
                    </div>
                </div>
            </div>
            <div class="row box">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="btn-group">
                        <button class="btn btn-large" data-toggle="dropdown"><i class="fas fa-bars"></i>&emsp;Khoa học <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="btn-group">
                        <button class="btn btn-large" data-toggle="dropdown"><i class="fas fa-bars"></i>&emsp;Kinh tế <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="btn-group">
                        <button class="btn btn-large" data-toggle="dropdown"><i class="fas fa-bars"></i>&emsp;Kỹ thuật <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="btn-group">
                        <button class="btn btn-large" data-toggle="dropdown"><i class="fas fa-bars"></i>&emsp;Kỹ năng sống <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="btn-group">
                        <button class="btn btn-large" data-toggle="dropdown"><i class="fas fa-bars"></i>&emsp;Luận văn <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="btn-group">
                        <button class="btn btn-large" data-toggle="dropdown"><i class="fas fa-bars"></i>&emsp;Ngoại ngữ <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="Library-box">
                        <figure><img src="images/Library-.jpg" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="read-more">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Library -->

    <!-- Contact -->
    <div id="contact" class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage3">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <input class="form-control" placeholder="Name" type="Name">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <input class="form-control" placeholder="Phone Number" type="Phone Number">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <input class="form-control" placeholder="Email" type="Email">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <textarea class="textarea" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <button class="send-btn">Send</button>
            </div>
        </div>
    </div>
    <!-- end Contact -->
    <!-- Đăng nhập -->
    
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="Follow">
                            <h3>Follow Us</h3>
                        </div>
                        <ul class="location_icon">
                            <li>
                                <a href="#"><img src="{{asset('icon/facebook.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('icon/Twitter.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('icon/linkedin.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('icon/instagram.png')}}"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="Follow">
                            <h3>Newsletter</h3>
                        </div>
                        <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                        <button class="Subscribe">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('js/plugin.js')}}"></script>
    <script src="{{asset('js/uikit-icons.min.js')}}"></script>

    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
