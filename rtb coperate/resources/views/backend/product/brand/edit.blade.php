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
                                <div class="card-header"><strong>Subcatagory</strong></div>
                                <form class="form-horizontal" action="/backoffice/product/editsub" method="POST" enctype="multipart/form-data">
                                     <div class="card-body">
                                        @csrf
                                        <input type="hidden" name="pro_id" value="{{ $pro->pro_id }}">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                                Type <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-3">
                                                <select name="pt_id" class="form-control">
                                                    @foreach ($scat as $ca)
                                                    <optgroup label="{{ $ca->subnameth }}">
                                                            @foreach ($type as $item)
                                                            @if ($item->pt_id == $pro->pt_id)
                                                            @if ($ca->scat_id == $item->scat_id)
                                                                <option value="{{ $item->pt_id }}" selected>{{ $item->typenameth }}</option> 
                                                            @endif    
                                                        @else
                                                            @if ($ca->scat_id == $item->scat_id)
                                                                <option value="{{ $item->pt_id }}">{{ $item->typenameth }}</option> 
                                                            @endif
                                                        @endif
                                                            @endforeach
                                                    </optgroup>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                                Name TH <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <input type="text" name="pro_nameth" class="form-control" value="{{ $pro->pro_nameth }}">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" >
                                                Name EN <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <input type="text" name="pro_nameen" class="form-control" value="{{ $pro->pro_nameen }}">
                                            </div>
                                        </div>
<button id="more1" type="button" class="btn btn-sm btn-primary" onclick="$('.details1').slideToggle(function(){$('#more1').html($('.details1').is(':visible')?'ปิด':'Flagship');});">Flagship</button>

                                        <div class="form-group row details1" style="display:none">
                                            <label class="col-md-3 col-form-label" >
                                                Detail TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="descriptionth" id="summernote">{!! $pro->descriptionth !!}</textarea>
                                                </div>
                                            </div>
                                            <script>
                                                $('#summernote').summernote({
                                                 
                                                  tabsize: 2,
                                                  height: 100,
                                                  toolbar: []
                                                  
                                                });
                                            </script>
                                       
                                        <div class="form-group row details1" style="display:none">
                                            <label class="col-md-3 col-form-label" >
                                                Detail EN <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="descriptionen" id="summernote1">{!! $pro->descriptionen !!}</textarea>
                                                </div>
                                            </div>
                                            <script>
                                                $('#summernote1').summernote({
                                                 
                                                  tabsize: 2,
                                                  height:100,
                                                  toolbar: []
                                                });
                                            </script>

                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" >
                                                    ราคา<div style="font-size: 12px;"></div></label>
                                                <div class="col-md-2">
                                                    <input type="text" name="price" value="{{ $pro->price }}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                    Image <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <img src="{{ $pro->img }}" width="30%" alt="">
                                                    <input id="file-multiple-input" type="file" name="img"
                                                        multiple="">
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
</html>
