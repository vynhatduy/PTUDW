<?php
function getZodiacSign($month, $day) {
    if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        return "Bảo Bình";
    } else if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
        return "Song Ngư";
    } else if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
        return "Bạch Dương";
    } else if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        return "Kim Ngưu";
    } else if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 21)) {
        return "Song Tử";
    } else if (($month == 6 && $day >= 22) || ($month == 7 && $day <= 22)) {
        return "Cự Giải";
    } else if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
        return "Sư Tử";
    } else if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        return "Xử Nữ";
    } else if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
        return "Thiên Bình";
    } else if (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
        return "Thiên Yết";
    } else if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
        return "Nhân Mã";
    } else {
        return "Ma Kết";
    }
}

$month = 9; // Tháng sinh
$day = 11;  // Ngày sinh

echo getZodiacSign($month, $day); // In ra cung hoàng đạo
?>
