<meta charset="utf8"><?php
$students= array (
    array(
        'name'=>array('first_name'=>"arzu",'last_name'=>"bturan",'full_name'=>"Arzu Tuyan"),
        'surname'=>"Günal",
        'age'=>21
    ),
    array(
        'name'=>array('first_name'=>"ahmet",'last_name'=>"aturan",'full_name'=>"ahmet Tuyan"),
        'surname'=>"Günal",
        'age'=>78
    ),
    array(
        'name'=>array('first_name'=>"mehmet",'last_name'=>"turan",'full_name'=>"mehmet Tuyan"),
        'surname'=>"Günal",
        'age'=>31
    ),
    array(
        'name'=>array('first_name'=>"kemal",'last_name'=>"turan",'full_name'=>"kemal Tuyan"),
        'surname'=>"Günal",
        'age'=>41
    ),
    array(
        'name'=>array('first_name'=>"ismet",'last_name'=>"turan",'full_name'=>"ismet Tuyan"),
        'surname'=>"Günal",
        'age'=>65
    )

);
echo "<pre>";
//print_r($students);
echo "</pre>";


    echo "<hr/> Multisort:<br>";

//$ref_yas=array();
foreach($students as $k=>$v)
{
    $ref_yas[$k]=$v['age'];
}
array_multisort($ref_yas,SORT_ASC,$students);
echo "<pre>";
//print_r($students);

echo "</pre>";

////PARAMETREYE GÖRE ÇOKLU SIRALAMA FONKSİYONU
function coklu_sirala($dizi,$param)
{
    if (!is_null($dizi)) {
        $ref = [];
        foreach ($dizi as $k => $v)  /// tek satır koda süslü parantez gerekmez
            $ref[$k] = $v[$param];
        array_multisort($ref, SORT_ASC, $dizi);
        return $dizi;
        /// return demezsek değer dönmze çünkü fonksiyon diziyi farklı bir bellek adresinde değiştirir.
        /////esas fonksiyon orjinal adresinde değişmez.
    }
}

echo "<pre>";
print_r(coklu_sirala($students,'name'));
echo "</pre>";
?>