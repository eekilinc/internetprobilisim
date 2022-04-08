<?php
session_start();
include("ayarlar.php");
require('helper/database.php');

if (empty($_SESSION["oturum"]))
    header("Location:$baseurl/login.php");

if (isset($_POST['ad'])) {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $eposta = $_POST['eposta'];
    $parola = $_POST['parola'];
    $aktifmi = $_POST['aktifmi'] ? 1 : 0;

    $query = $db->prepare("Insert Into kullanici(ad,soyad,eposta,parola,aktifmi) values(?,?,?,?,?)");
    $query->bindParam(1, $ad);
    $query->bindParam(2, $soyad);
    $query->bindParam(3, $eposta);
    $query->bindParam(4, $parola);
    $query->bindParam(5, $aktifmi);
    $sonuc = $query->execute();
    if ($sonuc > 0) {
        header("Location:$baseurl/kullanici.php");
    }
    else
        echo "Hata: kullanıcı eklenemedi";


}


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
    <?php include("templates/header.php"); ?>
    <!--  header php -->
</head>

<body id="page-top">
<div id="wrapper">
    <!--  navbar.php -->
    <?php include("templates/navbar.php"); ?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <!-- topnavbar.php -->
            <?php include("templates/topnavbar.php"); ?>
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Kullanıcı Ekleme</h3>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">

                        <form class="user" method="post">
                            <div class="mb-3"><input class="form-control form-control-user" type="text" placeholder="Ad"
                                                     name="ad" required></div>
                            <div class="mb-3"><input class="form-control form-control-user" type="text"
                                                     placeholder="Soyad" name="soyad" required></div>
                            <div class="mb-3"><input class="form-control form-control-user" type="email"
                                                     aria-describedby="emailHelp" placeholder="Eposta adresi"
                                                     name="eposta" required></div>
                            <div class="mb-3"><input class="form-control form-control-user" type="password"
                                                     placeholder="Parola" name="parola" required></div>
                            <div class="mb-3">
                                <div class="custom-control custom-checkbox small">
                                    <div class="form-check"><input class="form-check-input custom-control-input"
                                                                   type="checkbox" name="aktifmi"><label
                                                class="form-check-label custom-control-label" for="formCheck-1">Aktif
                                            Mi?</label></div>
                                </div>
                            </div>
                            <button class="btn btn-danger d-block btn-user w-100" type="submit">Kaydet</button>

                        </form>
                    </div>
                </div>


            </div>
        </div>
        <!--  footer.php -->
        <?php include("templates/footer.php"); ?>
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<!-- footer 2 php -->
<?php include("templates/footer2.php"); ?>
</body>
</html>

