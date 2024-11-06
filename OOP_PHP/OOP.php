<?php
class A{
    public $a1=1;
    protected $a2=2;
    private $a3=3;
    public function F1(){
        echo $this->a1 + $this->a2;
    }
    public const PI=3.14;
}
$a1=new A();
$a2=new A();
print_r($a1);
$a1->a1=4;
$a1->F1();
$a2->F1();
$x=A::PI;
echo $x;
// $y=$a1->a2;
// echo $y;