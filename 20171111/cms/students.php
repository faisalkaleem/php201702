<?php
error_reporting(E_ALL);
include 'inc/db.php';
include 'inc/helper.php';
requireLogin();
$sql_count = "SELECT COUNT(id) AS total_students FROM student";
// Alias
$result_count = mysqli_query($connection, $sql_count);
$record_count = mysqli_fetch_assoc($result_count);

$total_students = $record_count['total_students'];
$p=1;
if(isset($_GET['p']) && $_GET['p']>0) {
    $p = $_GET['p'];
}
$limit_start = $p-1;
$how_much_records_to_fetch = 4;
$sql = 'SELECT id, name, gender, picture, dob AS date_of_birth, class FROM student LIMIT ' . "$limit_start,$how_much_records_to_fetch";
$result = mysqli_query($connection, $sql);
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
    <?php include 'head.php' ?>
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
                            <span>Blank</span>
                        </h2>
                    </div>
                    <!--//banner-->
                    <!--faq-->
                    <div class="blank">
                        <?php if(isset($_GET['message'])) { ?>
                            <div class="alert alert-success" role="alert"><?php echo $_GET['message']; ?></div>
                        <?php } ?>
                        <a href="student_add.php" class="btn btn-primary">Add New</a>
                        <div class="students-list">
                            <?php
//                            $name = false;
//                            var_dump(empty($name));
//                            var_dump(isset($abc));
//                            exit;
//                            if(!empty($name)) echo $name;
                            echo '<table class="table">';
                            echo '<thead><tr><th>ID</th><th>Name</th><th>DOB</th><th>Class</th><th>&nbsp;</th></tr></thead><tbody>';
                            while (($record = mysqli_fetch_assoc($result))) {
                                echo '<tr><td>' . $record['id'] . '</td><td>' . $record['name'] . '</td><td>' .
                                    $record['date_of_birth'] . "</td><td>" . $record['class'] . "</td>".
                                    '<td><img height="40" src="'.BASE_URL.'/data/student/'.$record['picture'].'" /></td>'.
                                    '<td>'
                                    . '<a href="student_edit.php?id='.$record['id'].'"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>'
                                    . '<a href="student_delete.php?id='.$record['id'].'"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>'
                                    . '</td></tr>';
                            }
                            echo '</tbody></table>';
                            $num_of_pages = ceil($total_students / $how_much_records_to_fetch);
                            ?>
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                <?php
                                    for ($i = 1; $i <= $num_of_pages; $i++) {
                                        $page_to_dispaly = $i * $how_much_records_to_fetch - $how_much_records_to_fetch + 1;
                                        echo '<li><a href="?p=' . $page_to_dispaly . '">' . $i . '</a></li>';
                                    }
                                ?>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!--//faq-->
                    <!---->
                    <div class="copy">
                        <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

        <!---->
        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->
    </body>
</html>

