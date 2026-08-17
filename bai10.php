<?php
// Bai 10: Trang gioi thieu ca nhan
// (Sua nam sinh va so thich cho dung voi ban than)
$hoTen   = "Nguyễn Trung Hiếu";
$namSinh = 2006;
$soThich = array("Lập trình", "Đọc sách", "Nghe nhạc");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giới thiệu bản thân</title>
</head>
<body>
    <h1>Giới thiệu bản thân</h1>
    <p>Họ tên: <?php echo $hoTen; ?></p>
    <p>Năm sinh: <?php echo $namSinh; ?></p>
    <p>Sở thích:</p>
    <ul>
        <?php foreach ($soThich as $st) {
            echo "<li>" . $st . "</li>";
        } ?>
    </ul>
    <?php // Het trang gioi thieu ?>
</body>
</html>
