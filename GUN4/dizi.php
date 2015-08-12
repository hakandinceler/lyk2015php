<meta charset="utf8"><?php
/*$dizi=array("insan"=>array("yas"=>28,"kilo"=>76,"boy"=>180),
	    "esya"=>array("boy"=>50,"agirlik"=>90));
echo "<hr>";
echo $dizi["insan"]["yas"];
*/
/*
$dene=["a"=>"sas"];

$alfabe=array("a","b","c","d","e","f","g","ğ","h","ı","i","j","k","l","m","n","o","ö","p","r","s","ş","t","u","ü","v","y","z");

foreach($alfabe as $i=>$harf)
{echo shuffle($harf[$i])."<br/>";
}
*/

////çok boyutlu dizi
/*

  $cokboyutlu=array (
					array("ad"=>array("mehmet","ali")), "soyad"=>"ateş"),
					array("ad"=>"hakan","soyad"=>"dinçeler")

									);
*/

$students= array (
		array(
			'name'=>array('first_name'=>"arzu",'last_name'=>"turan",'full_name'=>"Arzu Tuyan"),
			'surname'=>"Günal",
			'age'=>21
		),
	array(
		'name'=>array('first_name'=>"ahmet",'last_name'=>"turan",'full_name'=>"ahmet Tuyan"),
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
	),
	/*array(
		'name'=>"Büşra ",
		'surname'=>"uman",
		'age'=>22
	),
	array(
		'name'=>"arzu",
		'surname'=>"Günal",
		'age'=>21
	),

	/*"hakan","mehmet","osman","uğur","selami",*/

);
///var_dump($students);
echo "<br/>";
/*asort($students[]["age"]);
foreach($students as $ogr)
{
	//echo $ogr;
	echo $ogr["name"]['first_name']. "-".$ogr['name']["full_name"]."-".$ogr["age"]."<br/>";

}*/
/// students dizinini sıralama

//$kisiler=["ahmet"=>21,"mehmet"=>35,"ali"=>16,"veli"=>32,"zeki"=>43];
//asort($student);
var_dump($students);
echo "<hr/>";

ksort($students,SORT_STRING);
foreach($students as $key=>$v)
{
	echo $v["name"]["first_name"]."-".$v["name"]["last_name"]."-".$v["age"] ."<br>";


}echo "<hr/>";



$diziler= array  ( "hakan","mahmut","kemal","selim");

/////// ham halini sıralama
foreach($diziler as $k=>$v)
{
	echo "<pre>". $k."-".$v. "</pre>";
}
echo "<hr/>";

/////// yasa gore
asort($diziler);
foreach($diziler as $k=>$v)
{
	echo "<pre>". $k."-".$v. "</pre>";
}
echo "<hr/>";

/////// ada gore
ksort($diziler);
foreach($diziler as $k=>$v)
{
	echo "<pre>". $k."-".$v. "</pre>";
}
echo "<hr/>";

print_r($diziler);
echo "<hr/>";
asort($diziler);
print_r($diziler);

echo "<hr/>";
arsort($diziler);
print_r($diziler);
?>