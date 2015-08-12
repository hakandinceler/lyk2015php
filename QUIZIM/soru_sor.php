<html>
<head>
    <link rel="stylesheet" href="inc/bootstrap-theme.min.css">
    <?php
    include_once("inc/sorular.php");
    ?>
    <meta charset="utf-8">
</head>
<body>

<form action="soru_sor.php" method="post">

    <?php
    $soru_sayisi = count($sorular);
    echo "<h2>Toplam $soru_sayisi soru mevcut</h2>";

                                                 //  cevap verilmiş mi kontrol et
    if (isset($_POST["soruno"]) && is_numeric($_POST["soruno"]))
    {
        $soruno = $_POST["soruno"];

        if (isset($_POST["verilen_cevap"]))
        {
            $verilen_cevap = $_POST["verilen_cevap"];
        }

    }



    if (isset($verilen_cevap) && isset($soruno) && !empty($verilen_cevap) && !empty($soruno))
    {
        if ($soruno==$soru_sayisi)
        {
            echo "test bitti";
        }
        else {


            {
                echo $soruno . ". Sorunun cevabını " . $verilen_cevap . " seçtiniz";


            }
        else
            {
                echo "Herhangi bir seçenek seçmediniz..";
                $soruno = 0;
            }


            echo "<h4>" . ($soruno + 1) . ".SORUMUZ: " . $sorular[$soruno]["soru"] . "</h4>";
            foreach ($sorular[$soruno]["secenekler"] as $ks => $secenek) {
                echo "<input type='radio' name='verilen_cevap' value='" . $ks . "'>" . $ks . " ) " . $secenek . "<br/>";
                echo "<input type='hidden' name='soruno' value='" . ($soruno + 1) . "'/>";
            }

            if (isset($soruno) && $soruno > 0) {
                echo '<input type="submit" value="<---Önceki Soru">';
            }
        }
    }
    ?>
    <input type="submit" value="Sonraki Soru -->"/>
</form>




<?php
echo "<pre>";
//print_r($sorular);
echo "</pre>";


?>

</body>
</html>