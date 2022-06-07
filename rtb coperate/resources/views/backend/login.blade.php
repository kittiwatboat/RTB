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
    <base href="{{url('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Newlife Admin</title>
    <link href="stylesheets/adminstyle.css" rel="stylesheet">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="https://coreui.io/demo/free/3.4.0/css/style.css" rel="stylesheet">
    <link href="{{asset('css/sweetalert2.min.css')}}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="c-app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <form action="/backoffice/login" method="POST">
                  @csrf
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                      </svg></span></div>
                  <input class="form-control" type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                      </svg></span></div>
                  <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">Login</button>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="node_modules/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    
<script src="js/main.js"></script>
<script src="javascript/sweetalert2.min.js"></script>
  </body>
</html>
@if(session('aa'))
<script>
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: "Account ของท่านไม่มีสิทธิ์เข้าถึงระบบนี้",
  //   footer: '<a href="">Why do I have this issue?</a>'
  })</script>
@endif

@if(session('success'))
<script>
alert('{{session("success")}}');
</script>

@if(session('erro'))
<script>
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: "คุณกรอกusernameหรือpasword ไม่ถูกต้อง",
//   footer: '<a href="">Why do I have this issue?</a>'
})</script>
@endif

@if(session('unsuccess1'))
<script>
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: "User ของท่านไม่สามารถเข้าหน้านี้ได้",
//   footer: '<a href="">Why do I have this issue?</a>'
})</script>
@endif
@if(session('unsuccess2'))
<script>
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: "ไม่เข้าเงื่อนไขล็อกอินใด",
//   footer: '<a href="">Why do I have this issue?</a>'
})</script>
@endif

@endif