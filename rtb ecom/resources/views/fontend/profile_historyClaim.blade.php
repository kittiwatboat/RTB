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
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="profile_historyClaim.php">ประวัติการประกันสินค้า</a></li>
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
                                <a class="nav-link" href="profile_orderHistory.php">ประวัติการสั่งซื้อของฉัน</a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link active" href="profile_historyClaim.php">ประวัติการประกันสินค้า</a>
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
                            <h3>ประวัติการประกันสินค้า</h3>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <div class="border border-secondary py-2 px-2 mx-1 my-2">
                                    <div class="d-flex justify-content-start align-items-center img-order">
                                        <img class="border mx-1" src="images/Product/hisOrder1.png">
                                        <div class="ps-3">
                                            <h6>Jabra Elite2</h6>
                                            <p class="text-gray">Jabra True wireless</p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="mb-2">วันที่ซื้อ : วว/ดด/ปปปป</p>
                                        <p class="mb-2">แบรนด์ : </p>
                                        <p class="mb-2">Serial number : </p>
                                        <p class="mb-2">รุ่น : </p>
                                        <p class="mb-2">สี : </p>
                                        <p class="mb-2">ประกันหมดอายุ : วว/ดด/ปปปป</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="border border-secondary py-2 px-2 mx-1 my-2">
                                    <div class="d-flex justify-content-start align-items-center img-order">
                                        <img class="border mx-1" src="images/Product/hisOrder1.png">
                                        <div class="ps-3">
                                            <h6>Jabra Elite2</h6>
                                            <p class="text-gray">Jabra True wireless</p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="mb-2">วันที่ซื้อ : วว/ดด/ปปปป</p>
                                        <p class="mb-2">แบรนด์ : </p>
                                        <p class="mb-2">Serial number : </p>
                                        <p class="mb-2">รุ่น : </p>
                                        <p class="mb-2">สี : </p>
                                        <p class="mb-2">ประกันหมดอายุ : วว/ดด/ปปปป</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="warrantyStep1.php">
                                    <div class="text-center mx-1 my-3" id="addInsue">
                                        <div class="btn fs-24 text-gray">
                                            <i class="fas fa-plus"></i>
                                            <p>ลงทะเบียนรับประกัน</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="bottomFoot">
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