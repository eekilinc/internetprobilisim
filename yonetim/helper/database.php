<?php
try {
    $db= new PDO('mysql:host=localhost;dbname=phpders','root','');
    $db->query('SET CHARACTER SET utf8');
}
catch(PDOException $ex)
{

    header("Location:$baseurl/login.php");

}

