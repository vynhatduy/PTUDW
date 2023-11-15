
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="POST" action="index.php">
        <input type="number" name="num1" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Kiểm tra xem người dùng đã nhấn nút "Calculate" hay chưa
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
        $num1 = $_POST['num1']; // Lấy giá trị số thứ nhất từ form
        $num2 = $_POST['num2']; // Lấy giá trị số thứ hai từ form
        $operator = $_POST['operator']; // Lấy giá trị phép tính từ form

        $result = calculate($num1, $num2, $operator); // Gọi hàm calculate để tính toán

        echo "Result: $result"; // Hiển thị kết quả tính toán lên trang web
    }

    // Hàm tính toán dựa trên giá trị số thứ nhất, số thứ hai và phép tính
    function calculate($a, $b, $op) {
        switch ($op) {
            case '+':
                return $a + $b;
            case '-':
                return $a - $b;
            case '*':
                return $a * $b;
            case '/':
                if ($b == 0) {
                    return "Error: Cannot divide by zero";
                } else {
                    return $a / $b;
                }
            default:
                return "Invalid operator";
        }
    }
    ?>
</body>
</html>

