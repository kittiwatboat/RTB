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
                                <form class="form-horizontal" action="/backoffice/solution2/addsub" method="POST" enctype="multipart/form-data">
                                     <div class="card-body">
                                        @csrf


                                        <?php  $for=DB::table('solutiontype')->get();  ?>
                                         <div class="form-group col-md-4">
                                           <label for="aaa">Type</label>
                                            <select name="solutiontype_id" id="aaa" class="form-control">
                                            @foreach($for as $fors)
                                            <option <?php if(isset($solution2)){ if($solution2->solutiontype_id == $fors->solutiontype_id){echo 'selected';} } ?>
                                             value="{{$fors->solutiontype_id}}">{{$fors->nameth}}</option>
                                            @endforeach
                                                           
                                             </select>
                                             </div> 
                                        
                                

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Name TH <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <input type="text" name="nameth" class="form-control">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Name EN <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <input type="text" name="nameen" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Description TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="desth" id="" ></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                            Description EN <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="desen" id="" ></textarea>
                                                </div>
                                            </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Detail TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="detailth" id="summernote"></textarea>
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
                                                    <textarea name="detailen" id="summernote1"></textarea>
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
                                                Image <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <input id="file-multiple-input" type="file" name="solution2_img"
                                                    multiple="">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="card-footer">
                                            <button class="btn btn-sm btn-primary" type="submit">บันทึก</button>
                                            <a href="/backoffice/solution2" class="btn btn-sm btn-danger">กลับ</a>

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
