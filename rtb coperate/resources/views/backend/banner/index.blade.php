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
                                <div class="card-head"><strong>Banner</strong> </div>
                                <div class="card-body">
                                    <div class="text-right">
                                        <a href="/backoffice/banner/add" type="button" class="btn btn-dark" > เพิ่ม </a><br><br>
                                    </div>
                                    <table class="table table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th>ภาพ</th>
                                                <th>วันที่อัพโหลด</th>
                                                <th>manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ban as $key=> $ba)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td><img src="{{ $ba->img }}" width="200" height="100" alt=""></td>
                                                <td>{{ $ba->created->format('d M Y') }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" onclick="batbal('{{$ba->ban_id}}')">ลบ</button>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                        {{ $ban->links() }}
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
    function batbal(ban_id){

        Swal.fire({
        title:"ลบข้อมูล",text:"คุณต้องการลบข้อมูลใช่หรือไม่?",icon:"warning",showCancelButton:true,confirmButtonColor:"#DD6B55",showLoaderOnConfirm: true,
        preConfirm: () => {
            return fetch('/backoffice/banner/delete/'+ban_id)
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
