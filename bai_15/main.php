
<!DOCTYPE html>
<html>
<head>
    <title>Trang đơn giản</title>
</head>
<body>
    <h1>Chào mừng đến với trang đơn giản</h1>
    <?php
        // Mã PHP
        if (isset($_COOKIE['username'])) {
            // Kiểm tra xem cookie đã hết hạn hay chưa
            if (time() >= $_COOKIE['username']) {
                // Xóa cookie
                setcookie('username', '', time() - 3600);
        
                // Chuyển hướng lại trang đăng nhập
                header('Location: main.php');
                exit;
            } else {
                // Chuyển hướng đến trang main.php
                header('Location: index.php');
                exit;
            }
        }
        echo "Xin chào!";
    ?>
</body>
</html>

