<?php

$i = 0;
$j = 1;

echo "{$i} \n";
echo "{$j} \n";

while($j <= 10000) {
    $k = $i + $j;
    
    echo "{$k} \n";
    
    $i = $j;
    $j = $k;
    
}

    
