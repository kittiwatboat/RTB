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
                    <form action="{{session::get('lang')}}/applyForm_step3">
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
                                                    <label for="" class="form-label fw-normal">จำนวนพี่น้อง(ไม่รวมตัวเอง) / number of siblings (excluding yourself) <span class="text-danger">*</span><br><span class="text-gray fw-light small">(โปรดระบุ ชาย/หญิง, ท่านเป็นบุตรคนที่)</span></label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="form-label fw-normal">สถานะภาพ / Status <span class="text-danger">*</span></label>
                                                    <select id="" class="form-select">
                                                        <option selected>-เลือก-</option>
                                                        <option>โสด</option>
                                                        <option>สมรส</option>
                                                        <option>หย่าร้าง</option>
                                                        <option>แยกกันอยู่</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="form-label fw-normal">กรณีแต่งงาน / Married <span class="text-gray fw-light small">(เลือกได้หลายรายการ)</span></label>
                                                    <div id="marriedSelect"></div>
<!--
                                                    <select multiple name="married-select" placeholder="-เลือก-" data-search="false" data-silent-initial-value-set="true" id="marriedSelect">
                                                      <option value="">จดทะเบียน</option>
                                                      <option value="">ไม่จดทะเบียน</option>
                                                      <option value="">คู่สมรสมีเงินได้</option>    
                                                      <option value="">คู่สมรสไม่มีเงินได้</option>   
                                                    </select>
-->
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
                                                    <label for="" class="form-label fw-normal">สถานะภาพทางทหาร <span class="text-gray fw-light small">(เลือกได้หลายรายการ)</span></label>
                                                    <div id="soldierSelect"></div>
<!--
                                                    <select multiple name="soldier-select" placeholder="-เลือก-" data-search="false" data-silent-initial-value-set="true" id="soldierSelect">
                                                      <option value="">ได้รับการยกเว้น</option>
                                                      <option value="">ศึกษาวิชาทหาร</option>
                                                      <option value="">ผ่านการเกณฑ์ทหาร</option>    
                                                      <option value="">อื่นๆ</option>   
                                                    </select>
-->
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-header">ประเภทรถส่วนตัว ที่มี</div>
                                                        <div class="card-body">
                                                            <div class="row g-2 d-none d-md-flex">
                                                                <div class="col-md-4">
                                                                </div>
                                                                <div class="col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">มี</label>
                                                                </div>
                                                                <div class="col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">ไม่มี</label>
                                                                </div>
                                                            </div>    
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal mb-0">รถยนต์</label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="vehicle_car" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        มี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="vehicle_car">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่มี
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal mb-0">รถจักรยานยนต์</label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="vehicle_motercycle" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        มี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="vehicle_motercycle">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่มี
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal mb-0">รถกระบะ</label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="vehicle_pickup" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        มี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="vehicle_pickup">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่มี
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal mb-0">อื่นๆ <span class="text-gray fw-light">(หากมีโปรดระบุ)</span></label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="vehicle_other" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        มี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="vehicle_other">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่มี
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ประเภทรถส่วนตัวอื่นๆ : </label>
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
                                                        <div class="card-header">ความสามารถในการขับขี่ / Driving Ability</div>
                                                        <div class="card-body">
                                                            <div class="row g-3">
                                                                <div class="col-md-4">
                                                                </div>
                                                                <div class="col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">ขับได้</label>
                                                                </div>
                                                                <div class="col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">ขับไม่ได้</label>
                                                                </div>
                                                                <div class="col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">มีใบอนุญาติขับขี่</label>
                                                                </div>
                                                                <div class="col-md-2 text-center">
                                                                    <label for="" class="form-label fw-normal">ไม่มีใบอนุญาติขับขี่</label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal mb-0">รถยนต์</label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_car_skill">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ขับได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_car_skill" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ขับไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_car_cer">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        มีใบอนุญาติขับขี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_car_cer" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่มีใบอนุญาติขับขี
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal mb-0">รถจักรยานยนต์</label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_motorcycle_skill">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ขับได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_motorcycle_skill" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ขับไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_motorcycle_cer">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        มีใบอนุญาติขับขี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_motorcycle_cer" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่มีใบอนุญาติขับขี
                                                                    </label>
                                                                </div>
                                                            </div>
                                                             <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal mb-0">กระบะ</label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_pickup_skill">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ขับได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_pickup_skill" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ขับไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_pickkup_cer">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        มีใบอนุญาติขับขี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_pickup_cer" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่มีใบอนุญาติขับขี
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal mb-0">อื่นๆ <span class="text-gray fw-light">(หากมีโปรดระบุ)</span></label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_other_skill">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ขับได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_other_skill" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ขับไม่ได้
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_other_cer">
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        มีใบอนุญาติขับขี
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 text-start text-md-center">
                                                                    <input type="radio" class="form-check-input" id="" name="driving_other_cer" checked>
                                                                    <label class="form-check-label d-inline-block d-md-none" for="">
                                                                        ไม่มีใบอนุญาติขับขี
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2">
                                                                <div class="col-md-4">
                                                                    <label for="" class="form-label fw-normal">ความสามารถในการขับขี่อื่นๆ : </label>
                                                                </div>
                                                                <div class="col-md-8">
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
                                        <a {{session::get('lang')}}/applyForm_step1 type="button" class="btn btn-outline-secondary rounded-pill px-4 mb-2 mb-lg-0">ย้อนกลับ / Previous</a>
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
    @include('fontend.inc_footer')

</body>
<script>
    VirtualSelect.init({
      ele: '#marriedSelect',
      placeholder: '-เลือก-',    
      search: true,
      multiple: true,
      options: [
        { label: 'จดทะเบียน', value: '1' },
        { label: 'ไม่จดทะเบียน', value: '2' },
        { label: 'คู่สมรสมีเงินได้', value: '3' },
        { label: 'คู่สมรสไม่มีเงินได้', value: '4' },  
      ]    
    });   
    </script>
    <script>
    VirtualSelect.init({
      ele: '#soldierSelect',
      placeholder: '-เลือก-',    
      search: true,
      multiple: true,
      options: [
        { label: 'ได้รับการยกเว้น', value: '1' },
        { label: 'ศึกษาวิชาทหาร', value: '2' },
        { label: 'ผ่านการเกณฑ์ทหาร', value: '3' },
        { label: 'อื่นๆ', value: '4' }, 
      ]    
    });   
    </script>      
</html>