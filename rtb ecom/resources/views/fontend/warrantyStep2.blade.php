<!doctype html>
<html lang="th">

<head>
    <title></title>
    <?php require('inc_header.php'); ?>
</head>

<body>
    <?php require('inc_navbar.php'); ?>
    <div class=" topBannerTitle">
        <div class="container-fluid bg-gray4 px-0">
            <div class="container">
                <div class="warrantyStep py-lg-5 py-3">
                    <h3 class="py-4 text-center">ลงทะเบียนรับประกันสินค้า</h3>
                    <div class="position-relative">
                        <ul id="progressbar">
                            <li class="active">
                                <span>
                                    <div class="bg-warrantyStep1">
                                    </div>
                                </span>
                                Step : 1 <p>ลงทะเบียนสินค้า</p>
                            </li>
                            <li class="active">
                                <span>
                                    <div class="bg-warrantyStep2">
                                    </div>
                                </span>
                                Step : 2 <p>กรอกข้อมูลการซื้อ</p>
                            </li>
                            <li><span>
                                    <div class="bg-warrantyStep3">
                                    </div>
                                </span>
                                Step : 3 <p>กรอกข้อมูลส่วนตัว</p>
                            </li>
                            <li><span>
                                    <div class="bg-warrantyStep2">
                                    </div>
                                </span>
                                Step : 4 <p>กรอก OTP</p>
                            </li>
                        </ul>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped" style="width:50%">50%</div>
                    </div>
                    <div class="warrantyForm bg-white mt-3 py-3 px-lg-5 px-3">
                        <div class="text-center">
                            <label class="bg-green text-white rounded-3 py-1 px-3">2</label>
                            <h5 class="py-lg-3 py-2">กรอกข้อมูลการซื้อ</h5>
                        </div>
                        <form>
                            <div class="my-3">
                                <div class="col-sm-6 my-lg-3 my-0 mb-3">
                                    <label for="" class="form-label fw-normal">วันที่ซื้อสินค้า <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="">
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="" class="form-label fw-normal">ร้านค้าที่ซื้อ <span class="text-danger">*</span></label>
                                    <select id="" class="form-select">
                                        <option selected>อื่นๆ</option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label fw-normal">ระบุ :</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="form-label fw-normal">สาขา / Website / ชื่องาน / อื่นๆ <span class="text-danger">*</span></label>
                                    <div class="col-sm-4 mb-3 mb-lg-0">
                                        <select id="" class="form-select">
                                            <option selected>สาขา</option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="col-sm-8">
                                        <select id="" class="form-select">
                                            <option selected>-เลือกสาขา-</option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="" class="form-label fw-normal">แนบรูป ใบเสร็จ <span class="text-danger">*</span></label>
                                    <a href="#" class="w-100">
                                        <div class="text-center mx-1 my-3" id="addListProduct">
                                            <div class="btn fs-40 py-5">
                                                <i class="fas fa-camera"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="bottomFoot"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <a class="btn btn-gray rounded-pill px-lg-5 px-3" href="warrantyStep1.php">ย้อนกลับ</a>
                                <a class="btn btn-green rounded-pill px-lg-5 px-3" href="warrantyStep3.php">ถัดไป</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('inc_footer.php'); ?>
</body>

</html>