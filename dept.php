<?php
include 'db.php';
if(isset($_POST["submit"]))
{
$submit=$_POST["submit"];
if(strcmp($submit,"Next")==0)
{
  $years=$_POST["year"];
  $history=$_POST["history"];
  $stream=$_POST["stream"];
  $programme=$_POST["programme"];
  $pname=$_POST["pname"];
  $category=$_POST["category"];
  $specialization=$_POST["specialization"];

  $sql="insert into dept values('$years','$history','$stream','$category','$programme','$pname','$specialization')";
  mysqli_query($conn,$sql);
  header('Location:dept2.php');
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
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Department Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="dept.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">History</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="dept2.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Course</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="dept3.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">MoU</span>
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
                            var year = document.d1.year.value;
                            var history = document.d1.history.value;
                            var stream = document.d1.stream.value;
                            var category = document.d1.category.value;
                            var programme = document.d1.programme.value;
                            var pname = document.d1.pname.value;
                            var specialization = document.d1.specialization.value;


                            if (year == "") {
                                alert("Enter the year");
                                document.d1.year.focus();
                                return false;
                            }
                            else if (history == "") {
                                alert("Enter the History details");
                                document.d1.history.focus();
                                return false;
                            }
                            else if (stream == "") {
                                alert("Enter the stream details");
                                document.d1.stream.focus();
                                return false;
                            }
                            else if (category == "") {
                                alert("Enter the category");
                                document.d1.category.focus();
                                return false;
                            }
                            else if (programme == "") {
                                alert("Enter the Programme");
                                document.d1.programme.focus();
                                return false;
                            }
                            else if (pname == "") {
                                alert("Enter the Programme name");
                                document.d1.pname.focus();
                                return false;
                            }
                            else if (specialization == "") {
                                alert("Enter the specialization");
                                document.d1.specialization.focus();
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
                                <h5>Department Profile</h5>
                                <br>
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        
                                                        <span><h5>General Information</h5></span>
                                                    </div>
                                                    <div class="card-block">
                                                        <form method="post" name="d1" action="">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">1. Year of Establishment:</label>
                                                                <div class="col-sm-9">
                                                                    <input type="date" name="year" class="form-control">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-sm-3 col-form-label">2. Brief History:</label>
                                                                <div class="col-sm-9">
                                                                    <textarea name="history" rows="3" columns="30" class="form-control"
                                                                    ></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">3. Stream:</label>
                                                                <div class="col-sm-9">
                                                                    <select name="stream" class="form-control">
                                                                        <option value="">Select One Value Only
                                                                        </option>
                                                                        <option value="Aided">Aided</option>
                                                                        <option value="SFS">SFS</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">3. Category:</label>
                                                                <div class="col-sm-9">
                                                                    <select name="category" class="form-control">
                                                                        <option value="">Select One Value Only
                                                                        </option>
                                                                        <option value="Science">Science</option>
                                                                        <option value="Humanites">Humanities</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">4. Programme:</label>
                                                                <div class="col-sm-9">
                                                                    <select name="programme" class="form-control">
                                                                        <option value="">Select One Value Only
                                                                        </option>
                                                                        <option value="B.Sc">B.Sc</option>
                                                                        <option value="B.C.A">B.C.A</option>
                                                                        <option value="B.Com">B.Com</option>
                                                                        <option value="B.A">B.A</option>
                                                                        <option value="B.S.W">B.S.W</option>
                                                                        <option value="M.Sc">M.Sc</option>
                                                                        <option value="M.C.A">M.C.A</option>
                                                                        <option value="M.Com">M.com</option>
                                                                        <option value="M.B.A">M.B.A</option>
                                                                        <option value="M.A">M.A</option>
                                                                        <option value="M.S.w">M.S.W</option>
                                                                        <option value="other">Others</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">5. Programme Name:</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="pname" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">6. Specialization: </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="specialization"
                                                                        max="10">
                                                                </div>
                                                            </div>
                                                            <br>
                                                        <center>
                                                        
                                                        <input type="submit" name="submit" value="Next" onclick="return validation()">&nbsp;&nbsp;
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