@extends('reader.head')
@section('content')
    <div class="container">
        <h1 class="text-center">Trang cá nhân</h1>
        <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar" style="height:460px">
                        <div class="profile-userpic">
                            <img src="{{asset('images/user.png')}}" class="img-responsive" alt="Thông tin cá nhân">
                        </div>
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">{{Auth::user()->name}}</div>
                            <div class="profile-usertitle-job">Độc giả: <strong style="font-weight: bold;">{{Auth::user()->id}}</strong></div>
                        </div>
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm" id="edit-pass">Chỉnh sửa</button>
                            <button type="button" id="add_book" class="btn btn-danger btn-sm"><a style="color:white" href="/library/public/index">Đăng xuất</a>&ensp;<i class="fa fa-power-off" aria-hidden="true"></i></button>
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
<script type='text/javascript'>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function() {

        // xử lý đổi mật khẩu
        $('#changepass').click(function() {
            var iduser = $('#iduser').val();
            var oldpass = $('.oldpass').val();
            var newpass = $('.newpass').val();
            if (iduser != '' && oldpass != '' && newpass != '') {
                $.ajax({
                    url: "{{URL::to('reader/changepass')}}",
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
                    url: "{{URL::to('reader/changephone')}}",
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
                    url: "{{URL::to('reader/changeemail')}}",
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

      
    });
</script>
@endsection()