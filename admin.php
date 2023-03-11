<?php
include 'db.php';
if(isset($_POST["submit"]))
{
$submit=$_POST["submit"];
if(strcmp($submit,"Submit")==0)
{
  $cate=$_POST["cate"];
  $name=$_POST["name"];
  $desig=$_POST["desig"];
  $dept=$_POST["dept"];
  $college=$_POST["college"];
  $phone=$_POST["phone"];

  $sql="insert into members values('$cate','$name','$desig','$dept','$college','$phone')";
  mysqli_query($conn,$sql);
  echo '<script> alert("Inserted"); </script>';
}


if(strcmp($submit,"Action")==0)
{
  header("location:display.php");
}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>MCC AAA </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      
      <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" href="header.css">
  </head>
  <body>
    <!-- Pre-loader start -->
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
            
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="user-profile header-notification">
                                <img src="light-logo.png" id="logo" alt="User-Profile-Image">
                                <h2 id="clg">Madras Christian College</h2>
                            
                        </li>
                            
                            
                        </ul>
                        <ul class="nav-right">
                            <div class="topnav" id="myTopnav">
                                <a href="#home" class="head">About AAA</a>
                                <a href="#news" class="head">Report</a>
                            </div>
                            <li class="user-profile header-notification">
                                
                                <a href="#!" class="waves-effect waves-light">
                                
                                    <span>Login</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#">
                                            <i class="ti-settings"></i> Department
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="#">
                                            <i class="ti-user"></i> Audit
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="#">
                                            <i class="ti-email"></i> Admin
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
    
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="user.png" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">Admin<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                        
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <ul class="pcoded-item pcoded-left-item">
                                
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Audit</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="admin.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert" >Audit Members</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>                             
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                
                                <li class="pcoded-hasmenu active ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Schedule</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="schedule.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert" >Schedule</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>                             
                                    </ul>
                                </li>
                            </ul>
                            
                            
                        </div>
                    </nav>

                    <script type="text/javascript">
                        function validation() {
                            var vname = document.f1.name.value;
                            var vdept = document.f1.dept.value;
                            var vcol = document.f1.college.value;
                            var vphone = document.f1.phone.value;

                            if (vname == "") {
                                alert("Enter the Name");
                                document.f1.name.focus();
                                return false;
                            }
                            else if (vdept == "") {
                                alert("Enter the Department details");
                                document.f1.vdept.focus();
                                return false;
                            }
                            else if (vcol == "") {
                                alert("Enter the College details");
                                document.f1.vcol.focus();
                                return false;
                            }
                            else if (vphone == "") {
                                alert("Enter the Phone number");
                                document.f1.vphone.focus();
                                return false;
                            }
                            else if (isNaN(vphone)) {
                                alert("Enter the correct number");
                                return false;
                            }

                        }
                    </script>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                <h5>Users</h5>
                                <br>
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        
                                                        <span></span>
                                                    </div>
                                                    <div class="card-block">
                                                        <form method="post" name="f1" action="">
                                                        <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Category</label>
                                                                <div class="col-sm-10">
                                                                    <select name="cate" class="form-control">
                                                                        <option value="">Select One Value Only
                                                                        </option>
                                                                        <option value="Internal">IQAC Coordinator</option>
                                                                        <option value="External">Principal</option>
                                                                        <option value="External">Staff</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Position</label>
                                                                <div class="col-sm-10">
                                                                    <select name="cate" class="form-control">
                                                                        <option value="">Select One Value Only
                                                                        </option>
                                                                        <option value="Internal">Internal</option>
                                                                        <option value="External">External</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="name" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Designation</label>
                                                                <div class="col-sm-10">
                                                                    <select name="desig" class="form-control">
                                                                        <option value="opt1">Select One Value Only
                                                                        </option>
                                                                        <option value="Dean">Dean</option>
                                                                        <option value="Head of the Department">Head of the Department</option>
                                                                        <option value="Associate Professor">Associate Professor</option>
                                                                        <option value="Assistant Professor">Assistant Professor</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-sm-2 col-form-label">Department</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="dept"
                                                                    >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Email</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="college" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Phone Number</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="phone"
                                                                        max="10">
                                                                </div>
                                                            </div>
                                                            <br>
                                                        <center>
                                                        <input type="submit" name="submit" value="Action">&nbsp;&nbsp;
                                                        <input type="submit" name="submit" value="Submit" onclick="return validation()">&nbsp;&nbsp;
                                                        <input type="submit" name="submit" value="Reset">
                                                        </center>

                                                        </form>
                                                        
                                                        <!-- Input Alignment card end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Page body end -->
                                        </div>
                                    </div>
                                    <!-- Main-body end -->
                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Warning Section Starts -->
            <!-- Older IE warning message -->
            <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
            <!-- Warning Section Ends -->
            <!-- Required Jquery -->
            <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
            <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
            <!-- jquery slimscroll js -->
            <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
            <!-- waves js -->
            <script src="assets/pages/waves/js/waves.min.js"></script>

            <!-- modernizr js -->
            <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
            <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
            <!-- Custom js -->
            <script src="assets/js/pcoded.min.js"></script>
            <script src="assets/js/vertical-layout.min.js "></script>
            <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>