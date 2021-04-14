@extends('layout.sidebar') 
@section('nav')
<nav class="col-lg-9 col-md-7 col-sm-8" style="margin-top: 135px;">
    <div class="media mt-4">
        <img src="{{asset('bootstrap/image/noithatphongngu.jpg')}}" class="align-self-start mr-3" style="width:20%">
        <div class="media-body">
            <p>Name Shop</p>
            <p>Name produt</p>
            <p>Number</p>
            <p>Price</p>
            <p>Total amount</p>
            <a type="button" href="" class="btn btn-dark mr-2 mt-2">Đánh giá sản phẩm</a>
        </div>
    </div>
    <hr>
</nav>
@stop()