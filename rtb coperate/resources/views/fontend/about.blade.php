<!doctype html>
<html lang="th">

<head>
    <title>RTB - About Us</title>
    @include('fontend.inc_header')
</head>

<body>
    @include('fontend.inc_navbar')
    <div class="bg-bannerTitleAbout topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>เกี่ยวกับเรา</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active" aria-current="page">เกี่ยวกับเรา</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12 px-0">
                <div class="container container-small py-xl-5 py-4">
                    <ul class="nav nav-pills nav-fill mb-4" id="pills-tabAbout" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-abu-tab" data-bs-toggle="pill" data-bs-target="#pills-abu" type="button" role="tab" aria-controls="pills-abu" aria-selected="true">Vision & Our Company</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-mot-tab" data-bs-toggle="pill" data-bs-target="#pills-mot" type="button" role="tab" aria-controls="pills-mot" aria-selected="false">Meet Our Team</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-sc-tab" data-bs-toggle="pill" data-bs-target="#pills-sc" type="button" role="tab" aria-controls="pills-sc" aria-selected="false">Partnership</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-wtb-tab" data-bs-toggle="pill" data-bs-target="#pills-wtb" type="button" role="tab" aria-controls="pills-wtb" aria-selected="false">Work With Us</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-abu" role="tabpanel" aria-labelledby="pills-abu-tab">
                        <div class="container container-small">
                            <h6 class="text-green">About Us</h6>
                            {!!$vision['name'.session::get('lang')]!!}
                            <!-- <h3 class="text-darkGray">Vision</h3>
                            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut sem viverra aliquet eget sit amet tellus cras adipiscing. </p> -->
                            <div class="row my-lg-5 my-3">
                                <div class="col-sm-4">
                                    <div class="bg-gray4 text-center px-2 py-lg-4 py-2 mb-3">
                                        <img src="{{$vision->vision_img}}">
                                        <h6>{{$vision['n1'.session::get('lang')]}}</h6>
                                        <p>{{$vision['d1'.session::get('lang')]}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bg-gray4 text-center px-2 py-lg-4 py-2 mb-3">
                                        <img src="{{$vision->vision2_img}}">
                                        <h6>{{$vision['n2'.session::get('lang')]}}</h6>
                                        <p>{{$vision['d2'.session::get('lang')]}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bg-gray4 text-center px-2 py-lg-4 py-2 mb-3">
                                        <img src="{{$vision->vision3_img}}">
                                        <h6>{{$vision['n3'.session::get('lang')]}}</h6>
                                        <p>  {{$vision['d3'.session::get('lang')]}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-bannerOurcomp">
                            <div class="container container-small">
                                <div class="row">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6 py-lg-5 py-3">
                                        <div class="bg-white mt-4 px-lg-4 px-2 py-lg-5 py-3">
                                        {!!$vision['des'.session::get('lang')]!!}
                                            <!-- <h3>Our Company</h3>
                                            <p class="mt-lg-4 mb-lg-5 mb-3">RTB Technology brings latest mobile innovations to the Thai ways of living. We add values to the distribution of digital products by using creative go-to market
                                                strategies, relentless branding efforts, user-friendly
                                                technical support, and professional after market services.

                                            </p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container container-small py-xl-5 py-4">
                            <!-- <h3 class="text-darkGray">Marketing</h3>
                            <p class="text-gray">We ensure innovative products go to market through innovative strategies. At RTB Technology, our job is to place the product at the right place, through the right people, with the right promotion, and at the pricing. We do not believe that products can be moved along intermediaries without careful planning, effective strategies, and attractive promotions. We utilize product roadshows, rebate coupons, database marketing, product reviews in multiple media channels to enhance the visibility of our supplier's products. Our goal is not only to deliver innovative products to end users but to do it in style and in the most effective ways.</p>
                            <h3 class="text-darkGray">Service</h3>
                            <p class="text-gray">After-sales service is the backbone of our operation. In fact, RTB Technology originally grew from an after market service (AMS) company called SCM Semitech. When purchasing our products, the customer can utilize our convenient drop-off locations, quick turn-around time repair, and reliable services. We have experienced in servicing hi-tech gadgets like smart phones, PDA's and notebook computers. We are equipped with hi-tech repair equipment and more than 30 technicians, providing repair services.</p>
                            <p>Our dealers will also enjoy quick and easy-to-follow claim process. Most of our products can be swapped at the dealer location when defective symptoms are found.</p>
                            <h3 class="text-darkGray">Support</h3>
                            <p class="text-gray">We realize that hi-tech products require hi-tech support. We have a team of dedicated engineers providing telephone and email supports to our dealers and customers. For dealers, we provide on-site training for their sales in order to know both the technical aspect and selling techniques of our products. Occasionally, we also offer free training program to end users.</p>
                            <h3 class="text-darkGray">Logistics</h3>
                            <p class="text-gray">RTB can deliver its products to all areas in Thailand and neighboring countries. We have a large fleet of delivery team that provides next-day delivery within Bangkok and vicinity area. Our computerized inventory system also accurate tracks the delivery and arriving time at the destination.</p>
                            <img src=""> -->
                            {!!$vision['detail'.session::get('lang')]!!}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-mot" role="tabpanel" aria-labelledby="pills-mot-tab">
                        <div class="container container-small">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h6 class="text-green">Meet Our Team</h6>
                                    <h3 class="text-darkGray"> {{$meet_head['name'.session::get('lang')]}}</h3>
                                    <!-- <p>At RTB, we continuously survey latest gadgets around the world in order to locate leading edge technological innovations. We are a team of creative, experienced, and hardworking professionals sharing a common commitment to bring latest innovations to enhance the quality of life of our customers.</p>
                                    <p>We design our product portfolio that lead to more productivity, mobility, freedom to work and enjoy life anywhere and any time. For example, our PMG Quadpad allow users to get connect from anywhere, even in a distant resort, in order to work, enjoy MP3 music, or chat over the Internet any time and any where. Our Jabra's bluetooth headsets enable people to talk on cell phones while driving more safely, communicate business messages, or listening to music wirelessly.</p>
                                    <p>While function is an important element of our products, form is where our products excel. We understand our customers that gadgets are not only tools that help them accomplish their tasks. Gadgets are also their fashion statement, an indication of who they are, what they are like, and how they perceive the world. Therefore, all our products have trendy and attractive designs. In fact, most of our products receive many design awards from international institutions.</p> -->

                                    {!!$meet_head['detail'.session::get('lang')]!!}
                                </div>
                                <div class="col-sm-3">
                                    <img src="{{$meet_head->meet_head_img}}" class="w-100">
                                </div>
                            </div>

                            @foreach($meet_type as $type)
                            <div class="row">
                                <div class="col-sm-12 text-center mt-5">
                                    <h3 class="text-darkGray">{{$type['name'.session::get('lang')]}}</h3>
                                </div>
                            </div>
                            <div class="row mt-4">

                            <?php $meet_body=DB::table('meet_body')->where('type',$type->meet_type_id)->get();  ?>
                            @foreach($meet_body as $uo)
                            @if(session::get('lang')=='th')
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card card-body border-0 text-center">
                                        <img src="{{$uo->meet_body_img}}" class="mb-3">
                                        <h6>{{$uo->nameth}}</h6>
                                        <p>{{$uo->desth}}</p>
                                        <p class="mb-0 text-green">{{$uo->detailth}}</p>
                                    </div>
                                </div>
                                @else
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card card-body border-0 text-center">
                                        <img src="{{$uo->meet_body_img}}" class="mb-3">
                                        <h6>{{$uo->nameen}}</h6>
                                        <p>{{$uo->desen}}</p>
                                        <p class="mb-0 text-green">{{$uo->detailen}}</p>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                            <br><br>
                            @endforeach


                            <div class="bottomFoot"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-sc" role="tabpanel" aria-labelledby="pills-sc-tab">
                        <div class="container container-small">
                            <h6 class="text-green">Partnership</h6>
                            <h3 class="text-darkGray">{{$partner['name'.session::get('lang')]}}</h3>
                            <p class="mt-3">{!!$partner['detail'.session::get('lang')]!!}</p>
                            @foreach($gal as $gals)
                            <img src="{{$gals->partnergal_img}}" class="w-100 my-5">
                            @endforeach
                            <div class="bottomFoot"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-wtb" role="tabpanel" aria-labelledby="pills-wtb-tab">
                        <div class="container container-small">
                            <h6 class="text-green">Work with Us</h6>
                            <h3 class="text-darkGray">Apply for a job (Urgent)</h3>
                            <p class="mt-3">Jabra beats by Dr. Dre, B&O Play, sound techniques, Philips and Sony headphones and many more, most of the products that the company distributes solely in Thailand, with distribution channels through foreign stores across the country such as Apple iStudio. , Jaymart, King Power, Loft, Power buy and Power mall -</p>
                            <p>Please contact Khun Meng, Human Resources Department, Artbee Technology Co., Ltd.</p>
                            <div class="pb-4 border-bottom mb-lg-5 mb-3">
                                <p class="mb-0">Call over time at Tel. 086-323-5448 or 02-287-1988 ext. 8806.</p>
                                <p class="mb-0">Email: praneet @ rtbtechnology.com, anuttara @ rtbtechnology.com</p>
                                <p class="mb-0">Location: RTB Technology Co., Ltd.</p>
                                <p class="mb-0">No. 8 Maninara Building, 8th Floor, Soi Narathiwat Ratchanakarin 18, Chong Nonsi Subdistrict, Yan Nawa District, Bangkok 10120</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-lg-5 mb-3">


                                @foreach($work as $key=>$works)
                                <?php $key=$key+1;  ?>
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col-lg-10 h6 fs-18">
                                                    <span>{{$key}}.</span> {{$works['job_name'.session::get('lang')]}}
                                                </div>
                                                <div class="col-lg-2 text-end">
                                                    <a href="{{session::get('lang')}}/applyForm_step1" class="btn btn-green rounded-pill px-4">Apply here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5 class="card-title fs-18">Job description</h5>
                                                    <ul class="dash">
                                                    {!!$works['description'.session::get('lang')]!!}
                                                        <!-- <li>Set up in the ERP system (Bplus program)</li>
                                                        <li>Cut off payments in the ERP system (online side)</li>
                                                        <li>Save setting expenses in the system, save interest expenses O/D, T/R.</li>
                                                        <li>Bank balances, bank deposits, outstanding account balances about continuous</li>
                                                        <li>Top tax novel chapters 3,53 and 30</li>
                                                        <li>Prepare withholding tax report</li>
                                                        <li>Prepare purchase-sales tax report</li>
                                                        <li>Coordinate with manufacturers</li>
                                                        <li>Assigned tasks</li> -->
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5 class="card-title fs-18">Applicant qualifications</h5>
                                                    <ul class="dash">
                                                        <!-- <li>Male or Female aged 25 - 30 years</li>
                                                        <li>Bachelor's degree in Accounting</li>
                                                        <li>Attention to detail and punctuality</li>
                                                        <li>Able to use computer programs Microsoft Office</li>
                                                        <li>Good human relations and service mind</li>
                                                        <li>Able to work overtime</li>
                                                        <li>Able to attend the exhibition booth</li>
                                                        <li>At least 2 years working experience</li> -->
                                                        {!!$works['applicant'.session::get('lang')]!!}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <!-- <div class="card mb-3">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col-lg-10 h6 fs-18">
                                                    <span>3.</span> Sales Support - 1 position
                                                </div>
                                                <div class="col-lg-2 text-end">
                                                    <a {{session::get('lang')}}/applyForm_step1 class="btn btn-green rounded-pill px-4">Apply here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5 class="card-title fs-18">Job description</h5>
                                                    <ul class="dash">
                                                        <li>Coordinate sales and product support</li>
                                                        <li>Make sales reports, related commissions as well as create promotional letters.</li>
                                                        <li>Take care of award-winning brand samples</li>
                                                        <li>How to make, pay to supervise sample products</li>
                                                        <li>Organize trade show booths</li>
                                                        <li>Assigned tasks</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5 class="card-title fs-18">Applicant qualifications</h5>
                                                    <ul class="dash">
                                                        <li>Male or female between 23 - 35 years old</li>
                                                        <li>High Vocational qualification - Bachelor's degree in Business Administration or related fields</li>
                                                        <li>Attention to detail and punctuality</li>
                                                        <li>Able to use computer programs Microsoft Office</li>
                                                        <li>Good human relations and service mind</li>
                                                        <li>Diligent, high honesty, able to work at auctions and withstand the conditions</li>
                                                        <li>Able to attend the exhibition booth</li>                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('fontend.inc_footer')
    <script>
        $('#linkMenuTop .nav-item').eq(1).addClass('active');
    </script>
</body>

</html>