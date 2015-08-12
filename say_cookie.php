<meta charset=utf-8><center>
<style type="text/css">a {text-decoration: none}</style>
<a href="?islem=yukari" ><font size=250%>&#8679;</font></a><br/><a href=?islem=asagi><font size=250%>&#8681;</font></a>
<table border='0' cellspacing=6 cellpadding=6> 
<?php

$yon = "asagi";
if (!isset($konum)){$konum=1;}
 

if (!isset($_COOKIE["konum"])) {setcookie("konum",$konum);}

 
if (isset($_GET["islem"]) && ($_GET["islem"] == "asagi")) {
    $yon = "asagi";
    if ($_COOKIE["konum"] >= 6) {$mesaj= "<h3>Daha Aşağısı Yok!</h3>";setcookie("konum",1);}
    else {setcookie("konum",$konum+1);}  
}

 
if (isset($_GET["islem"]) && ($_GET["islem"] == "yukari")) {
    $yon = "yukari";
    if ($_COOKIE["konum"] <= 1) {$mesaj="<h3>Daha Yukarısı Yok!</h3>";setcookie("konum",5);}
    else {setcookie("konum",$konum-1);}
}
 
for ($i = 1; $i <= 5; $i++) {
    
    if ($yon == "yukari") { ///GET E GÖRE YÖNLÜ KARAKTER
        $char = "&#8648;";
    } else {
        $char = "&#8650;";
    }
    if ($i == $_COOKIE["konum"]) {
        echo "<tr bgcolor='red'><td><h1><font color='white'>" . $char . "</font></h1></td></tr>";
    } else {
        echo "<tr bgcolor='black'><td>&nbsp;</td></tr>";
    }
}
///////////////////DÖNGÜ BİTTİ///////////////////////////////////////

if(!isset($mesaj)){$mesaj="";}

?>
</table><?php echo $mesaj;?>
</center>
