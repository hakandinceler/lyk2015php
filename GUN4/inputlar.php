<!doctype html/>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
<title>Kayıt Formu</title>
</head>
<body>
<? include("ivirzivir.php");?>
<form method="post" action="kontrol.php">
Adınız:<input type="text" name="ad" placeholder="adınızı giriniz"/><br/>
Soyadınız:<input type="text" name="soyad"/><br/>
Parola:<input type="password" name="parola"/><br>
    Doğum Tarihiniz:<input type="date" name="dogtar"/><br>
Cinsiyet:
    <input type="radio" name="cinsiyet" value="kadın" id="kadin"/>
    <label for="kadin" >Kadın</label>
    <input type="radio" name="cinsiyet" value="kadın" id="erkek"/><label>Erkek</label><br/>
   Okul: <select name="okul">
        <?php

        foreach($uniler as $k=>$v)
        echo "<option value='".$k."'>".$v."</option>";
        ?>
    </select><br/>
    Hobiler:<br/>

    <?php
    foreach ($hobiler as $k=>$v) {
        echo "<input type='checkbox' name='Hobiler[]' value='$k'>$v<br/>"; //hobi[]  dizi olarak post eder

    }?>
<input type="submit">
</form>


<?php



?>

</body>
</html>
