<div id="desktopMenu" class="fixed-top bg-white">
  <div class="container-fluid container-f60">
    <div class="row">
      <div class="col-sm-12 text-center py-3">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid container-f60">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto" id="linkMenuTop">
          <li class="nav-item">
            <a class="nav-link" href="/">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">เกี่ยวกับเรา</a>
          </li>
          <li class="nav-item dropdown dropdown-mega position-static">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">@lang('lang.product')</a>
            <div class="dropdown-menu container shadow">
              <div class="mega-content px-lg-4 px-0">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 py-4">
                      <div class="tab">
                        @foreach ($cata as $key => $ca)
                        <?php  $key=$key+1;  ?>
                        <a class="dropdown-item tablinks @if($loop->first) active @else @endif" onmouseover="openDropdownMenu(event, 'menu{{$ca->cat_id}}')" href="{{ session::get('lang') }}/ecommerce/product/{{$ca->cat_id}}">{{$ca['name'.session::get('lang')]}}</a>

                        @endforeach
                        {{-- <a class="dropdown-item tablinks active" onmouseover="openDropdownMenu(event, 'menu1')" href="{{ session::get('lang') }}/product/{{$cata->cat_id}}">Jabra</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu2')" href="#">Jabra Wireless Music</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu3')" href="#">B & O</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu4')" href="#">Master & Dynamic</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu5')" href="#">Beats by Dr.Dre</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu6')" href="#">Energea</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu7')" href="#">Jlab Audio</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu8')" href="#">SteelSeries</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu9')" href="#">Logitect</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu10')" href="#">Audio Codes</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu11')" href="#">Sony</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu12')" href="#">DOD</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu13')" href="#">Uniq</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu14')" href="#">Vimtag</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu15')" href="#">ResMed</a>
                        <a class="dropdown-item tablinks" onmouseover="openDropdownMenu(event, 'menu16')" href="#">Motorola</a> --}}
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 py-4 py-4" id="menuMega">

                      @foreach ($cata as $key => $caa)

                      <div id="menu{{ $caa->cat_id }}" class="tabcontent" style="display: block;">

                        @foreach ($sub as $item)
                          @if ($item->cat_id == $caa->cat_id )
                          <h6>{{ $item['subname'.session::get('lang')] }}</h6>
                          <ul class="dash">
                            @foreach ($protype as $pt)

                              @if ($item->scat_id == $pt->scat_id)

                              <li><a href="#">{{ $pt['typename'.session::get('lang')] }}</a></li>

                              @else

                              @endif

                            @endforeach

                          </ul>
                          @else

                          @endif
                        @endforeach
                        {{-- <h6 class="mt-4">Jabra Call Center & Office Headsets</a></h6>
                        <ul class="dash">
                          <li><a href="#">Cards and USB Adapters</a></li>
                          <li><a href="#">Amplifiers</a></li>
                          <li><a href="#">Wireless Headsets and Bluetooth Headsets Optional</a></li>
                          <li><a href="#">Call Center Headsets</a></li>
                          <li><a href="#">Unified Communications Headsets</a></li>
                          <li><a href="#">Wireless Headsets</a></li>
                          <li><a href="#">Conference Speakers</a></li>
                        </ul> --}}
                      </div>

                      @endforeach

                      <div id="menu2" class="tabcontent"></div>
                      <div id="menu3" class="tabcontent"></div>
                      <div id="menu4" class="tabcontent"></div>
                      <div id="menu5" class="tabcontent"></div>
                      <div id="menu6" class="tabcontent"></div>
                      <div id="menu7" class="tabcontent"></div>
                      <div id="menu8" class="tabcontent"></div>
                      <div id="menu9" class="tabcontent"></div>
                      <div id="menu10" class="tabcontent"></div>
                      <div id="menu11" class="tabcontent"></div>
                      <div id="menu12" class="tabcontent"></div>
                      <div id="menu13" class="tabcontent"></div>
                      <div id="menu14" class="tabcontent"></div>
                      <div id="menu15" class="tabcontent"></div>
                      <div id="menu16" class="tabcontent"></div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 py-4">
                      <img src="images/img-megemenu.png" class="w-100">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productsAllinBrand.php">สินค้าองค์กร</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">ข่าวสารและบทความ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="workWithUs.php">ร่วมงานกับเรา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">ติดต่อเรา</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            @if (Auth::check())
            <a class="nav-link" href="{{ session::get('lang') }}/profile" ><i class="far fa-user"></i>{{ Auth::user()->email }}</a>
            @else
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login"><i class="far fa-user"></i></a>
            @endif
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ session::get('lang') }}/cart"><i class="fas fa-shopping-cart"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
          </li>
          <!-- <li><span class="text-darkGray fw-medium">|</span></li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @lang('lang.th')
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('en').session()->get('prefix')}}">EN</a></li>
                <li><a class="dropdown-item" href="{{url('th').session()->get('prefix')}}">TH</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <div class="nav-link">
              <a class="btn rounded-pill btn-green" href="#">SHOPPING NOW<i class="fas fa-shopping-cart"></i></a>
            </div>
          </li>
          <li class="nav-item">
            <div class="nav-link">
              <a class="btn rounded-pill btn-red" href="warrantyStep1.php">ลงทะเบียนรับประกันสินค้า</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<!-- Modal -->
<form action="/loginf" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-head" id="loginLabel">
          <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-lg-5 px-3 mb-lg-5 mb-3">
          <div class="row">
            <div class="col-sm-12 text-center py-3">
              <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="col-sm-12 text-center py-1 py-lg-3">
              <h5>เข้าสู่ระบบ</h5>
            </div>
            <div class="col-sm-12 py-2">
              <label for="" class="form-label fw-normal">อีเมล์</label>
              <input type="text" class="form-control" name="email" id="">
            </div>
            <div class="col-sm-12 py-2">
              <label for="" class="form-label fw-normal">รหัสผ่าน</label>
              <div class="input-group">
                <input type="text" class="form-control border-end-0" name="password" id="">
                <span class="border border-start-0 rounded-end py-2 px-1"> <i class="fas fa-eye text-gray"></i></span>
              </div>
            </div>
            <div class="col-sm-12">
              <input type="checkbox" class="form-check-input" id="check1" name="option1">
              <label>จำข้อมูลการเข้าสู่ระบบของฉัน</label>
              <a class="float-sm-end text-green" href="#" data-bs-toggle="modal" data-bs-target="#forgot">ลืมรหัสผ่าน</a>
            </div>
            <button  class="btn btn-green rounded-pill mt-lg-5 mt-3" type="submit" >เข้าสู่ระบบ</button>
            <div class="text-center mt-2">หากยังไม่มีบัญชี? <a class="text-green" href="#" data-bs-toggle="modal" data-bs-target="#register">สมัครสมาชิก</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<form action="/register" method="post" enctype="multipart/form-data">
    @csrf
  <div class="modal fade" id="register" tabindex="-1" aria-labelledby="regisLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-head" id="regisLabel">
          <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-lg-5 px-3 py-0 pb-4">
          <div class="row">
            <div class="col-sm-12 text-center py-0">
              <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="col-sm-12 text-center pt-1">
              <h5>สมัครสมาชิก</h5>
            </div>

            <div class="col-sm-6">
              <label for="" class="form-label fw-normal">ชื่อ<span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="firstname" id="">
            </div>
            <div class="col-sm-6">
              <label for="" class="form-label fw-normal">นามสกุล<span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="lastname" id="">
            </div>
            <div class="col-sm-12 py-1">
              <label for="" class="form-label fw-normal">อีเมล์<span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="email" id="">
            </div>
            <div class="col-sm-12 py-1">
              <label for="" class="form-label fw-normal">ยืนยันอีเมล์<span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="confirm_email" id="">
            </div>
            <div class="col-sm-12 py-1">
              <label for="" class="form-label fw-normal">รหัสผ่าน<span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control border-end-0" name="password" id="">
                <span class="border border-start-0 rounded-end py-2 px-1"> <i class="fas fa-eye text-gray"></i></span>
              </div>
              <p class="fs-12 text-gray mb-0">กรอกรหัสผ่านอย่างน้อย 6 ตัวอักษร, ควรประกอบด้วยตัวเลขและตัวอักษรพิมพ์ใหญ่และเล็ก อย่างละ 1 ตัว</p>
            </div>
            <div class="col-sm-12 py-1">
              <label for="" class="form-label fw-normal">ยืนยันรหัสผ่าน<span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control border-end-0" name="confirm_password" id="">
                <span class="border border-start-0 rounded-end py-2 px-1"> <i class="fas fa-eye text-gray"></i></span>
              </div>
            </div>
            <div class="col-sm-12 py-1">
              <div class="row px-0">
                <label for="" class="form-label fw-normal">เบอร์โทรรับรหัส OTP<span class="text-danger">*</span></label>
                <div class="pe-0 col-7 col-sm-8">
                  <input type="text" class="form-control" name="phone" id="">
                </div>
                <div class="ps-1 col-5 col-sm-4">
                  <a class="btn bg-gray3 text-white w-100">กดส่งรหัส</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 py-1">
              <label for="" class="form-label fw-normal">กรอกรหัส OTP<span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control border-end-0" id="">
                <span class="border border-start-0 rounded-end py-2 px-1"> <i class="fas fa-eye text-gray"></i></span>
              </div>
            </div>

            <div class="col-sm-12">
              <input type="checkbox" class="form-check-input" id="check1" name="option1">
              <label>ยอมรับ<a href="#">ข้อกำหนดและเงื่อนไข</a><span class="text-danger">*</span></label>
            </div>
            <button class="btn btn-green rounded-pill mt-3" type="submit">สมัครสมาชิก</button>

            <div class="text-center mt-2">หากมีบัญชีแล้ว? <a class="text-green" href="#" data-bs-dismiss="modal" aria-label="Close">เข้าสู่ระบบ</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>


<form>
  <div class="modal fade" id="forgot" tabindex="-1" aria-labelledby="forgotLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="forgotLabel">ลืมรหัสผ่าน</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="nav nav-pills nav-fill row mb-4" id="pills-tabForgot" role="tablist">

            <li class="nav-item col-6 col-sm-6 px-2" role="presentation">
              <button class="nav-link active py-lg-5" id="pills-st-tab" data-bs-toggle="pill" data-bs-target="#pills-st" type="button" role="tab" aria-controls="pills-st" aria-selected="true"><i class="fas fa-mobile"></i><br>ส่งเข้าเบอร์มือถือ</button>
            </li>
            <li class="nav-item col-6 col-sm-6 px-2" role="presentation">
              <button class="nav-link py-lg-5 py-3" id="pills-et-tab" data-bs-toggle="pill" data-bs-target="#pills-et" type="button" role="tab" aria-controls="pills-et" aria-selected="false"><i class="fas fa-envelope"></i><br>ส่งเข้าอีเมล์</button>
            </li>
          </ul>
          <div class="tab-content px-lg-5" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-st" role="tabpanel" aria-labelledby="pills-st-tab">
              <div class="col-sm-12 py-1">
                <div class="row px-0">
                  <label for="" class="form-label fw-normal">เบอร์โทรรับรหัส OTP<span class="text-danger">*</span></label>
                  <div class="col-12 col-sm-8">
                    <input type="text" class="form-control mb-3" id="">
                  </div>
                  <div class="col-12 col-sm-4">
                    <a class="btn bg-gray3 text-white w-100">กดส่งรหัส</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 py-1">
                <label for="" class="form-label fw-normal">กรอกรหัส OTP<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="">
              </div>
            </div>
            <div class="tab-pane fade" id="pills-et" role="tabpanel" aria-labelledby="pills-et-tab">
              <div class="col-sm-12 py-1">
                <div class="row px-0">
                  <label for="" class="form-label fw-normal">อีเมล์รับรหัส OTP<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="col-sm-4">
                    <a class="btn bg-gray3 text-white w-100">กดส่งรหัส</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 py-1">
                <label for="" class="form-label fw-normal">กรอกรหัส OTP<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-green rounded-pill px-5" type="submit">ยืนยัน</button>
        </div>
      </div>
    </div>
  </div>
</form>
<script>
  let dropdowns = document.querySelectorAll('.dropdown-toggle')
  dropdowns.forEach((dd) => {
    dd.addEventListener('click', function(e) {
      var el = this.nextElementSibling
      el.style.display = el.style.display === 'block' ? 'none' : 'block'
    })
  })
  document.addEventListener('click', function(e) {
    // Hamburger menu
    if (e.target.classList.contains('hamburger-toggle')) {
      e.target.children[0].classList.toggle('active');
    }
  })
</script>
<script>
  function openDropdownMenu(evt, DropdownMenuName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(DropdownMenuName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>
