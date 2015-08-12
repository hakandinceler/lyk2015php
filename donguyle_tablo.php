<meta charset=utf-8>
 
<a href="?islem=yukari">Yukarı</a><br/>
<?php
 
if(!isset($_COOKIE["konum"])){$_COOKIE["konum"]="1";}
if(!isset($konum)){$konum=1;}
echo "<hr>Konum:".$konum.",Çerez:".$_COOKIE["konum"]."<hr/>";



if (isset($_GET["islem"]) && $_GET["islem"]=="yukari")
{
  if($konum=0){$konum=5;setcookie("konum",(string)$konum);}
  else{$konum=$_COOKIE["konum"];$konum--;setcookie("konum",$konum);}
}




if (isset($_GET["islem"]) && $_GET["islem"]=="asagi")
{
  if($konum>=5){$konum=1;setcookie("konum",$konum);}
else{$konum=$_COOKIE["konum"];$konum++;setcookie("konum",$konum);}
}


if(isset($_COOKIE["konum"]) && isset($_GET["islem"]))
{
//echo "------".$konum."------";
setcookie("konum",$konum);
echo $_COOKIE["konum"] ."<hr>";

for ($i=1;$i<=5;$i++)
{
	if($i==$_COOKIE["konum"]){echo "--A--<br>";}
	else{echo "X<br>";}
}
}




 

?>

<a href="?islem=asagi">Aşağı</a>

 


