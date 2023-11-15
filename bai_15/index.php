
<?php
// Đường dẫn đến tập tin users.ini
$usersFile = 'users.ini';

// Kiểm tra xem người dùng đã gửi thông tin đăng nhập hay chưa
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Đọc nội dung tập tin users.ini
    $users = parse_ini_file($usersFile);

    // Kiểm tra xem thông tin đăng nhập có khớp trong tập tin users.ini hay không
    if (isset($users[$username]) && $users[$username] == $password) {
        // Tạo cookie để lưu thông tin đăng nhập trong vòng 20 giây
        $expire = time() + 20;
        setcookie('username', $username, $expire);

        // Chuyển hướng đến trang main.php
        header('Location: main.php');
        exit;
    } else {
        echo 'Thông tin đăng nhập không chính xác.';
    }
}

// Kiểm tra xem người dùng đã đăng nhập hay chưa bằng cookie
if (isset($_COOKIE['username'])) {
    // Kiểm tra xem cookie đã hết hạn hay chưa
    if (time() >= $_COOKIE['username']) {
        // Xóa cookie
        setcookie('username', '', time() - 3600);

        // Chuyển hướng lại trang đăng nhập
        header('Location: index.php');
        exit;
    } else {
        // Chuyển hướng đến trang main.php
        header('Location: main.php');
        exit;
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
    <form method="POST" action="">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="username" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>
