<?php

$i = 1;
echo "等しいかどうか \n";
var_dump($i === 1);
var_dump($i === 2);

echo "\n";
echo "等しくないかどうか \n";
var_dump($i !== 1);
var_dump($i !== 2);

echo "\n";
echo "等しいかどうか(文字列)\n";
$s = 'abc';
var_dump($s === 'abc');
var_dump($s === 'ABC');
var_dump($s === 'a');

// == and === difference points 1
echo "\n";
echo "== and === check 1\n";
var_dump($i == 1);
var_dump($i === 1);

//2
echo "\n";
echo "== and === check 2\n";
var_dump($i == '1');
var_dump($i === '1');

//2a prodlem
echo "2a check\n";
$i = 2;
var_dump($i == '2a');
var_dump($i === '2a');