<!doctype html>
<html lang="th">

<head>
    <title>RTB - Innovation</title>
    @include('fontend.inc_header')
</head>

<body>
    @include('fontend.inc_navbar')
    <div class="bg-bannerTitleInnovation topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>Innovation</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Innovation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="news">
        <div class="row">
            <div class="col-sm-9 mt-lg-5 mt-3">
                <div class="row">

                @foreach($in as $key=>$ins)
                    <div class="col-sm-12 mb-lg-5 mb-3">
                        <div class="border">
                            <img src="{{$ins->in_img}}" class="w-100">
                            <div class="card-news-text px-lg-3 px-1 py-3 mx-2">
                            <?php  $ttt=DB::table('cat_in')->where('cat_in_id',$ins->cat_id)->first(); ?>
                            @if(session::get('lang')=='th')
                                <span class="text-green fw-medium">{{$ttt->nameth}}</span>
                                @else
                                <span class="text-green fw-medium">{{$ttt->nameen}}</span>
                                @endif
                                <h5>{{$ins['in_name'.session::get('lang')]}}</h5>
                                <p class="text-news text-gray my-3">{!! $ins['in_description'.session::get('lang')] !!}</p>
                                <div>
                                    <a class="btn fw-medium" href="{{session::get('lang')}}/InnovationDetail/{{$ins->in_id}}"><i class="fas fa-arrow-alt-circle-right text-green"></i>&nbsp; Read More</a>
                                </div>
                            </div>
                            <div class="border-top py-2">
                                <a class="btn text-gray fs-12" href=""><i class="fas fa-user"></i> Admin</a>
                                <span class="text-gray">|</span>
                                <a class="btn text-gray fs-12" href=""><i class="fas fa-calendar-alt"></i>{{$ins['date'.session::get('lang')]}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
<!-- 
                    <div class="col-sm-12 mb-lg-5 mb-3">
                        <div class="border">
                            <img src="images/News/newsDetail.png" class="w-100">
                            <div class="card-news-text px-lg-3 px-1 py-3 mx-2">
                                <span class="text-green fw-medium">Technology inside digital workplace</span>
                                <h5>Jabra Elite 2 and Jabra Elite 3 rock the market
                                    with a new design. with state-of...</h5>
                                <p class="text-news text-gray my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit. At risus viverra adipiscing at in tellus integer feugiat. In cursus turpis massa tincidunt dui ut ornare lectus sit. Quis vel eros donec ac odio ... tempor orci dapibus ultrices. In aliquam sem fringilla ut. Quis blandit turpis cursus in hac. Velit dignissim sodales ut eu sem. Amet justo donec enim diam vulputate ut pharetra sit amet. Scelerisque purus semper eget duis at.</p>
                                <div>
                                    <a class="btn fw-medium" href="InnovationDetail.php"><i class="fas fa-arrow-alt-circle-right text-green"></i>&nbsp; Read More</a>
                                </div>
                            </div>
                            <div class="border-top py-2">
                                <a class="btn text-gray fs-12" href=""><i class="fas fa-user"></i> Admin</a>
                                <span class="text-gray">|</span>
                                <a class="btn text-gray fs-12" href=""><i class="fas fa-calendar-alt"></i> 08 September, 2021</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-lg-5 mb-3">
                        <div class="border">
                            <img src="images/News/newsDetail.png" class="w-100">
                            <div class="card-news-text px-lg-3 px-1 py-3 mx-2">
                                <span class="text-green fw-medium">Technology inside digital workplace</span>
                                <h5>Jabra Elite 2 and Jabra Elite 3 rock the market
                                    with a new design. with state-of...</h5>
                                <p class="text-news text-gray my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit. At risus viverra adipiscing at in tellus integer feugiat. In cursus turpis massa tincidunt dui ut ornare lectus sit. Quis vel eros donec ac odio ... tempor orci dapibus ultrices. In aliquam sem fringilla ut. Quis blandit turpis cursus in hac. Velit dignissim sodales ut eu sem. Amet justo donec enim diam vulputate ut pharetra sit amet. Scelerisque purus semper eget duis at.</p>
                                <div>
                                    <a class="btn fw-medium" href="InnovationDetail.php"><i class="fas fa-arrow-alt-circle-right text-green"></i>&nbsp; Read More</a>
                                </div>
                            </div>
                            <div class="border-top py-2">
                                <a class="btn text-gray fs-12" href=""><i class="fas fa-user"></i> Admin</a>
                                <span class="text-gray">|</span>
                                <a class="btn text-gray fs-12" href=""><i class="fas fa-calendar-alt"></i> 08 September, 2021</a>
                            </div>
                        </div>
                    </div> -->

                </div>
                <ul class="pagination justify-content-start">
                    <!-- <li class="page-item"><a class="page-link" href="javascript:void(0);">
                            <i class="fas fa-chevron-left"></i> </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li> -->
                    {{$in->appends(Request::all())->links()}}
                </ul>
            </div>


            <div class="col-sm-3 mt-lg-5 mt-3 px-lg-4 px-2">
                <div class="mb-5">
                    <h5>Categories</h5>
                    <div class="progress">
                        <div class="progress-bar bg-green" style="width:20%"></div>
                    </div>
                    <div class="cateNews my-3">
                        <ul class="no-list-style px-lg-3 px-1">
                            <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">Technology inside digital workplace</a></li>
                            <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">Zoom room solution</a></li>
                            <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">Integrate Microsoft teams voice solution</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomFoot"></div>
    </div>
    @include('fontend.inc_footer')
    <script>
        $('#linkMenuTop .nav-item').eq(5).addClass('active');
    </script>
</body>

</html>