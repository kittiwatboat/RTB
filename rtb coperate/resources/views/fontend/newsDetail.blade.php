<!doctype html>
<html lang="th">

<head>
    <title>RTB - News & Articles</title>
    @include('fontend.inc_header')
</head>

<body>
    @include('fontend.inc_navbar')
    <div class="bg-bannerTitleNewsDetail topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>News & Articles</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <?php  $ttt=DB::table('cat_news')->where('cat_news_id',$news->cat_id)->first(); ?>
                            @if(session::get('lang')=='th')
                            <li class="breadcrumb-item"><a href="news.php">{{$ttt->nameth}}</a></li>
                            @else
                            <li class="breadcrumb-item"><a href="news.php">{{$ttt->nameen}}</a></li>
                            @endif
                            <li class="breadcrumb-item active" aria-current="page">{{$news['name'.session::get('lang')]}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="news">
        <div class="row">
            <div class="col-sm-9 mt-lg-5 mt-3">
                <div class="px-lg-3 px-1 py-lg-3 py-1">
                {!!$news['detail'.session::get('lang')]!!}
                    <!-- <p>RTB ontinues to open up a new experience of listening to quality music continuously. deliveve headphones Jabra Elite 2 and Jabra Elite 3 shaking the market</p>
                    <br>
                    <p>Stand out with a new design. with state-of-the-art audio technology to increase the freedom to listen to music anytime, anywhere without limitations</p>
                    <br>
                    <p>RTB Technology Co, ttd, a major importer and distributor of gadgets in Thailand. And is a distributor of
                        headphones under the brand Jabra (Jabra) continues to open up a new experience of listening to music
                        again. With the laund' of the latest premium quality headphones innovation from the Jabra brand, 2
                        models <span class="text-green fw-medium">Jabra Elite 2</span> and <span class="text-green fw-medium">Jabra Elite 3</span>, are an important step in the development of Jabra's True Wireless
                        headphones. Both headphones Features a new design that has been specially designed to be compact
                        and lighter than before. To fulfill the convenience of listening to music for those who love music even
                        more.</p>
                    <img src="images/News/newsDetail2.png" class="w-100 my-lg-5 my-3">
                    <p>The Jabra Elite 2 are true wireless headphones that feature a new design that is shaped for comfort and ergonomics to fit every pair of ears. So that music lovers can enjoy listening to music while traveling more safely and comfortably. It comes with a 6 mm speaker, delivering clear sound. With tighter and deeper bass, it also comes with 2 microphones and has an external noise cancellation system. So you can hear conversations or music clearly at all times, especially when you are outside. It also supports various sound adjustments. via mobile phone by yourself easily Including Amazon Alexa function and Google Fast Pair and Spotify with just one tap. Meanwhile, the headphones are also designed to be sweat-resistant and waterproof according to IP55 standards. The battery supports up to 21 hours of continuous use. Makes you enjoy listening to your favorite music to the fullest. and also supports quick charging, charging only 10 minutes, can listen to music for an additional 1 hour, with 2 colors to choose from: NAVY and Dark Gray, available at a price of 2,290 baht</p>
                    <img src="images/News/newsDetail3.png" class="w-100 my-lg-5 my-3">
                    <p>The <span class="text-green fw-medium">Jabra Elite 3</span> are premium True Wireless headphones that have been meticulously redesigned to make music lovers more comfortable. Compact and lightweight for a great listening experience. with deep, powerful bass and clear sound reproduction in any situation. With a speaker size of 6 mm and also comes with 4 microphones to allow users to experience music and conversations more clearly. Including a HearThrough function that allows you to hear outside noise without having to remove the headphones. Helping to stay connected and safe when on the road At the same time, the headphones are designed to be sweat-resistant and waterproof according to IP55 standards, which allows you to fully listen to music. without worrying that the headphones will be damaged when it rains. It also supports integration with the Jabra Sound+ app so users can customize the sound. via mobile phone by yourself easily Including the functions of Amazon Alexa and Google Fast Pair and Spotify with just one tap. Either get directions or play your favorite song. Can do all activities at the same time without interruption While the battery can support up to 28 hours of continuous use, you can enjoy listening to your favorite music to the fullest. and also supports quick charging, charging only 10 minutes, can listen to music for another 1 hour, and also comes with Mono Mode, allowing you to use one earbud while charging the other earbuds infinitely There are 4 colors to choose from: NAVY, LILAC, Light Beige, Dark Gray, available at a price of 2,990 baht.</p>
                    <img src="images/News/newsDetail4.png" class="w-100 my-lg-5 my-3">
                    <p>For lovers of quality music You can buy and experience clear music from the most innovative headphones from "Jabra" (Jabra) models <span class="fw-medium">Jabra Elite 2</span> and <span class="fw-medium">Jabra Elite 3</span> are available today at</p>
                    <br>
                    <p>Studio7, iStudio by copperwired, iStudio by SPVi, Jaymart, Dotlife, Banana IT, Munkonggadget, Mercular, Powermall, Powerbuy or you can follow more details via Facebook. <span class="fw-medium">Jabra (TH)</span></p> -->
                </div>
            </div>
            <div class="col-sm-3 mt-lg-5 mt-3 px-lg-4 px-2">
                <h5>Categories</h5>
                <div class="progress">
                    <div class="progress-bar bg-green" style="width:20%"></div>
                </div>
                <div class="cateNews my-3">
                    <ul class="no-list-style px-lg-3 px-1">
                        <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">News & Promotion</a></li>
                        <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">Contents</a></li>
                        <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">Event</a></li>
                        <li><i class="fas fa-tag text-green"></i>&nbsp; <a href="#">Distributor of RTB Technology product</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="topBannerTitle"></div>
    </div>
    @include('fontend.inc_footer')
    <script>
        $('#linkMenuTop .nav-item').eq(4).addClass('active');
    </script>
</body>

</html>