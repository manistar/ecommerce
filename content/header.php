
<!DOCTYPE html>
<!-- 
Template Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/modern_admin
Renew Support: https://1.envato.market/modern_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  
  <!-- BEGIN: Head-->
  
<!-- Mirrored from demos.pixinvent.com/modern-html-admin-template/html/ltr/material-ecommerce-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 09:27:28 GMT -->
<?php require_once "content/head.php";
//  if(!$d->verifytoken($adminID, "admin")){
//   session_destroy();
//   // header("Location: login.php");
//   $d->loadpage("login.php");
//   exit();
// }
?>
  <!-- END: Head-->

   <!-- BEGIN: Body-->
   <body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"><span class="material-symbols-outlined">
density_small
</span></i></a></li>
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php"><img class="brand-logo" alt="modern admin logo" src="app-assets/images/logo/logo.png">
            <h3 class="brand-text">Modern</h3></a></li>
        <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="fas fa-toggle-on fa-lg font-medium-3 white" data-ticon="fas fa-toggle-on fa-lg"></i></a></li>
        <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="material-icons mt-50">more_vert</i></a></li>
      </ul>
    </div>
<!-- start -->
    <div class="navbar-container content">
      <div class="collapse navbar-collapse" id="navbar-mobile"> 
        <ul class="nav navbar-nav mr-auto float-left">
          <!-- <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle" href="#"><i class="material-icons"></i></a></li> -->
          <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="material-icons">search</i></a>
                <div class="search-input">

                <!-- <input type="text" class="basic-search" oninput="search(this.value, 'showresult')" placeholder="Search here..."> -->
								<!-- <div id="showresult"></div> -->

                  <input class="input round form-control search-box" type="text" placeholder="Search Items" tabindex="0" data-search="template-list">
                  <div class="search-input-close"><i class="ft-x"></i></div>
                  <ul class="search-list"></ul>
                  <div class="dropdown-menu arrow">
                    <div class="dropdown-item">
                    <!-- <input type="text" class="round form-controlbasic-search" oninput="search(this.value, 'showresult')" placeholder="Search Items"> -->
								<!-- <div id="showresult"></div> -->
                      <input class="round form-control" type="text" placeholder="Search Here">
                    </div>
                  </div>
                </div>
              </li>
          
        </ul>
        <ul class="nav navbar-nav float-right">
          <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a></div>
          </li>

          <!-- Cart Icon -->
          <li class="dropdown dropdown-notification nav-item">
            <a class="nav-link nav-link-label" href="?p=shopping-cart">
            <i class="material-icons" style="font-size: 35px;">shopping_cart</i>
              <!-- <i class="fas fa-shopping-cart"></i> -->
              <span class="badge badge-pill badge-danger badge-up badge-glow" id="cat_no"><?= $s->no_products($adminID) ?></span>
            </a>
          <!-- End of Cart Icon -->

          <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="material-icons">notifications_none</i><span class="badge badge-pill badge-danger badge-up badge-glow" >0</span></a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0">5 New</span>
              </li>
              <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left align-self-center"><i class="material-icons icon-bg-circle bg-cyan mr-0">add_box</i></div>
                    <div class="media-body">
                      <h6 class="media-heading">You have new order!</h6>
                      <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left align-self-center"><i class="material-icons icon-bg-circle bg-red bg-darken-1">cloud_download</i></div>
                    <div class="media-body">
                      <h6 class="media-heading red darken-1 mr-0">99% Server load</h6>
                      <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left align-self-center"><i class="material-icons icon-bg-circle bg-yellow bg-darken-3">warning</i></div>
                    <div class="media-body">
                      <h6 class="media-heading yellow darken-3 mr-0">Warning notifixation</h6>
                      <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left align-self-center"><i class="material-icons icon-bg-circle bg-cyan mr-0">check_circle</i></div>
                    <div class="media-body">
                      <h6 class="media-heading">Complete the task</h6><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left align-self-center"><i class="material-icons icon-bg-circle bg-teal mr-0">insert_drive_file</i></div>
                    <div class="media-body">
                      <h6 class="media-heading">Generate monthly report</h6><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                    </div>
                  </div></a></li>
              <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
            </ul>
          </li>
          <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="material-icons">mail_outline</i></a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-warning float-right m-0">4 New</span>
              </li>
              <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="./app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Margaret Govan</h6>
                      <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="./app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Bret Lezama</h6>
                      <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="./app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Carie Berra</h6>
                      <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="./app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                    <div class="media-body">
                      <h6 class="media-heading">Eric Alsobrook</h6>
                      <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                    </div>
                  </div></a></li> 
              <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
            </ul>
          </li>
          <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"><?=$GetAdminProfile['username'];?></span><span class="avatar avatar-online"><img src="pages/dashboard/images/<?=$GetAdminProfile['img'];?>" alt="avatar"><i></i></span></a>
            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="material-icons">person_outline</i> Edit Profile</a><a class="dropdown-item" href="#"><i class="material-icons">playlist_add_check</i> Todo</a><a class="dropdown-item" href="#"><i class="material-icons">content_paste</i> Task</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.html"><i class="material-icons">power_settings_new</i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- ENd -->
  </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->

<div class="main-menu material-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="user-profile">
  <!-- Profile -->
  
    <div class="user-info text-center pb-2"><img class="user-img img-fluid rounded-circle w-25 mt-2" style="border-radius: 50%;" src="<?php if(!empty($GetAdminProfile['img'])){  echo "pages/dashboard/images/".$GetAdminProfile['img']; }else{ echo "pages/dashboard/images/avartar/6596121.png"; } ?>"  alt=""/>
      <div class="name-wrapper d-block dropdown mt-1"><a class="white dropdown-toggle ml-2" id="user-account" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-name"><?=$GetAdminProfile['username'];?></span></a>
        <div class="text-light"><?=$GetAdminProfile['email'];?></div>
        <div class="dropdown-menu arrow"><a class="dropdown-item"><i class="material-icons align-middle mr-1">person</i><span class="align-middle">Profile</span></a><a class="dropdown-item"><i class="material-icons align-middle mr-1">message</i><span class="align-middle">Messages</span></a><a class="dropdown-item"><i class="material-icons align-middle mr-1">attach_money</i><span class="align-middle">Balance</span></a><a class="dropdown-item"><i class="material-icons align-middle mr-1">settings</i><span class="align-middle">Settings</span></a><a class="dropdown-item"><i class="material-icons align-middle mr-1">power_settings_new</i><span class="align-middle">Log Out</span></a></div>
      </div>
    </div>
 
  </div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="active"><a href="/index.php"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="eCommerce Dashboard">eCommerce Dashboard</span></a>
      </li>
      <li class=" navigation-header"><span data-i18n="Ecommerce">Ecommerce</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Ecommerce">more_horiz</i>
      </li>
      <li class=" nav-item"><a href="?p=shop"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="Shop">Shop</span></a>
      </li>
      <!-- <li class=" nav-item"><a href="?p=product-details"><i class="material-icons">format_list_numbered</i><span class="menu-title" data-i18n="Product Detail">Product Detail</span></a> -->
      </li>
      <!-- <li class=" nav-item"><a href="?p=shopping-cart"><i class="material-icons">card_travel</i><span class="menu-title" data-i18n="Shopping Cart">Shopping Cart</span></a> -->
      </li>
      <!-- <li class=" nav-item"><a href="?p=checkout"><i class="material-icons">local_atm</i><span class="menu-title" data-i18n="Checkout">Checkout</span></a>
      </li> -->
      <li class=" nav-item"><a href="?p=order"><i class="material-icons">done</i><span class="menu-title" data-i18n="Order">Order</span></a>
      </li>
      <li class=" nav-item"><a href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="?p=invoice-summary"><i class="material-icons"></i><span data-i18n="Invoice Summary">Invoice Summary</span></a>
          </li>
          <li><a class="menu-item" href="?p=invoice"><i class="material-icons"></i><span data-i18n="Invoice Template">Invoice Template</span></a>
          </li>
          <li><a class="menu-item" href="?p=invoice-list"><i class="material-icons"></i><span data-i18n="Invoice List">Invoice List</span></a>
          </li>
        </ul>
      </li>
      <li><a class="nav-item" href="index.php?logout">
     <span class="material-symbols-outlined">logout</span>
      <!-- <i class="fa fa-power-off"></i> -->
      <span data-i18n="logout">Logout</span>
    </a>
          </li>
    </ul>
  </div>
</div>
<!-- END: Main Menu-->