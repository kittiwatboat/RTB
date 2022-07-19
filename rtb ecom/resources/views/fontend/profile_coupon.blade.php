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
                <div class="headProfile py-2 py-lg-4">
                    <ul class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item "><a class="fw-medium text-darkGray" href="index.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="profile_coupon.php">คูปองส่วนลด</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-4 mt-3 mb-lg-5 mb-3">
                <div class="col-sm-3">
                    <div class="tabProfile">
                        <ul>
                            <li class="nav-item w-100">
                                <a class="nav-link" href="profile.php">ข้อมูลส่วนตัว</a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link" href="profile_payment.php">วิธีการชำระเงิน</a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link" href="profile_changePass.php">เปลี่ยนรหัสผ่าน</a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link active" href="profile_coupon.php">คูปองส่วนลด</a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link" href="profile_orderHistory.php">ประวัติการสั่งซื้อของฉัน</a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link" href="profile_historyClaim.php">ประวัติการประกันสินค้า</a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link" href="profile_favorite.php">รายการสิ่งที่ฉันถูกใจ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="border p-lg-3 p-2">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">
                                            <<< /a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">>></a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="pills-used" role="tabpanel" aria-labelledby="pills-used-tab">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">
                                            <<< /a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">>></a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="pills-expire" role="tabpanel" aria-labelledby="pills-expire-tab">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">
                                            <<< /a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">>></a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <div class="col-md-6 col-lg-4 col-sm-4">
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
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">
                                            << </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">>></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc_footer.php'); ?>
    <script>
        $('#linkMenuTop .nav-item').eq(0).addClass('active');
    </script>

</body>

</html>