<!doctype html>
<html lang="th">

<head>
    <title>RTB - Solution</title>
    @include('fontend.inc_header')

    <style>


@foreach($solution as $key=>$solutions)   
<?php  $key=$key+1; ?>
 @if($key%2!=0)
        .bg-bannerSolution1_Step2 {
    background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 95%), url('{!!$solutions->solution2_img!!}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center 40%;
    height: 470px;
}

@else
.bg-bannerSolution2_Step2 {
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
        <div class="bg-bannerSolution1_Step2">
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
        <div class="bg-bannerSolution2_Step2">
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

    @include('fontend.inc_footer')
    <script>
        $('#linkMenuTop .nav-item').eq(3).addClass('active');
    </script>
</body>

</html>