
<?php
// Kiểm tra xem form đã được submit chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Biểu thức chính quy để kiểm tra định dạng email
    $email_pattern = '/^[a-zA-Z0-9]+([_\.-][a-zA-Z0-9]+)*@[a-zA-Z0-9]+([\.-][a-zA-Z0-9]+)*(\.[a-zA-Z]{2,4})$/';
    
    // Kiểm tra dữ liệu
    if (empty($name)) {
        echo "Vui lòng nhập tên.";
    } elseif (empty($email)) {
        echo "Vui lòng nhập email.";
    } elseif (!preg_match($email_pattern, $email)) {
        echo "Email không hợp lệ.";
    } else {
        // Nếu dữ liệu hợp lệ, xử lý form ở đây
        echo "Dữ liệu hợp lệ.";
    }
}
?>

<!-- Form để người dùng nhập -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="name">Tên:</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email">
    <br>
    <input type="submit" value="Submit">
</form>


<?php
// Kiểm tra xem form đã được submit chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Biểu thức chính quy để kiểm tra định dạng email
    $email_pattern = '/^[a-zA-Z0-9]+([_\.-][a-zA-Z0-9]+)*@[a-zA-Z0-9]+([\.-][a-zA-Z0-9]+)*(\.[a-zA-Z]{2,4})$/';
    
    // Kiểm tra dữ liệu
    if (empty($name)) {
        echo "Vui lòng nhập tên.";
    } elseif (empty($email)) {
        echo "Vui lòng nhập email.";
    } elseif (!preg_match($email_pattern, $email)) {
        echo "Email không hợp lệ.";
    } else {
        // Nếu dữ liệu hợp lệ, xử lý form ở đây
        echo "Dữ liệu hợp lệ.";
    }
}
?>

<!-- Form để người dùng nhập -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="name">Tên:</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email">
    <br>
    <input type="submit" value="Submit">
</form>

