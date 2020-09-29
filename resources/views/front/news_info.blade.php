    @extends('layouts/nav_footer')


    <!-- lightbox -->
    @section('lightbox_css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    @endsection

    @section('lightbox_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    @endsection

    <!-- page css -->
    @section('css')
    <link rel="stylesheet" href="./css/news_info.css">
    @endsection

    @section('content')
    <section class="news_info">
        <div class="container">
            <h2 class="info_title">中台灣推薦秘境景點</h2>
            <div class="row">
                @foreach ($news_list as $news)
                <div class="col-12 my-3 my-md-0 col-md-6">
                    <div class="news_list">
                        <h3>{{$news->title}}</h3>
                            <h4>{{$news->sub_title}}</h4>
                        <img width="100%" src="{{$news->image_url}}" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">{{$news->content}}</p>
                            <a class="btn btn-success" href="./news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                </div>
                @endforeach
                {{$news_list->links() }}



                </div>
            </div>
        </div>
    </section>
    @endsection






