<!doctype html>
<html lang="th">

<head>
    <title>RTB - Solution</title>
    @include('fontend.inc_header')

    <style>


@foreach($solution as $key=>$solutions)   
<?php  $key=$key+1; ?>
 @if($key%2!=0)
        .bg-bannerSolution{{$key}}_Step2 {
    background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 95%), url('{!!$solutions->solution2_img!!}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center 40%;
    height: 470px;
}

@else
.bg-bannerSolution{{$key}}_Step2 {
    background-image: linear-gradient(to left top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 95%), url('{!!$solutions->solution2_img!!}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center 40%;
    height: 470px;
}
@endif
@endforeach



.bg-bannerTitleSolutionStep2 {
    background-image: linear-gradient(to top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('{!!$solutiontype->solutiontype_img!!}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center 30%;
    height: 350px;
}

    </style>

</head>

<body>
    @include('fontend.inc_navbar')
    <div class="bg-bannerTitleSolutionStep2 topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>Meeting Room</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Solution</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Meeting Room</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container container-small py-xl-5 py-4">
            <div>{!!$solutiontype['detail'.session::get('lang')]!!}
            </div>
        </div>

        @foreach($solution as $key=>$solutions)   
<?php  $key=$key+1; ?>
 @if($key%2!=0)
        <div class="bg-bannerSolution{{$key}}_Step2">
            <div class="container container-small">
                <div class="row" id="card-solution">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 my-5">
                        <div class="bg-white w-75 ms-auto px-lg-4 px-2 py-lg-5 py-3">
                            <h3>{{$solutions['name'.session::get('lang')]}}</h3>
                            <p class="text-gray mt-lg-5 mt-3 mb-lg-4 mb-2">{{$solutions['des'.session::get('lang')]}}</p>
                            <a class="btn fw-medium mt-lg-5 mt-3" href="{{session::get('lang')}}/solutionStep3/{{$solutions->solution2_id}}">READ MORE <i class="fas fa-arrow-right text-green"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="bg-bannerSolution{{$key}}_Step2">
            <div class="container container-small">
                <div class="row" id="card-solution">
                    <div class="col-sm-6 my-5">
                        <div class="bg-white w-75 me-auto px-lg-4 px-2 py-lg-5 py-3">
                            <h3>{{$solutions['name'.session::get('lang')]}}</h3>
                            <p class="text-gray mt-lg-5 mt-3 mb-lg-4 mb-2">{{$solutions['des'.session::get('lang')]}}</p>
                            <a class="btn fw-medium mt-lg-5 mt-3" href="{{session::get('lang')}}/solutionStep3/{{$solutions->solution2_id}}">READ MORE <i class="fas fa-arrow-right text-green"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach

    </div>

    @if($itemp!=null)
        <div class="bg-white">
        <div class="container container-small py-xl-5 py-4">

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