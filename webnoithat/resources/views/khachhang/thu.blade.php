<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
@extends('layout.menu')
@section('section')
<!-- <body>
    <form id='submit-form'>
        <button type='submit'>submit</button>
    </form>
</body> -->
@foreach($products as $row)
    <div class="bg-light">
        <div class="container" style="background-color: white;">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('bootstrap/image/nen.jpg')}}" class="d-block w-100 mt-3" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h2>{{$row->nameproduct}}</h2>
                    <p>{{$row->price}}</p>
                    <div class="buttons_added">
                        <p class="mr-3 mt-1">Số lượng:</p>
                        <input class="minus is-form" type="button" value="-">
                        <input aria-label="quantity" class="input-qty" max="100" min="1" name="" type="number" value="1">
                        <input class="plus is-form" type="button" value="+">
                        <p class="mt-1 ml-3">{{$row->number}} Sản phẩm có sẵn</p>
                    </div>

                    <div class="muahang mt-3">
                        <a type="button" href="" class="btn btn-dark">Thêm vào giỏ hàng</a>
                        <a type="button" href="" class="btn btn-dark " style="width: 190px;">Mua ngay</a>
                    </div>

                    <div class="favourite">
                        <button class=" btn btn-danger mt-3" style="padding: 0 10px;margin-right: 30px;background-color: #F7931E;">
                                <i class="fas fa-heart" style="color: #eec451;"></i> 50 
                            </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="background-color: white;">
            <h2>Mô tả sản phẩm</h2>
            <h2>Đánh giá sản phẩm</h2>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="" id='submit-form'>
                    @csrf
                    <h3 class="new-comment">New comment</h3>
                    <div class="panel">
                        <div class="panel-body">
                            <textarea class="form-control comment_content" name="comment_content" rows="2" placeholder="What are you thinking?"></textarea>
                            <button type='submit' class="btn btn-dark mr-2 mt-2 send-comment">Gửi bình luận</button>
                        </div>
                    </div>
                </form>
                
                <br> 
                <div class="cmt-top">
                    <strong>12587 Bình luận</strong>
                </div>
                
                <!-- <form action="">
                    @csrf
                    <div id="comment_show"></div>
                    @foreach($comments as $row1)
                        <div class="comment">
                            {{$row->comment}}
                        </div>
                    @endforeach
                </form> -->

                <table id="comment_">
                    <thead>
                        <tr>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $row1)
                        <tr>
                            <td>
                            {{$row->comment}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <script>
                $('input.input-qty').each(function() {
                        var $this = $(this),
                            qty = $this.parent().find('.is-form'),
                            min = Number($this.attr('min')),
                            max = Number($this.attr('max'))
                        if (min == 0) {
                            var d = 0
                        } else d = min
                        $(qty).on('click', function() {
                            if ($(this).hasClass('minus')) {
                                if (d > min) d += -1
                            } else if ($(this).hasClass('plus')) {
                                var x = Number($this.val()) + 1
                                if (x <= max) d += 1
                            }
                            $this.attr('value', d).val(d)
                        })
                    })
                    //]]>
            </script>
        </div>
    </div>
@endforeach
@endsection()

<script>
    $(document).ready(function($) {
        functin load()
        {
            alert("hahah");
        }
        $(document).on('submit', '#submit-form', function(event) {
            alert("hahah");
            var name = $('.comment_content').val();
            var _token = $("input[name=_token]").val()
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: './thu2',
                data: {name: name,
                    _token:_token,
                },
                success: function (response) {
                    $('#comment_').prepend('<tr><td>' + response.comment + '<td><tr>');
                    $('#submit-form')[0].reset();   
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    });
</script>

</html>