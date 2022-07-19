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
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="profile_changePass.php">เปลี่ยนรหัสผ่าน</a></li>
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
                                <a class="nav-link active" href="profile_changePass.php">เปลี่ยนรหัสผ่าน</a>
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
                            <h3>เปลี่ยนรหัสผ่าน</h3>
                        </div>
                        <div class="row">
                            <div class="row mt-3">
                                <div class="col-sm-2 text-lg-end">
                                    <label for="" class="form-label fw-normal">รหัสผ่านปัจจุบัน</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control w-100" id="" placeholder="">
                                    <p class="fs-12 text-gray mb-0 mt-2">กรุณากรอกรหัสผ่านเพื่อเปลี่ยนแปลงบัญชีของท่าน</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-2 text-lg-end">
                                    <label for="" class="form-label fw-normal">รหัสผ่านใหม่</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control w-100" id="" placeholder="">
                                    <p class="fs-12 text-gray mb-0 mt-2">กรอกรหัสผ่านอย่างน้อย 6 ตัวอักษร, ควรประกอบด้วยตัวเลขและตัวอักษรพิมพ์ใหญ่และเล็ก อย่างน้อย อย่างละ 1 ตัว</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-2 text-lg-end">
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
            </div>
        </div>
    </div>
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