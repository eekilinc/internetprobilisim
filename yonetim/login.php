<?php
session_start();
if (isset($_SESSION['oturum']))
    header("Location:index.php");
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image"
                                 style="background-image: url(&quot;assets/img/dogs/image3.jpeg&quot;);"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h3><?php
                                        if (isset($_SESSION['cikis'])) {
                                            echo $_SESSION['cikis'];
                                            unset($_SESSION['cikis']);
                                        }
                                        ?>  </h3>
                                    <h4 class="text-dark mb-4">Yonetici Giriş Paneli</h4>
                                </div>

                                <form class="user" method="post" action="kontrol.php">
                                    <div class="mb-3"><input class="form-control form-control-user" type="email"
                                                             id="exampleInputEmail" aria-describedby="emailHelp"
                                                             placeholder="Eposta Adresi..." name="email"></div>
                                    <div class="mb-3"><input class="form-control form-control-user" type="password"
                                                             id="exampleInputPassword" placeholder="Parola"
                                                             name="password"></div>
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check"><input class="form-check-input custom-control-input"
                                                                           type="checkbox" id="formCheck-1"><label
                                                        class="form-check-label custom-control-label" for="formCheck-1">Beni
                                                    hatırla</label></div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                    <div style="margin: 10px auto; color:red;font-size: 20px;">
                                        <?php
                                        if (isset($_SESSION['hata'])) {
                                            echo $_SESSION['hata'];
                                            unset($_SESSION['hata']);
                                        }


                                        ?>
                                    </div>
                                    <hr>
                                </form>
                                <div class="text-center"><a class="small" href="forgot-password.html">Şifremi
                                        Unuttum!</a></div>
                                <div class="text-center"><a class="small" href="register.html">Kayıt ol!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/script.min.js"></script>
</body>

</html>
