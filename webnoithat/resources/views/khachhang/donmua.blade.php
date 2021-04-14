@extends('layout.sidebar')
@section('nav')
            <nav class="col-lg-9 col-md-7 col-sm-8 mt-3" id="pjax-container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tất cả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Chờ xác nhận</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Chờ lấy hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đang giao</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đã giao</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                @foreach($products as $row)
                <div class="media mt-4">
                    <img src="{{ asset('image/'.$row->image1) }}" class="align-self-start mr-3" style="width:20% ">
                    <div class="media-body">
                        <p>{{$row->nameproduct}}</p>
                        <p></p>
                        <p>Price</p>
                        <p>Total amount</p>
                        <a type="button" href="" class="btn btn-dark mr-2 mt-2">Đánh giá</a>
                        <a type="button" href="" class="btn btn-dark mr-2 mt-2">Xem chi tiết đơn hàng</a>
                        <a type="button" href="" class="btn btn-dark mr-2 mt-2">Mua lần nữa</a>
                        <a type="button" href="" class="btn btn-dark mr-2 mt-2">Chat</a>
                    </div>
                </div>
                <hr>
                @endforeach
            </nav>
            
@stop()
