<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.4.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">

<head>
        @include('backend.head')
    </head>
    <body id="page-top">
    
        <div id="wrapper">
            @include('backend.menu')
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('backend.topbar')
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card col-10 mx-auto">
                                <div class="card-header">จัดการ <strong>Color album </strong> </div>
                                <form action="/backoffice/product/color/album/addsub" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="card-body">
                                    <input type="hidden" value="{{ $color->c_id }}" name="c_id" >
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="imgInp">
                                            Image <div style="font-size: 12px;"></div></label>
                                        <div class="col-md-9">
                                            <input  type="file" id="imgInp" name="al_img"
                                                multiple=""><br>
                                                <img id="blah" src="#" width="30%" alt="your image" />
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">เพิ่ม</button>
                                    <a href="/backoffice/product/color/{{ $color->pro_id }}" class="btn btn-danger">กลับ</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card col-10 mx-auto">
                                    <div class="card-header"><strong>Color album </strong> </div>
                                    <div class="card-body row">
                                        @foreach ($album as $item)
                                        @if ($item->c_id == $color->c_id)
                                        <div class="card col-sm-4">
                                            <div class="card-body ">
                                             <img src="{{ $item->al_img }}" alt=""><br>
                                             <button type="button" class="btn btn-danger" onclick="batbal('{{$item->ac_id}}')">ลบ</button>
                                            </div>
                                        </div> 
                                        @endif
                                        
                                       
                                        @endforeach

                                       
                                    </div>
                                    {{-- <div class="card-footer">
                                        <a href="/backoffice/product" class="btn btn-danger">กลับ</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
        @include('backend.footer')
    </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="https://coreui.io/demo/free/3.4.0/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="https://coreui.io/demo/free/3.4.0/vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->

    <script src="https://coreui.io/demo/free/3.4.0/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script src="javascript/sweetalert2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script> 
    function batbal(ac_id){
        
        Swal.fire({
        title:"ลบข้อมูล",text:"คุณต้องการลบข้อมูลใช่หรือไม่?",icon:"warning",showCancelButton:true,confirmButtonColor:"#DD6B55",showLoaderOnConfirm: true,
        preConfirm: () => {
            return fetch('/backoffice/product/color/album/delete/'+ac_id)
            .then(response => response.json())
            .then(data => location.reload())
            .catch(error => { Swal.showValidationMessage(`Request failed: ${error}`)})
        }
    });
    }
    </script>
</body>
@if (session('arti'))
<script>
    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif
<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
</script>
</html>
