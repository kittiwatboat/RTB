<!doctype html>
<html lang="th">

<head>
    <title></title>
    <?php require('inc_header.php'); ?>
</head>

<body>
    <?php require('inc_navbar.php'); ?>
    <div class=" topBannerTitle">
        <div class="container-fluid bg-gray4">
            <div class="container">
                <div class="headProfile py-4">
                    <ul class="breadcrumb mb-0 mt-2">
                        <li class="breadcrumb-item "><a class="fw-medium text-darkGray" href="#">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="#">ข้อมูลส่วนตัว</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4 mb-5">
                <div class="col-sm-3">
                    <ul class="nav nav-pills nav-fill" id="pills-tabProfile" role="tablist">
                        <li class="nav-item w-100" role="presentation">
                            <button class="nav-link active" id="pills-dt-tab" data-bs-toggle="pill" data-bs-target="#pills-dt" type="button" role="tab" aria-controls="pills-dt" aria-selected="true">ข้อมูลส่วนตัว</button>
                        </li>
                        <li class="nav-item w-100" role="presentation">
                            <button class="nav-link" id="pills-tp-tab" data-bs-toggle="pill" data-bs-target="#pills-tp" type="button" role="tab" aria-controls="pills-tp" aria-selected="false">วิธีการชำระเงิน</button>
                        </li>
                        <li class="nav-item w-100" role="presentation">
                            <button class="nav-link" id="pills-rp-tab" data-bs-toggle="pill" data-bs-target="#pills-rp" type="button" role="tab" aria-controls="pills-rp" aria-selected="false">เปลี่ยนรหัสผ่าน</button>
                        </li>
                        <li class="nav-item w-100" role="presentation">
                            <button class="nav-link" id="pills-dc-tab" data-bs-toggle="pill" data-bs-target="#pills-dc" type="button" role="tab" aria-controls="pills-dc" aria-selected="false">คูปองส่วนลด</button>
                        </li>
                        <li class="nav-item w-100" role="presentation">
                            <button class="nav-link" id="pills-hpm-tab" data-bs-toggle="pill" data-bs-target="#pills-hpm" type="button" role="tab" aria-controls="pills-hpm" aria-selected="false">ประวัติการสั่งซื้อของฉัน</button>
                        </li>
                        <li class="nav-item w-100" role="presentation">
                            <button class="nav-link" id="pills-hgm-tab" data-bs-toggle="pill" data-bs-target="#pills-hgm" type="button" role="tab" aria-controls="pills-hgm" aria-selected="false">ประวัติการประกันสินค้า</button>
                        </li>
                        <li class="nav-item w-100" role="presentation">
                            <button class="nav-link" id="pills-ml-tab" data-bs-toggle="pill" data-bs-target="#pills-ml" type="button" role="tab" aria-controls="pills-ml" aria-selected="false">รายการสิ่งที่ฉันถูกใจ</button>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-dt" role="tabpanel" aria-labelledby="pills-dt-tab">
                            <div class="border py-3 px-3">
                                <div class="d-flex justify-content-between border-bottom">
                                    <h3>ข้อมูลส่วนตัว</h3>
                                    <a class="btn bg-grayL rounded-pill mb-2" href="#">แก้ไข</a>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-2">
                                        <p class="fw-medium">อีเมล์</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>test@gmail.com</p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-2">
                                        <p class="fw-medium">เบอร์โทรศัพท์</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="d-flex">
                                            <p>0888888888</p><a class="btn bg-grayL rounded-pill ms-5 mb-2" href="#">เปลี่ยน</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-2">
                                        <p class="fw-medium">วัน/เดือน/ปีเกิด</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>25/12/1989</p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-2">
                                        <p class="fw-medium">ชื่อ-นามสกุล</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>กกกกกกกกก กกกกกกกกก</p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-2">
                                        <p class="fw-medium">เพศ</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>ชาย</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border py-3 px-3 mt-4">
                                <div class="d-flex justify-content-between border-bottom">
                                    <h3>ที่อยู่สำหรับจัดส่ง</h3>
                                    <div class="btn bg-grayL rounded-pill mb-2 px-4" data-bs-toggle="modal" data-bs-target="#addAddress"><i class="fas fa-plus"></i> เพิ่มที่อยู่ใหม่</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 col-lg-6 col-sm-6">
                                        <label class="w-100">
                                            <input type="radio" name="address" selected checked class="card-input-element" />
                                            <div class="card card-default card-input mx-2 rounded-0">
                                                <div class="flex-wrap">
                                                    <label class="border border-top-0 border-start-0 px-2 py-1 text-white"><i class="fas fa-check"></i></label>
                                                    <a class="text-gray" href="#"><i class="fas fa-edit"></i></a>
                                                    <a class="text-gray" href="#"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                                <div class="px-3 py-3">
                                                    <p>กกกกกกกกกกก กกกกกกกกกก</p>
                                                    <p>22/223 xxxxxxxxxxxxx xxxxxxxxxxxxx xxxxxxxx xxxxxxxxxxxxxxxx xxxxx</p>
                                                    <p>0888888888</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6">
                                        <label class="w-100">
                                            <input type="radio" name="address" class="card-input-element" />
                                            <div class="card card-default card-input mx-2 rounded-0">
                                                <div class="flex-wrap">
                                                    <label class="border border-top-0 border-start-0 px-2 py-1 text-white"><i class="fas fa-check"></i></label>
                                                    <a class="text-gray" href="#"><i class="fas fa-edit"></i></a>
                                                    <a class="text-gray" href="#"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                                <div class="px-3 py-3">
                                                    <p>กกกกกกกกกกก กกกกกกกกกก</p>
                                                    <p>22/223 xxxxxxxxxxxxx xxxxxxxxxxxxx xxxxxxxx xxxxxxxxxxxxxxxx xxxxx</p>
                                                    <p>0888888888</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="my-3 text-center">
                                        <a class="btn btn-green rounded-pill shadow-sm px-5" href="#">ตั้งค่าที่อยู่เริ่มต้น</a>
                                    </div>
                                </div>

                            </div>
                            <div class="border py-3 px-3 mt-4">
                                <div class="d-flex justify-content-between border-bottom">
                                    <h3>ใบกำกับภาษี</h3>
                                    <div class="btn bg-grayL rounded-pill mb-2 px-4" data-bs-toggle="modal" data-bs-target="#addTax"><i class="fas fa-plus"></i> เพิ่มข้อมูลผู้เสียภาษี</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 col-lg-6 col-sm-6">
                                        <label class="w-100">
                                            <input type="radio" name="tax" selected checked class="card-input-element" />
                                            <div class="card card-default card-input mx-2 rounded-0">
                                                <div class="flex-wrap">
                                                    <label class="border border-top-0 border-start-0 px-2 py-1 text-white"><i class="fas fa-check"></i></label>
                                                    <a class="text-gray" href="#"><i class="fas fa-edit"></i></a>
                                                    <a class="text-gray" href="#"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                                <div class="px-3 py-3">
                                                    <p>กกกกกกกกกกก กกกกกกกกกก</p>
                                                    <p>9468798127645</p>
                                                    <p>0</p>
                                                    <p>123 xxxxxxxxxxxxx xxxxxxxxxxxxx xxxxxxxx xxxxxxxxxxxxxxxx xxxxx</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6">
                                        <label class="w-100">
                                            <input type="radio" name="tax" class="card-input-element" />
                                            <div class="card card-default card-input mx-2 rounded-0">
                                                <div class="flex-wrap">
                                                    <label class="border border-top-0 border-start-0 px-2 py-1 text-white"><i class="fas fa-check"></i></label>
                                                    <a class="text-gray" href="#"><i class="fas fa-edit"></i></a>
                                                    <a class="text-gray" href="#"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                                <div class="px-3 py-3">
                                                    <p>กกกกกกกกกกก กกกกกกกกกก</p>
                                                    <p>9468798127645</p>
                                                    <p>0</p>
                                                    <p>123 xxxxxxxxxxxxx xxxxxxxxxxxxx xxxxxxxx xxxxxxxxxxxxxxxx xxxxx</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="my-3 text-center">
                                        <a class="btn btn-green rounded-pill shadow-sm px-5" href="#">ตั้งค่าที่อยู่เริ่มต้น</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-tp" role="tabpanel" aria-labelledby="pills-tp-tab">
                            <div class="border py-3 px-3">
                                <div class="border-bottom">
                                    <h3>วิธีการชำระเงิน</h3>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <h5>บัตรเครดิต</h5>
                                    <a class="btn bg-grayL rounded-pill mb-2" href="#"><i class="fas fa-plus"></i> เพิ่ม</a>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <label class="w-100">
                                            <input type="radio" name="credit" selected checked class="card-input-element" />
                                            <div class="card card-default card-input mx-2 rounded-0">
                                                <div class="flex-wrap">
                                                    <label class="border border-top-0 border-start-0 px-2 py-1 text-white"><i class="fas fa-check"></i></label>
                                                    <a class="text-gray" href="#"><i class="fas fa-edit"></i></a>
                                                    <a class="text-gray" href="#"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                                <div class="row px-3 py-3">
                                                    <div class="col-sm-2">
                                                        <img src="images/visa.png" class="w-75 mx-auto" style="display: block;">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="d-flex justify-content-between">
                                                            <h6>xxxx-xxxx-xxxx-xxxx</h6>
                                                            <h6>Expire mm/yyyy</h6>
                                                        </div>
                                                        <p>VISA</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <label class="w-100">
                                            <input type="radio" name="credit" class="card-input-element" />
                                            <div class="card card-default card-input mx-2 rounded-0">
                                                <div class="flex-wrap">
                                                    <label class="border border-top-0 border-start-0 px-2 py-1 text-white"><i class="fas fa-check"></i></label>
                                                    <a class="text-gray" href="#"><i class="fas fa-edit"></i></a>
                                                    <a class="text-gray" href="#"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                                <div class="row px-3 py-3">
                                                    <div class="col-sm-2">
                                                        <img src="images/visa.png" class="w-75 mx-auto" style="display: block;">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="d-flex justify-content-between">
                                                            <h6>xxxx-xxxx-xxxx-xxxx</h6>
                                                            <h6>Expire mm/yyyy</h6>
                                                        </div>
                                                        <p>VISA</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5>E-wallet</h5>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row border mx-2 my-2 px-3 py-3">
                                            <div class="col-sm-2">
                                                <img src="images/paypal.png" class="w-50 mx-auto" style="display: block;">
                                            </div>
                                            <div class="col-sm-10">
                                                <h5>ยังไม่ได้เชื่อมต่อ</h5>
                                                <div class="d-flex justify-content-between">
                                                    <h6>Paypal</h6>
                                                    <a href="#" class="text-darkGray">จัดการ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row border mx-2 my-2 px-3 py-3">
                                            <div class="col-sm-2">
                                                <img src="images/wechat.png" class="w-50 mx-auto" style="display: block;">
                                            </div>
                                            <div class="col-sm-10">
                                                <h5>ยังไม่ได้เชื่อมต่อ</h5>
                                                <div class="d-flex justify-content-between">
                                                    <h6>Wechat Pay</h6>
                                                    <a href="#" class="text-darkGray">จัดการ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row border mx-2 my-2 px-3 py-3">
                                            <div class="col-sm-2">
                                                <img src="images/alipay.png" class="w-50 mx-auto" style="display: block;">
                                            </div>
                                            <div class="col-sm-10">
                                                <h5>ยังไม่ได้เชื่อมต่อ</h5>
                                                <div class="d-flex justify-content-between">
                                                    <h6>Ali Pay</h6>
                                                    <a href="#" class="text-darkGray">จัดการ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-rp" role="tabpanel" aria-labelledby="pills-rp-tab">
                            <div class="border py-3 px-3">
                                <div class="border-bottom">
                                    <h3>เปลี่ยนรหัสผ่าน</h3>
                                </div>
                                <div class="row">
                                    <div class="row mt-3">
                                        <div class="col-sm-2 text-end">
                                            <label for="" class="form-label fw-normal">รหัสผ่านปัจจุบัน</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control w-100" id="" placeholder="">
                                            <p class="fs-12 text-gray mb-0 mt-2">กรุณากรอกรหัสผ่านเพื่อเปลี่ยนแปลงบัญชีของท่าน</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-2 text-end">
                                            <label for="" class="form-label fw-normal">รหัสผ่านใหม่</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control w-100" id="" placeholder="">
                                            <p class="fs-12 text-gray mb-0 mt-2">กรอกรหัสผ่านอย่างน้อย 6 ตัวอักษร, ควรประกอบด้วยตัวเลขและตัวอักษรพิมพ์ใหญ่และเล็ก อย่างน้อย อย่างละ 1 ตัว</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-2 text-end">
                                            <label for="" class="form-label fw-normal">ยืนยันรหัสผ่าน</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control w-100" id="" placeholder="">
                                            <p class="fs-12 text-gray mb-0 mt-2">ยืนยันรหัสผ่านอีกครั้ง</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="btn btn-green rounded-pill" data-bs-toggle="modal" data-bs-target="#changePass">ยืนยันเปลี่ยนรหัสผ่าน</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-dc" role="tabpanel" aria-labelledby="pills-dc-tab">
                            <div class="border py-3 px-3">
                                <div class="border-bottom">
                                    <h3>คูปองส่วนลด</h3>
                                </div>
                                <div class="py-3">
                                    <ul class="nav nav-pills nav-fill" id="pills-tabCoupon" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-remaining-tab" data-bs-toggle="pill" data-bs-target="#pills-remaining" type="button" role="tab" aria-controls="pills-remaining" aria-selected="false">คงเหลือ</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-used-tab" data-bs-toggle="pill" data-bs-target="#pills-used" type="button" role="tab" aria-controls="pills-used" aria-selected="false">ใช้แล้ว</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-expire-tab" data-bs-toggle="pill" data-bs-target="#pills-expire" type="button" role="tab" aria-controls="pills-expire" aria-selected="false">หมดอายุ</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">ทั้งหมด</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabCoupon">
                                    <div class="tab-pane fade" id="pills-remaining" role="tabpanel" aria-labelledby="pills-remaining-tab">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-remaining" selected checked class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shipping-fast fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>คูปองจัดส่งฟรี</h5>
                                                                <p>ซื้อขั้นต่ำ 99.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-remaining" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-remaining" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-remaining" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-remaining" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-remaining" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <ul class="pagination justify-content-end mt-5">
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><<</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">>></a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-used" role="tabpanel" aria-labelledby="pills-used-tab">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-used" selected checked class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shipping-fast fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>คูปองจัดส่งฟรี</h5>
                                                                <p>ซื้อขั้นต่ำ 99.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-used" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-used" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-used" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-used" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-used" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <ul class="pagination justify-content-end mt-5">
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><<</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">>></a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-expire" role="tabpanel" aria-labelledby="pills-expire-tab">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-expire" selected checked class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shipping-fast fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>คูปองจัดส่งฟรี</h5>
                                                                <p>ซื้อขั้นต่ำ 99.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-expire" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-expire" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-expire" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-expire" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-expire" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <ul class="pagination justify-content-end mt-5">
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><<</a></li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">>></a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-all" selected checked class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shipping-fast fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>คูปองจัดส่งฟรี</h5>
                                                                <p>ซื้อขั้นต่ำ 99.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-all" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-all" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-all" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-all" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                <label class="w-100">
                                                    <input type="radio" name="coupon-all" class="card-coupon card-input-element" />
                                                    <div class="card card-default card-input mx-2 rounded-0">
                                                        <div class="card-coupon-head py-3">
                                                            <i class="fas fa-shopping-bag fs-150"></i>
                                                            <div class="text-pro">
                                                                <h5>฿ 100</h5>
                                                                <p>ซื้อขั้นต่ำ 500.-</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-coupon-foot text-center pt-3 border-top">
                                                            <p class="fs-12 text-gray mb-2">2021.12.07 <span>00:00</span> - 2021.12.31 <span>00:00</span> <i class="fas fa-info-circle"></i></p>
                                                            <a class="btn bg-gray5 text-white rounded-pill px-4 py-1 mb-2" href="#">ช้อปเลย</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <ul class="pagination justify-content-end mt-5">
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><<</a></li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">>></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-hpm" role="tabpanel" aria-labelledby="pills-hpm-tab">
                            <div class="border py-3 px-3">
                                <div class="border-bottom">
                                    <h3>ประวัติการสั่งซื้อของฉัน</h3>
                                </div>
                                <div class="d-flex justify-content-between my-3">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="ค้นหาคำสั่งซื้อทั้งหมด">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <div class="d-flex">
                                        <select id="" class="form-select mx-2">
                                            <option selected>คำสั่งซื้อทั้งหมด</option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                        <select id="" class="form-select mx-2">
                                            <option selected>6 เดือนล่าสุด</option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="bg-gray6 rounded-3 py-3 px-3" id="headHisOrder">
                                    <div class="row text-center">
                                        <div class="col-sm-2">
                                            <p class="fw-medium fs-18 mb-0">เลขที่ออเดอร์</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="fw-medium fs-18 mb-0">รายการสินค้า</p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="fw-medium fs-18 mb-0">จำนวน</p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="fw-medium fs-18 mb-0">ยอดเงินสุทธิ</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="fw-medium fs-18 mb-0">สถานะ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom py-3 px-3" id="contentHisOrder">
                                    <div class="row text-center align-items-center">
                                        <div class="col-sm-2">
                                            <p class="fw-medium fs-18 mb-0 text-green">8261803</p>
                                            <span class="fs-12 fw-medium text-gray">วันที่ 10/12/2021</span><br>
                                            <span class="fs-12 fw-medium text-gray">เวลา 11:30 น.</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="d-flex justify-content-start img-order">
                                                <img class="border mx-1" src="images/Product/hisOrder1.png">
                                                <img class="border mx-1" src="images/Product/hisOrder2.png">
                                            </div>

                                        </div>
                                        <div class="col-sm-2">
                                            <p class="fw-medium mb-0">2</p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="fw-medium mb-0">4,980.00฿</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="fw-medium text-danger mb-0">รอการจัดส่ง</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom py-3 px-3" id="contentHisOrder">
                                    <div class="row text-center align-items-center">
                                        <div class="col-sm-2">
                                            <p class="fw-medium fs-18 mb-0 text-green">8261759</p>
                                            <span class="fs-12 fw-medium text-gray">วันที่ 10/12/2021</span><br>
                                            <span class="fs-12 fw-medium text-gray">เวลา 11:30 น.</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="d-flex justify-content-start img-order">
                                                <img class="border mx-1" src="images/Product/hisOrder1.png">
                                            </div>

                                        </div>
                                        <div class="col-sm-2">
                                            <p class="fw-medium mb-0">1</p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="fw-medium mb-0">2,490.00฿</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="fw-medium text-warning mb-0">รอการชำระเงิน</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom py-3 px-3" id="contentHisOrder">
                                    <div class="row text-center align-items-center">
                                        <div class="col-sm-2">
                                            <p class="fw-medium fs-18 mb-0 text-green">8261759</p>
                                            <span class="fs-12 fw-medium text-gray">วันที่ 10/12/2021</span><br>
                                            <span class="fs-12 fw-medium text-gray">เวลา 11:30 น.</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="d-flex justify-content-start align-items-center img-order">
                                                <img class="border mx-1" src="images/Product/hisOrder1.png">
                                                <img class="border mx-1" src="images/Product/hisOrder2.png">
                                                <p class="text-gray mx-1 mb-0"><i class="fas fa-ellipsis-h"></i></p>

                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="fw-medium mb-0">4</p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="fw-medium mb-0">6,720.00฿</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="fw-medium text-success mb-0">เลขพัสดุ</p>
                                            <p class="fw-medium text-darkGray mb-0">EB555745461TH</p>
                                            <a class="btn-gray btn py-0 fs-12" href="orderDetail.php">ติดตามการจัดส่ง</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="pagination justify-content-end mt-5">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><<</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">>></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-hgm" role="tabpanel" aria-labelledby="pills-hgm-tab">

                        </div>
                        <div class="tab-pane fade" id="pills-ml" role="tabpanel" aria-labelledby="pills-ml-tab">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form>
        <div class="modal fade" id="addAddress" tabindex="-1" aria-labelledby="addAddressLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAddressLabel">เพิ่มที่อยู่สำหรับจัดส่ง</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end">
                                <label for="" class="form-label fw-normal">ชื่อผู้รับสินค้า</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="ชื่อ-นามสกุล">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end">
                                <label for="" class="form-label fw-normal">เบอร์มือถือ</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="ระบุหมายเลขโทรศํพท์มือถือ 10 หลัก">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end">
                                <label for="" class="form-label fw-normal">เบอร์โทรสำรอง(ถ้ามี)</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="ระบุหมายเลขโทรศํพท์มือถือ 10 หลัก">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end">
                                <label for="" class="form-label fw-normal">จังหวัด</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกจังหวัด-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end">
                                <label for="" class="form-label fw-normal">เขต/อำเภอ</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกเขต/อำเภอ-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end">
                                <label for="" class="form-label fw-normal">แขวง/ตำบล</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกแขวง/ตำบล-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end">
                                <label for="" class="form-label fw-normal">รหัสไปรษณีย์</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกรหัสไปรษณีย์-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end">
                                <label for="" class="form-label fw-normal">ที่อยู่</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" rows="5" id="" placeholder="บ้านเลขที่ / ชื่ออาคาร / หมู่บ้าน / ตรอก / ซอย / หมู่ที่ / ถนน"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-9">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1">
                                <label>ตั้งค่าที่อยู่เริ่มต้น</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-green rounded-pill px-4 mx-3" type="submit">ตกลง</button>
                        <button type="button" class="btn btn-gray rounded-pill px-4 mx-3" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form>
        <div class="modal fade" id="addTax" tabindex="-1" aria-labelledby="addTaxLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addTaxLabel">เพิ่มข้อมูลใบกำกับภาษี</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end pe-0">
                                <label for="" class="form-label fw-normal">ชื่อนิติบุคคล /<br>บุคคลธรรมดา</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="ชื่อ-นามสกุล">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end pe-0">
                                <label for="" class="form-label fw-normal">เลขประจำตัวผู้เสียภาษี/<br>เลขบัตรประจำตัวประชาชน</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end pe-0">
                                <label for="" class="form-label fw-normal">สำนักงานใหญ่/สาขา/กรณีบุคคลธรรมดา ระบุ(0)</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end pe-0">
                                <label for="" class="form-label fw-normal">จังหวัด</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกจังหวัด-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end pe-0">
                                <label for="" class="form-label fw-normal">เขต/อำเภอ</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกเขต/อำเภอ-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end pe-0">
                                <label for="" class="form-label fw-normal">แขวง/ตำบล</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกแขวง/ตำบล-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end pe-0">
                                <label for="" class="form-label fw-normal">รหัสไปรษณีย์</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกรหัสไปรษณีย์-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 text-end pe-0">
                                <label for="" class="form-label fw-normal">ที่อยู่</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" rows="5" id="" placeholder="บ้านเลขที่ / ชื่ออาคาร / หมู่บ้าน / ตรอก / ซอย / หมู่ที่ / ถนน"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-9">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1">
                                <label>ตั้งค่าที่อยู่เริ่มต้น</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-green rounded-pill px-4 mx-3" type="submit">ตกลง</button>
                        <button type="button" class="btn btn-gray rounded-pill px-4 mx-3" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form>
        <div class="modal fade" id="changePass" tabindex="-1" aria-labelledby="changePassLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="changePassLabel">ยืนยันเปลี่ยนรหัสผ่าน</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <a class="btn bg-gray3 text-white w-50">กดส่งรหัส OTP</a>
                        <div class="col-sm-12 px-4 mt-4 pb-5">
                            <input type="text" class="form-control w-100 text-center" id="" placeholder="กรอกรหัส OTP">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-green rounded-pill px-4 mx-3" type="submit">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php require('inc_footer.php'); ?>
    <script>
        $('#linkMenuTop .nav-item').eq(0).addClass('active');
    </script>

</body>

</html>