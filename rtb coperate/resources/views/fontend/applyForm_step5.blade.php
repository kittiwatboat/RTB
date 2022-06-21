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
                    <form action="{{session::get('lang')}}/applyForm_step6">
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
                                            <li>ข้อมูลเพิ่มเติม</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            5. ประวัติการทำงาน
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <div class="alert alert-warning">
                                                        <i class='fas fa-exclamation-circle'></i>&nbsp;<strong>เริ่มจากงานปัจจุบันของท่านและย้อนหลังไป</strong>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 text-center">
                                                    <button type="button" class="btn btn-outline-green rounded-pill px-5" data-bs-toggle="modal" data-bs-target="#addWork"><i class='fas fa-plus'></i>&nbsp;เพิ่มรายการ</button>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr class="align-middle">
                                                                <th>#</th>
                                                                <th>ชื่อสถานประกอบการและสถานที่ตั้ง</th>
                                                                <th>ประเภทธุรกิจ</th>
                                                                <th>ระยะเวลาเริ่มงาน ถึง ระยะเวลาสิ้นสุด</th>
                                                                <th>ตำแหน่งล่าสุด และหน้าที่รับผิดชอบ</th>
                                                                <th>เงินเดือนล่าสุด</th>
                                                                <th>รายได้อื่นๆ</th>
                                                                <th>สาเหตุที่ออก</th>
                                                                <th>จัดการ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editWork"><i class='fas fa-edit'></i></button>
                                                                    <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editWork"><i class='fas fa-edit'></i></button>
                                                                    <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editWork"><i class='fas fa-edit'></i></button>
                                                                    <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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

    <!-- Modal -->
    <form>
        <div class="modal fade" id="addWork" tabindex="-1" aria-labelledby="addWorkLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addWorkLabel"><i class='fas fa-plus'></i>&nbsp;เพิ่มรายการประวัติการทำงาน</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <label for="" class="form-label fw-normal">ชื่อสถานประกอบการและสถานที่ตั้ง</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="col-md-12">
                            <label for="" class="form-label fw-normal">ประเภทธุรกิจ</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label fw-normal">ระยะเวลาเริ่มงาน</label>
                                <input type="text" class="form-control" id="" placeholder="วว/ดด/ปปปป">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label fw-normal">ระยะเวลาสิ้นสุด</label>
                                <input type="text" class="form-control" id="" placeholder="วว/ดด/ปปปป">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="" class="form-label fw-normal">ตำแหน่งล่าสุด และหน้าที่รับผิดชอบ</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label fw-normal">เงินเดือนล่าสุด</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label fw-normal">รายได้อื่นๆ</label>
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="" class="form-label fw-normal">สาเหตุที่ลาออก</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <br>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-green rounded-pill" type="submit">ยืนยันเพิ่ม / Add</button>
                        <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">ยกเลิก / Cancle</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form>
        <div class="modal fade" id="editWork" tabindex="-1" aria-labelledby="editWorkLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editWorkLabel"><i class='fas fa-edit'></i>&nbsp;แก้ไขรายการประวัติการทำงาน</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <label for="" class="form-label fw-normal">ชื่อสถานประกอบการและสถานที่ตั้ง</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="col-md-12">
                            <label for="" class="form-label fw-normal">ประเภทธุรกิจ</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label fw-normal">ระยะเวลาเริ่มงาน</label>
                                <input type="text" class="form-control" id="" placeholder="วว/ดด/ปปปป">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label fw-normal">ระยะเวลาสิ้นสุด</label>
                                <input type="text" class="form-control" id="" placeholder="วว/ดด/ปปปป">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="" class="form-label fw-normal">ตำแหน่งล่าสุด และหน้าที่รับผิดชอบ</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label fw-normal">เงินเดือนล่าสุด</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label fw-normal">รายได้อื่นๆ</label>
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="" class="form-label fw-normal">สาเหตุที่ลาออก</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <br>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-green rounded-pill" type="submit">ยืนยันแก้ไข / Edit</button>
                        <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">ยกเลิก / Cancle</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('fontend.inc_footer')

</body>

</html>