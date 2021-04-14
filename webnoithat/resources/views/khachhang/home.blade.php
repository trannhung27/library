@extends('layout.menu')
@section('section')
<script>
            $(document).ready(function() {
                alert('dax chay duoc');
            });
        </script>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('bootstrap/image/nen.jpg')}}" class="d-block w-100" alt="...">
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
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
            <div class="col">
                <div class="card">
                    <img src="{{asset('bootstrap/image/noithatphongngu.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-img-top"></div>
                    <div class="card-img-overlay">
                        <a href="">
                            <div class="noidung">
                                <h1>NỘI THẤT PHÒNG KHÁCH</h1>
                                <div class="baohanh">BẢO HÀNH MIỄN PHÍ</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('bootstrap/image/noithatphongngu.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-img-top"></div>
                    <div class="card-img-overlay">
                        <a href="">
                            <div class="noidung">
                                <h1>NỘI THẤT PHÒNG NGỦ</h1>
                                <div class="baohanh">BẢO HÀNH MIỄN PHÍ</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('bootstrap/image/noithatphongngu.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-img-top"></div>
                    <div class="card-img-overlay">
                        <a href="">
                            <div class="noidung">
                                <h1>NỘI THẤT PHÒNG BẾP</h1>
                                <div class="baohanh">BẢO HÀNH MIỄN PHÍ</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2>CÁC SẢN PHẨM ĐANG BÁN</h2>
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-3@l uk-grid">
                @foreach($products as $row)
                <div class="sanpham">
                    <a href="/webnoithat/public/khachhang/sanpham/{{$row->id}}">
                        <div class="uk-card uk-card-default uk-card-hover">
                            <div class="uk-cover-container">
                                <img src="{{asset('bootstrap/image/phongkhach.jpg')}}" alt="" class="uk-cover" uk-cover=" ">
                                <canvas width="600 " height="400 "></canvas>
                            </div>
                            <div class="uk-card-body  uk-padding-small">
                                <div class="ten_san_pham">
                                    <p>{{$row->nameproduct}}</p>
                                </div>
                                <div class="gia_san_pham">
                                    <p>{{$row->price}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="thongtin">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
                <div class="col-sm">
                    <div class="diamond"></div>
                    <!-- <div class="thongtin"> -->
                    <h4>MIỄN PHÍ VẬN CHUYỂN</h4>
                    <h5>Chúng tôi vận chuyển đơn hàng miễn phí trên 100.000 nghìn đồng</h5>
                    <!-- </div> -->
                </div>
                <div class="col-sm">
                    <div class="diamond"></div>
                    <!-- <div class="thongtin"> -->
                    <h4>KHUYẾN MẠI CUỐI TUẦN</h4>
                    <h5>Giảm giá tới 30% vào các ngày thứ 7 chủ nhật hàng tuần</h5>
                    <!-- </div> -->

                </div>
                <div class="col-sm">
                    <div class="diamond"></div>
                    <!-- <div class="thongtin"> -->
                    <h4>HỖ TRỢ ĐUỔI TRẢ</h4>
                    <h5>Hỗ trợ miễn phí đổi trả sản phẩm trong 30 ngày đầu tiên từ khi mua hàng</h5>
                    <!-- </div> -->

                </div>

            </div>
        </div>
    </div>

    <h2>CÁC SẢN PHẨM ĐANG KHUYẾN MẠI</h2>

    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-3@l" uk-grid>
                <div class="sanpham">
                    <a href="">
                        <div class="uk-card uk-card-default uk-card-hover">
                            <div class="uk-cover-container">
                                <img src="{{asset('bootstrap/image/phongkhach.jpg')}}" alt="" class="uk-cover" uk-cover=" ">
                                <canvas width="600 " height="400 "></canvas>

                            </div>
                            <div class="uk-card-body  uk-padding-small">
                                <div class="ten_san_pham">
                                    <p>Tên sản phẩm</p>
                                </div>
                                <div class="gia_san_pham_km">
                                    <p>2.000.000 Đ</p>
                                    <p><strike>2.000.000 Đ</strike></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop()