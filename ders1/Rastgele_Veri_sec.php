<?php
$pdo= new pdo("mysql:host=localhost;dbname=ders","root","");
$sorgu=$pdo->prepare("select * from ders") or die("Hata: ". $pdo->errorInfo()[2]);
$sorgu->execute();
foreach($sorgu as $veri)
{
    echo $veri[1];
}
?>