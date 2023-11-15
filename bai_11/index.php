
<?php
// Kiểm tra xem người dùng đã submit form hay chưa
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $content = $_POST['content'];
    
    // Đường dẫn tới tập tin cần chỉnh sửa
    $file = './index.txt';

    // Mở tập tin
    $handle = fopen($file, 'w');

    // Ghi nội dung vào tập tin
    fwrite($handle, $content);

    // Đóng tập tin
    fclose($handle);

    echo 'Tập tin đã được chỉnh sửa thành công!';
}

// Form để nhập nội dung cần chỉnh sửa
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit File</title>
</head>
<body>
    <form method="POST">
        <textarea name="content" rows="10" cols="30"><?php echo file_get_contents('./index.txt'); ?></textarea><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>

