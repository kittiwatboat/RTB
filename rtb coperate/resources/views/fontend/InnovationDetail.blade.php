<!doctype html>
<html lang="th">

<head>
    <title>RTB - Innovation</title>
    @include('fontend.inc_header')
</head>

<body>
    @include('fontend.inc_navbar')
    <div class="bg-bannerTitleInnovationDetail topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-left container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Innovation</li>
                        </ol>
                    </nav>
                    <h1 class="mt-4">{{$in['in_name'.session::get('lang')]}}</h1>
                    <p><i class="fas fa-calendar-alt"></i> {{$in['date'.session::get('lang')]}}</p>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="mt-lg-5 mt-3">
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet est placerat in egestas erat imperdiet sed euismod nisi. Pharetra massa massa ultricies mi. Tristique senectus et netus et malesuada. Egestas integer eget aliquet nibh praesent tristique magna sit. Porta lorem mollis aliquam ut porttitor. Nulla pharetra diam sit amet. Facilisis mauris sit amet massa vitae tortor condimentum. Tincidunt id aliquet risus feugiat in ante metus dictum. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Ultricies tristique nulla aliquet enim tortor at auctor urna.</p>
            <p>Tempus egestas sed sed risus pretium quam vulputate dignissim suspendisse. Donec pretium vulputate sapien nec sagittis. Pulvinar neque laoreet suspendisse interdum consectetur. Cras adipiscing enim eu turpis egestas pretium aenean pharetra magna. Sed id semper risus in hendrerit. Leo urna molestie at elementum eu facilisis sed odio morbi. Nunc faucibus a pellentesque sit. In egestas erat imperdiet sed euismod nisi. Lectus proin nibh nisl condimentum id venenatis a condimentum vitae. Massa tempor nec feugiat nisl.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aenean et tortor at risus viverra adipiscing at in. Id diam vel quam elementum pulvinar etiam non. Aliquet nibh praesent tristique magna sit. Consectetur adipiscing elit ut aliquam purus. Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque. Ac felis donec et odio pellentesque. Augue mauris augue neque gravida in fermentum. Sed id semper risus in hendrerit gravida rutrum. Vestibulum morbi blandit cursus risus. Purus faucibus ornare suspendisse sed nisi lacus sed. Vestibulum lectus mauris ultrices eros in. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Volutpat consequat mauris nunc congue nisi vitae suscipit. Porta non pulvinar neque laoreet. Quisque id diam vel quam. Proin sagittis nisl rhoncus mattis rhoncus urna neque. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Nibh tellus molestie nunc non blandit massa enim nec dui.</p>
            <div class="videoProducts my-lg-5 my-3">
                <img src="images/banner/bannerInnoDetail.png" class="w-100">
                <a href="#"><i class="fas fa-play-circle"></i></a>
            </div>
            <p>Donec maximus accumsan odio, eu tempus purus finibus a. Integer facilisis tristique mi. Pellentesque et magna neque. Mauris ultrices nibh neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul>
                <li>Donec condimentum odio auctor ultricies finibus.</li>
                <li>Nulla eget lacus vestibulum, ullamcorper diam id, ornare leo.</li>
                <li>Nulla sit amet erat et erat congue euismod.</li>
                <li>Nunc posuere quam at massa pulvinar, sed suscipit risus faucibus.</li>
                <li>Proin eu nisi efficitur, venenatis nisi a, dapibus nulla.</li>
            </ul> -->
            {!!$in['in_detail'.session::get('lang')]!!}
        </div>


        <?php  $last=DB::table('innovation')->where('in_id','!=',$in->in_id)->orderby('in_id','desc')->limit(3)->get();  ?>

        <div class="bottomFoot"></div>
        <div class="mb-5" id="news">
            <h5>Latest Post</h5>
            <div class="progress">
                <div class="progress-bar bg-green" style="width:5%"></div>
            </div>
            <div class="row mt-4">
                @foreach($last as $lasts)
                @if(session::get('lang')=='th')
                <div class="col-sm-4">
                    <img src="{{$lasts->in_img}}" class="w-100">
                    <div class="text-center px-3 py-3">
                        <h6>{{$lasts->in_nameth}}</h6>
                        <p class="text-gray">{{$lasts->dateth}}</p>
                    </div>
                </div>
                @else
                <div class="col-sm-4">
                    <img src="{{$lasts->in_img}}" class="w-100">
                    <div class="text-center px-3 py-3">
                        <h6>{{$lasts->in_nameen}}</h6>
                        <p class="text-gray">{{$lasts->dateen}}</p>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- <div class="col-sm-4">
                    <img src="images/pexels-julia-m-cameron-4144923.jpg" class="w-100">
                    <div class="text-center px-3 py-3">
                        <h6>Congue quisque egestas diam in arcu cursus euismod quis viverra.</h6>
                        <p class="text-gray">12 Jan, 2022</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="images/image-from-rawpixel-id-2335465-original.jpg" class="w-100">
                    <div class="text-center px-3 py-3">
                        <h6>Congue quisque egestas diam in arcu cursus euismod quis viverra.</h6>
                        <p class="text-gray">12 Jan, 2022</p>
                    </div>
                </div> -->
            </div>
        </div>

    </div>
    @include('fontend.inc_footer')
    <script>
        $('#linkMenuTop .nav-item').eq(5).addClass('active');
    </script>
</body>

</html>