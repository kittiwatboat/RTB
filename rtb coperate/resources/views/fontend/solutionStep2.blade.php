<!doctype html>
<html lang="th">

<head>
    <title>RTB - Solution</title>
    @include('fontend.inc_header')
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
            <div>
                <p class="mt-lg-5 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc non blandit massa enim nec dui nunc mattis enim. Eget gravida cum sociis natoque penatibus et magnis dis parturient. Vel facilisis volutpat est velit egestas dui id. Orci eu lobortis elementum nibh. Convallis posuere morbi leo urna molestie at elementum eu. Tempor orci dapibus ultrices in iaculis nunc sed augue lacus. Habitasse platea dictumst vestibulum rhoncus est. Donec adipiscing tristique risus nec feugiat in fermentum posuere. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Elementum curabitur vitae nunc sed velit dignissim sodales. Nulla malesuada pellentesque elit eget. Ipsum suspendisse ultrices gravida dictum fusce ut. Viverra orci sagittis eu volutpat odio facilisis mauris. Fermentum iaculis eu non diam phasellus vestibulum. Turpis egestas maecenas pharetra convallis posuere morbi leo. Mattis vulputate enim nulla aliquet porttitor lacus.</p>
                <p class="mt-lg-5 mt-3">Consectetur libero id faucibus nisl tincidunt eget nullam. Quam vulputate dignissim suspendisse in est ante. Quis commodo odio aenean sed adipiscing diam donec. Lectus magna fringilla urna porttitor rhoncus dolor purus non. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. Habitant morbi tristique senectus et. Orci phasellus egestas tellus rutrum tellus. Amet nisl purus in mollis nunc sed. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Sapien faucibus et molestie ac. Quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna.</p>
            </div>
        </div>
        <div class="bg-bannerSolution1_Step2">
            <div class="container container-small">
                <div class="row" id="card-solution">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 my-5">
                        <div class="bg-white w-75 ms-auto px-lg-4 px-2 py-lg-5 py-3">
                            <h3>Video Conferencing</h3>
                            <p class="text-gray mt-lg-5 mt-3 mb-lg-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Suscipit tellus mauris a diam maecenas sed. Elit eget gravida cum sociis natoque penatibus et. Nunc faucibus a pellentesque sit amet porttitor eget.</p>
                            <a class="btn fw-medium mt-lg-5 mt-3" href="{{session::get('lang')}}/solutionStep3">READ MORE <i class="fas fa-arrow-right text-green"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-bannerSolution2_Step2">
            <div class="container container-small">
                <div class="row" id="card-solution">
                    <div class="col-sm-6 my-5">
                        <div class="bg-white w-75 me-auto px-lg-4 px-2 py-lg-5 py-3">
                            <h3>AV Integration</h3>
                            <p class="text-gray mt-lg-5 mt-3 mb-lg-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Suscipit tellus mauris a diam maecenas sed. Elit eget gravida cum sociis natoque penatibus et. Nunc faucibus a pellentesque sit amet porttitor eget.</p>
                            <a class="btn fw-medium mt-lg-5 mt-3" href="#">READ MORE <i class="fas fa-arrow-right text-green"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-bannerSolution3_Step2">
            <div class="container container-small">
                <div class="row" id="card-solution">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 my-5">
                        <div class="bg-white w-75 ms-auto px-lg-4 px-2 py-lg-5 py-3">
                            <h3>Management</h3>
                            <p class="text-gray mt-lg-5 mt-3 mb-lg-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Suscipit tellus mauris a diam maecenas sed. Elit eget gravida cum sociis natoque penatibus et. Nunc faucibus a pellentesque sit amet porttitor eget.</p>
                            <a class="btn fw-medium mt-lg-5 mt-3" href="#">READ MORE <i class="fas fa-arrow-right text-green"></i></a>
                        </div>
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