<!doctype html>
<html lang="th">

<head>
    <title>RTB - News & Articles</title>
    @include('fontend.inc_header')
</head>

<body>
    @include('fontend.inc_navbar')
    <div class="bg-bannerTitleNews topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>News & Articles</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">News & Articles</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="news">
        <div class="row mt-5">
            <div class="col-sm-9">

            @foreach($news as $key=>$newss)
                <div class="mt-lg-5 mt-3 px-2 px-lg-0">
                    <div class="row border">
                        <div class="col-sm-5 px-0">
                            <img src="{{$newss->news_img}}" class="w-100 h-100">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-news-text px-lg-3 px-0 py-3 mx-lg-2 mx-0">
                                <h5>{{$newss['name'.session::get('lang')]}}</h5>
                                <div>
                                    <span class="fs-12 fw-medium me-2"><i class="fas fa-calendar-alt text-green"></i> {{$newss['date'.session::get('lang')]}}</span>
                                    <?php  $ttt=DB::table('cat_news')->where('cat_news_id',$newss->cat_id)->first(); ?>
                                    @if(session::get('lang')=='th')
                                    <span class="fs-12 fw-medium"><i class="fas fa-tag text-green"></i>{{$ttt->nameth}}</span>
                                    @else
                                    <span class="fs-12 fw-medium"><i class="fas fa-tag text-green"></i>{{$ttt->nameen}}</span>
                                    @endif
                                </div>
                                <p class="text-news text-gray my-3">{!! $newss['des'.session::get('lang')] !!}</p>
                                <div class="mt-4">
                                    <a class="btn fw-medium" href="{{session::get('lang')}}/newsDetail/{{$newss->news_id}}"><i class="fas fa-arrow-alt-circle-right text-green"></i>&nbsp; Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <!-- <div class="mt-lg-5 mt-3 px-2 px-lg-0">
                    <div class="row border">
                        <div class="col-sm-5 px-0">
                            <img src="images/Product/news1.png" class="w-100 h-100">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-news-text px-lg-3 px-0 py-3 mx-lg-2 mx-0">
                                <h5>Jabra Elite 2 and Jabra Elite 3 rock the market
                                    with a new design. with state-of...</h5>
                                <div>
                                    <span class="fs-12 fw-medium me-2"><i class="fas fa-calendar-alt text-green"></i> 08 September, 2021</span>
                                    <span class="fs-12 fw-medium"><i class="fas fa-tag text-green"></i> News & Promotion</span>
                                </div>
                                <p class="text-news text-gray my-3">RTB continues to open up a now experience of listening to
                                    quality music continuously. delivering innovative head
                                    phones Jabra Elite 2 and Jabra Elite....</p>
                                <div class="mt-4">
                                    <a class="btn fw-medium" href="newsDetail.php"><i class="fas fa-arrow-alt-circle-right text-green"></i>&nbsp; Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                

                <ul class="pagination justify-content-start mt-5">
                    <!-- <li class="page-item"><a class="page-link" href="javascript:void(0);">
                    <i class="fas fa-chevron-left"></i> </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li> -->
                    {{$news->appends(Request::all())->links()}}
                </ul>

            </div>
            <div class="col-sm-3 mt-lg-5 mt-3 px-4">
                <h5>Categories</h5>
                <div class="progress">
                    <div class="progress-bar bg-green" style="width:20%"></div>
                </div>
                <div class="cateNews my-3">
                    <ul class="no-list-style px-lg-3 px-1">
                    @foreach($cat_news as $key=>$ss)
                    <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">{{$ss['name'.session::get('lang')]}}</a></li>
                    @endforeach
                        <!-- <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">News & Promotion</a></li>
                        <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">Contents</a></li>
                        <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">Event</a></li>
                        <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">Distributor of RTB Technology product</a></li> -->
                    </ul>
                </div>

            </div>
        </div>
    </div>
    @include('fontend.inc_footer')
    <script>
        $('#linkMenuTop .nav-item').eq(4).addClass('active');
    </script>
</body>

</html>