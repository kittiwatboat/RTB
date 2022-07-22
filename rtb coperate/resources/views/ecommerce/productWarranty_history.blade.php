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
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="productWarranty_history.php">ประวัติการรับประกันสินค้า</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="border my-4 py-3 px-3">
                <div class="row border-bottom">
                    <div class="col-sm-8 col-md-8 col-lg-10">
                        <h3>สวัสดี! คุณ<span>xxxxxx xxxxxxxxx</span></h3>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2">
                        <a class="btn bg-grayL rounded-pill mb-2 px-4" href="#"><i class="fas fa-power-off"></i> ออกจากระบบ</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-5 col-sm-6 col-md-2">
                        <p class="fw-medium">ชื่อ-นามสกุล</p>
                    </div>
                    <div class="px-0 col-7 col-sm-6 col-md-10">
                        <p>xxxxxx xxxxxxxxxx</p>
                    </div>
                </div>
                <div class="row mt-lg-3 mt-0">
                    <div class="col-3 col-sm-6 col-md-2">
                        <p class="fw-medium">อีเมล์</p>
                    </div>
                    <div class="px-0 col-6 col-sm-3 col-md-2">
                        <p>test@gmail.com</p>
                    </div>
                    <div class="col-3 col-sm-3 col-md-2">
                        <a class="btn bg-grayL rounded-pill fs-12 ms-lg-5 ms-0 mb-2" href="#">แก้ไข</a>
                    </div>
                </div>
                <div class="row mt-lg-3 mt-0">
                    <div class="col-4 col-sm-6 col-md-2">
                        <p class="fw-medium">เบอร์โทรศัพท์</p>
                    </div>
                    <div class="px-0 col-5 col-sm-3 col-md-2">
                        <p>088-8888888</p>
                    </div>
                    <div class="col-3 col-sm-3 col-md-2">
                        <a class="btn bg-grayL rounded-pill fs-12 ms-lg-5 ms-0 mb-2" href="#">แก้ไข</a>
                    </div>
                </div>
            </div>
            <div class="border py-3 px-3">
                <div class="border-bottom">
                    <h5>ประวัติการประกันสินค้า</h5>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 col-md-4">
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
                    <div class="col-sm-6 col-md-4">
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
                    <div class="col-sm-6 col-md-4">
                        <a href="warrantyStep1.php">
                            <div class="text-center mx-1 my-2" id="addInsue2">
                                <div class="btn fs-24 text-gray">
                                    <i class="fas fa-plus"></i>
                                    <p>ลงทะเบียนรับประกัน</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bottomFoot">
            </div>
        </div>
    </div>

    <?php require('inc_footer.php'); ?>

</body>

</html>