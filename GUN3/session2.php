<meta charset="utf8"><?php
session_start();
 
 function token()
	{$str="";
for($i=0;$i<=10;$i++)
{//$str.=chr(RAND(1,100));
}

$str.=RAND(0,9999999999999);
$_SESSION["x"]=$str;
return "üretilen değer:<br/>".$str;

}

 
echo token();
?>
