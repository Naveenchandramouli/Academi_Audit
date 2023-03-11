<?php
include ("db.php");
session_start();
if(isset($_POST['cl1']))
{
    $department=0;
    if(!empty($_POST['dept']))
    {
        $dept=$_POST['dept'];
    }
    if(!empty($_POST['a']))
    {
        $department=$department+1;
    }
    if(!empty($_POST['b']))
    {
        $department=$department+1;
    }
    if(!empty($_POST['c']))
    {
        $department=$department+1;
    }
    if(!empty($_POST['d']))
    {
        $department=$department+1;
    }
    if(!empty($_POST['e']))
    {
        $department=$department+1;
    }
    if(!empty($_POST['f']))
    {
        $department=$department+1;
    }
    if(!empty($_POST['g']))
    {
        $department=$department+1;
    }
    if(!empty($_POST['h']))
    {
        $department=$department+1;
    }
    if(!empty($_POST['i']))
    {
        $department=$department+1;
    }
    if(!empty($_POST['j']))
    {
        $department=$department+1;
    }
    if(!empty($_POST['k']))
    {
        $department=$department+1;
    }
    $cl1=$_POST['cl1'];
    if(strcmp($cl1,">")==0)
    {
        $_SESSION['dep'] = $dept;
        $sql="update checklist set department_files='$department' where department='$dept' ";
        mysqli_query($conn,$sql);
        header("location:checklist2.php");
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
    <meta name="description"
        content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
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
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
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
                                        <span id="more-details">Audit<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="auth-normal-sign-in.html"><i
                                                    class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"
                                            data-i18n="nav.basic-components.main">Checklist</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="accordion.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Department Files</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Course Files</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Faculty Files</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Student Files</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Co-curricular
                                                    Activities</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Miscellaneous</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="form-elements-component.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Score</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header end -->
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page body start -->
                                    <h5>Academic Audit</h5>
                                    <br>
                                    <!-- Input Alignment card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <span>
                                                <h5><b>Department Files<b></h5>
                                            </span>
                                        </div>

                                        <form name="myform" method="post" action="" class="form" autocomplete="on">
                                          
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Department
                                                    Id:</label>
                                                <div class="col-sm-2">
                                                    <select name="select" class="form-control">
                                                        <?php
                                                                    include ("db.php");
                                                            $sql = "select department from checklist ";
                                                            $res = mysqli_query($conn, $sql);
                                                            if (mysqli_num_rows($res) > 0) {
                                                            foreach ($res as $ans) {
                                                                ?>
                                                        <option value="<?= $ans['department']; ?>">
                                                            <?= $ans['department']; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <table>
                                                <td>
                                                    <label class="col-sm-12 col-form-label"> 1. Academic
                                                        events / programmes (Seminar/ Conference/ Workshops)
                                                        conducted.
                                                    </label>
                                                    <input type="checkbox" id="a" class="col-sm-1 col-form-input"
                                                        name="a" class="form-control form-control-normal">
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-sm-12 col-form-label">2. Academic events
                                                            /programmes (Seminar/ Conference/ Workshops/ Academic
                                                            competitions) attended by the students
                                                        </label>
                                                        <input type="checkbox" id="b" class="col-sm-1 col-form-input"
                                                            name="b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-sm-12 col-form-label">3. Tie-ups/MoU
                                                        </label>
                                                        <input type="checkbox" id="c" class="col-sm-1 col-form-input"
                                                            name="c">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-sm-12 col-form-label">4. Collaborative
                                                            programmes
                                                            with other Colleges</label>
                                                        <input type="checkbox" id="d" class="col-sm-1 col-form-input"
                                                            name="d">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-sm-12 col-form-label">5. Inter Departmental
                                                            Collaborative
                                                            programmes </label>
                                                        <input type="checkbox" id="e" class="col-sm-1 col-form-input"
                                                            name="e">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-sm-12 col-form-label">
                                                            6. Academic events involving Alumni (Distinguished
                                                            Alumni Series, Association talks, Special workshops or
                                                            Seminars)
                                                        </label>
                                                        <input type="checkbox" id="f" class="col-sm-1 col-form-input"
                                                            name="f">
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-sm-12 col-form-label">7. Department Academic
                                                            Growth
                                                            Plan
                                                        </label>
                                                        <input type="checkbox" id="g" class="col-sm-1 col-form-input"
                                                            name="g">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-sm-12 col-form-label">8. Student Feedback (by
                                                            faculty/subject wise)
                                                        </label>
                                                        <input type="checkbox" id="h" class="col-sm-1 col-form-input"
                                                            name="h">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-sm-12 col-form-label">9. Mentorship Record of
                                                            students</label>
                                                        <input type="checkbox" id="i" class="col-sm-1 col-form-input"
                                                            name="i">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-sm-12 col-form-label">
                                                            10. Department Best Practices
                                                        </label>
                                                        <input type="checkbox" id="j" class="col-sm-1 col-form-input"
                                                            name="j">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-sm-12 col-form-label">11. Strengths,
                                                            weaknesses,
                                                            Opportunities and Threats/ Challenges (SWOT) analysis

                                                        </label>
                                                        <input type="checkbox" id="k" class="col-sm-1 col-form-input"
                                                            name="k">
                                                    </td>
                                                </tr>
                                            </table>
                                            <br>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <center>
                                                        <input type="submit" name="cl1" value="<" disabled>
                                                        &nbsp;
                                                        <b>1</b>
                                                        &nbsp;
                                                        <input type="submit" name="cl1" value=">"
                                                            onclick="return validate()">
                                                    </center>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Warning Section Starts -->
                                    <!-- Older IE warning message -->
                                    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
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
                                    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js ">
                                    </script>
                                    <!-- waves js -->
                                    <script src="assets/pages/waves/js/waves.min.js"></script>
                                    <!-- jquery slimscroll js -->
                                    <script type="text/javascript"
                                        src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
                                    <!-- waves js -->
                                    <script src="assets/pages/waves/js/waves.min.js"></script>
                                    <!-- modernizr js -->
                                    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
                                    <!-- Custom js -->
                                    <script src="assets/js/pcoded.min.js"></script>
                                    <script src="assets/js/vertical-layout.min.js "></script>
                                    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
                                    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>