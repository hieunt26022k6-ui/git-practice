<?php
// Bai 25: Them chuoi vao dau hoac cuoi - ham str_pad()
$chuoi = "PHP";
echo "Chuoi goc: '$chuoi'<br>";
echo "Them vao ben trai: '" . str_pad($chuoi, 10, "*", STR_PAD_LEFT) . "'<br>";
echo "Them vao ben phai: '" . str_pad($chuoi, 10, "*", STR_PAD_RIGHT) . "'<br>";
?>
