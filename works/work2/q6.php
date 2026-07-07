<?php

// 以下の配列をの要素のうち文字数が偶数のもののみ表示するループを書いてください
$fruits = array("Apple", "Banana", "Cherry");

$fruits = array("Apple", "Banana", "Cherry");

for ($i = 0; $i < count($fruits); $i++) {
    if (mb_strlen($fruits[$i]) % 2 == 0) {
        echo $fruits[$i] . "\n";
    }
}
