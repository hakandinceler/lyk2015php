<meta charset="utf-8">
<?php
$bilgiler= array (
		"ömer",
		"çıtak",
		22);
print_r ($bilgiler);
echo "<br/>";
echo "<pre>";
var_dump($bilgiler);
echo "</pre>";
echo $bilgiler[0];
////////////////////////////////////
$bilgiler2= array (
		array("ömer","çıtak",22),
		array("hakan","dinçeler",10)
		);
echo $bilgiler2[0][0];

echo "<hr/>";

$bilgiler3 = array(
		array (
		"ad"=>"ömer",
		"soyad"=>"çıtak",
		"yas"=>22)
		);
echo $bilgiler3[0]["yas"];
echo "<hr/>";

$j_encode= json_encode($bilgiler);
echo $j_encode;
echo "<br/>";

$j_decode= json_decode($j_encode);
var_dump($j_encode);
echo "<br/>";
var_dump(json_decode($j_encode,true));
/// json_encode stdClass olarak ortak çıktı üretik php de basmak için json_decode true parametresi ile tekrar php nin anlayabileceği array e dönüştürülür.
echo "<hr/>";
//////////////////////////////////////
$k="k";
$l="k";
$m="l";
echo $$m;
echo "<hr/>";
$a="z";
$b="a";
$c="b";
echo $$$c;

echo "<hr/>";

$a=["1. eleman","2. eleman","3. eleman","4. eleman"];

for ($i=0;$i<count($a);$i++)
{echo $a[$i]. "<br/>";}

echo "<br/>";

foreach ($a as $k=>$v){echo $k ."->".$v ."<br/>";}










?>
