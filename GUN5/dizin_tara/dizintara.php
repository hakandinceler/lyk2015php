<meta charset="utf-8">
<?php
////KULLANACAĞIMIZ FONKSİYONLAR VE KOMUTLAR:
/// scandir: verilen klasörün içini tarar dosya ve dizin ne varsa isimlerini dizin olarak döndürür
//// file_exists : dosya mevcut mu
//// is_file:  dosya mı değil mi
//// file_size() dosy boyutunu döndürür
/// var_dump($_FILE) post edilmiş dosyanın bilgilerini dizin olarak dump eder
////*****bulunduğum dizinin içeriğini göstermek için başına ./ eklemem gerek
/// unlink: dosyayı siler
//// pathinfo()  : dosya özelliklerini dizin olarak döndürür
///// in_array ile izin verilen uzantılar dizininde arama

$dizin= "./";
if (isset($_GET["dizin"]))
{
    $dizin = $_GET["dizin"];
}
if (isset($dizin))
{
    if (file_exists($dizin))
        $oku = scandir($dizin);
    {
        foreach ($oku as $k => $v)
        {
            if (is_file($dizin . $v))
            {
                echo "(dosya) " . $v . "<br/>";
            }
            else
            {
                echo "<a href=?dizin/".$v."/'>(dizin)</a>" . $v . "<br/>";
            }
        }
    }

}
else {
echo "böyle bir doysa yok";
}
?>