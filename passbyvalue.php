<?php

function myFuncStringAdd(string $i, string $j): string
  {  
    $k = "{$i}{$j}";
    
    return $k;
}

echo myFuncStringAdd("make","function");