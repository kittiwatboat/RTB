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
                            <li>
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
                        <div class="progress-bar bg-success progress-bar-striped" style="width:25%">25%</div>
                    </div>
                    <div class="warrantyForm bg-white mt-3 py-3 px-lg-5 px-3">
                        <div class="text-center">
                            <label class="bg-green text-white rounded-3 py-1 px-3">1</label>
                            <h5 class="py-lg-3 py-2">ลงทะเบียนสินค้า</h5>
                        </div>
                        <form>
                            <div class="border-bottom my-lg-3 my-0">
                                <div class="row align-items-center mb-3">
                                    <label class="fw-normal">สแกน Barcode ของสินค้า <span class="text-danger">*</span></label>
                                    <div class="col-10 col-sm-9">
                                        <button class="scanBarcode w-100 btn-blue border-0 rounded-3 text-white py-1"><img src="images/scan.png">สแกน Barcode สินค้า</button>
                                    </div>
                                    <div class="col-2 col-sm-3">
                                        <i class="fas fa-question-circle"></i>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="" class="form-label fw-normal">เลือกยี่ห้อผลิตภัณฑ์ <span class="text-danger">*</span></label>
                                    <select id="" class="form-select">
                                        <option selected>-เลือก-</option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="" class="form-label fw-normal">ชื่อรุ่น</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="" class="form-label fw-normal">สี</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="row align-items-center mb-3">
                                    <label for="" class="form-label fw-normal">กรอก Serial Number <span class="text-danger">*</span></label>
                                    <div class="col-10 col-sm-9">
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col-2 col-sm-3">
                                        <i class="fas fa-question-circle"></i>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="" class="form-label fw-normal">ราคาขายปกติ</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="text-center border-bottom mx-1 my-3 pb-3">
                                <a class="btn text-gray py-3 px-3" id="addListProduct">
                                    <i class="fas fa-plus"></i>
                                    <span>เพิ่มรายการสินค้า</span>
                                </a>
                            </div>
                            <div class="text-center mb-3">
                                <a class="btn btn-green rounded-pill px-5" href="warrantyStep2.php">ถัดไป</a>
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