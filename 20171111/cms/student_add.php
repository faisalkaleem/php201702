<?php
include 'inc/db.php';
include 'inc/helper.php';
requireLogin();
//printR($_GET);
if (isset($_POST['name'])) {
    $picture = 'null';
    // Attache timestamp with the filename to avoid overritten of files.
    // Although its also not perfect solution but works.
    // You can 
    $filename = time().'_'.$_FILES['picture']['name'];
    $destination = 'student' . DIRECTORY_SEPARATOR . $filename;
    if(uploadFile('picture', $destination)) {
        $picture = "'".$filename."'";
    }
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $class = $_POST['class'];
    $gender = $_POST['gender'];
    // SQL to insert data into table
    // INSERT INTO {table_name} ({comma seperated list of columns}) VALUES ({comma seperated list of values is same order as columns})
    $sql = "INSERT INTO student (name, gender, picture, dob, class) "
            . "VALUES ('$name', '$gender', $picture, '$dob', '$class')";
    if (!mysqli_query($connection, $sql)) {
        echo 'There is an error in the insert statement';
        echo mysqli_error($connection);
        exit;
    } else {
        redirect('students.php');
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
        <?php include 'head.php'; ?>
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
                    <?php include 'top-user-dropdown.php' ?>
                    <!-- /.navbar-collapse -->
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
                        <!---->
                        <div class="grid-form1">
                            <h3>Adding Student</h3>
                            <div class="tab-content">
                                <div class="tab-pane active" id="horizontal-form">
                                    <?php include '_student_form.php'; ?>
                                </div>
                            </div>
                        </div>
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
