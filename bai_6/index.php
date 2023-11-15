
<?php
// Các câu hỏi và điểm tương ứng
$questions = array(
    "Câu hỏi 1: Bạn thích loại vật nào" => array(
        "Dog" => 1,
        "Cat" => 2,
    ),
    "Câu hỏi 2: Bạn có cảm tình với màu sắc nào" => array(
        "Red" => 2,
        "Green" => 1,
        "Blue"=>3,
    ),
    // Thêm các câu hỏi khác tùy ý
);

// Tạo biến để lưu điểm của người dùng
$score = 0;

// Kiểm tra nếu form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lặp qua câu hỏi và tính điểm
    foreach ($questions as $question => $answers) {
        // Kiểm tra nếu người dùng đã chọn câu trả lời cho câu hỏi này
        if (isset($_POST[$question])) {
            // Tăng điểm nếu câu trả lời của người dùng trùng khớp với câu trả lời đúng
            if ($_POST[$question] == array_search(max($answers), $answers)) {
                $score += max($answers);
            }
        }
    }

    // Hiển thị kết quả
    echo "Điểm của bạn là: " . $score;
}
?>

<!-- HTML Form -->
<form method="POST" action="">
    <?php
    // Hiển thị câu hỏi và các trả lời
    foreach ($questions as $question => $answers) {
        echo "<p>$question</p>";
        foreach ($answers as $answer => $value) {
            echo "<input type='radio' name='$question' value='$answer'> $answer<br>";
        }
    }
    ?>
    <br>
    <input type="submit" value="Đánh giá">
</form>

