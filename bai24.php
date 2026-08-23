<?php
// Bai 24: Noi cac phan tu cua mang thanh chuoi - ham implode()
$mang = array("PHP", "HTML", "CSS", "JavaScript");
echo "Mang:<br>";
print_r($mang);
echo "<br>";
echo "Chuoi sau implode: " . implode(" - ", $mang) . "<br>";
?>
