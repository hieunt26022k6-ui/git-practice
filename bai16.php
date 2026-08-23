<?php
// Bai 16: Kiem tra chuoi bat dau bang chuoi con - ham strncmp()
$chuoi = "Xin chao, toi la Hieu";
$batDau = "Xin";
if (strncmp($chuoi, $batDau, strlen($batDau)) === 0) {
    echo "'$chuoi' bat dau bang '$batDau'<br>";
} else {
    echo "'$chuoi' KHONG bat dau bang '$batDau'<br>";
}
?>
