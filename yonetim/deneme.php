<?php
require_once ('helper/database.php');

$query= $db->query('select * from kullanici');
$kullanicilar= $query->fetchAll(PDO::FETCH_ASSOC);

echo '<table border="1" >';
echo '<tr><th>Id</th><th>Ad</th><th>Soyad</th></tr>';
if(count($kullanicilar))
{
    for ($i=0;$i<count($kullanicilar);$i++)
    {
        echo "<tr>";
        echo '<td>'.$kullanicilar[$i]['id'].'</td>';
        echo '<td>'.$kullanicilar[$i]['ad'].'</td>';
        echo '<td>'.$kullanicilar[$i]['soyad'].'</td>';
        echo "</tr>";
    }
    /*foreach ($kullanicilar as $kullanici)
    {
        echo $kullanici['id'] .'-'.$kullanici['ad'].' '.$kullanici['soyad'].'<br>';
    }*/
}

