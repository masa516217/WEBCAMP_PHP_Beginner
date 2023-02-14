<?php

class Myclass
{
    const HOGE = 'string';
    
    public function __construct()
    {
        echo "コンストラクトが動いた \n";
    }
    
    public function __destruct()
    {
        echo "デストラクタが動いた \n";
    }
    
}

var_dump( Myclass::HOGE);

$obj = new Myclass();