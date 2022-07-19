<!doctype html>
<html lang="th">

<head>
    <title>RTB - Product Warranty</title>
    <?php require('inc_header.php'); ?>
</head>

<body>
    <?php require('inc_navbar.php'); ?>
    <div class="bg-bannerTitleProductWarranty topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>Product Warranty</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Warranty</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container container-small py-lg-5 py-4">
            <div class="text-center">
                <h3>ขั้นตอนการลงทะเบียนรับประกันสินค้า</h3>
                <p class="text-gray fw-medium">Online Warranty Registration</p>
            </div>
            <div class="row text-center my-3 my-lg-5">
                <div class="col-sm-12 col-md-6 py-2 px-4">
                    <h4>สิ่งที่ต้องเตรียม</h4>
                    <div class="row border py-3 my-lg-4 my-2">
                        <div class="col-sm-6">
                            <p class="fw-medium mb-0">1. Serial number /<br>Barcode สินค้า</p>
                            <img src="images/barcode.png" class="w-50">
                        </div>
                        <div class="col-sm-6">
                            <p class="fw-medium mb-0">2. ใบเสร็จการซื้อสินค้า</p>
                            <br>
                            <img src="images/delivery-box.png" class="w-50">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 py-2 px-4">
                    <h4>หากเคยลงทะเบียนแล้ว</h4>
                    <div class="row border py-3 my-lg-4 my-2">
                        <div class="col-sm-12">
                            <h4 class="mt-lg-4 mt-2">เช็คประวัติการลงทะเบียนรับประกัน</h4>
                        </div>
                        <div class="col-sm-12">
                            <a class="btn btn-green rounded-pill mx-auto py-2 px-5 mt-lg-4 mt-2 mb-lg-5 mb-3" href="#" data-bs-toggle="modal" data-bs-target="#checkHistory">เช็คประวัติประกันสินค้า</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-lg-5 my-3">
                <div class="col-2 col-sm-1 text-center">
                    <label class="btn-step">1</label><br>
                    <span>STEP</span>
                </div>
                <div class="col-10 col-sm-11">
                    <div class="bg-gray4 py-3 py-lg-4 px-3 px-lg-4">
                        <h5 class="mb-lg-3 mb-2">ขั้นตอน 01 : สแกน QR code / เข้าสู่หน้าลงทะเบียน</h5>
                        <div class="row">
                            <div class=" col-sm-6 col-md-3">
                                <p>สแกน QR code</p>
                                <img src="images/registWarranty.png">
                            </div>
                            <div class="col-sm-6 col-md-5 mt-3 mt-lg-0">
                                <p>หรือ เข้ามาที่เว็บไซต์</p>
                                <a class="btn btn-green rounded-pill mx-auto py-lg-2 py-0 " href="productWarranty_history.php">เว็บไซต์ลงทะเบียนรับประกันสินค้า</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-lg-5 my-3">
                <div class="col-2 col-sm-1 text-center">
                    <label class="btn-step">2</label><br>
                    <span>STEP</span>
                </div>
                <div class="col-10 col-sm-11">
                    <div class="bg-gray4 py-3 py-lg-4 px-3 px-lg-4">
                        <h5 class="mb-lg-3 mb-2">ขั้นตอน 02 : สแกน Barcode ของสินค้า</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <p>สามารถสแกน Barcode ของสินค้าที่ต้องการลงทะเบียนรับประกัน แล้วข้อมูลอื่นๆ ของสินค้าชิ้นนั้นจะถูกดึงมาใส่ตามช่องกรอก</p>
                                <p>(แบรนด์ : Jabra Mobiles, Jabra CC&O, Blueparrott, B&0, Beats, Apple, Audio Technica, Buttons, Master&Dynamic, Sony, Accutone, Sennheiser, Rha, Audiocodes, Logitech, Plantronics, Matorola, DO0, Steelseries, Resmed, Gigaset)</p>
                            </div>
                            <div class="col-sm-4 text-center">
                                <img src="images/barProduct.png" class="w-100 mx-0 mx-lg-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-lg-5 my-3">
                <div class="col-2 col-sm-1 text-center">
                    <label class="btn-step">3</label><br>
                    <span>STEP</span>
                </div>
                <div class="col-10 col-sm-11">
                    <div class="bg-gray4 py-3 py-lg-4 px-3 px-lg-4">
                        <h5 class="mb-lg-3 mb-2">ขั้นตอน 03 : กรอกข้อมูลการซื้อ</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="fw-medium">กรอกรายละเอียดการซื้อสินค้า</p>
                                <ul>
                                    <li>วันที่ซื้อสินค้า <span class="text-danger"> * </span></li>
                                    <li>ร้านค้าที่ซื้อ <span class="text-danger"> * </span></li>
                                    <li>สาขา / Website / ชื่องาน / อื่นๆ <span class="text-danger"> * </span></li>
                                    <li>แนบรูปถ่าย ใบเสร็จ <span class="text-danger"> * </span></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 text-center">
                                <img src="images/warrantyStep2.png" class="w-75 mx-0 mx-lg-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-lg-5 my-3">
                <div class="col-2 col-sm-1 text-center">
                    <label class="btn-step">4</label><br>
                    <span>STEP</span>
                </div>
                <div class="col-10 col-sm-11">
                    <div class="bg-gray4 py-3 py-lg-4 px-3 px-lg-4">
                        <h5 class="mb-lg-3 mb-2">ขั้นตอน 04 : กรอกข้อมูลส่วนตัว</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="fw-medium">กรอกข้อมูลส่วนตัวให้ครบถ้วน</p>
                                <ul>
                                    <li>คำนำหน้าชื่อ <span class="text-danger"> * </span></li>
                                    <li>ชื่อ-นามสกุล <span class="text-danger"> * </span></li>
                                    <li>วัน/เดือน/ปี เกิด <span class="text-danger"> * </span></li>
                                    <li>อีเมล์ <span class="text-danger"> * </span></li>
                                    <li>เบอร์โทรศัพท์ติดต่อ <span class="text-danger"> * </span></li>
                                    <li>บริษัท <span class="text-danger"> * </span></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 text-center">
                                <img src="images/warrantyStep3.png" class="w-75 mx-0 mx-lg-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-lg-5 my-3">
                <div class="col-2 col-sm-1 text-center">
                    <label class="btn-step">5</label><br>
                    <span>STEP</span>
                </div>
                <div class="col-10 col-sm-11">
                    <div class="bg-gray4 py-3 py-lg-4 px-3 px-lg-4">
                        <h5 class="mb-lg-3 mb-2">ขั้นตอน 05 : กรอกรหัส OTP ยืนยัน</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <p>กรอกหมายเลขโทรศัพท์ เพื่อรับรหัส OTP <br>เพื่อทำการยืนยันตัวตนในการลงทะเบียน</p>
                            </div>
                            <div class="col-sm-4 text-center">
                                <img src="images/warrantyStep4.png" class="w-75 mx-0 mx-lg-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-lg-5 my-3">
                <div class="col-2 col-sm-1 text-center">
                    <label class="btn-step">6</label><br>
                    <span>STEP</span>
                </div>
                <div class="col-10 col-sm-11">
                    <div class="bg-gray4 py-3 py-lg-4 px-3 px-lg-4">
                        <h5 class="mb-lg-3 mb-2">ขั้นตอน 06 : ลงทะเบียนสำเร็จ</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <p>เมื่อทำการลงทะเบียนเสร็จ จะขึ้นหน้าจอว่า<br> "ลงทะเบียนเสร็จเรียบร้อย" และจะได้รับ SMS และ Email ยืนยันการลงทะเบียนรับประกันสินค้า</p>
                            </div>
                            <div class="col-sm-4 text-center">
                                <img src="images/warrantyStep5.png" class="w-75 mx-0 mx-lg-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottomFoot"></div>
        </div>
    </div>
    <form>
        <div class="modal fade" id="checkHistory" tabindex="-1" aria-labelledby="checkHistoryLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6>เช็คประวัติการลงทะเบียนรับสินค้า</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center mb-lg-5 mb-0 px-lg-5">
                            <p class="fw-medium">เบอร์โทรศัพท์</p>
                            <input type="text" class="form-control w-100 mx-auto" id="" placeholder="">
                            <a href="#" class="btn bg-gray3 text-white my-4 px-5">กดรับ OTP</a>
                            <input type="text" class="form-control w-100 mx-auto text-center" id="" placeholder="กรอกรหัสOTP">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <div class="">
                            <button type="button" class="btn btn-green rounded-pill px-5 mx-3" type="submit">ยืนยัน</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <?php require('inc_footer.php'); ?>

</body>

</html>