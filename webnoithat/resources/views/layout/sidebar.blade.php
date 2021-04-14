@extends('layout.menu')
@section('section')
    <!-- <script>
        $(document).ready(function(){
            $(document).pjax('a', '#pjax-container')
            if ($.support.pjax) {
                $.pjax.defaults.timeout = 1000;
            }
        });
    </script> -->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-lg-3 col-md-5 col-sm-4 bg-light sidebar">
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
                    <ul class="nav nav-sidebar navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" id="taikhoan" href="/webnoithat/public/khachhang/taikhoan#" onclick="change_color('taikhoan')">
                                <svg class="nav" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>  Tài khoản của tôi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="donmua" href="/webnoithat/public/khachhang/donmua#" onclick="change_color1('donmua')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>                                Đơn mua
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="haha" href="#" onclick="change_color('haha')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>                                Thông báo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="haha" href="" onclick="change_color('haha')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>                                Ví voucher
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="haha" href="" onclick="change_color('haha')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>                                Chat
                            </a>
                        </li>
                    </ul>
                </div>
           </nav>
            @yield('nav')
        </div>
    </div>
