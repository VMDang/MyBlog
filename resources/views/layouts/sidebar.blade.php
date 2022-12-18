@extends("layouts.index")

@section("sidebar")
    <aside id="colorlib-aside" role="complementary" class="js-fullheight">
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li id="home" ><a href="{{route('home')}}">Trang chủ</a></li>
                <li><a href="{{route('fashion.list')}}">Thời trang</a></li>
                <li><a href="{{route('travel.list')}}">Du lịch </a></li>
                <li><a href="{{route('technology.list')}}">Công nghệ</a></li>
                <li><a href="{{route('contact')}}">Liên hệ</a></li>
            </ul>
        </nav>

        <div class="colorlib-footer">
            <h1 id="colorlib-logo" class="mb-4"><a href="#" style="background-image: url({{asset("assets/images/bg_1.jpg")}}); line-height: 1.4; font-size: 80px">My Blog</a></h1>
            <div class="mb-4">
                <h3>Theo dõi để nhận bài mới nhất</h3>
                <form action="#" class="colorlib-subscribe-form">
                    <div class="form-group d-flex">
                        <div class="icon"><span class="icon-paper-plane"></span></div>
                        <input type="text" class="form-control" placeholder="Nhập email">
                    </div>
                </form>
            </div>
        </div>
    </aside> <!-- END ASIDE -->
@endsection
