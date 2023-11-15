
<?php
// Mảng chứa dữ liệu cho select box
$options = array(
    'Option 1',
    'Option 2',
    'Option 3',
    'Option 4'
);

// Xử lý khi form được gửi đi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedOption = $_POST['selectOption'];
    echo 'Option được chọn: ' . $selectedOption;
}
?>

<form method="post">
    <label for="selectOption">Chọn một option:</label><br>
    <select name="selectOption" id="selectOption">
        <?php foreach ($options as $option) : ?>
        <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
        <?php endforeach; ?>
    </select><br>
    <input type="submit" value="Submit">
</form>

