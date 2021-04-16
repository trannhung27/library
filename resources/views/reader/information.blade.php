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
                        <div class="profile-usermenu">                    
                            <div class="usermenu-item"><a href="#thongtincanhan" id="thongtincanhan"><i class="fas fa-file"></i>&ensp;Thông tin cá nhân</a></div>
                            <div class="usermenu-item"><a href="#muontra" id="muontra"><i class="fas fa-file"></i>&ensp;Tài liệu mượn/trả</a></div>
                            <div class="usermenu-item"><a href="#mucyeuthich" id="mucyeuthich"><i class="fas fa-file"></i>&ensp;Mục yêu thích</a></div>
                        </div>                
                     
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- Thông tin người dùng -->
                    <div class="profile-content" id="show-thongtincanhan">
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
                    <!-- Mượn trả -->
                    <div class="profile-content" id="show-muontra">	
                        <div class="prof-title">
                            <h3>&#45;&#45;Thống kê tài liệu mượn/trả&#45;&#45;</h3>
                        </div>
                        <div class="main-profile-content" id="borrow">
                            <table >
                            <thead>
                                <td style="width:12%;">Mã sách</td>
                                <td style="width:30%;">Tên sách</td>
                                <td>Tình trạng</td>
                                <td style="width:16%;">Ngày mượn</td>
                                <td style="width:16%;">Hạn trả</td>
                                <td style="width:10%;">Gia hạn</td>
                            </thead>
                            <tr >
                                <td>B1234</td>
                                <td>Harry Potter và hòn đá phù thủy</td>
                                <td>Đang mượn</td>
                                <td>20/03/2021</td>
                                <td>20/09/2021</td>
                                <td><button type="submit" id="requiredDateReturn" data-id_add="">Add</button></td>
                                
                            </tr>
                            </table>
                        </div>
                    </div> 
                  <!-- Yêu thích -->
                    <div class="profile-content" id="show-mucyeuthich">	
                        <div class="prof-title" style="padding-bottom: 20px">
                            <h3>&#45;&#45;Mục yêu thích&#45;&#45;</h3>
                        </div>
                        <div class="main-profile-content">
                            <div class="container">
                            <div class="row box">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class="book-box" id="favorite">
                                        <!-- <a href="book.html"><figure><img src="{{asset('images/HarryPotter1.png')}}" alt="img"/></figure></a>
                                        <div class="book-header">Harry Potter và hòn đá phù thủy</div>
                                        <a href="book.html"><button style="background-color: green;">Xem thêm</button></a>
                                        <a href="user.html"><button >Xóa</button></a> -->
                                    </div>
                                </div>
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
    <!-- Yêu cầu xin gia hạn ngày trả sách -->
    <div class="form-edit" id="form-edit-date">
        <div class="dialog-background"></div>
        <div class="form-box">
            <div class="form-edit-header">
                <h4>Gia hạn ngày trả sách</h4>
                <button class="edit-close">&times;</button>
            </div>
            <div class="edit-content">
                Nhập ngày gia hạn:
                <div><input class="newdate" type="date" placeholder="" /></div>
            </div>
            <div class="form-edit-footer" id="changedate"><button>Submit</button></div>
        </div>
    </div>
<!-- <script type='text/javascript'>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    function borrow_return(){
        var iduser = $('#iduser').val();
        $.ajax({
            url: "{{URL::to('reader/borrow_return')}}/"+iduser,
            type: 'get',
            data: {
                _token: CSRF_TOKEN,
                iduser: iduser,
            },
            success: function(response) {
                var borrow = "";
                var count = 0;
                $.each(response.response, function(index, value) {
                    var status = "";
                    if(value.dateReturn!=value.requiredDateReturn){
                        status = "Đã xin gia hạn";
                        borrow +=
                        `<tr >
                            <td>${value.id}</td>
                            <td>${value.name}</td>
                            <td>${value.status}</td>
                            <td>${value.dateBorrow}</td>
                            <td>${value.dateReturn}</td>
                            <td>${status}</td>
                        </tr>`;
                    }
                    else{
                        borrow +=
                        `<tr >
                            <td>${value.id}</td>
                            <td>${value.name}</td>
                            <td>${value.status}</td>
                            <td>${value.dateBorrow}</td>
                            <td>${value.dateReturn}</td>
                            <td><button type="submit" id="requiredDateReturn" data-id_add="${value.id}">Add</button></td>

                        </tr>`;
                    }
                });
                $('#borrow table tbody').html('').append(borrow);
            }
        });
    }

    function favorite_book(){
        var iduser = $('#iduser').val();
        $.ajax({
            url: "{{URL::to('reader/favorite_book')}}/"+iduser,
            type: 'get',
            data: {
                _token: CSRF_TOKEN,
            },
            success: function(response) {
                var favorite = "";
                var count = 0;
                $.each(response.response, function(index, value) {
                    favorite += 
                    `<a href="/library/public/reader/book/${value.id}"><figure><img src="{{asset('images/${value.image}')}}" alt="img"/></figure></a>
                    <div class="book-header">${value.name}</div>
                    <a href="/library/public/reader/book/${value.id}"><button style="background-color: green;">Xem thêm</button></a>
                    <button type="submit" data-id_delete="${value.id}" id="delete">Xóa</button>` 
                });
                $('#favorite').html('').append(favorite);
            }
        });
    }

    $(document).ready(function() {

        $('#show-muontra').hide();
        $('#show-mucyeuthich').hide();
        $('#form-edit-date').hide();

        $('#thongtincanhan').click(function(){
            $('#show-thongtincanhan').show();
            $('#show-muontra').hide();
            $('#show-mucyeuthich').hide();
        });

        $('#muontra').click(function(){
            $('#show-thongtincanhan').hide();
            $('#show-muontra').show();
            $('#show-mucyeuthich').hide();
        });

        $('#mucyeuthich').click(function(){
            $('#show-thongtincanhan').hide();
            $('#show-muontra').hide();
            $('#show-mucyeuthich').show();
        });

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

        // Hiển thị những tài liệu mượn trả

        borrow_return();

        favorite_book();
    });

    // Ra hạn ngày mượn
    $(document).on('click', '#requiredDateReturn', function() {
        $('#form-edit-date').show();
        var id = $(this).data('id_add');
        
        $(document).on('click','#changedate', function(){
            var date = $('.newdate').val();
            
            $.ajax({
                url: "{{URL::to('reader/requiredDate')}}",
                type: 'post',
                data: {
                    _token: CSRF_TOKEN,
                    id:id,
                    // date:date
                },
                success: function(response) {
                    alert("Đã yêu cầu gia hạn"); 
                }
            }); 
        });
    });

    //Xóa khỏi mục thích
    $(document).on('click', '#delete', function() {
        var idbook = $(this).data('id_delete');
        var iduser = $('#iduser').val();
        $.ajax({
            url: "{{URL::to('reader/favorite_delete')}}",
            type: 'post',
            data: {
                _token: CSRF_TOKEN,
                idbook:idbook,
                iduser:iduser
            },
            success: function(response) {
                alert("xóa thành công");
                borrow_return();
            }
        });
    });

</script> -->

<script type='text/javascript'>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    function borrow_return(){
        var iduser = $('#iduser').val();
        $.ajax({
            url: "{{URL::to('reader/borrow_return')}}/"+iduser,
            type: 'get',
            data: {
                _token: CSRF_TOKEN,
                iduser: iduser,
            },
            success: function(response) {
                var borrow = "";
                var count = 0;
                $.each(response.response, function(index, value) {
                    var status = "";
                    if(value.dateReturn!=value.requiredDateReturn){
                        status = "Đã xin gia hạn";
                        borrow +=
                        `<tr >
                            <td>${value.id}</td>
                            <td>${value.name}</td>
                            <td>${value.status}</td>
                            <td>${value.dateBorrow}</td>
                            <td>${value.dateReturn}</td>
                            <td>${status}</td>
                        </tr>`;
                    }
                    else{
                        borrow +=
                        `<tr >
                            <td>${value.id}</td>
                            <td>${value.name}</td>
                            <td>${value.status}</td>
                            <td>${value.dateBorrow}</td>
                            <td>${value.dateReturn}</td>
                            <td><button type="submit" id="requiredDateReturn" data-id_add="${value.id}">Add</button></td>

                        </tr>`;
                    }
                });
                $('#borrow table tbody').html('').append(borrow);
            }
        });
    }
    function favorite_book(){
        var iduser = $('#iduser').val();
        $.ajax({
            url: "{{URL::to('reader/favorite_book')}}/"+iduser,
            type: 'get',
            data: {
                _token: CSRF_TOKEN,
            },
            success: function(response) {
                var favorite = "";
                var count = 0;
                $.each(response.response, function(index, value) {
                    favorite += 
                    `<a href="/library/public/reader/book/${value.id}"><figure><img src="{{asset('images/${value.image}')}}" alt="img"/></figure></a>
                    <div class="book-header">${value.name}</div>
                    <a href="/library/public/reader/book/${value.id}"><button style="background-color: green;">Xem thêm</button></a>
                    <button type="submit" data-id_delete="${value.id}" id="delete">Xóa</button>` 
                });
                $('#favorite').html('').append(favorite);
            }
        });
    }
    $(document).ready(function() {
        $('#show-muontra').show();
        $('#show-mucyeuthich').hide();
        $('#form-edit-date').hide();
        $('#show-thongtincanhan').hide();
        $('#thongtincanhan').click(function(){
            $('#show-thongtincanhan').show();
            $('#show-muontra').hide();
            $('#show-mucyeuthich').hide();
        });

        $('#muontra').click(function(){
            $('#show-thongtincanhan').hide();
            $('#show-muontra').show();
            $('#show-mucyeuthich').hide();
            borrow_return();
        });

        $('#mucyeuthich').click(function(){
            $('#show-thongtincanhan').hide();
            $('#show-muontra').hide();
            $('#show-mucyeuthich').show();
            favorite_book();
        });

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

        // Hiển thị những tài liệu mượn trả

        
    });

    $(document).on('click', '#delete', function() {
        var idbook = $(this).data('id_delete');
        var iduser = $('#iduser').val();
        $.ajax({
            url: "{{URL::to('reader/favorite_delete')}}",
            type: 'post',
            data: {
                _token: CSRF_TOKEN,
                idbook:idbook,
                iduser:iduser
            },
            success: function(response) {
                alert("xóa thành công");
                favorite_book();
            }
        });
    });
</script>

@endsection()