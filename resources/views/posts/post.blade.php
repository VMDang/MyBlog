@extends("layouts.sidebar")

@section("main_content")
    <style>
        #post > p {
            width: 100%;
            margin-left: unset;
            text-align: left;
        }
    </style>
    <div id="colorlib-main">
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <!-- <div class="col-lg-8 px-md-5 py-5"> -->
                    <div class="row pt-md-4" id="post" style="margin: 0 48px;">
                        <h1 class="mb-3" style="width: 100%">{{$post->title}}</h1>
                        <div class="meta-wrap">
                            <p class="meta">
                                <span><i class="icon-calendar mr-2"></i>{{date('d/m/Y', strtotime($post->created_at))}}</span>
                                <span style="margin-left: 32px"><a href=""><i class="icon-folder-o mr-2"></i>
                                            @if($post->category_id == 1)
                                            Thời trang
                                        @elseif($post->category_id == 2)
                                            Du lịch
                                        @elseif($post->category_id == 3)
                                            Công nghệ
                                        @endif
                                        </a></span>
                                <span><a href="{{route('editPost', $post->id)}}"><i class="icon-edit" style="color: green; margin-left: 32px"></i>Chỉnh sửa</a></span>
                                <span><a href="{{route('deletePost', $post->id)}}"><i class="icon-remove_circle" style="color: red; margin-left: 32px"></i>Xóa</a></span>
                            </p>
                        </div>
                        <?php echo $post->sub_headline?>
                        <p style="text-align: center">
                            <img src="{{asset('assets/images/posts/' . $post->image)}}" alt="" class="img-fluid" width="500px">
                        </p>
                        <?php echo $post->body?>

                        <div class="tag-widget post-tag-container mb-5 mt-5" style="width: 100%">
                            <div class="tagcloud">
                                <a href="{{route('fashion.list')}}" class="tag-cloud-link">Fashion</a>
                                <a href="{{route('travel.list')}}" class="tag-cloud-link">Travel</a>
                                <a href="{{route('technology.list')}}" class="tag-cloud-link">Tech</a>
                            </div>
                        </div>

                        <div class="about-author d-flex p-4 bg-light" style="width: 100%">
                            <div class="bio mr-5">
                                <img src="{{asset('assets/images/barack-obama.jpg')}}" alt="Image placeholder" class="img-fluid mb-4" style="width: 142px">
                            </div>
                            <div class="desc">
                                <h3>Barack Obama</h3>
                                <p>Việc đọc rất quan trọng. Nếu bạn biết cách đọc, cả thế giới sẽ mở ra cho bạn!</p>
                            </div>
                        </div>

                    </div><!-- END-->
                </div>
            </div>
        </section>
    </div>
@endsection
