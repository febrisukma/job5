<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Function dengan Nilai Kembali:.</title>
</head>

<body>
<?php
echo"<b>";
function panggil($nilai1,$nilai2)
{
	$total=$nilai1*$nilai2;
	return $total;
}
$a=55;
$i=34;
	$total=$a+$i;
	echo"Nilai \$total sebelum function adalah $i + $a = $total <br>";
	
	$total=panggil($a,$i);
	echo"Nilai \$total setelah function adalah $total (perkalian $a x $i)";
	echo"</b>";
	?>
</body>
</html>
