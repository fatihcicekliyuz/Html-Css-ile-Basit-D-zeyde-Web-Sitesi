<?php
$sunucu_adi ="localhost";
$kullanici_adi="root";
$sifre="";
$veri_tabani="uye";

$baglanti =new mysqli($sunucu_adi,$kullanici_adi,$sifre,$veri_tabani,3306);

if($baglanti->connect_error)
{
die("Başarısız :".$baglanti->connect_error);
}



?>