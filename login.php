<?php 
//  session_start();
require_once "include/auth-ini.php";
?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from demos.pixinvent.com/modern-html-admin-template/html/ltr/material-ecommerce-menu-template/login-with-bg-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 09:29:11 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title> Admin Login</title>
    <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://demos.pixinvent.com/modern-html-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./app-assets/fonts/material-icons/material-icons.min.css">


    <!-- This sorted out the missing icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <!-- End of Material Icon -->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/material-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/material.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/material-extended.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/material-colors.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/core/menu/menu-types/material-vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/pages/login-register.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-header row">
      </div>
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-body"><section class="row flexbox-container">
  <div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
      <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
        <div class="card-header border-0">
          <div class="card-title text-center">
            <img src="./app-assets/images/logo/logo-dark.png" alt="branding logo">
          </div>
          <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6>
        </div>
        <div class="card-content">
          <div class="text-center">
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span
                class="la la-facebook"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span
                class="la la-twitter"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span
                class="la la-linkedin font-medium-4"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span
                class="la la-github font-medium-4"></span></a>
          </div>
          <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using Account
              Details</span></p>
          <div class="card-body">

               <!-- unset($users_form['ID']); -->

            <form action="passer" id="foo" onsubmit="return false"> 
            <?php echo $c->create_form($access_form); ?>
              <div class="form-group row">
                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                  <fieldset>
                    <input type="checkbox" id="remember-me" class="chk-remember">
                    <label for="remember-me"> Remember Me</label>
                  </fieldset>
                </div>
                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right" id="ForgotPass"><a href="html/ltr/recover-password.html"
                    class="card-link">Forgot Password?</a></div>
              </div>

              <input type="hidden" name="adminlogin" value="">
                <div id="custommessage"></div>
              <button type="submit" class="btn btn-outline-info btn-block" value="Submit"><i class="fas fa-unlock"></i> Login</button>
            
            </form>

          </div>
          
          
        </div>
      </div>
    </div>
  </div>
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="./app-assets/vendors/js/material-vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="./app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="./app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="./app-assets/js/core/app-menu.min.js"></script>
    <script src="./app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->
  
    <!-- BEGIN: Page JS-->
    <script src="js/my.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Custom CSS-->
    <!-- BEGIN: Page JS-->
    <script src="./app-assets/js/scripts/pages/material-app.min.js"></script>
    <script src="./app-assets/js/scripts/forms/form-login-register.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- Mirrored from demos.pixinvent.com/modern-html-admin-template/html/ltr/material-ecommerce-menu-template/login-with-bg-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 09:29:12 GMT -->
</html>