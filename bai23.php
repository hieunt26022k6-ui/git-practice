<?php
// Bai 23: Tach chuoi thanh mang cac phan tu - ham explode()
$chuoi = "PHP,HTML,CSS,JavaScript";
$mang = explode(",", $chuoi);
echo "Chuoi goc: '$chuoi'<br>";
echo "Mang sau explode:<br>";
print_r($mang);
echo "<br>";
?>
