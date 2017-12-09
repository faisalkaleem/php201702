<?php
include 'inc/db.php';
include 'inc/helper.php';
requireLogin();
//printR($_GET);
//printR($_POST);
$error = null;
$messaage = null;
if(isset($_GET['id'])) {
    $sql = "SELECT * FROM student WHERE id=".$_GET['id'];
    $rs = mysqli_query($connection, $sql);
    if($rs) {
        if(mysqli_num_rows($rs)) {
            $student = mysqli_fetch_assoc($rs);
        } else {
            $error = 'Student not found.';
        }
    } else {
        $error = mysqli_error($connection);
    }
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $class = $_POST['class'];
    // SQL to insert data into table
    // INSERT INTO {table_name} ({comma seperated list of columns}) VALUES ({comma seperated list of values is same order as columns})
    // UPDATE student SET name="New Name", dob="New DOB", class="New Class";
    $sql = "UPDATE student SET name='$name', dob='$dob', class='$class'"
            . " WHERE id = ".$student['id'];
    if (!mysqli_query($connection, $sql)) {
        echo 'There is an error in the update statement';
        echo mysqli_error($connection);
        exit;
    } else {
        $messaage = 'Student data successfully updated.';
        header('Location:students.php?message='.$messaage);
    }
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Mainly scripts -->
        <script src="js/jquery.metisMenu.js"></script>
        <script src="js/jquery.slimscroll.min.js"></script>
        <!-- Custom and plugin javascript -->
        <link href="css/custom.css" rel="stylesheet">
        <script src="js/custom.js"></script>
        <script src="js/screenfull.js"></script>
        <script>
            $(function () {
                $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

                if (!screenfull.enabled) {
                    return false;
                }



                $('#toggle').click(function () {
                    screenfull.toggle($('#container')[0]);
                });



            });
        </script>

        <!----->

    </head>
    <body>
        <div id="wrapper">
            <!----->
            <nav class="navbar-default navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1> <a class="navbar-brand" href="index.html">Minimal</a></h1>         
                </div>
                <div class=" border-bottom">
                    <div class="full-left">
                        <section class="full-top">
                            <button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
                        </section>
                        <form class=" navbar-left-right">
                            <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Search...';
                                    }">
                            <input type="submit" value="" class="fa fa-search">
                        </form>
                        <div class="clearfix"> </div>
                    </div>


                    <!-- Brand and toggle get grouped for better mobile display -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="drop-men" >
                        <ul class=" nav_1">

                            <li class="dropdown at-drop">
                                <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
                                <ul class="dropdown-menu menu1 " role="menu">
                                    <li><a href="#">

                                            <div class="user-new">
                                                <p>New user registered</p>
                                                <span>40 seconds ago</span>
                                            </div>
                                            <div class="user-new-left">

                                                <i class="fa fa-user-plus"></i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user-new">
                                                <p>Someone special liked this</p>
                                                <span>3 minutes ago</span>
                                            </div>
                                            <div class="user-new-left">

                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user-new">
                                                <p>John cancelled the event</p>
                                                <span>4 hours ago</span>
                                            </div>
                                            <div class="user-new-left">

                                                <i class="fa fa-times"></i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user-new">
                                                <p>The server is status is stable</p>
                                                <span>yesterday at 08:30am</span>
                                            </div>
                                            <div class="user-new-left">

                                                <i class="fa fa-info"></i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user-new">
                                                <p>New comments waiting approval</p>
                                                <span>Last Week</span>
                                            </div>
                                            <div class="user-new-left">

                                                <i class="fa fa-rss"></i>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </a></li>
                                    <li><a href="#" class="view">View all messages</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Rackham<i class="caret"></i></span><img src="images/wo.jpg"></a>
                                <ul class="dropdown-menu " role="menu">
                                    <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
                                    <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                                    <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
                                    <li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="clearfix">

                    </div>

                    <?php include 'left-navigation.php'; ?>
            </nav>
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="content-main">

                    <!--banner-->	
                    <div class="banner">
                        <h2>
                            <a href="index.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                            <span>Forms</span>
                        </h2>
                    </div>
                    <!--//banner-->
                    <!--grid-->
                    <div class="grid-form">
                        <?php if($error) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                        <?php } else { ?>
                        <!---->
                        <div class="grid-form1">
                            <h3>Adding Student</h3>
                            <div class="tab-content">
                                <div class="tab-pane active" id="horizontal-form">
                                    <form class="form-horizontal" method="post">
                                        <div class="form-group">
                                            <label for="student-name" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="<?php echo $student['name']; ?>" class="form-control1" id="student-name" placeholder="Student name" name="name">
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="help-block">Your help text!</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
                                            <div class="col-sm-8">
                                                <input name="dob" type="text" value="<?php echo $student['dob']; ?>"class="form-control1" id="dob" placeholder="Date of birth">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="class" class="col-sm-2 control-label">Class</label>
                                            <div class="col-sm-8">
                                                <input name="class" type="text" value="<?php echo $student['class']; ?>"class="form-control1" id="class" placeholder="Class">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <button class="btn-primary btn">Submit</button>
                                                <button class="btn-default btn">Cancel</button>
                                                <button class="btn-inverse btn">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                    <!--//grid-->
                    <!---->
                    <div class="copy">
                        <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->
        <!---->

    </body>
</html>
