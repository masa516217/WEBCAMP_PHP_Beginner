<?php

echo "\n continue の確認\n";
for($i = 0; $i < 10; ++$i) {
    echo "{$i} は奇数かな \n";
    if ( ($i % 2) === 1 ) {
        //数なのでcontinnueする(以降の処理をスキップする)
        continue;
    }
    echo "偶数でした!! \n";
}

//break check
echo "\n break check \n";
$i = 0;
while($i < 10) {
    echo "{$i} \n";
    
    if ($i >= 5) {
        echo "{$i}なのでループを抜けます \n";
        break;
    }
    ++$i;
}