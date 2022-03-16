<?php
// get ile gönderildi ise
if (isset($_POST['eposta']) && isset($_POST["parola"]))
{
    $eposta= $_POST["eposta"];
    $parola=$_POST["parola"];
    echo $eposta." -  ".$parola;
}






?>


<form method="post" action="deneme.php">
    <input type="text" name="eposta">
    <br>
    <input type="password" name="parola">
    <button > Gönder</button>
</form>