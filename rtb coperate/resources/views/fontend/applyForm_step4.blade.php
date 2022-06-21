<!doctype html>
<html lang="th">

<head>
    <title>RTB - Work with Us</title>
    @include('fontend.inc_header')
</head>

<body>
    @include('fontend.inc_navbar')
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
                    <form action="applyForm_step5.php">
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
                                            <li class="active">ประวัติการศึกษา</li>
                                            <li class="active">ความสามารถ</li>
                                            <li>ประวัติการทำงาน</li>
                                            <li>ข้อมูลเพิ่มเติม</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            4. ความสามารถ
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-header bg-light"><label for="" class="fw-normal">ความสามารถทางภาษา/Language Ability - การพูด/Speaking <span class="text-danger">*</span></label></div>
                                                        <div class="card-body">
                                                            <div class="row g-2 d-none d-md-flex">
                                                                <div class="col-md-4">
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ไม่ได้</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ปานกลาง</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ดี</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ดีมาก</label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ภาษาไทย</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_thai" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_thai">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_thai">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_thai">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ภาษาอังกฤษ</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_eng" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_eng">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_eng">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_eng">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ภาษาจีน</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_cn" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_cn">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_cn">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_cn">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">อื่นๆ (หากมีโปรดระบุ)</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_other" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_other">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_other">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="speak_other">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ระบุภาษาอื่นๆ : </label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" id="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-header bg-light"><label for="" class="fw-normal">ความสามารถทางภาษา/Language Ability - การอ่าน/Reading <span class="text-danger">*</span></label></div>
                                                        <div class="card-body">
                                                            <div class="row g-2 d-none d-md-flex">
                                                                <div class="col-md-4">
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ไม่ได้</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ปานกลาง</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ดี</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ดีมาก</label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ภาษาไทย</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_thai" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_thai">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_thai">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_thai">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">    
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ภาษาอังกฤษ</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_eng" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_eng">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_eng">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_eng">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">    
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ภาษาจีน</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_cn" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_cn">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_cn">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_cn">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">    
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">อื่นๆ (หากมีโปรดระบุ)</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_other" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_other">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_other">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="reading_other">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">    
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ระบุภาษาอื่นๆ : </label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" id="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-header bg-light"><label for="" class="fw-normal">ความสามารถทางภาษา/Language Ability - การเขียน/Writing <span class="text-danger">*</span></label></div>
                                                        <div class="card-body">
                                                            <div class="row g-2 d-none d-md-flex">
                                                                <div class="col-md-4">
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ไม่ได้</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ปานกลาง</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ดี</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <label for="" class="form-label fw-normal">ดีมาก</label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3"> 
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ภาษาไทย</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_thai" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_thai">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_thai">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_thai">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">    
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ภาษาอังกฤษ</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_eng" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_eng">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_eng">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_eng">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">    
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ภาษาจีน</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_cn" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_cn">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_cn">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_cn">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">    
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">อื่นๆ (หากมีโปรดระบุ)</label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_other" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_other">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ปานกลาง
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_other">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-lg-center">
                                                                    <input type="radio" class="form-check-input" id="" name="writing_other">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ดีมาก
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">    
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ระบุภาษาอื่นๆ : </label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" id="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label fw-normal">คอมพิวเตอร์โปรแกรม/Computer program <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label fw-normal">ประวัติการฝึกอบรม (Training cours) </label><br>
                                                    <div class="btn btn-outline-green rounded-pill px-5" data-bs-toggle="modal" data-bs-target="#addTraining"><i class='fas fa-plus'></i>&nbsp;เพิ่มรายการ</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="table table-bordered table-striped text-center">
                                                        <thead>
                                                            <tr>
                                                                <th>ลำดับ</th>
                                                                <th>ปีที่ฝึกอบรม</th>
                                                                <th>หัวข้อฝึกอบรม</th>
                                                                <th>ใบประกาศ</th>
                                                                <th>จัดการ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>มี</td>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm"><i class='fas fa-edit'></i></button>
                                                                    <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>ไม่มี</td>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm"><i class='fas fa-edit'></i></button>
                                                                    <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm"><i class='fas fa-edit'></i></button>
                                                                    <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm"><i class='fas fa-edit'></i></button>
                                                                    <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label fw-normal">กีฬาที่ชอบ</label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label fw-normal">งานอดิเรก</label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label fw-normal">ความสามารถอื่นๆ (โปรดระบุ)/ Special skill</label>
                                                    <input type="text" class="form-control" id="">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-center py-4">
                                        <a {{session::get('lang')}}/applyForm_step3 type="button" class="btn btn-outline-secondary rounded-pill px-4 mb-2 mb-lg-0">ย้อนกลับ / Previous</a>
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

    <!-- Modal -->
    <form>
        <div class="modal fade" id="addTraining" tabindex="-1" aria-labelledby="addTrainingLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-medium" id="addTrainingLabel"><i class='fas fa-plus'></i>&nbsp;เพิ่มรายการประวัติฝึกอบรม</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label fw-normal">ปีที่ฝึกอบรม</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label fw-normal">หัวข้อฝึกอบรม</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label fw-normal">ใบประกาศ</label><br>
                            <input type="radio" class="form-check-input" id="radio1" name="cer_training" value="option1" checked>&nbsp;ไม่มี &nbsp;
                            <input type="radio" class="form-check-input" id="radio2" name="cer_training" value="option2">&nbsp;มี &nbsp;
                        </div>
                        <br><br><br>
                        
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-green rounded-pill" type="submit">ยืนยันเพิ่ม / Add</button>
                        <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">ยกเลิก / Cancle</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('fontend.inc_footer')

</body>

</html>