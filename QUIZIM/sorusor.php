
<html>
<head><?php    include_once("inc/sorular.php");    ?>
    <meta charset="utf-8">
</head>
<body>

<form action="index.php" method="post">


<?php

if ( isset($_POST["cevap"])){
    echo $_POST["soruno"].". Sorunun cevabını " . $_POST["cevap"]." seçtiniz";
}

$soruno=0;

    echo "<h4>".($soruno+1).".SORUMUZ: ". $sorular[$soruno]["soru"]."</h4>";
foreach ($sorular[$soruno]["secenekler"] as $ks=>$secenek)
{
    echo "<input type='radio' name='cevap' value='".$ks."'>".$ks. " ) " . $secenek."<br/>";
    echo "<input type='hidden' name='soruno' value='".($soruno+1)."'/>";
}


?>
<input type="submit" value="Sonraki Soru -->"/>
</form>




<?php
echo "<pre>";
print_r($sorular);
echo "</pre>";


/*
 * foreach($sorular as $sno=>$veri)
{
    echo "<h4>".++$sno.".SORUMUZ: ". $veri["soru"]."</h4>";
   // echo "SEÇENEKLER:<br/>";

    foreach ($veri["secenekler"] as $ks=>$secenek)
    {
        echo "<input type='radio' name='cevap' value='".$ks."'>".$ks. " ) " . $secenek."<br/>";
    }
    echo "<hr/>";
}

 * */



?>

</body>
</html>

