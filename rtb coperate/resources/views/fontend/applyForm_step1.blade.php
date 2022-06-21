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
                    <form action="applyForm_step2">
                    <div class="card p-3 border-0 rounded-0">
                        <h6 class="text-green">ร่วมงานกับเรา</h6>
                        <h3 class="text-darkGray">แบบฟอร์มสมัครงาน RTB Technology จำกัด</h3>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12"> 
                                <div class="position-relative">
                                <ul id="progressbar">
                                    <li class="active">ประวัติส่วนตัว(1/2)</li>
                                    <li>ประวัติส่วนตัว(2/2)</li>
                                    <li>ประวัติการศึกษา</li>
                                    <li>ความสามารถ</li>
                                    <li>ประวัติการทำงาน</li>
                                    <li>ข้อมูลเพิ่มเติม</li>
                                </ul>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center py-3"> 
                                <p>โปรดกรอกข้อมูลส่วนบุคคลในแบบฟอร์มนี้ เพื่อใช้ประกอบการพิจารณาการรับเข้าทำงาน อนึ่งในกรณีที่ท่านไม่ผ่านการพิจารณาการเข้าทำงานข้อมูลในใบสมัครจะถูกเก็บรักษาไว้อีกเป็นระยะเวลา 1 ปี เพื่อพิจารณาความเหมาะสมกับตำแหน่งงานอื่น ในกรณีที่ท่านผ่านการพิจารณารับเข้าทำงาน ข้อมูลในใบสมัครจะถูกเก็บรักษาไว้ตลอดระยะเวลาการเป็นพนักงาน/ลูกจ้าง และเก็บต่อเนื่องอีกเป็นระยะเวลา 10 ปี เพื่อกรณีต้องใช้เป็นหลักฐานประกอบการใช้สิทธิเรียกร้องตามพระราชบัญญัติคุ้มครองแรงงาน พ.ศ.2541</p>
                            </div>
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-5 col-form-label fw-normal">ตำแหน่งที่สมัครงาน / Application for Employment <span class="text-danger">*</span></label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-5 col-form-label fw-normal">เงินเดือนที่ต้องการ / Expected salary <span class="text-danger">*</span></label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-5 col-form-label fw-normal">วันที่สามารถเริ่มทำงานได้ / Date avialable start work <span class="text-danger">*</span></label>
                                <div class="col-sm-5">
                                  <input type="date" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                  <div class="card-header">
                                    1. ประวัติส่วนตัว (1/2)
                                  </div>
                                  <div class="card-body">
                                      <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <label for="" class="form-label fw-normal">อัพโหลดรูปถ่าย</label>
                                            <input type="file" class="form-control" id="">
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <label for="" class="form-label fw-normal">อัพโหลดResume</label>
                                            <input type="file" class="form-control" id="">
                                        </div>
                                      </div>
                                      <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <label for="" class="form-label fw-normal">อัพโหลดTranscript</label>
                                            <input type="file" class="form-control" id="">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="" class="form-label fw-normal">อัพโหลดใบขับขี่</label>
                                            <input type="file" class="form-control" id="">
                                        </div>
                                      </div>
                                      <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="" class="form-label fw-normal">ชื่อ / Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label fw-normal">นามสกุล / Surname <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label fw-normal">เพศ / Sex <span class="text-danger">*</span></label>
                                            <select id="" class="form-select">
                                              <option selected>-เลือก-</option>
                                              <option>ชาย</option>
                                              <option>หญิง</option>    
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label fw-normal">วัน-เดือน-ปีเกิด / Date of birth <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="">
                                        </div>  
                                        <div class="col-md-4">
                                            <label for="" class="form-label fw-normal">อายุ / Age <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label fw-normal">เกิดที่จังหวัด / Place of birth <span class="text-danger">*</span></label>
                                            <select id="" class="form-select">
                                              <option selected>-เลือก-</option>
                                              <option></option>
                                              <option></option>    
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label fw-normal">เชื้อชาติ / Race <span class="text-danger">*</span></label>
                                            <select id="" class="form-select">
                                              <option selected>-เลือก-</option>
                                              <option></option>
                                              <option></option>    
                                            </select>
                                        </div>  
                                        <div class="col-md-4">
                                            <label for="" class="form-label fw-normal">สัญชาติ / Nationality <span class="text-danger">*</span></label>
                                            <select id="" class="form-select">
                                              <option selected>-เลือก-</option>
                                              <option></option>
                                              <option></option>    
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label fw-normal">ศาสนา / Religion <span class="text-danger">*</span></label>
                                            <select id="" class="form-select">
                                              <option selected>-เลือก-</option>
                                              <option>พุทธ</option>
                                              <option>คริสต์</option>
                                              <option>อิสลาม</option>   
                                              <option>อื่นๆ</option>       
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label fw-normal">ส่วนสูง / Height <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="">
                                        </div>  
                                        <div class="col-md-4">
                                            <label for="" class="form-label fw-normal">น้ำหนัก / Weight <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="">
                                        </div>
                                        <div class="col-md-8">
                                            <label for="" class="form-label fw-normal">ตำหนิ / Scar</label>
                                            <input type="text" class="form-control" id="">
                                        </div> 
                                        <div class="col-md-4">
                                            <label for="" class="form-label fw-normal">กรุ๊ปเลือด / Blood Group <span class="text-danger">*</span></label>
                                            <select id="" class="form-select">
                                              <option selected>-เลือก-</option>
                                              <option>A</option>
                                              <option>B</option> 
                                              <option>O</option>
                                              <option>AB</option>     
                                            </select>
                                        </div> 
                                        <div class="col-md-12">
                                            <label for="" class="form-label fw-normal">ที่อยู่ตามทะเบียนบ้าน / House registration address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="" class="form-label fw-normal">ที่อยู่ปัจจุบัน / Present address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="">
                                        </div>   
                                        <div class="col-md-6">
                                            <label for="" class="form-label fw-normal">เบอร์มือถือ / Mobile phone <span class="text-gray">(ใส่เป็น 0xx-xxx-xxxx)</span> <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="">
                                        </div>  
                                        <div class="col-md-6">
                                            <label for="" class="form-label fw-normal">โทรศัพท์บ้าน / Home phone <span class="text-gray">(ใส่เป็น 0x-xxx-xxxx)</span></label>
                                            <input type="text" class="form-control" id="">
                                        </div> 
                                        <div class="col-md-12">
                                            <label for="" class="form-label fw-normal">เลขที่บัตรประชาชน / Identification card no. <span class="text-danger">*</span></label>
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
    @include('fontend.inc_footer')

</body>
</html>    