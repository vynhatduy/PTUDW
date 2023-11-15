
<?php
// Thực hiện yêu cầu HTTP để lấy nội dung HTML của trang web
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.vndirect.com.vn/portal/thong-ke-thi-truong-chung-khoan/lich-su-gia.shtml'); // URL của trang web cần lấy tỉ giá
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($ch);
curl_close($ch);

// Sử dụng biểu thức chính quy để trích xuất tỉ giá từ HTML
$pattern = '/<span class="exchange-rate">(\d+\.\d+)<\/span>/'; // Mẫu biểu thức chính quy
preg_match($pattern, $html, $matches);
$exchangeRate = $matches[1]; // Giá trị tỉ giá tìm thấy

// Hiển thị dữ liệu lên màn hình web
echo 'Tỉ giá: ' . $exchangeRate;
?>

