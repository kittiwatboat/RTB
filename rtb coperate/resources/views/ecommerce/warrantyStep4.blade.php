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
                            <li class="active">
                                <span>
                                    <div class="bg-warrantyStep2">
                                    </div>
                                </span>
                                Step : 4 <p>กรอก OTP</p>
                            </li>
                        </ul>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped" style="width:100%">100%</div>
                    </div>
                    <div class="warrantyForm bg-white mt-3 py-3 px-lg-5 px-3">
                        <div class="text-center">
                            <label class="bg-green text-white rounded-3 py-1 px-3">4</label>
                            <h5 class="py-lg-3 py-2">กรอก OTP</h5>
                        </div>
                        <form>
                            <div class="border-bottom pb-3 my-3">
                                <div class="row">
                                    <div class="col-sm-8 mx-auto">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="กรอกเบอร์โทรศัพท์ที่รับ OTP" name="number">
                                            <span class="input-group-text bg-gray3 text-white">กดรับ OTP</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="form-label fw-normal text-center">กรอกรหัส OTP</label>
                                    <div class="col-sm-4 mx-auto">
                                        <input type="text" class="form-control" placeholder="" name="number">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-1 col-sm-1">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1">
                                </div>
                                <div class="col-11 col-sm-11">
                                    <label>ข้าพเจ้ายินดีรับข้อมูลข่าวสาร การสื่อสาร สิทธิประโยชน์ และกิจกรรมต่างๆ <br>จากบริษัท RTB Technology</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-1 col-sm-1">
                                    <input type="checkbox" class="form-check-input" id="check2" name="option2" checked>
                                </div>
                                <div class="col-11 col-sm-11">
                                    <label>ข้าพเจ้าได้อ่านและยอมรับ <a class="text-green" href="#">นโยบายความเป็นส่วนตัวของ RTB Technology</a>และยินยอมให้บริษัท RTB Technology เก็บรวบรวม ใช้ เปิดเผย โอน และจัดเก็บข้อมูลของท่าน รวมถึงส่งข้อมูลทาง SMS และ e-mail ที่ท่านได้กรอกข้อมูล
                                        ไว้ เพื่อวัตถุประสงค์ในการรับประกันสินค้ากับบริษัทประกันภัยและ/หรือเพื่อวัตถุประสงค์อื่น ตามที่ระบุไว้ในนโยบายดังกล่าว <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="bottomFoot"></div>

                            <div class="text-center mb-3">
                                <a class="btn btn-green rounded-pill px-5" href="#" data-bs-toggle="modal" data-bs-target="#regisSuccess">ลงทะเบียน</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form>
        <div class="modal fade" id="regisSuccess" tabindex="-1" aria-labelledby="regisSuccessLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <img src="images/check-circle.png" class="mb-4">
                            <div class="mb-5">
                                <h4>ลงทะเบียนสำเร็จ</h4>
                                <p>กรุณาตรวจเช็คในกล่องอีเมล์ของท่าน<br>เพื่อทำการยืนยันการลงทะเบียน</p>
                            </div>
                            <div class="text-center mb-4">
                                <button type="button" class="btn bg-gray3 text-white rounded-pill px-4 mx-3" type="submit">ตกลง</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

    <?php require('inc_footer.php'); ?>
</body>

</html>