<?php
use Carbon\Carbon;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>    @include('fontend.inc_header')
    <?php $pageName="property"; ?>
</head>

<body>
    @include('fontend.inc_topmenu')

    <section id="articlepage" class="wrapperPages">
        <div class="bannereach">
            <img src="images/property_banner.png" alt="" class="img-fluid">
            <div class="captionBanner">
                <span>Asset plus</span>
                <h1>@lang('lang.property')
                </h1>

            </div>
        </div>


        <div class="container">
            @foreach ($sell as $sel)

            @if ($sel->auction_time != null)

            <div class="propertybox hoverstyle">

                <div class="row mt-4 mb-4">
                    <div class="col-12 col-lg-5">
                        <!-- finished -->
                          @if ($sel->sale == 1)
                        <div class="imagesdeal">
                        <figure>
                            <a href="{{session::get('lang')}}/property_detail/{{ $sel->sell_id }}"> <img src="{{ $sel->img }}" alt="" class="img-fluid"></a>
                        </figure>
                        <div class="dealtag">Deal</div>
                        </div>
    
                        @else

                        <!-- onsale -->
                        <div class="imagesdeal">
                            <a href="{{session::get('lang')}}/property_detail/{{ $sel->sell_id }}"> <img src="{{ $sel->img }}" alt="" class="img-fluid"></a>
                        </div>
                        @endif
                    </div>
                    <div class="col-7 col-lg-4">
                        <div class="namesellTitle">
                            <div>{{ $sel->asp_id }}</div>
                        </div>
                        <li> <i class="fi fi-rr-marker"></i> {{ $sel->location }}, {{ $sel->province }}</li>
                        <li> <i class="fi fi-rr-building"></i> @lang('lang.proptype') <span
                                class="bluetxt boldtxt">{{ $sel->propertytype }}</span> </li>
                                <?php $time = strtotime($sel->date);  $newformat = date('d-m-Y',$time); $ii = date('m',$time); $i = date('d',$time); $iii = date('Y',$time);

                                $iii=$iii+543;

                                $yyy=$i.' / '.$ii.' / '.$iii;
                             ?>
                        <li> <i class="fi fi-rr-megaphone"></i> @lang('lang.saledate') {{ $yyy }}</li>
                        <li> <i class="fi fi-rr-map"></i><span class="bluetxt boldtxt"> {{ $sel->area }}  </span>
                        </li>
                        <li>@lang('lang.gua') <span class="bluetxt boldtxt">{{ $sel->property_value }} บาท </span></li>
                        @if ($sel->sale_price != null)
                        <li>@lang('lang.saleprice') <span class="bluetxt boldtxt">{{ $sel->sale_price }} บาท </span></li>
                        @else
                        <li>@lang('lang.mortgage') <span class="bluetxt boldtxt">{{ $sel->mortgage }} บาท </span></li>
                        @endif
                        <div class="btndetail ">
                            <form action="{{session::get('lang')}}/view" method="POST">
                                @csrf
                                <input type="hidden" name="prop_id" value="{{ $sel->prop_id }}">
                                <button type="submit" class="btn btn-detail">@lang('lang.seedetail')</button>
                            </form>
                            {{-- <a href="{{session::get('lang')}}/property_detail/{{ $sel->prop_id }}" class="btn btn-detail">ดูรายละเอียด</a> --}}
                        </div>
                    </div>
                    <div class="col-5 col-lg-3">
                        <div class="bgblue mt-3 mt-lg-0">
                          <div class="lefticon"><i class="fi fi-rr-clock"></i></div>
                          <div class="righttime">
                          ปิดประมูลภายใน <br>
                          <?php

                            $date = Carbon::now()->toTimeString();
                            $aa = (new Carbon($sel->auction_time))->diff(new Carbon($date))->format('%h:%I');
                          ?>
                         <span>{{ $aa }} ชั่วโมง</span>
                          </div>
                          <hr>
                          <div class="blueli">
                                <i class="fi fi-rr-eye"></i> 
                                @if ($sel->view == null)
                                0
                                @else
                                    {{ $sel->view }} 
                                @endif <img src="images/property_ac_white.png" alt="">
                                @if ($sel->auction == null)
                                0
                                @else
                                    {{ $sel->auction }} 
                                @endif 
                                </div>
                                <form action="{{session::get('lang')}}/auction"  method="POST">
                                    @csrf
                                    <input type="hidden" name="prop_id" value="{{ $sel->prop_id }}">
                                    <button type="submit" class="btn btnauction"><img src="images/line.png" alt="">  ประมูล</button>
                                </form>
                            {{-- <a href="{{ $sel->line_auction }}" class="btn btnauction"><img src="images/line.png" alt="">  ประมูล</a> --}}
                        </div>
                    </div>
                </div>

            </div>

            @endif
            @endforeach

        </div>

    </section>


    @include('fontend.inc_footer')


</body>

</html>
