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
                    <ul class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item "><a class="fw-medium text-darkGray" href="index.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="profile_orderHistory.php">ประวัติการสั่งซื้อของฉัน</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4 mb-5">
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
                    <div class="border py-3 px-3">
                        <div class="border-bottom d-flex justify-content-between">
                            <h3>เลขที่ออเดอร์ <span class="text-green">8261756</span></h3>
                            <a class="text-gray" href="profile_orderHistory.php">
                                < ย้อนกลับ</a>
                        </div>
                        <div class="bg-gray6 rounded-3 py-2 px-2 mt-3" id="headHisOrder">
                            <div class="row text-center">
                                <div class="col-sm-3">
                                    <p class="fw-medium fs-18 mb-0">เลขที่ออเดอร์</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="fw-medium fs-18 mb-0">ยอดเงินสุทธิ</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="fw-medium fs-18 mb-0">วิธีการชำระเงิน</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="fw-medium fs-18 mb-0">สถานะ</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom py-3 px-3" id="contentHisOrder">
                            <div class="row text-center align-items-center">
                                <div class="col-sm-3">
                                    <p class="fw-medium fs-18 mb-0 text-green">8261803</p>
                                    <span class="fs-12 fw-medium text-gray">วันที่ 10/12/2021</span><br>
                                    <span class="fs-12 fw-medium text-gray">เวลา 11:30 น.</span>
                                </div>
                                <div class="col-sm-3">
                                    <p class="fw-medium mb-0">2,490.00 ฿</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="fw-medium mb-0">บัตรเครดิต</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="fw-medium text-success mb-0">จัดส่งเรียบร้อย</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-yellow rounded-pill mt-3" href="warrantyStep1.php">ลงทะเบียนประกันสินค้า</a>
                        </div>
                        <div class="border py-3 px-3 mt-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6>ชื่อผู้รับ</h6>
                                    <p class="text-gray">กมลวรรณ บุตรพันธ์</p>
                                </div>
                                <div class="col-sm-5">
                                    <h6>ที่อยู่จัดส่ง</h6>
                                    <p class="text-gray">90/06 ถ.ศรีอยุธยา วชิรพยาบาล เขตดุสิต กรุงเทพมหานคร 10300</p>
                                </div>
                                <div class="col-sm-3">
                                    <h6>เบอร์โทรติดต่อ</h6>
                                    <p class="text-gray">0814499488</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray6 rounded-3 py-2 px-2 mt-3" id="headHisOrder">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="fw-medium fs-18 mb-0 ps-3">รายการสินค้า</p>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <p class="fw-medium fs-18 mb-0">ราคา</p>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <p class="fw-medium fs-18 mb-0">จำนวน</p>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <p class="fw-medium fs-18 mb-0">รวม</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom py-3 px-3" id="contentHisOrder">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-start align-items-center img-order">
                                        <img class="border mx-1" src="images/Product/hisOrder1.png">
                                        <div class="ps-3">
                                            <h6>Jabra Elite2</h6>
                                            <p class="text-gray">Jabra True wireless</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <p class="fw-medium mb-0">2,490.00 ฿</p>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <p class="fw-medium mb-0">1</p>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <p class="fw-medium text-gray fs-12 mb-0" style="text-decoration: line-through;">2,490.00 ฿</p>
                                    <p class="fw-medium text-danger mb-0">2,490.00 ฿</p>
                                    <p class="fw-medium text-green fs-12 mb-0">ลด : 380.00 ฿</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom pt-4 pb-3">
                            <div class="d-flex justify-content-between fs-18 mb-2">
                                <span>รายการทั้งหมด</span>
                                <span>2,870.00 ฿</span>
                            </div>
                            <div class="d-flex justify-content-between fs-18 mb-2">
                                <span>ส่วนลด</span>
                                <span>-380.00 ฿</span>
                            </div>
                            <div class="d-flex justify-content-between fs-18 mb-2">
                                <span>ค่าจัดส่ง</span>
                                <span>0.00 ฿</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between fs-18 fw-medium mt-3">
                            <span>จำนวนเงินสุทธิ</span>
                            <span>2,490.00 ฿</span>
                        </div>
                        <div class="topBannerTitle">
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