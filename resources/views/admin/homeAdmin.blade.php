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
                            <button type="button" id="add_book" class="btn btn-danger btn-sm">Thêm sách&ensp;<i class="fa fa-power-off" aria-hidden="true"></i></button>
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
                    <!-- Thông tin người dùng -->
                    <div class="profile-content" id="thongtincanhan-admin">
                        <div class="prof-title">
                            <h3>&#45;&#45;Thông tin cá nhân&#45;&#45;</h3>
                        </div>
                        <div class="main-profile-content">
                            <table>
                                <tr>
                                    <td style="width:20%;">Họ tên</td>
                                    <td>{{Auth::user()->name}}</td>
                                </tr>
                                <tr>
                                    <td>Mã thành viên</td>
                                    <td>{{Auth::user()->id}}</td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>{{Auth::user()->phone}}</td>
                                    <td><button id="edit-sdt"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg></i></button></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{Auth::user()->email}}</td>
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
                                <div class="manage-content reader">
                                    <table>
                                        <thead>
                                            <td style="width:20%">Mã độc giả</td>
                                            <td style="width:35%">Họ tên</td>
                                            <td style="width:25%">Số điện thoại</td>
                                            <td>Xóa</td>
                                        </thead>
                                        <tbody>
                                            @foreach($reader as $row)
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->phone}} </td>
                                                <td>
                                                    <span><button class="delete_{{$row->id}}" id="" type="button" id="delete_reader"><i class="fas fa-trash"></i></button></span>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

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
                                <div class="manage-content document">
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
                                        <tbody>
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
                                        </tbody>
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
                                <div class="manage-content dangmuon">
                                    <table>
                                        <thead>
                                            <td style="width:10%">Mã sách</td>
                                            <td style="width:10%">Mã người mượn</td>
                                            <td style="width:30%">tên sách</td>
                                            <td style="width:15%">Ngày mượn</td>
                                            <td style="width:15%">Ngày trả</td>
                                            <td>Tình trạng</td>
                                            <td>Xóa</td>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>MB-01030</td>
                                                <td>DG-10234</td>
                                                <td>harry Potter</td>
                                                <td>20/03/2021</td>
                                                <td>20/09/2021</td>
                                                <td>Đang mượn</td>
                                                <td>
                                                    <span class="delete"><button id="delete" type="button"><i class="fas fa-trash"></i></button></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
                                <div class="manage-content add_date">
                                    <div style="font-weight: bold;">Yêu cầu gia hạn thêm thời gian trả</div>
                                    <table>
                                        <thead>
                                            <td style="width:12%;">Độc giả</td>
                                            <td style="width:12%;">Mã sách</td>
                                            <td style="width:26%;">Tên sách</td>
                                            <td style="width:16%;">Ngày hẹn trả ban đầu</td>
                                            <td style="width:16%;">Ngày hẹn trả mới</td>
                                            <td>Phê duyệt</td>

                                        </thead>
                                        <tr>
                                            <td>MB-01030</td>
                                            <td>DG-10234</td>
                                            <td>harry Potter</td>
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
            <div class="form-edit-footer" id="changepass"><button>Submit</button></div>
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
                <div><input type="phone" class="newphone" placeholder="" /></div>
                Mật mã xác nhận:
                <div><input type="phone" class="verification" placeholder="" /></div>
            </div>
            <div class="form-edit-footer" id="changephone"><button>Submit</button></div>
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
                <div><input class="newemail" type="text" placeholder="" /></div>
                Nhập mã xác nhận:
                <div><input class="verification_email" type="text" placeholder="" /></div>
            </div>
            <div class="form-edit-footer" id="changeemail"><button>Submit</button></div>
        </div>

    </div>
    <div class="dialog-dk" id="from-muon-sach">
        <div class="dialog-background-dk"></div>
        <div class="dialog-box-dk">
            <div class="dialog-box-header">
                <span class="dialog-text-header">Thêm sách</span>
                <button class="dialog-close">&times;</button>
            </div>
            
            <div class="dialog-box-content">
                <div class="dialog-content-item">
                    Tên sách (<span style="color: red;">*</span>):
                    <input class="form-control border-input" id="name" placeholder="Tên" type="text">
                </div>
                <div class="cards dialog-content-item">
                    Thể loại (<span style="color: red;">*</span>)
                    <input class="form-control border-input" id="category" placeholder="Tiểu thuyết" type="text">
                </div>
                <div class="dialog-content-item">
                    Tác giả (<span style="color: red;">*</span>)
                    <input class="form-control border-input" id="author" placeholder="JK...." type="text">
                </div>
                <div class="dialog-content-item">
                    Mô tả
                    <input class="form-control border-input" id="description" placeholder="" type="text">
                </div>
                <div class="dialog-content-item">
                    Số lượng(<span style="color: red;">*</span>)
                    <input class="form-control border-input" id="amount" type="text">
                </div>

                <div class="groups" style="display: flex;">
                    <div class="dialog-content-item" style="width: 50%; margin-right: -15px;">
                        Năm xuất bản (<span style="color: red;">*</span>)
                        <input class="form-control border-input" id="publishYear" placeholder="2001" type="text">
                    </div>
                    <div class="dialog-content-item" style="width: 50%;">
                        Nhà xuất bản (<span style="color: red;">*</span>)
                        <input class="form-control border-input" id="publisher" type="text">
                    </div>
                </div>
                <div class="add_file" style="margin-left: 40px; margin-top: 10px;">
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="add_image" name="add_image">
                </div>

                <div class="check" style="margin-top: 0px;"><input type="checkbox"> Tôi đồng ý các điều khoản trên</div>
                <div class="dialog-content-item">
                    <button class="dangky send">Gửi</button>
                </div>
            </div>
            
            <div class="dialog-box-footer">
            </div>
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

    function muon() {
        $.ajax({
            url: "{{URL::to('admin/borrow_return')}}",
            type: 'get',
            data: {},
            success: function(response) {

                var borrow = "";
                $.each(response.response, function(index, value) {
                    borrow +=
                        "<tr>" +
                        "<td>" + value.id_reader + "</td>" +
                        "<td>" + value.id_book + "</td>" +
                        "<td>" + value.name + "</td>" +
                        "<td>" + value.dateBorrow + "</td>" +
                        "<td>" + value.dateReturn + "</td>" +
                        "<td>" +
                        "<span class='duyet'><button data-id_duyet=" + value.id + " type='submit' class='btn btn-success' id='muon' style='font-weight: bold;'>Duyệt</button></span>" +
                        "<span class='da-duyet' hidden>Đã duyệt</span>" +
                        "</td>" +
                        "</tr>";
                });

                $('.borrow table tbody').html('').append(borrow);
            }
        });
    }

    function tailieu() {
        $.ajax({
            url: "{{URL::to('admin/manage_doc')}}",
            type: 'get',
            data: {},
            success: function(response) {
                var reader = "";
                $.each(response.response, function(index, value) {
                    reader +=
                        "<tr>" +
                        "<td>" + value.id + "</td>" +
                        "<td>" + value.name + "</td>" +
                        "<td>" + value.author + "</td>" +
                        "<td>" + value.publisher + "</td>" +
                        "<td>" + value.category + "</td>" +
                        "<td>" + value.amount + "</td>" +
                        "<td>20/03/2021</td>" +
                        "<td>" +
                        "<span class='edit'><button type='button'><i class='fas fa-pen'></i></button>&ensp;</span>" +
                        "<span class='delete'><button data-id_book=" + value.id + " type='submit' id='delete_book'><i class='fas fa-trash'></i></button></span>" +
                        "</td>" +
                        "</tr>"
                });
                $('.document table tbody').html('').append(reader);
            }
        });
    }

    function docgia() {
        $.ajax({
            url: "{{URL::to('admin/manage_reader')}}",
            type: 'get',
            data: {},
            success: function(response) {
                var reader = "";
                $.each(response.response, function(index, value) {
                    reader +=
                        "<tr>" +
                        "<td>" + value.id + "</td>" +
                        "<td>" + value.name + "</td>" +
                        "<td>" + value.phone + "</td>" +
                        "<td>" +
                        "<span><button class='delete_{{$row->id}}' id='' type='button' id='delete_reader'><i class='fas fa-trash'></i></button></span>" +
                        "</td>"
                    "</tr>"
                });
                $('.reader table tbody').html('').append(reader);
            }
        });
    }

    function dangmuon() {
        $.ajax({
            url: "{{URL::to('admin/dangmuon')}}",
            type: 'get',
            data: {},
            success: function(response) {
                var borrow = "";
                $.each(response.response, function(index, value) {
                    borrow +=
                        "<tr>" +
                        "<td>" + value.id_reader + "</td>" +
                        "<td>" + value.id_book + "</td>" +
                        "<td>" + value.name + "</td>" +
                        "<td>" + value.dateBorrow + "</td>" +
                        "<td>" + value.dateReturn + "</td>" +
                        "<td>Đang mượn</td>" +
                        "<td>" +
                        "<span class='delete'><button data-id_xoa=" + value.id + " type='submit' id='delete'><i class='fas fa-trash'></i></button></span>" +
                        "</td>" +
                        "</tr>"
                });
                $('.dangmuon table tbody').html('').append(borrow);
            }
        });
    }

    function add_date(){
        $.ajax({
            url: "{{URL::to('admin/add_date')}}",
            type: 'get',
            data: {},
            success: function(response) {

                var add_date = "";
                $.each(response.response, function(index, value) {
                    add_date +=
                        `<tr>
                            <td>${value.id_book}</td>
                            <td>${value.id_reader}</td>
                            <td>${value.name}</td>
                            <td>${value.dateReturn}</td>
                            <td>${value.requiredDateReturn}</td>
                            <td>
                                <span class="duyet"><button type="button" class="btn btn-success" style="font-weight: bold;">Duyệt</button></span>
                                <span class="da-duyet" hidden>Đã duyệt</span>
                            </td>

                        </tr>`;
                });

                $('.add_date table tbody').html('').append(add_date);
            }
        });
    }

    $(document).ready(function() {



        //Show thong tin doc gia
        $('#info-admin').click(function() {
            $.ajax({
                url: "{{URL::to('admin/manage_reader')}}",
                type: 'get',
                data: {},
                success: function(response) {

                }
            });
        });

        $('#manage-reader').click(function() {
            docgia();
        });

        $('#manage-doc').click(function() {
            tailieu();
        });

        $('#manage-muon-tra').click(function() {
            muon();
            dangmuon();
            add_date();
        });


        // xử lý đổi mật khẩu
        $('#changepass').click(function() {
            var iduser = $('#iduser').val();
            var oldpass = $('.oldpass').val();
            var newpass = $('.newpass').val();
            if (iduser != '' && oldpass != '' && newpass != '') {
                $.ajax({
                    url: "{{URL::to('admin/changepass')}}",
                    type: 'post',
                    data: {
                        _token: CSRF_TOKEN,
                        iduser: iduser,
                        oldpass: oldpass,
                        newpass: newpass
                    },
                    success: function(response) {
                        if (response == 1) {
                            alert("Đã đổi mật khẩu thành công");
                            $('.form-edit').hide();
                        } else {
                            alert("Vui lòng nhập lại mật khẩu");
                        }
                    }
                });
            } else {
                alert('Fill all fields');
            }
        });

        // xử lý đổi sdt
        $('#changephone').click(function() {
            var iduser = $('#iduser').val();
            var newphone = $('.newphone').val();
            var verification = $('.verification').val();
            if (iduser != '' && verification != '' && newphone != '') {
                $.ajax({
                    url: "{{URL::to('admin/changephone')}}",
                    type: 'post',
                    data: {
                        _token: CSRF_TOKEN,
                        iduser: iduser,
                        verification: verification,
                        newphone: newphone
                    },
                    success: function(response) {
                        if (response == 1) {
                            alert("Đã đổi số điện thoại thành công");
                            $('.form-edit').hide();
                        } else {
                            alert("Vui lòng nhập lại số điện thoại");
                        }
                    }
                });
            } else {
                alert('Fill all fields');
            }
        });

        //Xử lý đổi email

        $('#changeemail').click(function() {
            var iduser = $('#iduser').val();
            var newemail = $('.newemail').val();
            var verification_email = $('.verification_email').val();
            if (iduser != '' && verification_email != '' && newemail != '') {
                $.ajax({
                    url: "{{URL::to('admin/changeemail')}}",
                    type: 'post',
                    data: {
                        _token: CSRF_TOKEN,
                        iduser: iduser,
                        verification_email: verification_email,
                        newemail: newemail
                    },
                    success: function(response) {
                        if (response == 1) {
                            alert("Đã đổi số điện thoại thành công");
                            $('.form-edit').hide();
                        } else {
                            alert("Vui lòng nhập lại số điện thoại");
                        }
                    }
                });
            } else {
                alert('Fill all fields');
            }
        });

        $('.delete_reader').click(function() {

        });

        // Thêm sách mới

        $('.send').click(function(){
            var name = $('#name').val();
            var category = $('#category').val();
            var author = $('#author').val();
            var description = $('#description').val();
            var amount = $('#amount').val();
            var publishYear = $('#publishYear').val();
            var publisher = $('#publisher').val();
            var add_image = $('#add_image').val();
            // alert(add_image);
            $.ajax({
                url: "{{URL::to('admin/add_book')}}",
                type: 'post',
                data: {
                    _token: CSRF_TOKEN,
                    name:name,
                    category:category,
                    author:author,
                    description:description,
                    amount:amount,
                    publishYear:publishYear,
                    publisher:publisher,
                    add_image:add_image
                },
                success: function(response) {
                    alert(response);
                }
            });
        });
    });

    // Duyệt yêu cầu mượn sách
    $(document).on('click', '#muon', function() {
        var id = $(this).data('id_duyet');
        $.ajax({
            url: "{{URL::to('admin/duyet')}}",
            type: 'post',
            data: {
                _token: CSRF_TOKEN,
                id: id
            },
            success: function(response) {
                alert("Đã duyệt yêu cầu mượn thành công");
                muon();
                dangmuon();
            }
        });
    });

    // Xóa tài liệu đang được mượn(Người đọc trả sách rồi nên mk xóa)
    $(document).on('click', '#delete', function() {
        var id = $(this).data('id_xoa');

        $.ajax({
            url: "{{URL::to('admin/delete')}}",
            type: 'post',
            data: {
                _token: CSRF_TOKEN,
                id: id
            },
            success: function(response) {
                alert("Đã xóa");
                dangmuon();
            }
        });
    });

    // Xóa tài liệu
    $(document).on('click', '#delete_book', function() {
        var id = $(this).data('id_book');
        alert(id);
        $.ajax({
            url: "{{URL::to('admin/delete_book')}}",
            type: 'post',
            data: {
                _token: CSRF_TOKEN,
                id: id
            },
            success: function(response) {
                alert("Đã xóa");
                tailieu();
                muon();
                dangmuon();
            }
        });
    });
</script>


</html>