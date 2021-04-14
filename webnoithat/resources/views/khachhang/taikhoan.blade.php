@extends('layout.sidebar')
@section('nav')

            <nav class="col-lg-9 col-md-7 col-sm-8" id="pjax-container" style="margin-top: 155px;">
                <h2>Hồ sơ của tôi</h2>
                <hr>
                <form class="js-form-submit-data" action="#" data-action-url="#" method="POST" novalidate="novalidate">
                    <div class="form-group row mt-5">
                        <label for="user_id" class="col-md-2 offset-md-2 col-form-label">Tên đăng nhập</label>
                        <div class="col-md-6">
                            <input type="text" readonly="" class="form-control disable" id="user_id" value="trannhunga8">
                        </div>
                    </div>

                    <div class="form-group row mt-5">
                        <label for="user_name" class="col-md-2 offset-md-2 col-form-label">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control valid" id="user_name" name="name" value="trinhthikim" placeholder="Ex:trannhunga8@gmail.com" aria-invalid="false">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_email" class="col-md-2 offset-md-2 col-form-label">Số điện thoại</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="user_email" name="email" value="" placeholder="Nhập số điện thoại">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_email" class="col-md-2 offset-md-2 col-form-label">Tên Shop</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="user_email" name="email" value="" placeholder="nguyenvana@gmail.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_email" class="col-md-2 offset-md-2 col-form-label">Căn cước công dân</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="user_email" name="email" value="" placeholder="nhập số căn cước">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_email" class="col-md-2 offset-md-2 col-form-label">Địa chỉ thường chú</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="user_email" name="email" value="" placeholder="nhập đủ xã/ huyện/ tỉnh">
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_password" class="col-md-2 offset-md-2 col-form-label" style="padding-top: 0;">Mật khẩu</label>
                        <div class="col-md-6">
                            <a class="" href="./Đổi mật khẩu.html">Đổi mật khẩu</a>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="user_email" class="col-md-2 col-form-label"></label>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary mb-2 btn-block">Cập nhật</button>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="101028">
                </form>
            </nav>
@stop()
