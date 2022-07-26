<!doctype html>
<html lang="th">

<head>
    <title></title>
    @include('ecommerce.inc_header')

</head>

<body>
    @include('ecommerce.inc_navbar')
    <div class=" topBannerTitle">
        <div class="container-fluid bg-gray4">
            <div class="container">
                <div class="headProfile py-2 py-lg-4">
                    <ul class="breadcrumb mb-0 mt-2">
                        <li class="breadcrumb-item "><a class="fw-medium text-darkGray" href="index.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="cart.php">ตะกร้าสินค้า</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="my-lg-4 my-3">
                <h2>ตะกร้าสินค้า</h2>
            </div>

            @if(isset(Auth::user()->id))
            <div class="row">


            <?php $user=Auth::user()->id;  $busket=DB::table('cart')->where('id_user',$user)
            // ->join('product', 'cart.id_product', '=', 'product.pro_id')->select('product.*', 'cart.id')
            ->orderby('id','desc')->get();  

            $pros=DB::table('product')->whereIn('pro_id',$busket->pluck('id_product')->toArray())->orderby('pro_id','desc')->get();
            
            ?>

          
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <div class="border bg-gray4 my-3 py-3 px-3">
                        <div class="row">
                            <div class=" text-center col-5 col-sm-5">
                                <p class="fw-medium fs-18 mb-0">รายการสินค้า</p>
                            </div>
                            <div class="col-2 col-sm-2">
                                <p class="fw-medium fs-18 mb-0">ราคา</p>
                            </div>
                            <div class="col-2 col-sm-2">
                                <p class="fw-medium fs-18 mb-0">จำนวน</p>
                            </div>
                            <div class="col-2 col-sm-3">
                                <p class="fw-medium fs-18 mb-0">รวม</p>
                            </div>
                        </div>
                    </div>

                    <?php $price_sum=0; ?>

                    @foreach($pros as $pro)
                    <div class="border my-3 py-3">
                        <div class="row w-100 ms-0">
                            <div class="col-12 col-sm-2 col-md-3">
                                <div class="d-flex">
                                    <img src="images/Product/listOrder3.png" class="w-100">
                                </div>
                            </div>
                            <div class="col-6 col-sm-2 col-md-2">
                                @if(session::get('lang')=='th')
                                <p class="fw-medium">{{$pro->pro_nameth}}</p>
                                @else
                                <p class="fw-medium">{{$pro->pro_nameen}}</p>
                                @endif
                            </div>
                            <div class="col-6 col-sm-2 col-md-2">
                            @if(isset($pro->price_spa))
                            @if($pro->price_spa!=null)
                            <?php  $pr=number_format($pro->price,2);  $ps=number_format($pro->price_spa,2); ?>
                                <p class="fw-medium text-gray fs-12 mb-0" style="text-decoration: line-through;">฿{{$pr}}</p>
                                <p class="fw-medium text-darkGray mb-0">฿{{$ps}}</p>
                                @else
                                <?php  $pr=number_format($pro->price,2);   ?>
                                <p class="fw-medium text-darkGray mb-0">฿{{$pr}}</p>
                                @endif
                                @else
                                <?php  $pr=number_format($pro->price,2);   ?>
                                <p class="fw-medium text-darkGray mb-0">฿{{$pr}}</p>
                                @endif
                            </div>
                            <div class="col-6 col-sm-3 col-md-2">
                                <div class="input-group w-100 mb-3">

                                <form method="post" id="" action="{{ url('/cart_minus') }}" enctype="multipart/form-data">
                                 @csrf
                                 <input type="hidden" name="id_product" value="{{$pro->pro_id}}">
                                <input type="hidden" name="id_user" value="{{$user}}">
                                    <button type="submit" class="btn bg-gray4 " type="button" id="">-</button>
                                </form>

                                <?php  $num=DB::table('cart')->where('id_user',$user)->where('id_product',$pro->pro_id)->orderby('id','desc')->get(); $nums=count($num);  ?>
                                    <input class="form-control border-0 text-center bg-gray4 field" placeholder="" type="text" id="1" value="{{$nums}}">

                                    <form method="post" id="" action="{{ url('/cart_add') }}" enctype="multipart/form-data">
                                     @csrf
                                     <input type="hidden" name="id_product" value="{{$pro->pro_id}}">
                                <input type="hidden" name="id_user" value="{{$user}}">
                                    <button type="submit" class="btn bg-gray4 " type="button" id="">+</button>
                                    </form>

                                </div>
                            </div>
                            @if(isset($pro->price_spa))
                            @if($pro->price_spa!=null)
                            <?php  $all_price=$pro->price_spa*$nums; $sm=number_format($all_price,2); ?>
                            @else
                            <?php  $all_price=$pro->price*$nums; $sm=number_format($all_price,2); ?>
                            @endif
                            @else
                            <?php  $all_price=$pro->price*$nums; $sm=number_format($all_price,2); ?>
                            @endif
                            <div class="col-4 col-sm-2 col-md-2">
                                <p class="fw-medium text-darkGray mb-0">฿{{$sm}}</p>
                            </div>

                            @if(isset($all_price))
                            <?php $price_sum=$price_sum+$all_price;  ?>
                            @else
                            <?php $price_sum=$price_sum;  ?>
                            @endif

                           
                            <div class=" col-2 col-sm-1 col-md-1">
                            <form method="post" id="" action="{{ url('/cart_remove') }}" enctype="multipart/form-data">
                             @csrf
                            <input type="hidden" name="id_product" value="{{$pro->pro_id}}">
                                <input type="hidden" name="id_user" value="{{$user}}">
                                <button type="submit" class="btn btn-gray border py-0 px-2">x</button>
                                </form>
                            </div>
                         

                        </div>
                    </div>
                    @endforeach


                    <div class="col-sm-12 border my-3 my-lg-5 py-1 py-lg-3 px-2 px-lg-3">
                        <h5>NOTE</h5>
                        <p class="text-gray">เพิ่มคำแนะนำพิเศษสำหรับการสั่งซื้อของคุณ</p>
                        <textarea rows="5" class="bg-gray4 border-0 w-100"></textarea>
                    </div>
                </div>

                @if(isset($all_price))
                <?php $sum=number_format($price_sum,2); $sum_all=$price_sum; ?>
                @else
                <?php $sum=0; $sum_all=0; ?>
                @endif


              <?php  $pro1=Auth::user()->pro1; $pro2=Auth::user()->pro2; ?>

                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="border my-3 py-3 px-3">
                        <div class="border-bottom border-2 border-dark">
                            <h4>สรุปยอดการสั่งซื้อ</h4>
                        </div>
                        <div class="d-flex justify-content-between border-bottom my-3">
                            <p class="fw-medium">รวม</p>
                            <p class="fw-medium">฿{{$sum}}</p>
                        </div>

                        <div class="border py-2 px-3 my-2">
                            <p class="fs-18 fw-medium">คูปอง</p>
                            <a href="#" class="btn px-0 py-0 d-flex justify-content-between" data-bs-toggle="modal" data-bs-target="#coupon">
                                <p class="text-gray mb-0">เลือกคูปอง</p>
                                <p class="text-gray mb-0">></p>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 my-2">
                            <p class="fw-medium mb-0">คูปอง<i class="fas fa-check-circle text-green"></i></p>
                            <p class="text-gray fw-medium mb-0">-฿130.00</p>
                        </div>

                        <div>
                        <form method="post" id="" action="{{ url('/promotion_code') }}" enctype="multipart/form-data">
                             @csrf
                            <p class="fs-18 fw-medium">รหัสส่วนลด</p>
                            <div class="row px-3">
                                <div class="col-9 col-sm-9 px-0 pe-2">
                                <input type="hidden" name="id_user" class="bg-gray7 form-control border-0 w-100 py-2" value="{{$user}}">
                                    <input type="text" name="code" class="bg-gray7 form-control border-0 w-100 py-2"  @if($pro2!=null or $pro2!='')
                                    <?php $ooo2=DB::table('promotion')->where('id',$pro2)->first();  ?>
                                     value="{{$ooo2->code}}"  @endif>
                                </div>
                                <div class="col-3 col-sm-3 px-0">
                                    <button type="submit"  class="btn btn-lightgreen rounded-pill border-2">ตกลง</button>
                                </div>
                            </div>
                            </form>
                        </div>

                        @if($pro2!=null or $pro2!='')
                        <?php  $po2=DB::table('promotion')->where('id',$pro2)->first(); $po2=$po2->price_minus; $poo2=number_format($po2,2);
                        $sum2=$sum_all-$po2; $sum20=number_format($sum2,2);
                         ?>
                        @else
                        <?php  $po2=0; $poo2=number_format($po2,2); $sum2=$sum_all; $sum20=number_format($sum2,2); ?>
                        @endif
                        <div class="d-flex justify-content-between border-bottom py-2 my-2">
                            <p class="fw-medium mb-0">ส่วนลด</p>
                            <p class="text-gray fw-medium mb-0">-฿{{$poo2}}</p>
                        </div>

                        <div class="d-flex justify-content-between py-2 my-2">
                            <p class="fs-18 fw-medium mb-0">รวมสุทธิ</p>
                            <p class="fs-18 fw-medium mb-0">฿{{$sum20}}</p>
                            <input type="hidden" name="sum2" class="bg-gray7 form-control border-0 w-100 py-2" value="{{$sum2}}">
                        </div>

                        <div class="col-sm-12 mt-2 mt-lg-4 mb-2 mb-lg-4">
                            <a class="btn btn-green rounded-pill w-100 my-1" href="#" data-bs-toggle="modal" data-bs-target="#cartContinue">ดำเนินการชำระเงิน</a>
                            <a class="btn btn-gray rounded-pill w-100 my-1" href="#">เลือกซื้อสินค้าเพิ่มเติม</a>
                        </div>
                    </div>
                    <div>
                        <h5>FAVOURITES</h5>
                        <p>ต้องการที่จะดูรายการที่บันทึกไว้หรือไม่?</p>
                        <a class="text-green" href="#">สมัครสมาชิกตอนนี้</a> <span>หรือ</span> <a class="text-green" href="#">เข้าสู่ระบบ</a>
                    </div>
                </div>
            </div>

            @endif

            <div class="bottomFoot"></div>
        </div>
    </div>
    <form>
        <div class="modal fade" id="cartContinue" tabindex="-1" aria-labelledby="cartContinueLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6>ดำเนินการชำระเงิน</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center mb-5 pt-4">
                            <h4>ต้องการดำเนินการต่อโดยไม่เข้าสู่ระบบ?</h4>
                            <div class="">
                                <a class="btn btn-gray rounded-pill my-2 mt-4">ดำเนินการต่อ โดยไม่เข้าสู่ระบบ</a><br>
                                <a class="btn bg-gray3 text-white rounded-pill px-5 my-2">เข้าสู่ระบบ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <form>
        <div class="modal fade" id="coupon" tabindex="-1" aria-labelledby="couponLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="couponLabel">เลือกคูปอง</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row gx-2">


                        <?php   $date=date('Y-m-d H:i:s');
                        $pmo=DB::table('promotion')->where('type','!=',1)->whereDate('date_start','<=',$date)->whereDate('date_end','>=',$date)->orderby('id','desc')->get();  
                    //   dd($pmo);
                        // $time =date('H:i:s');
                        ?>
                        @foreach($pmo as $pmos)
                        @if($pmos->type==3)
                            <div class="col-md-6 col-lg-4 col-sm-4">
                                <label class="w-100" id="couponSelect">
                                    <div class="card m-2 rounded-0">
                                        <div class="card-coupon-head py-3">
                                            <i class="fas fa-shipping-fast fs-150"></i>
                                            <div class="text-pro">
                                                <h5>คูปองจัดส่งฟรี</h5>
                                                <p>ซื้อขั้นต่ำ {{$pmos->low_price}}.-</p>
                                            </div>
                                        </div>
                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                            <p class="fs-12 text-gray mb-2">{{$pmos->date_start}} <span>{{$pmos->time_start}}</span> - {{$pmos->date_end}} <span>{{$pmos->time_end}}</span><button type="button" class="btn-pop" data-bs-toggle="popover" title="เงื่อนไข" data-bs-content="Some content inside the popover"><i class="fas fa-info-circle"></i></button> </p>
                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            @elseif($pmos->type==2)
                            <div class="col-md-6 col-lg-4 col-sm-4">
                                <label class="w-100" id="couponSelect">
                                    <div class="card m-2 rounded-0">
                                        <div class="card-coupon-head py-3">
                                            <i class="fas fa-shopping-bag fs-150"></i>
                                            <div class="text-pro">
                                                <h5>฿ {{$pmos->price_minus}}</h5>
                                                <p>ซื้อขั้นต่ำ {{$pmos->low_price}}.-</p>
                                            </div>
                                        </div>
                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                            <p class="fs-12 text-gray mb-2">{{$pmos->date_start}} <span>{{$pmos->time_start}}</span> - {{$pmos->date_end}} <span>{{$pmos->time_end}}</span><button type="button" class="btn-pop" data-bs-toggle="popover" title="เงื่อนไข" data-bs-content="Some content inside the popover"><i class="fas fa-info-circle"></i></button> </p>
                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            @endif
                            @endforeach


                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-green rounded-pill px-5" type="submit">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </form>



    @include('ecommerce.inc_footer')
    <script>
        var unit = 1;
        var total;
        // if user changes value in field
        $('.field').change(function() {
            unit = this.value;
        });
        $('.add').click(function() {
            unit++;
            var $input = $(this).prevUntil('.sub');
            $input.val(unit);
            unit = unit;
        });
        $('.sub').click(function() {
            if (unit > 0) {
                unit--;
                var $input = $(this).nextUntil('.add');
                $input.val(unit);
            }
        });
    </script>


      @if(session('code'))
        <script>
        alert('{{session("code")}}');
        </script>
        @endif


</body>

</html>
