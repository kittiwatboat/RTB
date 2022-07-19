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
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="profile_orderHistory.php">ประวัติการสั่งซื้อของฉัน</a></li>
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
                                <a class="nav-link" href="profile_coupon.php">คูปองส่วนลด</a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link active" href="profile_orderHistory.php">ประวัติการสั่งซื้อของฉัน</a>
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
                        <div class="bg-gray6 rounded-3 py-2 px-2" id="headHisOrder">
                            <div class="row text-center">
                                <div class="col-6 col-sm-2">
                                    <p class="fw-medium fs-18 mb-0">เลขที่ออเดอร์</p>
                                </div>
                                <div class="px-0 col-6 col-sm-3">
                                    <p class="fw-medium fs-18 mb-0">รายการสินค้า</p>
                                </div>
                                <div class="col-3 col-sm-2">
                                    <p class="fw-medium fs-18 mb-0">จำนวน</p>
                                </div>
                                <div class="px-0 col-5 col-sm-2">
                                    <p class="fw-medium fs-18 mb-0">ยอดเงินสุทธิ</p>
                                </div>
                                <div class="col-4 col-sm-3">
                                    <p class="fw-medium fs-18 mb-0">สถานะ</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom p-lg-3 p-2" id="contentHisOrder">
                            <div class="row text-center align-items-center">
                                <div class="col-5 col-sm-2">
                                    <p class="fw-medium fs-18 mb-0 text-green">8261803</p>
                                    <span class="fs-12 fw-medium text-gray">วันที่ 10/12/2021</span><br>
                                    <span class="fs-12 fw-medium text-gray">เวลา 11:30 น.</span>
                                </div>
                                <div class="col-7 col-sm-3">
                                    <div class="d-flex justify-content-start img-order">
                                        <img class="border mx-1" src="images/Product/hisOrder1.png">
                                        <img class="border mx-1" src="images/Product/hisOrder2.png">
                                    </div>

                                </div>
                                <div class="col-2 col-sm-2">
                                    <p class="fw-medium mb-0">2</p>
                                </div>
                                <div class="col-4 col-sm-2">
                                    <p class="fw-medium mb-0">4,980.00฿</p>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <p class="fw-medium text-danger mb-0">รอการจัดส่ง</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom py-3 px-3" id="contentHisOrder">
                            <div class="row text-center align-items-center">
                                <div class="col-5 col-sm-2">
                                    <p class="fw-medium fs-18 mb-0 text-green">8261759</p>
                                    <span class="fs-12 fw-medium text-gray">วันที่ 10/12/2021</span><br>
                                    <span class="fs-12 fw-medium text-gray">เวลา 11:30 น.</span>
                                </div>
                                <div class="col-7 col-sm-3">
                                    <div class="d-flex justify-content-start img-order">
                                        <img class="border mx-1" src="images/Product/hisOrder1.png">
                                    </div>

                                </div>
                                <div class="col-2 col-sm-2">
                                    <p class="fw-medium mb-0">1</p>
                                </div>
                                <div class="col-4 col-sm-2">
                                    <p class="fw-medium mb-0">2,490.00฿</p>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <p class="fw-medium text-warning mb-0">รอการชำระเงิน</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom py-3 px-3" id="contentHisOrder">
                            <div class="row text-center align-items-center">
                                <div class="col-5 col-sm-2">
                                    <p class="fw-medium fs-18 mb-0 text-green">8261759</p>
                                    <span class="fs-12 fw-medium text-gray">วันที่ 10/12/2021</span><br>
                                    <span class="fs-12 fw-medium text-gray">เวลา 11:30 น.</span>
                                </div>
                                <div class="col-7 col-sm-3">
                                    <div class="d-flex justify-content-start align-items-center img-order">
                                        <img class="border mx-1" src="images/Product/hisOrder1.png">
                                        <img class="border mx-1" src="images/Product/hisOrder2.png">
                                        <p class="text-gray mx-1 mb-0"><i class="fas fa-ellipsis-h"></i></p>

                                    </div>
                                </div>
                                <div class="col-2 col-sm-2">
                                    <p class="fw-medium mb-0">4</p>
                                </div>
                                <div class="col-4 col-sm-2">
                                    <p class="fw-medium mb-0">6,720.00฿</p>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <p class="fw-medium text-success mb-0">เลขพัสดุ</p>
                                    <p class="fw-medium text-darkGray mb-0">EB555745461TH</p>
                                    <a class="btn-gray btn py-0 fs-12" href="profile_orderDetail.php">ติดตามการจัดส่ง</a>
                                </div>
                            </div>
                        </div>
                        <div class="bottomFoot">
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

    <?php require('inc_footer.php'); ?>
    <script>
        $('#linkMenuTop .nav-item').eq(0).addClass('active');
    </script>

</body>

</html>