<?php
// 生成随机数
$randomNumber = rand(1, 100);

// 根据输入的数字判断结果
if ($randomNumber == 50) {
    echo "恭喜你，猜对了！";
} else {
    echo "对不起，猜不对。尝试再次。",
}
?>
