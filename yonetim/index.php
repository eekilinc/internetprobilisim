<?php
session_start();
include("ayarlar.php");
if (empty($_SESSION["oturum"]))
    header("Location:$baseurl/login.php");


echo $_SESSION["oturum"];
//session_destroy("deger");

// login sayfasına gelir..
// kullanıcı adı ve parola girilir
// ve post ile kontrol.php sayfasına gider
// burada kullanıcı ve parola kontrol edilir eğer doğru ise
// sessin oluşturlarak yetkilendirme verilir ve index.php gider
// eğer doğru değil ise tekrar login.php gelir.

//unset($_SESSION["deger"]);
?>
<!DOCTYPE html>
<html>

<head>
    <?php include ("templates/header.php"); ?>
    <!--  header php -->
</head>

<body id="page-top">
<div id="wrapper">
    <!--  navbar.php -->
    <?php include ("templates/navbar.php"); ?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <!-- topnavbar.php -->
            <?php include ("templates/topnavbar.php"); ?>
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Anasayfa</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block"
                                                                role="button" href="#"><i
                            class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
                </div>
bu sayfa anasayfa
            </div>
        </div>
        <!--  footer.php -->
        <?php include ("templates/footer.php"); ?>
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<!-- footer 2 php -->
<?php include ("templates/footer2.php"); ?>
</body>
</html>
