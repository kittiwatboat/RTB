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
            <div class="row">


            @if(isset(Auth::user()->id))
            <?php $user=Auth::user()->id;  $busket=DB::table('cart')->where('id_user',$user)
            // ->join('product', 'cart.id_product', '=', 'product.pro_id')->select('product.*', 'cart.id_cart')
            ->orderby('id_cart','desc')->get();  

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

                    @foreach($pros as $pro)
                    <?php $price_sum=0;  ?>
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
                                <?php $price=number_format($pro->price,2); ?>
                                @if(isset($pro->price_spa))
                                @if($pro->price_spa!=null)
                                <?php $price_spa=number_format($pro->price_spa,2); ?>
                                <p class="fw-medium text-gray fs-12 mb-0" style="text-decoration: line-through;">฿{{$price_spa}}</p>
                                <p class="fw-medium text-darkGray mb-0">฿{{$price}}</p>
                                @else
                                <p class="fw-medium text-darkGray mb-0">฿{{$price}}</p>
                                @endif
                                @else
                                <p class="fw-medium text-darkGray mb-0">฿{{$price}}</p>
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

                                <?php  $num=DB::table('cart')->where('id_user',$user)->where('id_product',$pro->pro_id)->orderby('id_cart','desc')->get(); $nums=count($num);  ?>
                                    <input class="form-control border-0 text-center bg-gray4 field" placeholder="" type="text" id="1" value="{{$nums}}">

                                    <form method="post" id="" action="{{ url('/cart_add') }}" enctype="multipart/form-data">
                                     @csrf
                                     <input type="hidden" name="id_product" value="{{$pro->pro_id}}">
                                <input type="hidden" name="id_user" value="{{$user}}">
                                    <button type="submit" class="btn bg-gray4 " type="button" id="">+</button>
                                    </form>

                                </div>
                            </div>

                            <div class="col-4 col-sm-2 col-md-2">
                            <?php $all=DB::table('product')->where('pro_id',$pro->pro_id)->first(); $all_price=$all->price*$nums; $p_all=number_format($all_price,2); ?>
                            @if(isset($pro->price_spa))
                                @if($pro->price_spa!=null)
                                <?php $all=DB::table('product')->where('pro_id',$pro->pro_id)->first(); $all_price=$all->price_spa*$nums; $p_all=number_format($all_price,2); ?>
                                <p class="fw-medium text-darkGray mb-0">฿{{$p_all}}</p>
                                @else
                                <p class="fw-medium text-darkGray mb-0">฿{{$p_all}}</p>
                                @endif
                                @else
                                <p class="fw-medium text-darkGray mb-0">฿{{$p_all}}</p>
                                @endif
                            </div>
                            <?php $price_sum=$price_sum+$all_price;  ?>

                            <form method="post" id="" action="{{ url('/cart_remove') }}" enctype="multipart/form-data">
                             @csrf
                            <div class=" col-2 col-sm-1 col-md-1">
                            <input type="hidden" name="id_product" value="{{$pro->pro_id}}">
                                <input type="hidden" name="id_user" value="{{$user}}">
                                <button type="submit" class="btn btn-gray border py-0 px-2">x</button>
                            </div>
                            </form>

                        </div>
                    </div>
                    @endforeach

                    <div class="col-sm-12 border my-3 my-lg-5 py-1 py-lg-3 px-2 px-lg-3">
                        <h5>NOTE</h5>
                        <p class="text-gray">เพิ่มคำแนะนำพิเศษสำหรับการสั่งซื้อของคุณ</p>
                        <textarea rows="5" class="bg-gray4 border-0 w-100"></textarea>
                    </div>
                </div>


                <?php $sum=number_format($price_sum,2); ?>
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
                            <a href="#" class="btn px-0 py-0 d-flex justify-content-between">
                                <p class="text-gray mb-0">เลือกคูปอง</p>
                                <p class="text-gray mb-0">></p>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 my-2">
                            <p class="fw-medium mb-0">คูปอง<i class="fas fa-check-circle text-green"></i></p>
                            <p class="text-gray fw-medium mb-0">-฿130.00</p>
                        </div>
                        <div>
                            <p class="fs-18 fw-medium">รหัสส่วนลด</p>
                            <div class="row px-3">
                                <div class="col-9 col-sm-9 px-0 pe-2">
                                    <input type="text" class="bg-gray7 form-control border-0 w-100 py-2">
                                </div>
                                <div class="col-3 col-sm-3 px-0">
                                    <a href="#" class="btn btn-lightgreen rounded-pill border-2">ตกลง</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 my-2">
                            <p class="fw-medium mb-0">ส่วนลด</p>
                            <p class="text-gray fw-medium mb-0">-฿100.00</p>
                        </div>
                        <div class="d-flex justify-content-between py-2 my-2">
                            <p class="fs-18 fw-medium mb-0">รวมสุทธิ</p>
                            <p class="fs-18 fw-medium mb-0">฿{{$sum}}</p>
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


                @endif



            </div>
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
</body>

</html>
