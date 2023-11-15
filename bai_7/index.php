
<?php
function convertNumberToWords($number) {
    $number = str_replace(',', '', $number);
    $number = str_replace(' ', '', $number);
    $number = ltrim($number, '0');
    
    if ($number == '') {
        return 'Không';
    }
    
    $len = strlen($number);
    $words = array();
    $units = array('', 'nghìn', 'triệu', 'tỷ');
    
    $list1 = array('không', 'một', 'hai', 'ba', 'bốn', 'năm', 'sáu', 'bảy', 'tám', 'chín', 'mười', 'mười một', 'mười hai', 'mười ba', 'mười bốn', 'mười năm', 'mười sáu', 'mười bảy', 'mười tám', 'mười chín');
    
    $list2 = array('hai', 'ba', 'bốn', 'năm', 'sáu', 'bảy', 'tám', 'chín', 'mười');
    
    $list3 = array('mươi', 'trăm');
    
    $num = sprintf("%{$len}s", $number);
    $num = str_replace(' ', '0', $num);
    
    $i = $len - 1;
    $flag = false;
    
    while ($i >= 0) {
        $flag2 = false;
        $threeDigits = substr($num, $i - 2, 3);
        
        if ($threeDigits != '   ') {
            $j = 2;
            $length = strlen($threeDigits);
            
            while ($j >= 0) {
                if ($threeDigits[$j] != '0') {
                    if ($j == 2) {
                        $words[] = $list1[$threeDigits[$j]] . ' ' . $list3[1];
                    } elseif ($j == 1 && $threeDigits[$j] == '1') {
                        $words[] = $list1[$threeDigits[$j - 1] + 10];
                        $flag2 = true;
                    } elseif ($j == 0 && $threeDigits[$j] == '1') {
                        if ($flag2) {
                            $words[count($words) - 1] .= ' mười';
                        } else {
                            $words[] = 'mười';
                        }
                    } elseif ($j == 0 && $threeDigits[$j] != '1') {
                        if ($flag2) {
                            $words[count($words) - 1] .= ' mười ' . $list1[$threeDigits[$j]];
                            $flag2 = false;
                        } else {
                            $words[] = $list1[$threeDigits[$j]];
                        }
                    } else {
                        $words[] = $list1[$threeDigits[$j]];
                    }
                }
                
                $j--;
            }
            
            if ($flag) {
                $words[] = $units[$i / 3];
                $flag = false;
            }
            
            if (!$flag && substr($num, $i - 2, 3) != '000') {
                $flag = true;
            }
        }
        
        $i -= 3;
    }
    
    $words = array_reverse($words);
    $result = implode(' ', $words);
    
    return ucfirst($result);
}

if (isset($_POST['number'])) {
    $number = $_POST['number'];
    $result = convertNumberToWords($number);
    echo $result;
}
?>

<form method="POST">
    <label for="number">Nhập số:</label>
    <input type="text" id="number" name="number" required>
    <button type="submit">Chuyển đổi</button>
</form>

