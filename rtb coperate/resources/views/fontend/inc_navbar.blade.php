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
            <a class="nav-link" href="">@lang('lang.home')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ session::get('lang') }}/about">@lang('lang.about')</a>
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
                        <a class="dropdown-item tablinks @if($loop->first) active @else @endif" onmouseover="openDropdownMenu(event, 'menu{{$ca->cat_id}}')" href="{{ session::get('lang') }}/product/{{$ca->cat_id}}">{{$ca['name'.session::get('lang')]}}</a>

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
            <a class="nav-link" href="{{ session::get('lang') }}/solution">Solutions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ session::get('lang') }}/news">@lang('lang.news')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ session::get('lang') }}/innovation">Innovation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ session::get('lang') }}/contact">@lang('lang.contact')</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link" href="#" id="myBtn"><i class="fas fa-search"></i></a>
          </li>
          <li class="nav-item"><span>|</span></li>
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
              <a class="btn rounded-pill btn-green" href="{{ session::get('lang') }}/ecommerce"><i class="fas fa-home"></i> RTB HOME PAGE</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<!-- Modal content--->
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-body m-3">
      <span class="close"></span>
      <div class="input-group w-100">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
    </div>
  </div>
</div>

<script>
  let dropdowns = document.querySelectorAll('.dropdown-toggle')
  dropdowns.forEach((dd) => {
    dd.addEventListener('click', function(e) {
      var el = this.nextElementSibling
      el.style.display = el.style.display === 'block' ? 'none' : 'block'
    })
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


<script>
  // Get the modal
  var modal = document.getElementById("myModal");
  var btn = document.getElementById("myBtn");
  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function() {
    modal.style.display = "block";
  }

  span.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
