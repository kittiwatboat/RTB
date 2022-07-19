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
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="profile_payment.php">วิธีการชำระเงิน</a></li>
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
                                <a class="nav-link active" href="profile_payment.php">วิธีการชำระเงิน</a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link" href="profile_changePass.php">เปลี่ยนรหัสผ่าน</a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link" href="profile_coupon.php">คูปองส่วนลด</a>
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

            </div>
        </div>
    </div>

    <?php require('inc_footer.php'); ?>
    <script>
        $('#linkMenuTop .nav-item').eq(0).addClass('active');
    </script>

</body>

</html>