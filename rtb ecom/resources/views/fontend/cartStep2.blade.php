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
                    <ul class="breadcrumb mb-0 mt-2">
                        <li class="breadcrumb-item "><a class="fw-medium text-darkGray" href="index.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="cartStep2.php">ข้อมูลใบเสร็จ, ใบกำกับภาษี</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cartStep my-3 my-lg-5">
                <div class="position-relative">
                    <ul id="progressbar">
                        <li class="active">
                            <span><i class="fas fa-truck"></i></span>
                            <p class="fw-medium fs-18">1.ข้อมูลจัดส่ง</p>
                        </li>
                        <li class="active">
                            <span><i class="fas fa-file-alt"></i></span>
                            <p class="fw-medium fs-18">2.ข้อมูลใบเสร็จ/ใบกำกับภาษี</p>
                        </li>
                        <li><span><i class="fas fa-money-bill"></i></span>
                            <p class="fw-medium fs-18">3.เลือกวิธีการชำระเงิน</p>
                        </li>
                    </ul>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width:50%">50%</div>
                </div>
                <div class="row mt-lg-5 mt-3">
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <div class="px-0 py-0 px-lg-3 py-lg-3">
                            <h3>2. ข้อมูลใบเสร็จ/ใบกำกับภาษี</h3>
                            <div class="row mt-3 py-lg-3 py-0">
                                <h4>ใบเสร็จ</h4>
                                <div class="col-sm-12">
                                    <label class="w-100">
                                        <input type="radio" name="receipt" selected checked class="cardSend card-input-element" />
                                        <div class="card card-default card-input mx-2 rounded-0">
                                            <div class="row px-4 py-3">
                                                <div class="col-1 col-sm-1">
                                                    <label class="text-white fs-18"><i class="fas fa-dot-circle border rounded-circle"></i></label>
                                                </div>
                                                <div class="col-10 col-sm-11">
                                                    <span class="fw-medium fs-18">ที่อยู่เหมือนกับที่อยู่จัดส่ง</span>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-sm-12">
                                    <label class=" w-100">
                                        <input type="radio" name="receipt" class="cardSend card-input-element" />
                                        <div class="card card-default card-input mx-2 rounded-0">
                                            <div class="row px-4 py-3">
                                                <div class="col-1 col-sm-1">
                                                    <label class="text-white fs-18"><i class="fas fa-dot-circle border rounded-circle"></i></label>
                                                </div>
                                                <div class="col-10 col-sm-11">
                                                    <span class="fw-medium fs-18">ที่อยู่ใบเสร็จ</span>
                                                    <div class="row mt-3">
                                                        <div class="col-sm-12 my-2">
                                                            <input type="text" class="bg-gray7 form-control border-0" placeholder="ชื่อ-นามสกุล">
                                                        </div>
                                                        <div class="col-sm-12 my-2">
                                                            <input type="text" class="bg-gray7 form-control border-0" placeholder="ที่อยู่">
                                                        </div>
                                                        <div class="col-sm-6 my-2">
                                                            <label for="" class="form-label fw-normal">จังหวัด <span class="text-dark">*</span></label>
                                                            <select id="" class="bg-gray7 form-select border-0">
                                                                <option selected>-เลือก-</option>
                                                                <option></option>
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6 my-2">
                                                            <label for="" class="form-label fw-normal">รหัสไปรษณีย์ <span class="text-dark">*</span></label>
                                                            <input type="text" class="bg-gray7 form-control border-0" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-3 py-3">
                                <h4>ใบกำกับภาษี</h4>
                                <div class="col-sm-12">
                                    <label class="w-100">
                                        <input type="radio" name="tax_invoice" selected checked class="cardSend card-input-element" />
                                        <div class="card card-default card-input mx-2 rounded-0">
                                            <div class="row px-4 py-3">
                                                <div class="col-1 col-sm-1">
                                                    <label class="text-white fs-18"><i class="fas fa-dot-circle border rounded-circle"></i></label>
                                                </div>
                                                <div class="col-10 col-sm-11">
                                                    <span class="fw-medium fs-18">ไม่รับ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-sm-12">
                                    <label class=" w-100">
                                        <input type="radio" name="tax_invoice" class="cardSend card-input-element" />
                                        <div class="card card-default card-input mx-2 rounded-0">
                                            <div class="row px-4 py-3">
                                                <div class="col-1 col-sm-1">
                                                    <label class="text-white fs-18"><i class="fas fa-dot-circle border rounded-circle"></i></label>
                                                </div>
                                                <div class="col-10 col-sm-11">
                                                    <span class="fw-medium fs-18">รับใบกำกับภาษี - ข้อมูลที่อยู่ตามใบวางบิล</span>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-sm-12">
                                    <label class=" w-100">
                                        <input type="radio" name="tax_invoice" class="cardSend card-input-element" />
                                        <div class="card card-default card-input mx-2 rounded-0">
                                            <div class="row px-4 py-3">
                                                <div class="col-1 col-sm-1">
                                                    <label class="text-white fs-18"><i class="fas fa-dot-circle border rounded-circle"></i></label>
                                                </div>
                                                <div class="col-10 col-sm-11">
                                                    <span class="fw-medium fs-18">รับใบกำกับภาษี</span>
                                                    <div class="row mt-3">
                                                        <div class="col-sm-12 my-2">
                                                            <input type="text" class="bg-gray7 form-control border-0" placeholder="ชื่อนิติบุคคล/บุคคลธรรมดา">
                                                        </div>
                                                        <div class="col-sm-12 my-2">
                                                            <input type="text" class="bg-gray7 form-control border-0" placeholder="เลขประจำตัวผู้เสียภาษี/เลขบัตรประจำตัวประชาชน">
                                                        </div>
                                                        <div class="col-sm-12 my-2">
                                                            <input type="text" class="bg-gray7 form-control border-0" placeholder="สำนักงานใหญ่/สาขา/กรณีบุคคลธรรมดา ระบุ(0)">
                                                        </div>
                                                        <p class="fw-medium mt-3">Address for issuing tax invioces</p>
                                                        <div class="col-sm-12 my-2">
                                                            <input type="text" class="bg-gray7 form-control border-0" placeholder="ที่อยู่ (บรรทัดที่ 1)">
                                                        </div>
                                                        <div class="col-sm-12 my-2">
                                                            <input type="text" class="bg-gray7 form-control border-0" placeholder="ที่อยู่ (บรรทัดที่ 2)">
                                                        </div>
                                                        <div class="col-sm-6 my-2">
                                                            <label for="" class="form-label fw-normal">จังหวัด <span class="text-dark">*</span></label>
                                                            <select id="" class="bg-gray7 form-select border-0">
                                                                <option selected>-เลือก-</option>
                                                                <option></option>
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6 my-2">
                                                            <label for="" class="form-label fw-normal">รหัสไปรษณีย์ <span class="text-dark">*</span></label>
                                                            <input type="text" class="bg-gray7 form-control border-0" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-0 mt-lg-4">
                                <div class="col-sm-6 my-2">
                                    <a class="btn btn-green rounded-pill w-100" href="cartStep3.php">ขั้นตอนถัดไป</a>
                                </div>
                                <div class="col-sm-6 my-2">
                                    <a class="btn btn-gray rounded-pill w-100" href="cartStep1.php">ย้อนกลับ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5 ps-lg-5 mt-3 mt-lg-0">
                        <div class="border bg-gray4 px-3 py-3">
                            <h4>สรุปยอดการสั่งซื้อ</h4>
                            <div class="border-bottom my-3">
                                <div class="row w-100 ms-0 my-3">
                                    <div class="ps-1 col-4 col-sm-3" id="productCart">
                                        <img src="images/Product/listOrder3.png" class="border w-100">
                                        <span class="numProduct rounded-circle">1</span>
                                    </div>
                                    <div class="px-0 col-5 col-sm-6">
                                        <p class="fw-medium">Jabra active Elite75T...</p>
                                    </div>
                                    <div class="px-0 col-2 col-sm-3">
                                        <p class="fw-medium fs-14">฿2,350.00</p>
                                    </div>
                                </div>
                                <div class="row w-100 ms-0 my-3">
                                    <div class="ps-1 col-4 col-sm-3" id="productCart">
                                        <img src="images/Product/listOrder4.png" class="border w-100">
                                        <span class="numProduct rounded-circle">2</span>
                                    </div>
                                    <div class="px-0 col-5 col-sm-6">
                                        <p class="fw-medium">DOD512G</p>
                                    </div>
                                    <div class="px-0 col-2 col-sm-3">
                                        <p class="fw-medium fs-14">฿19,180.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom">
                                <div class="d-flex justify-content-between fs-14 fw-medium mb-2">
                                    <span>รวม</span>
                                    <span>฿21,530.00</span>
                                </div>
                                <div class="d-flex justify-content-between fs-14 fw-medium mb-2">
                                    <span>คูปองส่วนลด</span>
                                    <span>-฿130.00</span>
                                </div>
                                <div class="d-flex justify-content-between fs-14 fw-medium mb-2">
                                    <span>โค้ดส่วนลด</span>
                                    <span>-฿100.00</span>
                                </div>
                                <div class="d-flex justify-content-between fs-14 fw-medium mb-2">
                                    <span>ค่าจัดส่ง</span>
                                    <span>+฿50.00</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between fs-18 fw-medium mt-3">
                                <span>Total</span>
                                <span>฿21,350.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottomFoot"></div>
        </div>
    </div>
    <?php require('inc_footer.php'); ?>
    <script>

    </script>
</body>

</html>