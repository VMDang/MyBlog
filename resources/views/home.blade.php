@extends("layouts.footer")

@section("content")
    <div class="col-xl-8 py-5 px-md-5" >
        <div class="row pt-md-4">
            @foreach($posts as $key => $post)
                <div class="col-md-12">
                    <div class="blog-entry ftco-animate d-md-flex">
                        <a href="{{route('post.show', $post->id)}}" class="img img-2"
                           style="background-image: url({{asset("assets/images/posts/" . $post->image )}});"></a>

                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2"><a href="{{route('post.show', $post->id)}}"><?php echo $post->title;  ?></a></h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>{{date('d/m/Y', strtotime($post->created_at))}}</span>
                                            @if($post->category_id == 1)
                                                <span><a href="{{route('fashion.list')}}"><i class="icon-folder-o mr-2"></i>Thời trang</a></span>
                                            @elseif($post->category_id == 2)
                                                <span><a href="{{route('travel.list')}}"><i class="icon-folder-o mr-2"></i>Du lịch</a></span>
                                            @elseif($post->category_id == 3)
                                                <span><a href="{{route('technology.list')}}"><i class="icon-folder-o mr-2"></i>Công nghệ</a></span>
                                            @endif
                                        </a></span>
                                        <span><a href="{{route('editPost', $post->id)}}"><i class="icon-edit" style="color: green; padding: 4px"></i>Chỉnh sửa</a></span>
                                        <span><a href="{{route('deletePost', $post->id)}}"><i class="icon-remove_circle" style="color: red; padding: 4px"></i>Xóa</a></span>
                                </p>
                            </div>
                            <p class="mb-4"><?php echo $post->sub_headline;  ?></p>
                            <p><a href="{{route('post.show', $post->id)}}" class="btn-custom">Read More <span
                                        class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- END-->
        {{--                        <div class="row">--}}
        {{--                            <div class="col">--}}
        {{--                                <div class="block-27">--}}
        {{--                                    <ul>--}}
        {{--                                        <li><a href="#">&lt;</a></li>--}}
        {{--                                        <li class="active"><span>1</span></li>--}}
        {{--                                        <li><a href="#">2</a></li>--}}
        {{--                                        <li><a href="#">3</a></li>--}}
        {{--                                        <li><a href="#">4</a></li>--}}
        {{--                                        <li><a href="#">5</a></li>--}}
        {{--                                        <li><a href="#">&gt;</a></li>--}}
        {{--                                    </ul>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
    </div>
@endsection

