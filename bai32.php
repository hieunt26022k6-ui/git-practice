<?php
// Bai 32 (Bai 2 - Thuc hanh Buoi 03): Tinh tong tien san pham
header('Content-Type: text/html; charset=utf-8');

$tenSanPham = "Áo thun";
$giaBan = 150000;      // gia 1 san pham (float/int)
$soLuong = 3;          // so luong mua (so nguyen)

$tongTien = $giaBan * $soLuong;

echo "Sản phẩm $tenSanPham - Số lượng: $soLuong - Tổng tiền: $tongTien VNĐ.";
?>
