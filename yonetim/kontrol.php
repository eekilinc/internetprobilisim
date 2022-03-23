<?php
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
$user="ekrem@mail.net";
$pass="123456";

if($_POST['email']==$user && $_POST["password"]==$pass)
{
    $_SESSION['oturum']="ekrem kılınç";
    header("Location:index.php");
}
else
{

    $_SESSION['hata']="Kullanıcı adı yada Parola Hatalı";
    header("Location:login.php");
}

}

if(isset($_GET['cikis']))
{
    $_SESSION['cikis']="Çıkış Yaptınız!! yine bekleriz";
    unset($_SESSION['oturum']);
    header("Location:login.php");
}
