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
                                <div class="card-header"><strong>Catagory</strong></div>
                                <form class="form-horizontal" action="/backoffice/innovation/editsub" method="POST" enctype="multipart/form-data">
                                     <div class="card-body">
                                        @csrf
                                        
                                        <input type="hidden" name="in_id" value="{{ $inno->in_id }}">

                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Name TH </label>
                                            <div class="col-md-9">
                                                <input type="text" name="in_nameth" class="form-control" value="{{ $inno->in_nameth }}">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                                Name EN </label>
                                            <div class="col-md-9">
                                                <input type="text" name="in_nameen" class="form-control" value="{{ $inno->in_nameen}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                                Detail TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="in_detailth" id="summernote">{!! $inno->in_detailth !!}</textarea>
                                                </div>
                                            </div>
                                            <script>
                                                $('#summernote').summernote({
                                                 
                                                  tabsize: 2,
                                                  height: 200,
                                        
                                                  
                                                });
                                            </script>
                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Detail EN <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="in_detailen" id="summernote1">{!! $inno->in_detailen !!}</textarea>
                                                </div>
                                            </div>
                                            <script>
                                                $('#summernote1').summernote({
                                                 
                                                  tabsize: 2,
                                                  height: 200,
                                             
                                                });
                                            </script>
                                        <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                    Description TH <div style="font-size: 12px;"></div></label>
                                                    <div class="col-md-9">
                                                        <textarea name="in_descriptionth" id="summernote2">{!! $inno->in_descriptionth !!}</textarea>
                                                    </div>
                                                </div>
                                                <script>
                                                    $('#summernote2').summernote({
                                                     
                                                      tabsize: 2,
                                                      height: 200,
                                                      toolbar: []
                                                        
                                                      
                                                    });
                                                </script>
                                           
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                    Description EN <div style="font-size: 12px;"></div></label>
                                                    <div class="col-md-9">
                                                        <textarea name="in_descriptionen" id="summernote3">{!! $inno->in_descriptionen !!}</textarea>
                                                    </div>
                                                </div>
                                                <script>
                                                    $('#summernote3').summernote({
                                                     
                                                      tabsize: 2,
                                                      height: 200,
                                                      toolbar: []
                                                 
                                                    });
                                                </script>
                                         <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="imgInp">
                                                Image <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                
                                                <input id="imgInp" type="file" name="in_img"><br>
                                                <img id="blah" src="{{ $inno->in_img }}" width="30%" alt="your image"/>

                                            </div>
                                        </div>
                                       
                                    </div>
                                        <div class="card-footer">
                                            <button class="btn btn-sm btn-primary" type="submit">บันทึก</button>
                                            <a href="/backoffice/innovation" class="btn btn-sm btn-danger">กลับ</a>

                                        </div>
                                </form>
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
