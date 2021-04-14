<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="{{asset('css/chapter.css')}}">
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
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li><a href="/library/public/reader/home">Trang chủ</a> </li>
                                        <li><a href="/library/public/reader/about">Giới thiệu</a> </li>
                                        <li><a href="/library/public/reader/newbook">Sách mới</a></li>
                                        <li><a href="/library/public/reader/library">Thư viện</a></li>
                                        <li><a href="/library/public/reader/contact">Liên hệ</a></li>
                                        <li><a href="" id="notify"><i style="font-size: 20px; color: white;" class="far fa-bell"></i></a></li>
                                        <li class="mean-last">
                                            <div style="display: flex;">
                                                <a href="/library/public/reader/information">
                                                    <input type="hidden" id="iduser" value="{{Auth::user()->id}}">
                                                    <img src="{{asset('images/top-icon.png')}}" alt="#" />{{Auth::user()->name}}
                                                </a>
                                                <a href="/library/public/index" style="margin-top: 3px;">
                                                <span style="font-size: 13px;" title="Đăng xuất">&ensp;<i class="fa fa-power-off" aria-hidden="true"></i></span>
                                                </a>
                                            </div>
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

    @yield('content')
    </div>
        <div id="alert" class="alert alert-success" style="display: block;">
        
    </div>
    <!-- Đăng ký -->
    <!-- end mượn sách -->
    <!-- Javascript files-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('js/plugin.js')}}"></script>
    <script src="{{asset('js/uikit-icons.min.js')}}"></script>

    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        function unseen_notification(){
            var iduser = $('#iduser').val();
            $.ajax({
                url: "{{URL::to('reader/unseen_notification')}}",
                type: 'post',
                data: {
                    _token: CSRF_TOKEN,
                    iduser: iduser,
                },
                success: function(response) {

                    var notify = "";
                    var count = "";
                    $.each(response.response, function(index, value) {
                        notify = 
                        `<a href="" class="a">
                            <div style="padding: 10px 30px;">
                                <p>${value.name}</p>
                                <p>Yêu cầu mượn sách đã được duyệt</p>
                            </div>
                        </a>`;
                        count +=1;
                    });
                    if(count == "")
                    {}
                    else
                    {
                        $('.alert').html('').append(notify);
                        var number = `<span class="label label-pill label-danger count" style="border-radius:10px;">`+count+`</span>`;
                        $('.fa-bell').html('').append(number);
                    }
                }
            });
        }

        $(document).ready(function(){

            setInterval(function() {
                unseen_notification();
            }, 3000);
            var iduser = $('#iduser').val();
            $('.alert').hide();
            $("#notify").hover(function() {
                $('.alert').show();
            }, function() {
                $('.alert').hide();
               
                $.ajax({
                    url: "{{URL::to('reader/notification')}}",
                    type: 'post',
                    data: {
                        _token: CSRF_TOKEN,
                        iduser: iduser,
                    },
                    success: function(response) {
                    }
                });
            });
        });
    </script>
</body>
</html>