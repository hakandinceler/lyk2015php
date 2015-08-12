<meta charset="utf-8">
<?php

$user = "admin";
$pass = "12345";

echo "<pre>";
var_dump(getdate());
echo "</pre>";

// 15 gün öncesini bulalım:
echo "<pre>";
$gun=time()-(15*24*60*60);
var_dump(getdate($gun));
echo "</pre>";



if (isset($_POST["ad"])) {
    
    if (empty($_POST["ad"]) || empty($_POST["sifre"])) {
        echo "kullanıcı adı veya şifreden biri eksik";
    } else {
 
        if (($_POST["ad"] == $user) && ($_POST["sifre"] == $pass)) {
	setcookie("kullanici", $_POST["ad"]);
	
         
	
        } else {
            echo "KULLANICI ADI VEYA PAROLA YANLIŞ";
        }
        
    }
}
if (isset($_COOKIE["kullanici"])) {
    echo "hoşgeldiniz sayin: " . $_COOKIE["kullanici"];

echo ' <br/><a href="?islem=cikisyap">Çıkış Yap</a>';
} else {
    echo '<form action="cookie2.php" method="post">
<input type="text" name="ad"/>
<input type="pasword" name="sifre"/>
<input type="submit" value ="gonder"/></form>';
}

 if (isset($_GET["islem"])){
setcookie("kullanici","",time()-3600);
}
	

?>
