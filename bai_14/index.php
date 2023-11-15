
<?php
session_start();

// Kiểm tra xem người dùng đã gửi thông tin đăng nhập hay chưa
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy thông tin đăng nhập gửi từ người dùng
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Kiểm tra thông tin đăng nhập
    if ($username === '11092003' && $password === '11092003') {
        // Lưu thông tin đăng nhập vào session
        $_SESSION['username'] = $username;
        
        // Chuyển hướng đến trang chính sau khi đăng nhập thành công
        header('Location: main.php');
        exit();
    } else {
        // Hiển thị thông báo lỗi nếu thông tin không chính xác
        $error = 'Thông tin đăng nhập không chính xác.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    
    <?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } ?>
    
    <form method="POST" action="">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username"><br>
        
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password"><br>
        
        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>

