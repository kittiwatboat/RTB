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
        @include('backend.product.brand.head')
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
                                <div class="card-header">List <strong>Brand name </strong> </div>
                                <div class="card-body">
                                    <div class="text-right">

                                            <a data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Add new brand</a>

                                    </div>
                                    <table class="table table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Logo</th>
                                                <th>manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($brand as $key => $item)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $item->b_name }}</td>
                                                <td><img src="{{ $item->icon }}" width="150px" alt=""></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" onclick="batbal('{{$item->icb_id}}')">ลบ</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
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
                            <form action="{{ route('form.data') }}" name="demoform" id="demoform" method="POST" class="dropzone" enctype="multipart/form-data">
                              @csrf

                                <input type="hidden" class="userid" name="userid" id="userid" value="">
                                          <div class="form-group">
                                              <label class="text-blue text-sub"> Brand Name </label>
                                              <input class="form-control" type="text"  name="b_name" >
                                          </div>

                                          <div class="form-group">
                                            <div id="dropzoneDragArea" class="dz-default dz-message dropzoneDragArea">
                                                <span>Upload file</span>
                                                <div class="dropzone-previews"></div>
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
            return fetch('/backoffice/brand/delete/'+icb_id)
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
    "use strict";
function dragNdrop(event) {
    var fileName = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("preview");
    var previewImg = document.createElement("img");
    previewImg.setAttribute("src", fileName);
    preview.innerHTML = "";
    preview.appendChild(previewImg);
}
</script>
<script>
    Dropzone.autoDiscover = false;
    // Dropzone.options.demoform = false;
    let token = $('meta[name="csrf-token"]').attr('content');
    $(function() {
    var myDropzone = new Dropzone("div#dropzoneDragArea", {
        paramName: "file",
        url: "{{ url('/backoffice/brand/addimg') }}",
        previewsContainer: 'div.dropzone-previews',
        addRemoveLinks: true,
        autoProcessQueue: false,
        uploadMultiple: false,
        parallelUploads: 1,
        maxFiles: 1,
        params: {
            _token: token
        },
         // The setting up of the dropzone
        init: function() {
            var myDropzone = this;
            //form submission code goes here
            $("form[name='demoform']").submit(function(event) {
                //Make sure that the form isn't actully being sent.
                event.preventDefault();
                URL = $("#demoform").attr('action');
                formData = $('#demoform').serialize();
                $.ajax({
                    type: 'POST',
                    url: URL,
                    data: formData,
                    success: function(result){
                        if(result.status == "success"){
                            // fetch the useid
                            var userid = result.user_id;
                            $("#userid").val(userid); // inseting userid into hidden input field
                            //process the queue
                            myDropzone.processQueue();
                        }else{
                            console.log("error");
                        }
                    }
                });
            });
            //Gets triggered when we submit the image.
            this.on('sending', function(file, xhr, formData){
            //fetch the user id from hidden input field and send that userid with our image
              let userid = document.getElementById('userid').value;
               formData.append('userid', userid);
            });

            this.on("success", function (file, response) {
                //reset the form
                $('#demoform')[0].reset();
                //reset dropzone
                $('.dropzone-previews').empty();
            });
            this.on("queuecomplete", function () {

            });

            // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
            // of the sending event because uploadMultiple is set to true.
            this.on("sendingmultiple", function() {
              // Gets triggered when the form is actually being sent.
              // Hide the success button or the complete form.
            });

            this.on("successmultiple", function(files, response) {
              // Gets triggered when the files have successfully been sent.
              // Redirect user or notify of success.
            });

            this.on("errormultiple", function(files, response) {
              // Gets triggered when there was an error sending the files.
              // Maybe show form again, and notify user of error
            });
        }
        });
    });
    </script>
</html>
