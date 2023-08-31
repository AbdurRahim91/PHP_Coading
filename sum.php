<?php
class calculation{
    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
}
$obj = new calculation();
$obj->a = 10;
$obj->b = 15;

echo 'Sum of A and B is:' . $obj->sum();


?>