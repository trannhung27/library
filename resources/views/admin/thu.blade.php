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
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
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
                                    <a href="index.html"><img src="images/logo.png" alt="logo"></a>
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
                                            <a href="#search"><img src="images/search_icon.png" alt="#" /></a>
                                        </li>
                                        <li class="mean-last">
                                            <a href="#">
                                                <img src="images/top-icon.png" alt="#" />
                                                <span id="#" style="font-size: 13px;" title="Đăng xuất">Chi Cute&ensp;<i class="fa fa-power-off" aria-hidden="true"></i></span>

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
                            <img src="images/user.png" class="img-responsive" alt="Thông tin cá nhân">
                        </div>
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">Nguyễn Văn A</div>
                            <div class="profile-usertitle-job">Admin: <strong style="font-weight: bold;">A03</strong></div>
                        </div>
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm" id="edit-pass">Chỉnh sửa</button>
                            <button type="button" class="btn btn-danger btn-sm">Đăng xuất&ensp;<i class="fa fa-power-off" aria-hidden="true"></i></button>
                        </div>
                        <div class="profile-usermenu">
                            <!-- <div class="usermenu-item"><a href=""><i class="fas fa-bell"></i></i>&ensp;Thông báo</a></div>                    -->
                            <div class="usermenu-item" id="info-admin">
                                <a href=""></a><i class="fas fa-user"></i></i>&ensp;Thông tin cá nhân</a>
                            </div>
                            <div class="usermenu-item" id="manage-reader"><a id="manage-reader" href="#"><i class="fas fa-users"></i></i>&ensp;Quản lý độc giả</a></div>
                            <div class="usermenu-item" id="manage-doc"><a href=""><i class="fas fa-book"></i></i>&ensp;Quản lý tài liệu</a></div>
                            <div class="usermenu-item" id="manage-muon-tra"><a href=""><i class="fas fa-pen"></i></i>&ensp;Quản lý mượn/trả</a></div>
                            <!-- <div class="usermenu-item"><a href=""><i class="fas fa-bar-chart"></i></i>&ensp;Thống kê dữ liệu</a></div> -->
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    Thông tin người dùng
                    <div class="profile-content" id="thongtincanhan-admin">
                        <div class="prof-title">
                            <h3>&#45;&#45;Thông tin cá nhân&#45;&#45;</h3>
                        </div>
                        <div class="main-profile-content">
                            <table>
                                <tr>
                                    <td style="width:20%;">Họ tên</td>
                                    <td>Nguyễn Văn A</td>
                                </tr>
                                <tr>
                                    <td>Mã thành viên</td>
                                    <td>18022222</td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>012345678</td>
                                    <td><button id="edit-sdt"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg></i></button></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>nguyenvana@gmail.com</td>
                                    <td><button id="edit-email"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg></button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- Quản lý độc giả -->
                    <div class="profile-content" id="quanlydocgia">
                        <div class="prof-title">
                            <h3>&#45;&#45;Quản lý độc giả&#45;&#45;</h3>
                        </div>
                        <div class="main-profile-content">
                            <div class="manage">
                                <div class="manage-header">
                                    <input type="text" placeholder="Tìm kiếm độc giả" />
                                    <button><i class="fas fa-search"></i></button>
                                    <button style="float: right;"><i class="material-icons">&#xe8ba;</i></button>
                                </div>
                                <div class="manage-content">
                                    <table>
                                        <thead>
                                            <td style="width:20%">Mã độc giả</td>
                                            <td style="width:35%">Họ tên</td>
                                            <td style="width:25%">Số điện thoại</td>
                                            <td>chỉnh sửa</td>
                                        </thead>
                                        <tr>
                                            <td>DG-10234</td>
                                            <td>Nguyễn Văn A</td>
                                            <td>0123456789</td>
                                            <td>
                                                <span class="edit"><button type="button"><i class="fas fa-pen"></i></button>&ensp;</span>
                                                <span class="delete"><button type="button"><i class="fas fa-trash"></i></button></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>DG-10234</td>
                                            <td>Nguyễn Văn A</td>
                                            <td>0123456789</td>
                                            <td>
                                                <span class="edit"><button type="button"><i class="fas fa-pen"></i></button>&ensp;</span>
                                                <span class="delete"><button type="button"><i class="fas fa-trash"></i></button></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>DG-10234</td>
                                            <td>Nguyễn Văn A</td>
                                            <td>0123456789</td>
                                            <td>
                                                <span class="edit"><button type="button"><i class="fas fa-pen"></i></button>&ensp;</span>
                                                <span class="delete"><button type="button"><i class="fas fa-trash"></i></button></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>DG-10234</td>
                                            <td>Nguyễn Văn A</td>
                                            <td>0123456789</td>
                                            <td>
                                                <span class="edit"><button type="button"><i class="fas fa-pen"></i></button>&ensp;</span>
                                                <span class="delete"><button type="button"><i class="fas fa-trash"></i></button></span>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quản lý tài liệu -->
                    <div class="profile-content" id="quanlytailieu">
                        <div class="prof-title">
                            <h3>&#45;&#45;Quản lý Tài liệu&#45;&#45;</h3>
                        </div>
                        <div class="main-profile-content">
                            <div class="manage">
                                <div class="manage-header">
                                    <input type="text" placeholder="Tìm kiếm tài liệu" />
                                    <button><i class="fas fa-search"></i></button>
                                    <button style="float: right;"><i class="material-icons">&#xe8ba;</i></button>
                                </div>
                                <div class="manage-content">
                                    <table>
                                        <thead>
                                            <td style="width:15%">Mã sách</td>
                                            <td style="width:20%">Tên sách</td>
                                            <td style="width:10%">Tác giả</td>
                                            <td style="width:10%">NXB</td>
                                            <td style="width:10%">Thể loại</td>
                                            <td style="width:5%">Số lượng</td>
                                            <td style="width:15%">Ngày chỉnh sửa gần nhất</td>
                                            <td>chỉnh sửa</td>
                                        </thead>
                                        <tr>
                                            <td>MB-01030</td>
                                            <td>Harry Potter và chiếc cốc lửa</td>
                                            <td>J.K.R</td>
                                            <td>NXB Trẻ</td>
                                            <td>Tiểu thuyết</td>
                                            <td>3</td>
                                            <td>20/03/2021</td>
                                            <td>
                                                <span class="edit"><button type="button"><i class="fas fa-pen"></i></button>&ensp;</span>
                                                <span class="delete"><button type="button"><i class="fas fa-trash"></i></button></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>MB-01030</td>
                                            <td>Harry Potter và chiếc cốc lửa</td>
                                            <td>J.K.R</td>
                                            <td>NXB Trẻ</td>
                                            <td>Tiểu thuyết</td>
                                            <td>3</td>
                                            <td>20/03/2021</td>
                                            <td>
                                                <span class="edit"><button type="button"><i class="fas fa-pen"></i></button>&ensp;</span>
                                                <span class="delete"><button type="button"><i class="fas fa-trash"></i></button></span>
                                            </td>
                                        </tr>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quản lý mượn trả -->
                    <div class="profile-content" id="quanlymuontra">
                        <div class="prof-title">
                            <h3>&#45;&#45;Quản lý mượn trả&#45;&#45;</h3>
                        </div>
                        <div class="main-profile-content">
                            <div class="manage">
                                <div class="manage-header-text">
                                    Tài liệu đang được mượn
                                </div>
                                <div class="manage-content">
                                    <table>
                                        <thead>
                                            <td style="width:10%">Mã sách</td>
                                            <td style="width:10%">Mã người mượn</td>
                                            <td style="width:30%">tên sách</td>
                                            <td style="width:15%">Ngày mượn</td>
                                            <td style="width:15%">Ngày trả</td>
                                            <td>Tình trạng</td>

                                        </thead>
                                        <tr>
                                            <td>MB-01030</td>
                                            <td>DG-10234</td>
                                            <td>harry Potter</td>
                                            <td>20/03/2021</td>
                                            <td>20/09/2021</td>
                                            <td>Đang mượn</td>
                                            <td>
                                                <span class="delete"><button type="button"><i class="fas fa-trash"></i></button></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>MB-01030</td>
                                            <td>DG-10234</td>
                                            <td>harry Potter</td>
                                            <td>20/03/2021</td>
                                            <td>20/09/2021</td>
                                            <td>Đang mượn</td>
                                            <td>
                                                <span class="delete"><button type="button"><i class="fas fa-trash"></i></button></span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="manage-header-text">
                                    Yêu cầu mượn/gia hạn tài liệu
                                </div>
                                <div class="manage-content">
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
                                        <tr>
                                            <td>MB-01030</td>
                                            <td>DG-10234</td>
                                            <td>harry Potter</td>
                                            <td>20/03/2021</td>
                                            <td>20/09/2021</td>
                                            <td>
                                                <span class="duyet"><button type="button" class="btn btn-success" style="font-weight: bold;">Duyệt</button></span>
                                                <span class="da-duyet" hidden>Đã duyệt</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>MB-01030</td>
                                            <td>DG-10234</td>
                                            <td>harry Potter</td>
                                            <td>20/03/2021</td>
                                            <td>20/09/2021</td>
                                            <td>
                                                <span class="duyet"><button type="button" class="btn btn-success" style="font-weight: bold;">Duyệt</button></span>
                                                <span class="da-duyet" hidden>Đã duyệt</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>MB-01030</td>
                                            <td>DG-10234</td>
                                            <td>harry Potter</td>
                                            <td>20/03/2021</td>
                                            <td>20/09/2021</td>
                                            <td>
                                                <span class="duyet"><button type="button" class="btn btn-success" style="font-weight: bold;">Duyệt</button></span>
                                                <span class="da-duyet" hidden>Đã duyệt</span>
                                            </td>

                                        </tr>

                                    </table>
                                </div>
                                <div class="manage-content">
                                    <div style="font-weight: bold;">Yêu cầu gia hạn thêm thời gian trả</div>
                                    <table>
                                        <thead>
                                            <td style="width:12%;">Độc giả</td>
                                            <td style="width:12%;">Mã sách</td>
                                            <td style="width:26%;">Tên sách</td>
                                            <td style="width:8%;">gia hạn thêm (tháng)</td>
                                            <td style="width:16%;">Ngày hẹn trả ban đầu</td>
                                            <td style="width:16%;">Ngày hẹn trả mới</td>
                                            <td>Phê duyệt</td>

                                        </thead>
                                        <tr>
                                            <td>MB-01030</td>
                                            <td>DG-10234</td>
                                            <td>harry Potter</td>
                                            <td>1</td>
                                            <td>20/03/2021</td>
                                            <td>20/03/2021</td>
                                            <td>
                                                <span class="duyet"><button type="button" class="btn btn-success" style="font-weight: bold;">Duyệt</button></span>
                                                <span class="da-duyet" hidden>Đã duyệt</span>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>MB-01030</td>
                                            <td>DG-10234</td>
                                            <td>harry Potter</td>
                                            <td>1</td>
                                            <td>20/03/2021</td>
                                            <td>20/03/2021</td>
                                            <td>
                                                <span class="duyet"><button type="button" class="btn btn-success" style="font-weight: bold;">Duyệt</button></span>
                                                <span class="da-duyet" hidden>Đã duyệt</span>
                                            </td>

                                        </tr>

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

    <!-- form Chỉnh sửa mật khẩu, email, sđt-->
    <div class="form-edit" id="form-edit-pass">
        <div class="dialog-background"></div>

        <div class="form-box">
            <div class="form-edit-header">
                <h4>Đổi mật khẩu</h4>
                <button class="edit-close">&times;</button>
            </div>
            <div class="edit-content">
                Mật khẩu cũ:
                <div><input type="password" class="oldpass" placeholder="" /></div>
                Mật khẩu mới:
                <div><input type="password" class="newpass" placeholder="" /></div>
            </div>
            <div class="form-edit-footer"><button>Submit</button></div>
        </div>

    </div>
    <div class="form-edit" id="form-edit-sdt">
        <div class="dialog-background"></div>

        <div class="form-box">
            <div class="form-edit-header">
                <h4>Đổi số điện thoại</h4>
                <button class="edit-close">&times;</button>
            </div>
            <div class="edit-content">
                Nhập số điện thoại mới:
                <div><input type="" placeholder="" /></div>
                Mật mã xác nhận:
                <div><input type="" placeholder="" /></div>
            </div>
            <div class="form-edit-footer"><a href="user.html"><button>Submit</button></a></div>
        </div>

    </div>
    <div class="form-edit" id="form-edit-email">
        <div class="dialog-background"></div>
        <div class="form-box">
            <div class="form-edit-header">
                <h4>Đổi email</h4>
                <button class="edit-close">&times;</button>
            </div>
            <div class="edit-content">
                Nhập email mới:
                <div><input type="" placeholder="" /></div>
                Nhập mã xác nhận:
                <div><input type="" placeholder="" /></div>
            </div>
            <div class="form-edit-footer"><a href="user.html"><button>Submit</button></a></div>
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
            
        $('#quanlydocgia').hide();
        $('#quanlytailieu').hide();
        $('#quanlymuontra').hide();
        $('#thongtincanhan-admin').show();
        quanlydocgia();

        // xử lý đổi mật khẩu
        $('#changepass').click(function(){
            var iduser = $('#iduser').val();
            var oldpass = $('.oldpass').val();
            var newpass = $('.newpass').val();
            if(iduser != '' && oldpass != '' && newpass != ''){
                $.ajax({
                    url: "{{URL::to('admin/changepass')}}",
                    type: 'post',
                    data: {_token: CSRF_TOKEN, iduser: iduser, oldpass: oldpass, newpass:newpass},
                    success: function(response){
                        if(response == 1)
                        {
                            alert("Đã đổi mật khẩu thành công");
                            $('.form-edit').hide();
                        }
                        else {
                            alert("Vui lòng nhập lại mật khẩu");
                        }
                    }
                });
            }
            else{
                alert('Fill all fields');
            }
        });
    });

    function quanlydocgia(){
        $('#manage-reader').click(function(){
            $('#quanlydocgia').show();
            $('#quanlytailieu').hide();
            $('#quanlymuontra').hide();
            $('#thongtincanhan-admin').hide();
        });
    }
</script> 


</html>
