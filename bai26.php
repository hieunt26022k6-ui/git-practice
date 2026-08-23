<?php
// Bai 26: Kiem tra chuoi ket thuc bang chuoi con - ham strrchr()
$chuoi = "Toi dang hoc PHP";
$ketThuc = "PHP";
// strrchr() tra ve phan cuoi cua chuoi bat dau tu lan xuat hien cuoi cung
$phanCuoi = strrchr($chuoi, $ketThuc);
// Lay 3 ky tu cuoi cua chuoi va so sanh voi $ketThuc de ket luan
if ($phanCuoi !== false && substr($chuoi, -strlen($ketThuc)) === $ketThuc) {
    echo "'$chuoi' ket thuc bang '$ketThuc'<br>";
} else {
    echo "'$chuoi' KHONG ket thuc bang '$ketThuc'<br>";
}
?>
