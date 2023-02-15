<?php

class MyTest2
{
    private $price;
    private $name;
    
    public function setprice($V)
    {
        $this->price = $v;
    }
    public function setname($t)
    {
        $this->name = $t;
    }
    
    public function getprice()
    {
        return $this->price;
    }
    public function getname()
    {
        return $this->name;
    }
}

$obj = new MyTest2();
var_dump($obj);
$obj->setprice('fff');
echo $obj->getprice() , "\n";

$obj->setname('ooo');
echo $obj->getname() , "\n";

