
<?php
$url = 'https://tuoitre.vn/chu-tich-nuoc-giao-nhiem-vu-thuc-day-viet-kieu-my-dau-tu-ve-nuoc-20231115155631687.htm'; // Đường dẫn của trang báo

// Khởi tạo yêu cầu cURL
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Trả về kết quả của yêu cầu thành một chuỗi

// Gửi yêu cầu cURL và lấy phản hồi
$response = curl_exec($curl);
curl_close($curl);

// Kiểm tra nếu có lỗi
if($response==false){
    die('Error:'.curl_close($curl));
}

// lấy nội dung
preg_match_all('/<h1>(.*?)<\/h1>/', $response, $title);
preg_match_all('/<div class="detail_content">(.*?)<\/div>/', $response, $content);

for( $i= 0; $i<count($title[1]);$i++){
    echo 'Tiêu đề'.$title[1][$i].'<br>';
    echo'Nội dung'.$title[1][$i].'<br><br>';
};
?>

