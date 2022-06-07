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
                                <div class="card-header">จัดการ <strong>Icon </strong> </div>
                                <div class="card-body">
                                    <div class="text-right">
                                        <a href="/backoffice/iconban/add" type="button" class="btn btn-dark" > เพิ่ม </a><br><br>
                                    </div>
                                    <table class="table table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($icon as $ba)
                                            <tr>
                                                <td><img src="{{ $ba->icon }}" width="200" alt=""></td>
                                                <td>
                                                    <a href="/backoffice/banner/edit/{{ $ba->icb_id }}" class="btn btn-warning">แก้ไข</a>
                                                    <button type="button" class="btn btn-danger" onclick="batbal('{{$ba->icb_id}}')">ลบ</button>

                                                </td>
                                            </tr> 
                                            @endforeach
      
                                        </tbody>
                                        {{ $icon->links() }}
                                    </table>
                           
                                </div>
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
    function batbal(icb_id){
        
        Swal.fire({
        title:"ลบข้อมูล",text:"คุณต้องการลบข้อมูลใช่หรือไม่?",icon:"warning",showCancelButton:true,confirmButtonColor:"#DD6B55",showLoaderOnConfirm: true,
        preConfirm: () => {
            return fetch('/backoffice/iconban/delete/'+icb_id)
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

</html>
