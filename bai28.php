<?php
// Bai 28: Thay tat ca ky tu khong phai chu cai hoac so - ham preg_replace()
$chuoi = "Hello@World#123!";
echo "Chuoi goc: '$chuoi'<br>";
// [^a-zA-Z0-9] = bat ky ky tu nao khong phai chu hoa, chu thuong hoac so
echo "Sau preg_replace: " . preg_replace("/[^a-zA-Z0-9]/", "-", $chuoi) . "<br>";
?>
