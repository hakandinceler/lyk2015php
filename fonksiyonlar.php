<meta charset="utf-8"><?php

$a="hakan";

function dene()
{
$a="memhmet";
echo $a ."<br/>";
}

dene();
echo $a;

echo "<hr/>";


function toplacarp_array($sayi1,$sayi2)
{//ARRAY İLE ÇOKLU RETURN
$topla=$sayi1+$sayi2;
$carp=$sayi1*$sayi2;
$dizi=[$topla,$carp];
return $dizi;

}
function toplacarp_parse($sayi1,$sayi2)
{//PARSE İLE ÇOKLU RETURN
$topla=$sayi1+$sayi2;
$carp=$sayi1*$sayi2;
$sonuc= $topla . "-". $carp;
return $sonuc;

}
print_r(toplacarp_array(2,3));
echo "<br/>";
$yenisonuc=explode("-",toplacarp_parse(2,3));
print_r($yenisonuc);
?>
