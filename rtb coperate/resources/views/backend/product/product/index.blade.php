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
                                <div class="card-header">จัดการ <strong>Product </strong> </div>
                                <div class="card-body">
                                    <div class="text-right">
                                    <form action="/uploadproduct" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <label for="">upload file</label>
                                        <input type="file" name="file" id="">
                                        <button type="submit" class="btn btn-success">Upload</button>
                                    </form>
                                        <a href="/backoffice/product/add" type="button" class="btn btn-dark" > เพิ่ม </a><br><br>
                                    </div>
                                    <table class="table table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Name</th>
                                                <th>ราคา</th>
                                                <th>image</th>
                                                <th>manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pro as $item)
                                                <tr>
                                                    <td>{{ $item->typenameth }}</td>
                                                    <td>{{ $item->pro_nameth }}</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td><img src="{{ $item->img }}" width="150" alt=""></td>
                                                    <td>
                                                        <a href="/backoffice/product/color/{{ $item->pro_id }}" class="btn btn-primary">สี</a>
                                                        <a href="/backoffice/product/edit/{{ $item->pro_id }}" class="btn btn-warning">แก้ไข</a>
                                                        <button type="button" class="btn btn-danger" onclick="batbal('{{$item->pro_id}}')">ลบ</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        {{ $pro->links() }}
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
    function batbal(pro_id){

        Swal.fire({
        title:"ลบข้อมูล",text:"คุณต้องการลบข้อมูลใช่หรือไม่?",icon:"warning",showCancelButton:true,confirmButtonColor:"#DD6B55",showLoaderOnConfirm: true,
        preConfirm: () => {
            return fetch('/backoffice/subcatagory/delete/'+pro_id)
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
