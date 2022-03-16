<?php
//include
// require
// include_once
// require_once

?>

<!DOCTYPE html>
<html>

<head>
    <?php include ("header.php"); ?>
    <!--  header php -->
</head>

<body id="page-top">
<div id="wrapper">
    <!--  navbar.php -->
    <?php include ("navbar.php"); ?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <!-- topnavbar.php -->
            <?php include ("topnavbar.php"); ?>
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block"
                                                                role="button" href="#"><i
                                class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
                </div>

            </div>
        </div>
        <!--  footer.php -->
        <?php include ("footer.php"); ?>
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<!-- footer 2 php -->
<?php include ("footer2.php"); ?>
</body>
</html>