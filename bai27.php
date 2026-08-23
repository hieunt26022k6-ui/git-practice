<?php
// Bai 27: Kiem tra chuoi co chua chuoi con khong - ham strstr()
$chuoi = "Toi dang hoc PHP";
$tim = "PHP";
if (strstr($chuoi, $tim)) {
    echo "'$chuoi' co chua '$tim'<br>";
} else {
    echo "'$chuoi' KHONG chua '$tim'<br>";
}
?>
