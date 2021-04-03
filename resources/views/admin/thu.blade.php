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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<!-- body -->

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
                                        <li class="active"> <a href="index.html">Trang chủ</a> </li>
                                        <li> <a href="about.html">Giới thiệu</a> </li>
                                        <li><a href="#books">Sách mới</a></li>
                                        <li><a href="library.html">Thư viện</a></li>
                                        <li><a href="contact.html">Liên hệ</a></li>
                                        <li class="mean-last">
                                            <a href="#search"><img src="{{asset('images/search_icon.png')}}" alt="#" /></a>
                                        </li>
                                        <li class="mean-last">
                                            <a href="#">
                                                <input type="hidden" id="iduser" value="{{Auth::user()->id}}">
                                                <img src="{{asset('images/top-icon.png')}}" alt="#" />
                                                <span style="font-size: 13px;" title="Đăng xuất">{{Auth::user()->name}}&ensp;<i class="fa fa-power-off" aria-hidden="true"></i></span>

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
    <!-- trang cá nhân -->
    <div class="container">
        <h1 class="text-center">Trang cá nhân</h1>
        <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">
                        <div class="profile-userpic">
                            <img src="{{asset('images/user.png')}}" class="img-responsive" alt="Thông tin cá nhân">
                        </div>
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">{{Auth::user()->name}}</div>
                            <div class="profile-usertitle-job">Admin: <strong style="font-weight: bold;">{{Auth::user()->id}}</strong></div>
                        </div>
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm" id="edit-pass">Chỉnh sửa</button>
                            <button type="button" class="btn btn-danger btn-sm">Đăng xuất&ensp;<i class="fa fa-power-off" aria-hidden="true"></i></button>
                        </div>
                        <div class="profile-usermenu">
                            <div class="usermenu-item"><a id="info-admin" href="#info-admin"><i class="fas fa-user"></i></i>&ensp;Thông tin cá nhân</a></div>
                            <div class="usermenu-item"><a id="manage-reader" href="#manage-reader"><i class="fas fa-users"></i></i>&ensp;Quản lý độc giả</a></div>
                            <div class="usermenu-item"><a id="manage-doc" href="#manage-doc"><i class="fas fa-book"></i></i>&ensp;Quản lý tài liệu</a></div>
                            <div class="usermenu-item"><a id="manage-muon-tra" href="#manage-muon-tra"><i class="fas fa-pen"></i></i>&ensp;Quản lý mượn/trả</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-content" id="quanlymuontra">
                        <div class="prof-title">
                            <h3>&#45;&#45;Quản lý mượn trả&#45;&#45;</h3>
                        </div>
                        <div class="main-profile-content">
                            <div class="manage">
                                
                                <div class="manage-header-text">
                                    Yêu cầu mượn/gia hạn tài liệu
                                </div>
                                <div class="manage-content borrow">
                                    <div style="font-weight: bold;">Yêu cầu mượn</div>
                                    <table>
                                        <thead>
                                            <td style="width:12%;">Độc giả</td>
                                            <td style="width:12%;">Mã sách</td>
                                            <td style="width:30%;">Tên sách</td>
                                            <td style="width:18%;">Ngày mượn</td>
                                            <td style="width:18%;">Ngày trả</td>
                                            <td>Phê duyệt</td>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>MB-01030</td>
                                                <td>DG-10234</td>
                                                <td>harry Potter</td>
                                                <td>20/03/2021</td>
                                                <td>20/09/2021</td>
                                                <td>
                                                    <span class="duyet"><button type="button" id="muon" class="btn btn-success" style="font-weight: bold;">Duyệt</button></span>
                                                    <span class="da-duyet" hidden>Đã duyệt</span>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end trang cá nhân -->

    
    <div class="form-edit" id="form-edit-sdt">
        <div class="dialog-background"></div>
        <div class="form-box">
            <div class="form-edit-header">
                <h4>Đổi số điện thoại</h4>
                <button class="edit-close">&times;</button>
            </div>
            <div class="edit-content">
                Nhập số điện thoại mới:
                <div><input type="phone" class="newphone" placeholder="" /></div>
                Mật mã xác nhận:
                <div><input type="phone" class="verification" placeholder="" /></div>
            </div>
            <div class="form-edit-footer" id="changephone"><button>Submit</button></div>
        </div>

    </div>
    
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('js/plugin.js')}}"></script>
    <script src="{{asset('js/uikit-icons.min.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>

<script type='text/javascript'>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        
    
    $(document).ready(function(){
        //Show thong tin doc gia
        $('#manage-muon-tra').click(function(){
            $.ajax({
                url: "{{URL::to('admin/borrow_return')}}",
                type:'get',
                data:{},
                success: function(response){
                    var borrow = "";
                    $.each(response.response, function(index, value){
                        borrow += 
                            "<tr>"
                            +   "<td>"+value.id_reader+"</td>"
                            +   "<td>"+value.id_book+"</td>"
                            +   "<td>"+value.name+"</td>"
                            +   "<td>"+value.dateBorrow+"</td>"
                            +   "<td>"+value.dateReturn+"</td>"
                            +   "<td>"
                            // +       "<span class='duyet'><button data-id_xoa="+ value.id + " type='submit' class='btn btn-success' id='muon' style='font-weight: bold;'>Duyệt</button></span>"
                            +       "<span class='duyet'><button type='button' id='muon' class='btn btn-success' style='font-weight: bold;'>Duyệt</button></span>"
                            +       "<span class='da-duyet' hidden>Đã duyệt</span>"
                            +   "</td>"
                            +"</tr>"
                    });
                   
                    $('.borrow table tbody').html('').append(borrow);
                }
            });
        });
        // $('#muon').click(function(){
        //     var id = $(this).data('id_xoa');
        //     alert(id);
        //     // $.ajax({
        //     //     url: "{{URL::to('admin/borrow_return')}}",
        //     //     type:'get',
        //     //     data:{},
        //     //     success: function(response){
                    
        //     //     }
        //     // });
        // });

        
    });

    

</script> 


</html>
