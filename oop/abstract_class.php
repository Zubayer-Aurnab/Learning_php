<?php
abstract class Test
{
    abstract function print();
}

class Examp extends Test
{
    function print()
    {
        echo "hellow from examp";
    }
}
$obj = new Examp;
$obj->print();
