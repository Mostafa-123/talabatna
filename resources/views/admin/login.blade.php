<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/phoenix/v1.6.0/pages/authentication/split/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Dec 2022 09:37:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Astra-Request</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin//img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="manifest" href="{{ asset('admin/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('admin/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('admin/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin/vendors/simplebar/simplebar.min.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{ asset('admin/assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('admin/assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">
        <div class="row vh-100 flex-cente g-0">
          <div class="col-lg-6 position-relative d-none d-lg-block">
            <div class="bg-holder" style="background-image: url('{{ asset('admin/assets/img/bg/36.png') }}');"></div>
            <!--/.bg-holder-->
          </div>
          <div class="col-lg-6">

                <div class="row flex-center h-100 g-0 px-4 px-sm-0">
                    <div class="col col-sm-6 col-lg-7 col-xl-6"><a class="d-flex flex-center text-decoration-none mb-4" href="index.html">
                        <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="{{ asset('admin/assets/img/icons/logo2.png') }}" alt="phoenix" width="75" /></div>
                      </a>

                      <form action="{{ route('auth.check') }}" method="POST">
                        @csrf

                        <div class="text-center mb-7">
                            <h3 class="text-1000">Astra Requests</h3>
                        </div>

                        <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                          <div class="form-icon-container">
                            <input class="form-control form-icon-input" name="email" type="email" placeholder="name@example.com" />
                            <span class="fas fa-user text-900 fs--1 form-icon"></span></div>
                        </div>
                        <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                          <div class="form-icon-container">
                            <input class="form-control form-icon-input" name="password" type="password" placeholder="Password" />
                            <span class="fas fa-key text-900 fs--1 form-icon"></span></div>
                        </div>
                        <button class="btn btn-primary w-100 mb-3">Sign In</button>

                      </form>

                    </div>
                  </div>

          </div>
        </div>
      </div>
      <script>
        var navbarTopShape = localStorage.getItem('phoenixNavbarTopShape');
        var navbarPosition = localStorage.getItem('phoenixNavbarPosition');
        var body = document.querySelector('body');
        var navbarDefault = document.querySelector('#navbarDefault');
        var navbarTopNew = document.querySelector('#navbarTopNew');
        var navbarSlim = document.querySelector('#navbarSlim');
        var navbarTopSlimNew = document.querySelector('#navbarTopSlimNew');

        var documentElement = document.documentElement;
        var navbarVertical = document.querySelector('.navbar-vertical');

        if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
          navbarDefault.remove();
          navbarTopNew.remove();
          navbarTopSlimNew.remove();
          navbarSlim.style.display = 'block';
          navbarVertical.style.display = 'inline-block';
          body.classList.add('nav-slim');
        } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
          navbarDefault.remove();
          navbarVertical.remove();
          navbarTopNew.remove();
          navbarSlim.remove();
          navbarTopSlimNew.removeAttribute('style');
          body.classList.add('nav-slim');
        } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
          navbarDefault.remove();
          navbarSlim.remove();
          navbarVertical.remove();
          navbarTopSlimNew.remove();
          navbarTopNew.removeAttribute('style');
          documentElement.classList.add('navbar-horizontal')

        } else {
          body.classList.remove('nav-slim');
          navbarSlim.remove();
          navbarTopNew.remove();
          navbarTopSlimNew.remove();
          navbarDefault.removeAttribute('style');
          navbarVertical.removeAttribute('style');
        }

        var navbarTopStyle = localStorage.getItem('phoenixNavbarTopStyle');
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
          navbarTop.classList.add('navbar-darker');
        }

        var navbarVerticalStyle = localStorage.getItem('phoenixNavbarVerticalStyle');
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVerticalStyle === 'darker') {
          navbarVertical.classList.add('navbar-darker');
        }
      </script>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('admin/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/lodash/lodash.min.js') }}"></script>
    <script src="polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="{{ asset('admin/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/phoenix.js') }}"></script>
  </body>


<!-- Mirrored from prium.github.io/phoenix/v1.6.0/pages/authentication/split/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Dec 2022 09:37:40 GMT -->
</html>
