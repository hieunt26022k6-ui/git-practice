<?php
// Bai 30: Kiem tra chuoi co phai email hop le khong - ham filter_var()
$email1 = "hieu@example.com";
$email2 = "hieu.example.com";
echo "Email: $email1 -> " . (filter_var($email1, FILTER_VALIDATE_EMAIL) ? "hop le" : "khong hop le") . "<br>";
echo "Email: $email2 -> " . (filter_var($email2, FILTER_VALIDATE_EMAIL) ? "hop le" : "khong hop le") . "<br>";
?>
