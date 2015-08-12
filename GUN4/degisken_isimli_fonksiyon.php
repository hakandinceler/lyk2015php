<?php
function f($fisim=NULL,$parametre)
{
    $izinfonk=array(
                    "sort",
                    "ksort",
                    "asort",
                    "arsort",
                     "var_dump",// sonda virgül olsa da dizi çalışır
    );

    if(!is_null($fisim) &&   in_array($fisim,$izinfonk))
    {$fisim($parametre);}


}
$dizi=array("a","c");
f("sort",$dizi);
f("var_dump",$dizi);