<meta charset="utf-8"><?php
 
if (isset($_POST["ad"]))
{
 echo "hoşgeldiniz : ". $_POST["ad"];

}

if (isset($_COOKIE["kullanici"]))
{
 
}

else {
?>
<form action ="" method=post >
isminizi giriniz:<input type=text name=ad size=20>
<input type=submit value="Onayla">
</form>


<?php


}
 
?>
 
