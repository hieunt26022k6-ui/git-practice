<?php
// Bai 31 (Bai 1 - Thuc hanh Buoi 03): Tinh tuoi hien tai
header('Content-Type: text/html; charset=utf-8');

$hoTen = "Nguyễn Trung Hiếu";
$namSinh = 2006;
$namHienTai = 2026;

$tuoi = $namHienTai - $namSinh;

echo "Xin chào $hoTen, năm nay bạn $tuoi tuổi.";
?>
