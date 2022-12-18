@extends('layouts.sidebar')

@section("script")
    <script>
        $(function () {
            'use strict'
            CKEDITOR.replace('sub_headline' );
            CKEDITOR.replace('body');

            // $('#category').val(2).change();

        })
    </script>
@endsection

@section('footer')

    <form action="{{route('editPost', $post->id)}}" id="formAddPost" class="form-horizontal" method="post" enctype="multipart/form-data">
        <!-- Modal body -->
        <div class="col-md-12 mb-4">
            <h3 class="h4">Chỉnh sửa bài viết</h3>
        </div>
        @csrf
        <div class="modal-body">
            <input type="hidden" id="id" class="form-control" name="id" value="{{$post->id}}">
            <div class="form-group row">
                <label class="col-lg-3 col-form-label" for="category">Thể loại: <span class="text-danger">*</span></label>
                <div class="col-sm-7">
                    <select class="form-control" name="category" id="category">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == old('category_id', $post->category_id) ? 'selected' : '' }}>
                                @if($category->name == 'fashion')
                                    Thời trang
                                @elseif($category->name == 'travel')
                                    Du lịch
                                @elseif($category->name == 'technology')
                                    Công nghệ
                                @endif
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label" for="title" id="title">Tiêu đề: <span class="text-danger">*</span></label>
                <div class="form-group col-lg-9">
                    <input type="text" name="title" id="title" class="form-control" required value="{{$post->title}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label" for="image" id="image">Đổi ảnh minh họa: <span class="text-danger">*</span></label>
                <div class="form-group col-lg-9">
                    <input type="file" accept="image/*" name="image" id="image" class="form-control" >
                </div>
            </div>
            <div class="form-group row" >
                <label class="col-lg-3 col-form-label" for="sub_headline">Tiêu đề phụ: <span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <textarea type="text" name="sub_headline" id="sub_headline" class="form-control"><?php echo $post->sub_headline?></textarea>
                </div>
            </div>

            <div class="form-group row" >
                <label class="col-lg-3 col-form-label" for="body">Nội dung bài viết:<span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <textarea type="text" name="body" id="body" class="form-control" required="true"><?php echo $post->body?></textarea>
                </div>
            </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer ">
            <button type="button" class="btn btn-default closeModal" data-dismiss="modal" style="background: #ff5464">Đóng</button>
            <button type="submit" class="btn btn-primary" id="btnSave"><i class="fas fa-save"></i> Lưu thông tin </button>
        </div>
    </form>

@endsection
