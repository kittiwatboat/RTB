<!doctype html>
<html lang="th">

<head>
    <title>RTB - Solution</title>
    @include('fontend.inc_header')

    <style>

@foreach($solution as $key=>$solutions)   
<?php  $key=$key+1; ?>
 @if($key%2!=0)
        .bg-bannerSolution{{$key}}_Step3 {
    background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 95%), url('{!!$solutions->solution3_img!!}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center 40%;
    height: 470px;
}

@else
.bg-bannerSolution{{$key}}_Step3 {
    background-image: linear-gradient(to left top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 95%), url('{!!$solutions->solution3_img!!}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center 40%;
    height: 470px;
}
@endif
@endforeach

.bg-bannerTitleSolutionStep3 {
    background-image: linear-gradient(to top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('{!!$solutiontype->solution2_img!!}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center 50%;
    height: 350px;
}

    </style>
</head>

<body>
    @include('fontend.inc_navbar')
    <div class="bg-bannerTitleSolutionStep3 topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>Video Conferencing</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Solution</a></li>
                            <li class="breadcrumb-item"><a href="#">Meeting Room</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Video Conferencing</li>
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
        <div class="bg-bannerSolution{{$key}}_Step3">
            <div class="container container-small">
                <div class="row" id="card-solution">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 my-5">
                        <div class="bg-white w-75 ms-auto px-lg-4 px-2 py-lg-5 py-3">
                            <h3>{{$solutions['name'.session::get('lang')]}}</h3>
                            <p class="text-gray mt-lg-5 mt-3 mb-lg-4 mb-2">{{$solutions['des'.session::get('lang')]}}</p>
                            <a class="btn fw-medium mt-lg-5 mt-3" href="{{session::get('lang')}}/solutionStep4/{{$solutions->solution3_id}}">READ MORE <i class="fas fa-arrow-right text-green"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else
        <div class="bg-bannerSolution{{$key}}_Step3">
            <div class="container container-small">
                <div class="row" id="card-solution">
                    <div class="col-sm-6 my-5">
                        <div class="bg-white w-75 me-auto px-lg-4 px-2 py-lg-5 py-3">
                            <h3>{{$solutions['name'.session::get('lang')]}}</h3>
                            <p class="text-gray mt-lg-5 mt-3 mb-lg-4 mb-2">{{$solutions['des'.session::get('lang')]}}</p>
                            <a class="btn fw-medium mt-lg-5 mt-3" href="{{session::get('lang')}}/solutionStep4/{{$solutions->solution3_id}}">READ MORE <i class="fas fa-arrow-right text-green"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach


        <div class="container container-small py-xl-5 py-4">
            <div class="text-center">
                <h3>Room Solution</h3>
            </div>
            <div class="row my-lg-5 my-3">
                <div class="col-sm-4">
                    <div class="border text-center px-3 py-4 mb-3">
                        <h5>Teams Room</h5>
                        <img src="images/roomSolution1.png" class="w-100">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="border text-center px-3 py-4 mb-3">
                        <h5>Teams Room</h5>
                        <img src="images/roomSolution2.png" class="w-100">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="border text-center px-3 py-4 mb-3">
                        <h5>Teams Room</h5>
                        <img src="images/roomSolution3.png" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('fontend.inc_footer')
    <script>
        $('#linkMenuTop .nav-item').eq(3).addClass('active');
    </script>
</body>

</html>