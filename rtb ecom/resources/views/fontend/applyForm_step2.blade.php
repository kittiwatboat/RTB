<!doctype html>
<html lang="th">

<head>
    <title>RTB - Work with Us</title>
    <?php require('inc_header.php'); ?>
</head>

<body>
    <?php require('inc_navbar.php'); ?>
    <div class="bg-bannerTitleWWU topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>Work with Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Work with Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray2">
        <div class="container container-small py-xl-5 py-4">
            <div class="row">
                <div class="col-lg-12">
                    <form action="applyForm_step3.php">
                        <div class="card p-3 border-0 rounded-0">
                            <h6 class="text-green">ร่วมงานกับเรา</h6>
                            <h3 class="text-darkGray">แบบฟอร์มสมัครงาน RTB Technology จำกัด</h3>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="position-relative">
                                        <ul id="progressbar">
                                            <li class="active">ประวัติส่วนตัว(1/2)</li>
                                            <li class="active">ประวัติส่วนตัว(2/2)</li>
                                            <li>ประวัติการศึกษา</li>
                                            <li>ความสามารถ</li>
                                            <li>ประวัติการทำงาน</li>
                                            <li>ข้อมูลเพิ่มเติม</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            2. ประวัติส่วนตัว (2/2)
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label for="" class="form-label fw-normal">ชื่อบิดา / Father's name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label fw-normal">ชื่อมารดา / Mother's name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label fw-normal">จำนวนพี่น้อง(ไม่รวมตัวเอง) / number of siblings (excluding yourself) <span class="text-danger">*</span><br><span class="text-gray">(โปรดระบุ ชาย/หญิง, ท่านเป็นบุตรคนที่)</span></label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="form-label fw-normal">สถานะภาพ / Status <span class="text-danger">*</span></label>
                                                    <select id="" class="form-select">
                                                        <option selected>-เลือก-</option>
                                                        <option>โสด</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="form-label fw-normal">กรณีแต่งงาน / Married <span class="text-gray">(เลือกได้หลายรายการ)</span></label>
                                                    <select id="" class="form-select">
                                                        <option selected>-เลือก-</option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="form-label fw-normal">ชื่อคู่สมรส / อาชีพ / สถานที่ทำงาน</label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="form-label fw-normal">จำนวนบุตร</label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="form-label fw-normal">สถานะภาพทางทหาร <span class="text-gray">(เลือกได้หลายรายการ)</span></label>
                                                    <select id="" class="form-select">
                                                        <option selected>-เลือก-</option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-header">ประเภทรถส่วนตัว ที่มี</div>
                                                        <div class="card-body">
                                                            <div class="row g-3">
                                                                <div class="col-4 col-md-4">
                                                                </div>
                                                                <div class="col-3 col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">มี</label>
                                                                </div>
                                                                <div class="col-3 col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">ไม่มี</label>
                                                                </div>
                                                                <div class="col-2 col-md-4">
                                                                </div>
                                                                <div class="col-4 col-md-4">
                                                                    <label for="" class="form-label fw-normal">รถยนต์</label>
                                                                </div>
                                                                <div class="col-3 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                                                </div>
                                                                <div class="col-3 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                </div>
                                                                <div class="col-2 col-md-4">
                                                                </div>
                                                                <div class="col-4 col-md-4">
                                                                    <label for="" class="form-label fw-normal">รถจักรยานยนต์</label>
                                                                </div>
                                                                <div class="col-3 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1">
                                                                </div>
                                                                <div class="col-3 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                </div>
                                                                <div class="col-2 col-md-4">
                                                                </div>
                                                                <div class="col-4 col-md-4">
                                                                    <label for="" class="form-label fw-normal">กระบะ</label>
                                                                </div>
                                                                <div class="col-3 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1">
                                                                </div>
                                                                <div class="col-3 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                </div>
                                                                <div class="col-2 col-md-4">
                                                                </div>
                                                                <div class="col-4 col-md-4">
                                                                    <label for="" class="form-label fw-normal">อื่นๆ (หากมีโปรดระบุ)</label>
                                                                </div>
                                                                <div class="col-3 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                                                </div>
                                                                <div class="col-3 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                </div>
                                                                <div class="col-2 col-md-4">
                                                                </div>
                                                                <div class="col-12 col-md-4">
                                                                    <label for="" class="form-label fw-normal">ประเภทรถส่วนตัวอื่นๆ : </label>
                                                                </div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="text" class="form-control" id="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-header">ความสามารถในการขับขี่ / Driving Ability</div>
                                                        <div class="card-body">
                                                            <div class="row g-3">
                                                                <div class="col-4 col-md-4">
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">ขับได้</label>
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">ขับไม่ได้</label>
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">มีใบอนุญาติขับขี่</label>
                                                                </div>
                                                                <div class=" col-2 col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">ไม่มีใบอนุญาติขับขี่</label>
                                                                </div>
                                                                <div class="col-4 col-md-4">
                                                                    <label for="" class="form-label fw-normal">รถยนต์</label>
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check3" name="option3">
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check4" name="option4">
                                                                </div>
                                                                <div class="col-4 col-md-4">
                                                                    <label for="" class="form-label fw-normal">รถจักรยานยนต์</label>
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1">
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check3" name="option3">
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check4" name="option4">
                                                                </div>
                                                                <div class="col-4 col-md-4">
                                                                    <label for="" class="form-label fw-normal">กระบะ</label>
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1">
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check3" name="option3">
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check4" name="option4">
                                                                </div>
                                                                <div class="col-4 col-md-4">
                                                                    <label for="" class="form-label fw-normal">อื่นๆ (หากมีโปรดระบุ)</label>
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check3" name="option3">
                                                                </div>
                                                                <div class="col-2 col-md-2 text-center">
                                                                    <input type="checkbox" class="form-check-input" id="check4" name="option4">
                                                                </div>
                                                                <div class="col-12 col-md-4">
                                                                    <label for="" class="form-label fw-normal">ความสามารถในการขับขี่อื่นๆ : </label>
                                                                </div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="text" class="form-control" id="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="" class="form-label fw-normal">อีเมล์ / Email <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label fw-normal">ไลน์ไอดี / Line ID <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label fw-normal">Social Network ที่ใช้ Facebook / IG <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-center py-4">
                                        <button type="submit" class="btn btn-green rounded-pill px-4">ถัดไป / Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require('inc_footer.php'); ?>

</body>

</html>