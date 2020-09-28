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
                <div class="col-12 my-3 my-md-0 col-md-6">
                    <div class="image_box h-100">
                        <a href="./images/index/news/news_example.JPG" data-lightbox="image-1" data-title="My caption">
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-12 my-3 my-md-0 col-md-6">
                    <div class="info_content">
                        <h3>景點名稱</h3>
                        我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容我是文章詳細內容
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endsection






