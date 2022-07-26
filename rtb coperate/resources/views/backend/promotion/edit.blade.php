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
                                <form class="form-horizontal" action="backoffice/promotion/editsub" method="POST" enctype="multipart/form-data">
                                     <div class="card-body">
                                        @csrf
                                        
                                        <input type="hidden" name="promotion_id" value="{{ $promotion->id }}">


                                         <div class="form-group col-md-4">
                                           <label for="aaa">Type</label>
                                            <select name="type" id="aaa" class="form-control">
                                            <option <?php if(isset($promotion)){ if($promotion->type == '1'){echo 'selected';} } ?>
                                             value="1">แบบกรอกโค้ด</option>
                                             <option <?php if(isset($promotion)){ if($promotion->type == '2'){echo 'selected';} } ?>
                                             value="2">แบบส่วนลด</option>
                                             <option <?php if(isset($promotion)){ if($promotion->type == '3'){echo 'selected';} } ?>
                                             value="3">คูปองจัดส่งฟรี</option>
                                             </select>
                                             </div> 


                                             <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                ราคาซื้อรวมขั้นต่ำ </label>
                                            <div class="col-md-9">
                                                <input type="text" name="low_price" class="form-control" value="{{ $promotion->low_price }}">
                                            </div>
                                        </div>

                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Name TH </label>
                                            <div class="col-md-9">
                                                <input type="text" name="nameth" class="form-control" value="{{ $promotion->nameth }}">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Name EN </label>
                                            <div class="col-md-9">
                                                <input type="text" name="nameen" class="form-control" value="{{ $promotion->nameen}}">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Code </label>
                                            <div class="col-md-9">
                                                <input type="text" name="code" class="form-control" value="{{ $promotion->code}}">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Price </label>
                                            <div class="col-md-9">
                                                <input type="text" name="price_minus" class="form-control" value="{{ $promotion->price_minus}}">
                                            </div>
                                        </div>


                                         <!-- <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Image <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <img src="{{ $promotion->promotion_img }}" width='50%' alt=""><br>
                                                <input id="file-multiple-input" type="file" name="promotion_img"
                                                    multiple="">
                                            </div>
                                        </div> -->
                                       
                                    </div>
                                        <div class="card-footer">
                                            <button class="btn btn-sm btn-primary" type="submit">บันทึก</button>
                                            <a href="/backoffice/promotion" class="btn btn-sm btn-danger">กลับ</a>

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
