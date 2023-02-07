<?php
//
$i = 7;
switch($i) {
    case 0:
        echo "i は 0です \n";
        break;
        
    case 1:
        echo "i は 1です \n";
        break;
        
    default:
        echo "i は 0と1 以外です \n";
        break;
}

//php8
$i = 2;
switch($i) {
    case '2a':
        echo "i='2a' \n";
        break;
        
    case '2':
        echo "i='2' \n";
        break;
        
    case 2:
        echo "i=2 \n";
        break;
}