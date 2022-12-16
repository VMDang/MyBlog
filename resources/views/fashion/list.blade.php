@extends("layouts.sidebar")

@section('main_content')
    <div id="colorlib-main">
        <section class="ftco-section">
            <div class="container">
                <div class="row px-md-4">
                    @foreach($list as $key => $post)
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="" class="img img-2"
                                   style="background-image: url({{asset("assets/images/posts/" . $post->image )}});"></a>

                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2"><a href=""><?php echo $post->title;  ?></a></h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span><i class="icon-calendar mr-2"></i>{{date('d/m/Y', strtotime($post->created_at))}}</span>
                                            <span><a href=""><i class="icon-folder-o mr-2"></i>Thời trang</a></span>
                                            {{--                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>--}}
                                        </p>
                                    </div>
                                    <p class="mb-4"><?php echo $post->sub_headline;  ?></p>
                                    <p><a href="#" class="btn-custom">Read More <span
                                                class="ion-ios-arrow-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
{{--                <div class="row">--}}
{{--                    <div class="col text-center text-md-left">--}}
{{--                        <div class="block-27">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">&lt;</a></li>--}}
{{--                                <li class="active"><span>1</span></li>--}}
{{--                                <li><a href="#">2</a></li>--}}
{{--                                <li><a href="#">3</a></li>--}}
{{--                                <li><a href="#">4</a></li>--}}
{{--                                <li><a href="#">5</a></li>--}}
{{--                                <li><a href="#">&gt;</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </section>
    </div>
@endsection
