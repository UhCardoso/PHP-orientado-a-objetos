<?php

class MyClass
{
    private $name;
    private $cpf;
    private $age;

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}

$obj = new MyClass;
$obj->name = 'Werlen';
$obj->cpf = '123654889';
$obj->age = 28;
echo $obj->cpf;
