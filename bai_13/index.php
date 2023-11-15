
<html>
<body>

<?php
// Thư mục lưu trữ tệp tải lên
$target_dir = "uploads/";

// Kiểm tra nếu người dùng đã chọn tệp
if(isset($_FILES["fileToUpload"])){
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;

    // Kiểm tra xem tệp đã tồn tại hay chưa
    if (file_exists($target_file)) {
        echo "Tệp đã tồn tại.";
        $uploadOk = 0;
    }

    // Kiểm tra kích thước tệp
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Tệp tải lên quá lớn.";
        $uploadOk = 0;
    }

    // Kiểm tra loại tệp
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
    $file_extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(!in_array($file_extension, $allowed_types)){
        echo "Chỉ được tải lên các tệp JPG, JPEG, PNG và GIF.";
        $uploadOk = 0;
    }

    // Kiểm tra nếu $uploadOk = 0, không upload tệp
    if ($uploadOk == 0) {
        echo "Tệp không được tải lên.";
    } else {
        // Upload tệp vào thư mục lưu trữ
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Tệp ". basename( $_FILES["fileToUpload"]["name"]). " đã được tải lên thành công.";
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp.";
        }
    }
}
?>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="fileToUpload">Chọn tệp để tải lên:</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <label for="targetPath">Chọn thư mục lưu trữ:</label>
    <input type="text" name="targetPath" id="targetPath" value="<?php echo $target_dir; ?>">
    <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>

