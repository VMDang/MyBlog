@extends('layouts.sidebar')

@section('main_content')
    <div id="colorlib-main">
        <section class="ftco-section contact-section px-md-4">
            <div class="container">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-12 mb-4">
                        <h2 class="h3">Thông tin liên hệ</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-6 col-xl-3 d-flex mb-4">
                        <div class="info bg-light p-4">
                            <p><span>Địa chỉ:</span> Đại học Xây Dựng Hà Nội</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 d-flex mb-4">
                        <div class="info bg-light p-4">
                            <p><span>Điện thoại:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 d-flex mb-4">
                        <div class="info bg-light p-4">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 d-flex mb-4">
                        <div class="info bg-light p-4">
                            <p><span>Facebook</span> <a href="#">yoursite.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="row block-9">
                        <form action="" class="bg-light p-5 contact-form" method="post">
                            @csrf
                            <div class="col-md-12 mb-4" style="padding: 0">
                                <h3 class="h4">Phản hồi với chúng tôi</h3>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Họ và Tên" name="name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder=" Email" name="email">
                            </div>
                            <div class="form-group">
									<textarea name="message" id="" cols="30" rows="7" class="form-control"
                                              placeholder="Lời nhắn"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="button" value="Gửi" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                </div>
            </div>
        </section>
    </div>
@endsection
