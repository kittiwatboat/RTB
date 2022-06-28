<!doctype html>
<html lang="th">

<head>
    <title>RTB - Solution</title>
    @include('fontend.inc_header')

    <style>

        .bg-bannerTitleSolutionStep4 {
    background-image: linear-gradient(to top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('{!!$solutiontype->solution3_img!!}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center 40%;
    height: 350px;
}

    </style>
</head>

<body>
    @include('fontend.inc_navbar')
    <div class="bg-bannerTitleSolutionStep4 topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>Personcal Conference</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Solution</a></li>
                            <li class="breadcrumb-item"><a href="#">Meeting Room</a></li>
                            <li class="breadcrumb-item"><a href="#">Video Conferencing</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Personcal Conference</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
   
    @if($item!=null)
        <div class="bg-white">
        <div class="container container-small py-xl-5 py-4">
            <div>{!!$solutiontype['detail'.session::get('lang')]!!}
                <!-- <span class="fs-26"><span class="h3">About</span> Personal Conference</span>
                <p class="mt-lg-4 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc non blandit massa enim nec dui nunc mattis enim. Eget gravida cum sociis natoque penatibus et magnis dis parturient. Vel facilisis volutpat est velit egestas dui id. Orci eu lobortis elementum nibh. Convallis posuere morbi leo urna molestie at elementum eu. Tempor orci dapibus ultrices in iaculis nunc sed augue lacus. Habitasse platea dictumst vestibulum rhoncus est. Donec adipiscing tristique risus nec feugiat in fermentum posuere. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Elementum curabitur vitae nunc sed velit dignissim sodales. Nulla malesuada pellentesque elit eget. Ipsum suspendisse ultrices gravida dictum fusce ut. Viverra orci sagittis eu volutpat odio facilisis mauris. Fermentum iaculis eu non diam phasellus vestibulum. Turpis egestas maecenas pharetra convallis posuere morbi leo. Mattis vulputate enim nulla aliquet porttitor lacus.</p>
                <p class="mt-lg-5 mt-3">Consectetur libero id faucibus nisl tincidunt eget nullam. Quam vulputate dignissim suspendisse in est ante. Quis commodo odio aenean sed adipiscing diam donec. Lectus magna fringilla urna porttitor rhoncus dolor purus non. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. Habitant morbi tristique senectus et. Orci phasellus egestas tellus rutrum tellus. Amet nisl purus in mollis nunc sed. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Sapien faucibus et molestie ac. Quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna.</p> -->
            </div>

            @foreach($itemp as $itemps)
            <div class="bg-gray4 px-lg-4 px-2 py-lg-4 py-2 mt-lg-5 mt-3">
                <h3>{{$itemps['name'.session::get('lang')]}}</h3>
                <p class="mt-3">{!!$itemps['detail'.session::get('lang')]!!}</p>
                <div class="owl-carousel owl-theme" id="preProduct1">


                <?php  $itemp=DB::table('solution5')->where('solution4_id',$itemps->solution4_id)->get();  ?>
                @foreach($itemp as $itemps)
                    <div class="item">
                        <div class="row bg-white">
                            <div class="col-sm-6 px-0">
                                <img src="">
                            </div>
                            @if(session::get('lang')=='th')
                            <div class="col-sm-6 px-0">
                                <div class="bg-gray2 px-lg-4 px-3 py-lg-4 py-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3>{{$itemps->nameth}}</h3>
                                            <p class="text-gray">category : {{$itemps->catth}}</p>
                                        </div>
                                        <div>
                                            <a class="btn btn-gray">Other Product</a>
                                        </div>
                                    </div>
                                    <div class="text-solution">
                                    {{$itemps->desth}}
                                    </div>
                                    <div class="text-center mt-4">
                                        <a class="btn bg-gray3 text-white" href="">More deatil</a>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-sm-6 px-0">
                                <div class="bg-gray2 px-lg-4 px-3 py-lg-4 py-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3>{{$itemps->nameen}}</h3>
                                            <p class="text-gray">category : {{$itemps->caten}}</p>
                                        </div>
                                        <div>
                                            <a class="btn btn-gray">Other Product</a>
                                        </div>
                                    </div>
                                    <div class="text-solution">
                                    {{$itemps->desen}}
                                    </div>
                                    <div class="text-center mt-4">
                                        <a class="btn bg-gray3 text-white" href="">More deatil</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach



                </div>
                <div class="text-center mt-4"><a class="btn btn-green rounded-pill px-4">Enquiry for more information</a></div>
            </div>
            @endforeach


        </div>

    </div>
    @endif

    @include('fontend.inc_footer')
    <script>
        $('#linkMenuTop .nav-item').eq(3).addClass('active');
    </script>
    <script>
        $('#preProduct1').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
        $('#preProduct2').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
        $('#preProduct3').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>

</html>