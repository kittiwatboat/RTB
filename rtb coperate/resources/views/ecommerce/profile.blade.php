<!doctype html>
<html lang="th">

<head>
    <title></title>
    @include('ecommerce.inc_header')

</head>

<body>
    @include('ecommerce.inc_navbar')

    <div class=" topBannerTitle">
        <div class="container-fluid bg-gray4">
            <div class="container">
                <div class="headProfile py-2 py-lg-4">
                    <ul class="breadcrumb mb-0 mt-4">
                        <li class="breadcrumb-item "><a class="fw-medium text-darkGray" href="index.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active"><a class="fw-medium text-darkGray" href="profile.php">ข้อมูลส่วนตัว</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-4 mt-3 mb-lg-5 mb-3">
                <div class="col-sm-12 col-md-3">
                    <div class="tabProfile">
                        <ul>
                            <li class="nav-item w-100">
                                <a class="nav-link active" href="profile.php">ข้อมูลส่วนตัว</a>
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
                                <a class="nav-link" href="profile_favorite.php">รายการสิ่งที่ฉันถูกใจ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9">
                    <div class="border py-3 px-lg-3 px-2">
                        <div class="d-flex justify-content-between border-bottom">
                            <h3>ข้อมูลส่วนตัว</h3>
                            <a class="btn bg-grayL rounded-pill mb-2" href="#">แก้ไข</a>
                        </div>
                        <div class="row mt-lg-3 mt-0">
                            <div class="col-sm-6 col-md-3">
                                <p class="fw-medium">อีเมล์</p>
                            </div>
                            <div class="col-sm-6 col-md-9">
                                <p>{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-0">
                            <div class="col-sm-6 col-md-3">
                                <p class="fw-medium">เบอร์โทรศัพท์</p>
                            </div>
                            <div class="col-sm-6 col-md-9">
                                <div class="d-flex">
                                    <p>0888888888</p><a class="btn bg-grayL rounded-pill fs-12 ms-5 mb-2" href="#">เปลี่ยน</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-0">
                            <div class="col-sm-6 col-md-3">
                                <p class="fw-medium">วัน/เดือน/ปีเกิด</p>
                            </div>
                            <div class="col-sm-6 col-md-9">
                                <p>25/12/1989</p>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-0">
                            <div class="col-sm-6 col-md-3">
                                <p class="fw-medium">ชื่อ-นามสกุล</p>
                            </div>
                            <div class="col-sm-6 col-md-9">
                                <p>กกกกกกกกก กกกกกกกกก</p>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-0">
                            <div class="col-sm-6 col-md-3">
                                <p class="fw-medium">เพศ</p>
                            </div>
                            <div class="col-sm-6 col-md-9">
                                <p>ชาย</p>
                            </div>
                        </div>
                    </div>
                    <div class="border p-2 p-lg-3 mt-lg-4 mt-2">
                        <div class="row">
                            <div class="col-sm-8 col-md-8">
                                <h3>ที่อยู่สำหรับจัดส่ง</h3>
                            </div>
                            <div class="col-sm-4 col-md-4 text-lg-end">
                                <div class="btn bg-grayL rounded-pill mb-2 px-4" data-bs-toggle="modal" data-bs-target="#addAddress"><i class="fas fa-plus"></i> เพิ่มที่อยู่ใหม่</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <label class="w-100">
                                    <input type="radio" name="address" selected checked class="card-input-element" />
                                    <div class="card card-default card-input mx-2 rounded-0">
                                        <div class="flex-wrap">
                                            <label class="border border-top-0 border-start-0 px-2 py-1 text-white"><i class="fas fa-check"></i></label>
                                            <a class="text-gray" href="#"><i class="fas fa-edit"></i></a>
                                            <a class="text-gray" href="#"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="px-3 py-3">
                                            <p>กกกกกกกกกกก กกกกกกกกกก</p>
                                            <p>22/223 xxxxxxxxxxxxx xxxxxxxxxxxxx xxxxxxxx xxxxxxxxxxxxxxxx xxxxx</p>
                                            <p>0888888888</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <label class="w-100">
                                    <input type="radio" name="address" class="card-input-element" />
                                    <div class="card card-default card-input mx-2 rounded-0">
                                        <div class="flex-wrap">
                                            <label class="border border-top-0 border-start-0 px-2 py-1 text-white"><i class="fas fa-check"></i></label>
                                            <a class="text-gray" href="#"><i class="fas fa-edit"></i></a>
                                            <a class="text-gray" href="#"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="px-3 py-3">
                                            <p>กกกกกกกกกกก กกกกกกกกกก</p>
                                            <p>22/223 xxxxxxxxxxxxx xxxxxxxxxxxxx xxxxxxxx xxxxxxxxxxxxxxxx xxxxx</p>
                                            <p>0888888888</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="my-3 text-center">
                                <a class="btn btn-green rounded-pill shadow-sm px-5" href="#">ตั้งค่าที่อยู่เริ่มต้น</a>
                            </div>
                        </div>

                    </div>
                    <div class="border p-2 p-lg-3 mt-lg-4 mt-2">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3>ใบกำกับภาษี</h3>
                            </div>
                            <div class="col-sm-3 text-lg-end">
                                <div class="btn bg-grayL rounded-pill mb-2 px-4" data-bs-toggle="modal" data-bs-target="#addTax"><i class="fas fa-plus"></i> เพิ่มข้อมูลผู้เสียภาษี</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <label class="w-100">
                                    <input type="radio" name="tax" selected checked class="card-input-element" />
                                    <div class="card card-default card-input mx-2 rounded-0">
                                        <div class="flex-wrap">
                                            <label class="border border-top-0 border-start-0 px-2 py-1 text-white"><i class="fas fa-check"></i></label>
                                            <a class="text-gray" href="#"><i class="fas fa-edit"></i></a>
                                            <a class="text-gray" href="#"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="px-3 py-3">
                                            <p>กกกกกกกกกกก กกกกกกกกกก</p>
                                            <p>9468798127645</p>
                                            <p>0</p>
                                            <p>123 xxxxxxxxxxxxx xxxxxxxxxxxxx xxxxxxxx xxxxxxxxxxxxxxxx xxxxx</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <label class="w-100">
                                    <input type="radio" name="tax" class="card-input-element" />
                                    <div class="card card-default card-input mx-2 rounded-0">
                                        <div class="flex-wrap">
                                            <label class="border border-top-0 border-start-0 px-2 py-1 text-white"><i class="fas fa-check"></i></label>
                                            <a class="text-gray" href="#"><i class="fas fa-edit"></i></a>
                                            <a class="text-gray" href="#"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="px-3 py-3">
                                            <p>กกกกกกกกกกก กกกกกกกกกก</p>
                                            <p>9468798127645</p>
                                            <p>0</p>
                                            <p>123 xxxxxxxxxxxxx xxxxxxxxxxxxx xxxxxxxx xxxxxxxxxxxxxxxx xxxxx</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="my-3 text-center">
                                <a class="btn btn-green rounded-pill shadow-sm px-5" href="#">ตั้งค่าที่อยู่เริ่มต้น</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <form>
        <div class="modal fade" id="addAddress" tabindex="-1" aria-labelledby="addAddressLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAddressLabel">เพิ่มที่อยู่สำหรับจัดส่ง</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end">
                                <label for="" class="form-label fw-normal">ชื่อผู้รับสินค้า</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="ชื่อ-นามสกุล">
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end">
                                <label for="" class="form-label fw-normal">เบอร์มือถือ</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="ระบุหมายเลขโทรศํพท์มือถือ 10 หลัก">
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end">
                                <label for="" class="form-label fw-normal">เบอร์โทรสำรอง(ถ้ามี)</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="ระบุหมายเลขโทรศํพท์มือถือ 10 หลัก">
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end">
                                <label for="" class="form-label fw-normal">จังหวัด</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกจังหวัด-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end">
                                <label for="" class="form-label fw-normal">เขต/อำเภอ</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกเขต/อำเภอ-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end">
                                <label for="" class="form-label fw-normal">แขวง/ตำบล</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกแขวง/ตำบล-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end">
                                <label for="" class="form-label fw-normal">รหัสไปรษณีย์</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกรหัสไปรษณีย์-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end">
                                <label for="" class="form-label fw-normal">ที่อยู่</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" rows="5" id="" placeholder="บ้านเลขที่ / ชื่ออาคาร / หมู่บ้าน / ตรอก / ซอย / หมู่ที่ / ถนน"></textarea>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-9">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1">
                                <label>ตั้งค่าที่อยู่เริ่มต้น</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-green rounded-pill px-4 mx-3" type="submit">ตกลง</button>
                        <button type="button" class="btn btn-gray rounded-pill px-4 mx-3" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form>
        <div class="modal fade" id="addTax" tabindex="-1" aria-labelledby="addTaxLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addTaxLabel">เพิ่มข้อมูลใบกำกับภาษี</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end pe-0">
                                <label for="" class="form-label fw-normal">ชื่อนิติบุคคล /<br>บุคคลธรรมดา</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="ชื่อ-นามสกุล">
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end pe-0">
                                <label for="" class="form-label fw-normal">เลขประจำตัวผู้เสียภาษี/<br>เลขบัตรประจำตัวประชาชน</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end pe-0">
                                <label for="" class="form-label fw-normal">สำนักงานใหญ่/สาขา/กรณีบุคคลธรรมดา ระบุ(0)</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end pe-0">
                                <label for="" class="form-label fw-normal">จังหวัด</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกจังหวัด-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end pe-0">
                                <label for="" class="form-label fw-normal">เขต/อำเภอ</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกเขต/อำเภอ-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end pe-0">
                                <label for="" class="form-label fw-normal">แขวง/ตำบล</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกแขวง/ตำบล-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end pe-0">
                                <label for="" class="form-label fw-normal">รหัสไปรษณีย์</label>
                            </div>
                            <div class="col-sm-9">
                                <select id="" class="form-select">
                                    <option selected>-เลือกรหัสไปรษณีย์-</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3 text-lg-end pe-0">
                                <label for="" class="form-label fw-normal">ที่อยู่</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" rows="5" id="" placeholder="บ้านเลขที่ / ชื่ออาคาร / หมู่บ้าน / ตรอก / ซอย / หมู่ที่ / ถนน"></textarea>
                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-9">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1">
                                <label>ตั้งค่าที่อยู่เริ่มต้น</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-green rounded-pill px-4 mx-3" type="submit">ตกลง</button>
                        <button type="button" class="btn btn-gray rounded-pill px-4 mx-3" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('ecommerce.inc_footer')


</body>

</html>
