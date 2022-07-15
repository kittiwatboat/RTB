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
        <style>
            .dropzoneDragArea {
                background-color: #fbfdff;
                border: 1px dashed #c0ccda;
                border-radius: 6px;
                padding: 60px;
                text-align: center;
                margin-bottom: 15px;
                cursor: pointer;
            }
            .dropzone{
                box-shadow: 0px 2px 20px 0px #f2f2f2;
                border-radius: 10px;
            }
            .sup-preview img {
                vertical-align: middle;
                border-style: none;
                width: 100%;
                border-radius: 6px;
            }
        </style>
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
                                <div class="card-header"><strong>Product</strong></div>
                                <form class="form-horizontal" action="/backoffice/brand/add/step2/sub" method="POST" enctype="multipart/form-data">
                                     <div class="card-body">
                                        @csrf
                                        <input type="hidden" type="text" name="icb_id" value="{{ $icon->icb_id }}">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                                Name <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <input type="text" name="b_name" class="form-control" value="{{ $icon->b_name }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                                LOGO <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <img src="{{ $icon->icon }}" width="150" name="icon" alt="">
                                                <input type="file" name="icon" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                                Head Image banner <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <img src="{{ $icon->head_img }}" width="150" alt="">
                                                <input type="file" name="head_img" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                               short description <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <textarea name="description" class="form-control" id="" cols="80" rows="2">{!! $icon->description !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                                Image Cover video <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <img src="{{ $icon->img_cover }}" width="150" alt="">
                                                <input type="file" name="img_cover" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                                Link Video <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">

                                                <input type="text" name="link_video" value="{{ $icon->link_video }}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                                <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <a data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Brand article    </a>
                                            </div>
                                        </div>

                                    </div>
                                        <div class="card-footer">
                                            <button class="btn btn-sm btn-primary" type="submit">บันทึก</button>
                                            <a href="/backoffice/product" class="btn btn-sm btn-danger">กลับ</a>

                                        </div>
                                </form>


                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" onclick="history.go(0); return false;" data-dismiss="modal"  aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                     <div class="text-blue text-big text-left mb-sm-4 mb-3">Add new brand</div>
                                        <form action="{{ route('form.data2') }}" name="demoform" id="demoform" method="POST" class="dropzone" enctype="multipart/form-data">
                                          @csrf

                                            <input type="hidden" class="userid" name="userid" id="userid" value="">
                                                      <div class="form-group">
                                                          <label class="text-blue text-sub"> link </label>
                                                          <input class="form-control" type="text"  name="b_name" >
                                                      </div>

                                                      <div class="form-group">
                                                        <div id="dropzoneDragArea" class="dz-default dz-message dropzoneDragArea">
                                                            <span>Upload image</span>
                                                            <div class="dropzone-previews"></div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                        <label class="text-blue text-sub"> start date </label>
                                                        <input class="form-control" type="date"  name="start_date" >
                                                        </div>
                                                        <div class="col-md-6">
                                                        <label class="text-blue text-sub"> end date </label>
                                                        <input class="form-control" type="date"  name="end_date" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class=" text-blue text-sub" >show </label>
                                                        <div class="col-md-9">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input class="form-check-input" type="checkbox" id="ecommerce" name="ecommerce" value="1">
                                                            <label class="form-check-label" for="ecommerce">ecommerce</label>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input class="form-check-input" type="checkbox" id="coporate" name="coporate" value="1">
                                                            <label class="form-check-label" for="coporate">coporate</label>

                                                        </div>
                                                    </div>
                                                      </div>

                                                      <div class="modal-footer">
                                                        <button class="btn btn-md btn-success" type="submit">Confirm add</button>
                                                        <button type="button" onclick="history.go(0); return false;" class="btn btn-light" data-dismiss="modal" >
                                                           Cancle
                                                          </button>
                                                    </div>
                                                </form>
                                    </div>


                                  </div>
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
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/sweetalert2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="tinymce/tinymce.min.js"></script>

    <script>
        if ($('textarea.tiny').length > 0) {
            tinymce.init({
                selector: 'textarea.tiny',
                menubar: false,
                force_br_newlines: true,
                force_p_newlines: false,
                forced_root_block: '',
                height: 300,
                //width : 1100,
                plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker","searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking","save table contextmenu directionality emoticons template paste textcolor colorpicker layer textpattern moxiemanager"],
                toolbar: ' table | styleselect fontsizeselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link',
            });
        }

    </script>
</body>
@if (session('select'))
<script>

 Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'กรุณาเลือกอัพ รูป หรือ วิดีโอ อย่างใดอย่างหนึ่ง',
//   footer: '<a href="">Why do I have this issue?</a>'
})
</script>
@endif
@if (session('mobile'))
<script>

 Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'กรุณาใส่รูปแสดงส่วน Mobile  ',
//   footer: '<a href="">Why do I have this issue?</a>'
})
</script>
@endif
@if (session('mobile2'))
<script>

 Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'กรุณาใส่รูปแสดงส่วน PC  ',
//   footer: '<a href="">Why do I have this issue?</a>'
})
</script>
@endif
@if (session('size'))
<script>

 Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'วิดีโอเกินขนาดที่กำหนด',
//   footer: '<a href="">Why do I have this issue?</a>'
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
