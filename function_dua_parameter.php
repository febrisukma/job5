<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Function dengan 2 Parameter:.</title>
</head>

<body>
<?php
echo"<b>";
function panggil($param1,$param2)
{
	$total=$param1*$param2;
	echo"hasil perkalian dari $param1 x $param2 adalah $total";
	echo"<br>";
}
$a=4;
for($i=1;$i<=30;$i=$i+2)
	{ $a=$a+5;
		panggil($a,$i);
	}
	echo"</b>";
	?>
</body>
</html>
