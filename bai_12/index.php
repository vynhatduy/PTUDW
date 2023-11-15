
<?php

function displayDirectory($path) {
    $files = glob($path . '/*');
    
    echo '<ul>';
    foreach ($files as $file) {
        if (is_dir($file)) {
            echo '<li>' . $file . '</li>';
            displayDirectory($file);
        } else {
            echo '<li>' . $file . '</li>';
        }
    }
    echo '</ul>';
}

// Đường dẫn thư mục cố định
$directory = 'C:\xampp\htdocs';

// Hiển thị nội dung thư mục
displayDirectory($directory);
?>

