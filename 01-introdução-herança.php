<?php

class Product
{
    var $name;
    var $description;
    var $price;

    function __construct(String $name, String $desc, String $price)
    {
        $this->name = $name;
        $this->description = $desc;
        $this->price = $price;
    }

    function get()
    {
        return "{$this->name}, {$this->description}, {$this->price} <hr/>";
    }

    function __destruct()
    {
        // usado em diferentes casos
        //EX: limpar variaveis, encerrar conexão com banco de dados

        echo "destruct";
    }
}


$product1 = new Product('tv', 'philco', '2000');
$product1->get();

$product2 = new Product('geladeira', 'electrolux', '3100');
$product2->get();
