@extends('layouts.sidebar')


@section('footer')
    <div class="col-xl-4 sidebar ftco-animate bg-light pt-5" >
        <div class="sidebar-box pt-md-4" style="padding-bottom: 24px" >
            <div class="row-cols-md-1" style="float: left">
                <a class="btn btn-success text-white float-right" id="btnAddPost" style="background: #0c5460">
                    <span class="icon-add_circle"></span>
                    <i class="fas fa-cog"></i>
                    Thêm bài viết mới
                </a>
            </div>
        </div>

        <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Thể loại</h3>
            <ul class="categories">
                <li><a href="#">Thời trang <span>(6)</span></a></li>
                <li><a href="#">Du lịch <span>(2)</span></a></li>
                <li><a href="#">Công nghệ <span>(8)</span></a></li>
            </ul>
        </div>

        <div class="sidebar-box subs-wrap img py-4" style="background-image: url({{asset("assets/images/bg_1.jpg")}});">
            <div class="overlay"></div>
            <h3 class="mb-4 sidebar-heading">Nhận thư mới</h3>
            <p class="mb-4">Hãy nhập địa chỉ email để nhận những bài viết mới nhất</p>
            <form action="" class="subscribe-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nhập email">
                    <input type="submit" value="Gửi" class="mt-2 btn btn-white submit">
                </div>
            </form>
        </div>

        <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Dòng thời gian</h3>
            <ul class="categories">
                <li><a href="#">Decob14 2018 <span>(10)</span></a></li>
                <li><a href="#">September 2018 <span>(6)</span></a></li>
                <li><a href="#">August 2018 <span>(8)</span></a></li>
                <li><a href="#">July 2018 <span>(2)</span></a></li>
                <li><a href="#">June 2018 <span>(7)</span></a></li>
                <li><a href="#">May 2018 <span>(5)</span></a></li>
            </ul>
        </div>


        <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Danh ngôn</h3>
            <p> "Việc đọc rất quan trọng. Nếu bạn biết cách đọc, cả thế giới sẽ mở ra cho bạn" - Barack Obama</p>
        </div>
    </div><!-- END COL -->

    <!-- The Modal -->
    <div class="modal fade" id="modalAddPost">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="modalAddPostTitle">Thêm bài viết</h4>
                    <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('savePost')}}" id="formAddPost" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <!-- Modal body -->
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="id" class="form-control" name="id">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="category">Thể loại: <span class="text-danger">*</span></label>
                            <div class="col-sm-7">
                                <select class="form-control" name="category" id="category">
                                    <option value="1" >Thời trang</option>
                                    <option value="2" >Du lịch</option>
                                    <option value="3" >Công nghệ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="title" id="title">Tiêu đề: <span class="text-danger">*</span></label>
                            <div class="form-group col-lg-9">
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="image" id="image">Ảnh minh họa: <span class="text-danger">*</span></label>
                            <div class="form-group col-lg-9">
                                <input type="file" accept="image/*" name="image" id="image" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row" >
                            <label class="col-lg-3 col-form-label" for="sub_headline">Tiêu đề phụ: <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <textarea type="text" name="sub_headline" id="sub_headline" class="form-control" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row" >
                            <label class="col-lg-3 col-form-label" for="body">Nội dung bài viết:<span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <textarea type="text" name="body" id="body" class="form-control" required="true"></textarea>
                            </div>
                        </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-default closeModal" data-dismiss="modal" style="background: #ff5464">Đóng</button>
                        <button type="submit" class="btn btn-primary" id="btnSave"><i class="fas fa-save"></i> Lưu thông tin </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
