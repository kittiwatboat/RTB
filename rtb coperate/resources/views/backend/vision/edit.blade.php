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
                                <form class="form-horizontal" action="backoffice/vision/editsub" method="POST" enctype="multipart/form-data">
                                     <div class="card-body">
                                        @csrf
                                        
                                        <input type="hidden" name="vision_id" value="{{ $vision->vision_id }}">

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Detail 1 TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="nameth" id="summernote">{!! $vision->nameth !!}</textarea>
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
                                                Detail 1 EN <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="nameen" id="summernote1">{!! $vision->nameen !!}</textarea>
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
                                                Detail 2 TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="desth" id="summernote3">{!! $vision->desth !!}</textarea>
                                                </div>
                                            </div>
                                            <script>
                                                $('#summernote3').summernote({
                                                 
                                                  tabsize: 2,
                                                  height: 200,
                                        
                                                  
                                                });
                                            </script>
                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Detail 2 EN <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="desen" id="summernote4">{!! $vision->desen !!}</textarea>
                                                </div>
                                            </div>
                                            <script>
                                                $('#summernote4').summernote({
                                                 
                                                  tabsize: 2,
                                                  height: 200,
                                             
                                                });
                                            </script>


                                            <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Detail 3 TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="detailth" id="summernote5">{!! $vision->detailth !!}</textarea>
                                                </div>
                                            </div>
                                            <script>
                                                $('#summernote5').summernote({
                                                 
                                                  tabsize: 2,
                                                  height: 200,
                                        
                                                  
                                                });
                                            </script>
                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Detail 3 EN <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="detailen" id="summernote6">{!! $vision->detailen !!}</textarea>
                                                </div>
                                            </div>
                                            <script>
                                                $('#summernote6').summernote({
                                                 
                                                  tabsize: 2,
                                                  height: 200,
                                             
                                                });
                                            </script>


                                                <br><br>
                                                <h3>ส่วนข้อมูลย่อย</h3>
                                                <br>


                                                <!-- 1111111 -->
                                         <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Image 1 <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <img src="{{ $vision->vision_img }}" width='50%' alt=""><br>
                                                <input id="file-multiple-input" type="file" name="vision_img"
                                                    multiple="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Title 1 TH </label>
                                            <div class="col-md-9">
                                                <input type="text" name="n1th" class="form-control" value="{{ $vision->n1th}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                            Title 1 EN </label>
                                            <div class="col-md-9">
                                                <input type="text" name="n1en" class="form-control" value="{{ $vision->n1en}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Description 1 TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="d1th" id="" style="height:100px">{{ $vision->d1th }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Description 1 TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="d1en" id="" style="height:100px">{{ $vision->d1en }}</textarea>
                                                </div>
                                            </div>

                                            <br>
                                             <!-- 2222222-->

                                             <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Image 2 <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <img src="{{ $vision->vision2_img }}" width='50%' alt=""><br>
                                                <input id="file-multiple-input" type="file" name="vision2_img"
                                                    multiple="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Title 2 TH </label>
                                            <div class="col-md-9">
                                                <input type="text" name="n2th" class="form-control" value="{{ $vision->n2th}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                            Title 2 EN </label>
                                            <div class="col-md-9">
                                                <input type="text" name="n2en" class="form-control" value="{{ $vision->n2en}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Description 2 TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="d2th" id="" style="height:100px">{{ $vision->d2th }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Description 2 TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="d2en" id="" style="height:100px">{{ $vision->d2en }}</textarea>
                                                </div>
                                            </div>

                                            <br>


                                              <!-- 333333-->

                                              <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Image 3 <div style="font-size: 12px;"></div></label>
                                            <div class="col-md-9">
                                                <img src="{{ $vision->vision3_img }}" width='50%' alt=""><br>
                                                <input id="file-multiple-input" type="file" name="vision3_img"
                                                    multiple="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Title 3 TH </label>
                                            <div class="col-md-9">
                                                <input type="text" name="n3th" class="form-control" value="{{ $vision->n3th}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                            Title 3 EN </label>
                                            <div class="col-md-9">
                                                <input type="text" name="n3en" class="form-control" value="{{ $vision->n3en}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Description 3 TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="d3th" id="" style="height:100px">{{ $vision->d3th }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">
                                                Description 3 TH <div style="font-size: 12px;"></div></label>
                                                <div class="col-md-9">
                                                    <textarea name="d3en" id="" style="height:100px">{{ $vision->d3en }}</textarea>
                                                </div>
                                            </div>

                                            <br>





                                       
                                    </div>
                                        <div class="card-footer">
                                            <button class="btn btn-sm btn-primary" type="submit">บันทึก</button>
                                            <a href="/backoffice/vision" class="btn btn-sm btn-danger">กลับ</a>

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
