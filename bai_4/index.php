
<?php
class ATM
{
    private $balance = 1000; // Số dư khởi tạo là 1000 đồng
    
    public function withdraw($amount)
    {
        if ($amount > $this->balance) {
            echo "Số dư không đủ!";
        } else {
            $this->balance -= $amount;
            echo "Rút tiền thành công. Số dư còn lại: " . $this->balance . " đồng";
        }
    }
}

$atm = new ATM();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = $_POST['amount'];
    $atm->withdraw($amount);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Máy ATM</title>
</head>
<body>
    <h1>Máy ATM</h1>
    <form method="post" action="">
        Số tiền muốn rút: <input type="text" name="amount"><br><br>
        <input type="submit" value="Rút tiền">
    </form>
</body>
</html>

