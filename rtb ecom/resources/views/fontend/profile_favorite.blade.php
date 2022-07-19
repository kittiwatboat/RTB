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
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="profile_favorite.php">รายการสิ่งที่ฉันถูกใจ</a></li>
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
                                <a class="nav-link" href="profile_historyClaim.php">ประวัติการประกันสินค้า</a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link active" href="profile_favorite.php">รายการสิ่งที่ฉันถูกใจ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="border p-lg-3 p-2">
                        <div class="border-bottom">
                            <h3>รายการสิ่งที่ฉันถูกใจ</h3>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <div class="border text-center py-2 px-2 mx-1 my-2">
                                    <img class="w-75" src="images/Product/listOrder1.png">
                                    <h6>Jabra Elite2</h6>
                                    <p class="text-gray fs-12">Jabra True wireless</p>
                                    <p class="text-gray fw-medium">฿2,490.00</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="border text-center py-2 px-2 mx-1 my-2">
                                    <img class="w-75" src="images/Product/listOrder2.png">
                                    <h6>Jabra Elite85T Advanced ANC</h6>
                                    <p class="text-gray fs-12">Jabra True wireless</p>
                                    <p class="text-gray fw-medium">฿2,490.00</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="border text-center py-2 px-2 mx-1 my-2">
                                    <img class="w-75" src="images/Product/listOrder3.png">
                                    <h6>Jabra Elite75T WLC</h6>
                                    <p class="text-gray fs-12">Jabra True wireless</p>
                                    <p class="text-gray fw-medium">฿2,490.00</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="border text-center py-2 px-2 mx-1 my-2">
                                    <img class="w-75" src="images/Product/listOrder1.png">
                                    <h6>Jabra Elite2</h6>
                                    <p class="text-gray fs-12">Jabra True wireless</p>
                                    <p class="text-gray fw-medium">฿2,490.00</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="border text-center py-2 px-2 mx-1 my-2">
                                    <img class="w-75" src="images/Product/listOrder2.png">
                                    <h6>Jabra Elite85T Advanced ANC</h6>
                                    <p class="text-gray fs-12">Jabra True wireless</p>
                                    <p class="text-gray fw-medium">฿2,490.00</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="border text-center py-2 px-2 mx-1 my-2">
                                    <img class="w-75" src="images/Product/listOrder3.png">
                                    <h6>Jabra Elite75T WLC</h6>
                                    <p class="text-gray fs-12">Jabra True wireless</p>
                                    <p class="text-gray fw-medium">฿2,490.00</p>
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
    </div>

    <?php require('inc_footer.php'); ?>
    <script>
        $('#linkMenuTop .nav-item').eq(0).addClass('active');
    </script>

</body>

</html>