
<!DOCTYPE html>
<html>
<head>
    <title>Gửi Email</title>
</head>
<body>
    <?php
    // Xác định các biến để lưu thông tin người dùng
    $to = '';
    $subject = '';
    $message = '';

    // Kiểm tra khi người dùng gửi form
    if (isset($_POST['submit'])) {
        // Lấy thông tin từ form
        $to = $_POST['to'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Gửi email
        if (mail($to, $subject, $message)) {
            echo "Email đã được gửi thành công.";
        } else {
            echo "Có lỗi xảy ra khi gửi email.";
        }
    }
    ?>

    <h2>Gửi Email</h2>
    <form method="post" action="">
        <label for="to">Gửi tới:</label><br>
        <input type="email" id="to" name="to" value="<?php echo $to; ?>"><br>

        <label for="subject">Tiêu đề:</label><br>
        <input type="text" id="subject" name="subject" value="<?php echo $subject; ?>"><br>

        <label for="message">Nội dung:</label><br>
        <textarea id="message" name="message"><?php echo $message; ?></textarea><br>

        <input type="submit" name="submit" value="Gửi Email">
    </form>
</body>
</html>
