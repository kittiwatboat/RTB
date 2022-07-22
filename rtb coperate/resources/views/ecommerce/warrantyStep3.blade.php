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
                            <li class="active">
                                <span>
                                    <div class="bg-warrantyStep3">
                                    </div>
                                </span>
                                Step : 3 <p>กรอกข้อมูลส่วนตัว</p>
                            </li>
                            <li>
                                <span>
                                    <div class="bg-warrantyStep2">
                                    </div>
                                </span>
                                Step : 4 <p>กรอก OTP</p>
                            </li>
                        </ul>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped" style="width:75%">75%</div>
                    </div>
                    <div class="warrantyForm bg-white mt-3 py-3 px-lg-5 px-3">
                        <div class="text-center">
                            <label class="bg-green text-white rounded-3 py-1 px-3">3</label>
                            <h5 class="py-lg-3 py-2">กรอกข้อมูลส่วนตัว</h5>
                        </div>
                        <form>
                            <div class="my-3">
                                <div class="col-sm-12 mb-3">
                                    <label for="" class="form-label fw-normal">คำนำหน้า <span class="text-danger">*</span></label>
                                    <select id="" class="form-select">
                                        <option selected>กรุณาเลือก</option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-lg-0">
                                        <label for="" class="form-label fw-normal">ชื่อ <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label fw-normal">นามสกุล <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="" class="form-label fw-normal">วันเกิด <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-lg-0">
                                        <label for="" class="form-label fw-normal">อีเมล์ <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label fw-normal">เบอร์โทรติดต่อ(มือถือ) <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" placeholder="___-___-____">
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="" class="form-label fw-normal">บริษัท</label>
                                    <input type="text" class="form-control" id="">
                                </div>

                                <div class="bottomFoot"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <a class="btn btn-gray rounded-pill px-lg-5 px-3" href="warrantyStep2.php">ย้อนกลับ</a>
                                <a class="btn btn-green rounded-pill px-lg-5 px-3" href="warrantyStep4.php">ถัดไป</a>
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