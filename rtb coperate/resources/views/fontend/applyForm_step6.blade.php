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
                    <form action="applyForm_step6.php">
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
                                            <li class="active">ประวัติการทำงาน</li>
                                            <li class="active">ข้อมูลเพิ่มเติม</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            6. ข้อมูลเพิ่มเติม
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <label for="" class="fw-normal">บุคคลที่ไม่ใช่ญาติ ซึ่งทราบประวัติของท่าน สามารถตรวจสอบได้ (อย่างน้อย 2 ท่าน) กรุณาระบุ ชื่อ-นามสกุล/ที่อยู่และเบอร์ติดต่อ/อาชีพ/ความสัมพันธ์</label>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label fw-normal">1.ลำดับที่1</label>
                                                    <textarea type="text" class="form-control" rows="3" id=""></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label fw-normal">2.ลำดับที่2</label>
                                                    <textarea type="text" class="form-control" rows="3" id=""></textarea>
                                                </div>
                                                <hr>
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-light"><label for="" class="fw-normal">ท่านมีเพื่อนสนิทหรือญาติทำงานอยู่ที่นี่หรือไม่ (หากมีโปรดระบุ)</label></div>
                                                        <div class="card-body">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                                                <label class="form-check-label fw-normal" for="check1">มี</label><br>
                                                                <div class="row">
                                                                    <div class="col-sm-1">
                                                                        <label class="form-label fw-normal" for="">ระบุ : </label>
                                                                    </div>
                                                                    <div class="col-sm-11"><input type="text" class="form-control" id="">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                <label class="form-check-label fw-normal" for="check1">ไม่มี</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-light"><label for="" class="fw-normal">หากท่านต้องเดินทางไปปฏิบัติงานต่างจังหวัดหรือต่างประเทศท่านขัดข้องหรือไม่ <span class="text-danger">*</span></label></div>
                                                        <div class="card-body">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                                                <label class="form-check-label fw-normal" for="check1">ไม่ขัดข้อง</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                <label class="form-check-label fw-normal" for="check1">ขัดข้อง</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-light"><label for="" class="fw-normal">ท่านเคยได้รับโทษทางกฏหมายหรือไม่ (หากเคยโปรดระบุอย่างละเอียด) <span class="text-danger">*</span></label></div>
                                                        <div class="card-body">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                                                <label class="form-check-label fw-normal" for="check1">ไม่เคย</label><br>

                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                <label class="form-check-label fw-normal" for="check1">เคย</label>
                                                                <div class="row">
                                                                    <div class="col-sm-1">
                                                                        <label class="form-label fw-normal" for="">ระบุคดี : </label>
                                                                    </div>
                                                                    <div class="col-sm-11"><input type="text" class="form-control" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-light"><label for="" class="fw-normal">ท่านเคยป่วยหนักในระยะเวลาที่ผ่านมา หรือมีโรคประจำตัว หรือโรคติดต่อหรือไม่ (หากเคยโปรดระบุอย่างละเอียด) <span class="text-danger">*</span></label></div>
                                                        <div class="card-body">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                                                <label class="form-check-label fw-normal" for="check1">ไม่เคย</label><br>

                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                <label class="form-check-label fw-normal" for="check1">เคย</label>
                                                                <div class="row">
                                                                    <div class="col-sm-1">
                                                                        <label class="form-label fw-normal" for="">ระบุโรค : </label>
                                                                    </div>
                                                                    <div class="col-sm-11"><input type="text" class="form-control" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-light"><label for="" class="fw-normal">ท่านเคยประสบอุบัติเหตุอื่นใดก่อนหรือได้รับการผ่าตัดในระยะเวลา 5 ปี หรือไม่ (หากเคยโปรดระบุอย่างละเอียด) <span class="text-danger">*</span></label></div>
                                                        <div class="card-body">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                                                <label class="form-check-label fw-normal" for="check1">ไม่เคย</label><br>

                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                <label class="form-check-label fw-normal" for="check1">เคย</label>
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="form-label fw-normal" for="">ระบุอุบัติเหตุหรือผ่าตัด: </label>
                                                                    </div>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-light"><label for="" class="fw-normal">หากต้องมีการค้ำประกันการทำงานด้วยบุคคล/เงิน ท่านขัดข้องหรือไม่<span class="text-danger">*</span></label></div>
                                                        <div class="card-body">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                                                <label class="form-check-label fw-normal" for="check1">ไม่ขัดข้อง</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                <label class="form-check-label fw-normal" for="check1">ขัดข้อง</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-light"><label for="" class="fw-normal">ท่านมีแผนสำหรับศึกษาต่อหรือไม่ <span class="text-danger">*</span></label></div>
                                                        <div class="card-body">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                                                <label class="form-check-label fw-normal" for="check1">ไม่มี</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                                                <label class="form-check-label fw-normal" for="check1">มี</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label fw-normal">กรณีมีเหตุฉุกเฉินบุคคลที่สามารถติดต่อได้/กรุณาระบุชื่อ-นามสกุล/ความสัมพันธ์/เบอร์ติดต่อ <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label fw-normal">ท่านทราบข่าวสมัครงานจากที่ใด</label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 px-3 my-3">
                                        <label for="" class="fw-normal">ข้าพเจ้าขอรับรองข้อความที่ได้กรอกข้อมูลเป็นความจริงทุกประการ หากปรากฏว่าเป็นเท็จข้าพเจ้ายินยอมให้บริษัทพิจารณาเลิกจ้างได้ทันที และหากบริษัทได้รับความเสียหายด้วยประการใดๆ ในกรณีที่ข้าพเจ้าและผู้ค้ำประกันยินยอมชดใช้ความเสียหายนั้นๆโดยครบถ้วน
                                            โดยไม่มีข้ออ้างใดๆ เพื่อมาขัดแย้งกับทางบริษัทเป็นอันขาด <span class="text-danger">*</span></label>
                                        <div class="form-check my-3">
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                            <label class="form-check-label fw-normal" for="check1">ยินยอม</label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                            <label class="form-check-label fw-normal" for="check1">ไม่ยินยอม</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 px-3 my-3">
                                        <label for="" class="fw-normal">ยินยอมให้บริษัทตรวจสอบ เก็บรวบรวม ประมวลผล ใช้ และ/หรือเปิดเผยข้อมูลส่วนบุคคลของข้าพเจ้า ตามรายละเอียดที่ระบุไว้ใน <a href="#" class="text-link">นโยบายข้อมูลส่วนบุคคลสำหรับผู้สมัครงานและผู้ปฏิบัติงาน</a> <span class="text-danger">*</span></label>
                                        <div class="form-check my-3">
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>
                                            <label class="form-check-label fw-normal" for="check1">ยินยอม</label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2">
                                            <label class="form-check-label fw-normal" for="check1">ไม่ยินยอม</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 px-3 my-3">
                                                    <label for="" class="form-label fw-normal">วันที่กรอกใบสมัคร (วว/ดด/ปปปป) <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="">
                                                </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-center py-4">
                                        <button type="submit" class="btn btn-green rounded-pill px-4">ยืนยัน / Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('fontend.inc_footer')

</body>

</html>