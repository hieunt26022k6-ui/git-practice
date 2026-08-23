<?php
// Bai 14: Tim kiem chuoi con trong chuoi - ham strpos()
$chuoi = "Toi dang hoc PHP";
$tim = "PHP";
$vitri = strpos($chuoi, $tim);
if ($vitri !== false) {
    echo "Tim thay '$tim' tai vi tri: $vitri (vi tri dem tu 0)<br>";
} else {
    echo "Khong tim thay '$tim'<br>";
}
?>
