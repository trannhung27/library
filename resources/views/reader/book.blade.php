@extends('reader.head')
@section('content')
    <div class="a-book col-md-8">
        @foreach($book as $row)
        <div class="header-padding"></div>
        <div class="info-book">
            <img src="{{asset('images/'.$row->image)}}" />
            <div class="info">
                <h2>{{$row->name}} </h2>
                <input type="hidden" value="{{$row->id}}" id="idbook">
                <input type="hidden" value="{{Auth::user()->id}}" id="iduser">
                <button type="submit" id="like" class="like color">
                    
                </button>
                <table>
                    <tr>
                        <td>
                            <p>Tác giả : <strong><a href="#">{{$row->author}}</a></strong></p>
                        </td>
                        <td class="an" style="padding-left:20px;">
                            <p>Nhà xuất bản : <strong><a href="">{{$row->publisher}} </a></strong></p>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <p>Thể loại : <strong><a href="#">Tiểu thuyết</a></strong></p>
                        </td>
                        <td class="an" style="padding-left:20px;">
                            <p>Số trang : <strong>360</strong> trang</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Mã sách : <strong style=" color: #B32137;">{{$row->id}}</strong></p>
                        </td>
                        <td class="an" style="padding-left:20px;">
                            <p>&ensp;Lượt xem : <strong>6523712</strong></p>
                        </td>
                    </tr>
                </table>

                <div class="review">
                    <span>
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                      <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                   </svg>
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                      <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                   </svg>
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                      <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/> 
                   </svg>
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                      <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                   </svg>
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                      <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                   </svg>
                   <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                </span>
                    <p>Đánh giá : <strong>4.5</strong>/5 từ <strong>12479</strong> lượt</p>
                </div>

                <div class="info-button">
                    <button id="muon-sach">Mượn sách</button>
                    <button id="readOnline">Đọc online</button>
                </div>
            </div>
        </div>
        <div class="description-book">
            <h3 style="height: 40px;
          color: #ffffff;
          background-color: #B32137;
          line-height: 40px;
          padding-left: 25px;
          border-radius: 5px;">Giới thiệu</h3>
            <p>Harry Potter và Hòn đá Phù thủy (nguyên tác: Harry Potter and the Philosopher's Stone, nghĩa: Harry Potter và Hòn đá Giả kim) là tiểu thuyết kỳ ảo của nữ văn sĩ người Anh J. K. Rowling. Đây là cuốn đầu trong loạt tiểu thuyết Harry Potter và
                là tiểu thuyết đầu tay của J. K. Rowling. Nội dung sách kể về Harry Potter, một phù thủy thiếu niên chỉ biết về tiềm năng phép thuật của mình sau khi nhận thư mời nhập học tại Học viện Ma thuật và Pháp thuật Hogwarts vào đúng vào dịp sinh
                nhật thứ mười một. Ngay năm học đầu tiên, Harry đã có những người bạn thân lẫn những đối thủ ở trường như Ron, Hermione, Draco,.... Được bạn bè giúp sức, Harry chiến đấu chống lại sự trở lại của Chúa tể Hắc ám Voldemort, kẻ đã sát hại
                cha mẹ cậu nhưng lại thảm bại khi toan giết Harry dù cậu khi đó chỉ mới 15 tháng tuổi.
            </p>


        </div>
        @endforeach
        <!-- Bình luận -->
        <div class="comment">
            <h3>Bình luận</h3>
            <div class="soluong"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="comments">
                            <div class="comments-details">
                                <span class="total-comments comments-sort">117 Bình luận</span>
                            </div>
                            <div class="comment-box add-comment">
                                <span class="commenter-pic">
                                    <img src="{{asset('images/avatar-default.png')}}" class="img-fluid">
                                </span>
                                <span class="commenter-name">
                                    <form action="" id="form">
                                        <input type="text" id="add_comment" placeholder="Thêm bình luận công khai" name="Add Comment">
                                
                                    </form>
                                    <button type="submit" id="sendcomment" class="btn btn-default">Bình luận</button>
                                    <button type="cancel" class="btn btn-default">Hủy</button>
                                </span>
                            </div>
                            <div class="comment-box showcomment">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End bình luận -->
    </div>
    <!-- footer -->
    <!-- Mượn sách -->
    <div class="dialog-dk" id="from-muon-sach">
        <div class="dialog-background-dk"></div>
        <div class="dialog-box-dk">
            <div class="dialog-box-header">
                <span class="dialog-text-header">Mượn sách</span>
                <button class="dialog-close">&times;</button>
            </div>
            <div class="dialog-box-content">
                <div class="dialog-content-item">
                    Họ tên (<span style="color: red;">*</span>):
                    <input class="form-control border-input" id="name" placeholder="Họ tên" value="{{Auth::user()->name}}" type="text">
                </div>
                <div class="cards dialog-content-item">
                    Mã thẻ thư viện (<span style="color: red;">*</span>)
                    <input class="form-control border-input" placeholder="mã thẻ" type="text">
                </div>
                <div class="dialog-content-item">
                    Số điện thoại liên hệ (<span style="color: red;">*</span>)
                    <input class="form-control border-input" id="phone" placeholder="Số điện thoại" value="{{Auth::user()->phone}}" type="text">
                </div>
                <div class="dialog-content-item">
                    Email liên hệ
                    <input class="form-control border-input" id="email" placeholder="email" value="{{Auth::user()->email}}" type="text">
                </div>
                <div class="dialog-content-item">
                    Mã sách - Tên sách (<span style="color: red;">*</span>)
                    <input class="form-control border-input" value="{{$row->id}} - {{$row->name}}" id="book_id" placeholder="Harry Potter - B0123" type="text">
                </div>

                <div style="margin:5px 40px 0px 40px;">Ngày mượn (<span style="color: red;">*</span>)</div>
                <div class="dialog-content-item item-2">
                    <input class="form-control border-input" id="date_borrow" type="date">
                    <select id="time_borrow">
                        <option style="color: grey;">Thời hạn mượn</option>
                        <option id ="1 thang">1 tháng</option>
                        <option id ="2 thang">2 tháng</option>
                        <option id ="3 thang">3 tháng</option>
                        <option id ="4 thang">6 tháng</option>
                    </select>
                </div>
                <div class="check"><input type="checkbox"> Tôi đồng ý các điều khoản trên</div>
                <div class="dialog-content-item">
                    <button class="dangky send">Gửi</button>
                </div>
            </div>
            <div class="dialog-box-footer">
            </div>
        </div>
    </div>

    <div id="chapter-list">
        <div class="dialog-background-dk"></div>
        <div class="dialog-box-dk">
            <div class="dialog-box-header">
                <span class="dialog-text-header">Đọc sách</span>
                <button class="dialog-close">&times;</button>
            </div>
            <div class="dialog">
                <a href="/library/public/reader/chapter">
                    <div class="text">
                        Chương 1:
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script type='text/javascript'>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    function numberlike() {
        var iduser = $('#iduser').val();
        var idbook = $('#idbook').val();
        $.ajax({
            url: "{{URL::to('reader/showlike')}}",
            type: 'post',
            data: {
                _token: CSRF_TOKEN,
                iduser: iduser,
                idbook: idbook
            },
            success: function(response) {
                var like = response;
                $('.like').html("<i class='fas fa-thumbs-up'></i>&ensp;Thích&ensp;" + like);
            }
        });
    }
    function like(){
        var iduser = $('#iduser').val();
        var idbook = $('#idbook').val();
        if (iduser != '' && idbook != '') {
            $.ajax({
                url: "{{URL::to('reader/checklike')}}",
                type: 'post',
                data: {
                    _token: CSRF_TOKEN,
                    iduser: iduser,
                    idbook: idbook
                },
                success: function(response) {
                    if(response ==0){
                        $(".info-book .color").css("background-color","#B32137");
                    }
                    else{
                        $(".info-book .color").css("background-color","#aa2b8d");
                    }
                }
            });
        } else {
            alert('Fill all fields');
        }
    }
    $(document).ready(function() {
        setInterval(function() {
            numberlike();
            showcomment();
        }, 1000);
        // Xử lý ajax cho việc đăng ký
        like();
        $('#like').click(function() {
            var iduser = $('#iduser').val();
            var idbook = $('#idbook').val();
            if (iduser != '' && idbook != '') {
                $.ajax({
                    url: "{{URL::to('reader/like')}}",
                    type: 'post',
                    data: {
                        _token: CSRF_TOKEN,
                        iduser: iduser,
                        idbook: idbook
                    },
                    success: function(response) {
                        if(response ==0){
                            $(".info-book .color").css("background-color","#aa2b8d");
                        }
                        else{
                            $(".info-book .color").css("background-color","#B32137");
                        }
                    }
                });
            } else {
                alert('Fill all fields');
            }
        });

        // Xử lý ajax comment
        $('#sendcomment').click(function() {
            var add_comment = $('#add_comment').val()
            var iduser = $('#iduser').val();
            var idbook = $('#idbook').val();
            $.ajax({
                url: "{{URL::to('reader/comment')}}",
                type: 'post',
                data: {
                    _token: CSRF_TOKEN,
                    iduser: iduser,
                    idbook: idbook,
                    add_comment: add_comment,
                },
                success: function(response) {
                    $('#form')[0].reset();
                }
            });
        });

        // Xử lý hiển thị thẻ card
        $('#muon-sach').click(function() {
            var idbook = $('#idbook').val();
            var iduser = $('#iduser').val();

            $.ajax({
                url: "{{URL::to('reader/checkrequest')}}",
                type: 'post',
                data: {
                    _token: CSRF_TOKEN,
                    iduser: iduser,
                    idbook:idbook,
                },
                success: function(response) {
                    if(response == 1)
                    {
                        alert("Đã gửi yc");
                        $('.dialog-dk').hide();
                        $('header').show();
                    }
                    else{
                        $.ajax({
                            url: "{{URL::to('reader/card')}}",
                            type: 'post',
                            data: {
                                _token: CSRF_TOKEN,
                                iduser: iduser,
                            },
                            success: function(response) {
                                var card = "";
                                $.each(response.response, function(index, value) {
                                    card = value.cardNumber;

                                });
                                $('.cards').html("Mã thẻ thư viện (<span style='color: red;'>*</span>)<input id='card_Number' class='form-control border-input' value='" + card + "' placeholder='mã thẻ' type='text'>");
                            }
                        });
                    }
                }
            })
            
        });

        //Xử lý đăng ký mượn sách
        $('.send').click(function() {
            var iduser = $('#iduser').val();
            var name = $('#name').val();
            var card_Number = $('#card_Number').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var book_id = $('#book_id').val();
            var date_borrow = $('#date_borrow').val();
            var time_borrow = $('#time_borrow').val();
            $.ajax({
                url: "{{URL::to('reader/muonsach')}}",
                type: 'post',
                data: {
                    _token: CSRF_TOKEN,
                    iduser: iduser,
                    name: name,
                    card_Number: card_Number,
                    phone: phone,
                    email: email,
                    book_id: book_id,
                    date_borrow:date_borrow,
                    time_borrow: time_borrow
                },
                success: function(response) {
                    alert("Đã gửi yêu cầu mượn sách và đang chờ phê duyệt");
                    $('.dialog-dk').hide();
                    $('header').show();
                }
            });
        });

        $('#readOnline').click(function() {
            var idbook = $('#idbook').val();
            $.ajax({
                url: "{{URL::to('reader/listchapter')}}",
                type: 'post',
                data: {
                    _token: CSRF_TOKEN,
                    idbook: idbook,
                },
                success: function(response) {
                    var chapter = "";
                    $.each(response.response, function(index, value) {
                        chapter +=
                            "<a href='/library/public/reader/chapter/" + value.id + "'>" +
                            "<div class='text'>" + value.name + "</div>" +
                            "</a>";
                    });

                    $('.dialog').html('').append(chapter);
                }
            });
        });
    });

    function showcomment() {
        var idbook = $('#idbook').val();
        $.ajax({
            url: "{{URL::to('reader/showcomment')}}",
            type: 'post',
            data: {
                _token: CSRF_TOKEN,
                idbook: idbook
            },
            success: function(response) {
                var comment = "";
                $.each(response.response, function(index, value) {
                    comment += "<span class='commenter-pic'><img src='{{asset('images/avatar-default.png')}}' class='img-fluid'></span>" +
                        "<span class='commenter-name name'>" + value.name + "</span>" +
                        "<p class='comment-txt more'>" + value.comment + "</p>";

                });
                $('.showcomment').html('').append(comment);
            }
        });
    }
</script>
@endsection()
