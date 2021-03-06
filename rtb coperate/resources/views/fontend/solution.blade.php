<!doctype html>
<html lang="th">

<head>
    <title>RTB - Solution</title>
    @include('fontend.inc_header')

<style>

 @foreach($solution as $key=>$solutions)   
<?php  $key=$key+1; ?>
 @if($key%2!=0)
    .bg-bannerSolution{{$key}} {
    background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 95%), url('{!!$solutions->solutiontype_img!!}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center 40%;
    height: 470px;
}

@else
.bg-bannerSolution{{$key}} {
    background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 95%), url('{!!$solutions->solutiontype_img!!}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center 40%;
    height: 470px;
}
@endif
@endforeach

</style>
</head>

<body>
    @include('fontend.inc_navbar')
    <div class="bg-bannerTitleSolution topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>Solution</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Solution</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container container-small py-xl-5 py-4">
            <div class="text-center">
                <span class="fs-26"><span class="h3">Modern Workplace</span> and <br>working at maximum efficiency</span>
                <p class="mt-4">Many people may be looking for technology to help work with efficiency that leads to increasing productivity in the organization. Today, Biz Tech Solution by RTB introduces and delves into many solutions of RTB that have been implemented for many. other organization</p>
                <p class="mt-4">Through a video to demonstrate the work through internal and external communication.<br>
                    of the organization by bringing technology together for maximum efficiency</p>
            </div>
        </div>

        @foreach($solution as $key=>$solutions)   


        <?php  $key=$key+1;  ?>
        @if($key%2!=0)
        <div class="bg-bannerSolution{{$key}}">
            <div class="container container-small">
                <div class="row" id="card-solution">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 my-5">
                        <div class="bg-white w-75 ms-auto px-lg-4 px-2 py-lg-5 py-3">
                            <h3>{{$solutions['name'.session::get('lang')]}}</h3>
                            <p class="text-gray mt-lg-5 mt-3 mb-lg-4 mb-2">{{$solutions['des'.session::get('lang')]}}</p>
                            <a class="btn fw-medium mt-lg-5 mt-3" href="{{session::get('lang')}}/solutionStep2/{{$solutions->solutiontype_id}}">READ MORE <i class="fas fa-arrow-right text-green"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @else
        <div class="bg-bannerSolution{{$key}}">
            <div class="container container-small">
                <div class="row" id="card-solution">
                    <div class="col-sm-6 my-5">
                        <div class="bg-white w-75 me-auto px-lg-4 px-2 py-lg-5 py-3">
                            <h3>{{$solutions['name'.session::get('lang')]}}</h3>
                            <p class="text-gray mt-lg-5 mt-3 mb-lg-4 mb-2">{{$solutions['des'.session::get('lang')]}}</p>
                            <a class="btn fw-medium mt-lg-5 mt-3" href="{{session::get('lang')}}/solutionStep2/{{$solutions->solutiontype_id}}">READ MORE <i class="fas fa-arrow-right text-green"></i></a>
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