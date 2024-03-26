<?php

class Product 
{
    var $name; 
    var $description;
    var $price;
    var $peso;

    function get(): String
    {
        return "descrição: {$this->description}<br> preço: {$this->price}<br> {$this->peso} <hr>";
    }

    function setName(String $name)
    {
        $this->name = $name;
    }

    function getName(): String
    {
        return strtoupper($this->name);
    }

    function getDescription(): String
    {
        return $this->description;
    }

    function getPrice(): String
    {
        return $this->price;
    }

    function getPeso(): String
    {
        return $this->price;
    }
}

$tv = new Product;
$tv->setName('TV');
$tv->description = 'smart TV';
$tv->price = '2500';
$tv->peso = '600kg';
echo 'nome: '.$tv->getName().'<br>';
echo 'description: '.$tv->getDescription().'<br>';
echo 'preço: '.$tv->getPrice().'<br>';
echo 'peso: '.$tv->getPeso().'<br>';

$geladeira = new Product;
$geladeira->setName('geladeira');
$geladeira->description = 'Degelo automatico';
$geladeira->price = 2500;
$geladeira->peso = '40kg';
echo 'nome: '.$geladeira->getName().'<br>';
echo 'description: '.$geladeira->getDescription().'<br>';
echo 'preço: '.$geladeira->getPrice().'<br>';
echo 'peso: '.$geladeira->getPeso().'<br>';

$microondas = new Product;
$microondas->setName('microondas');
$microondas->description = '10 litros';
$microondas->price = 400;
$microondas->peso = '4kg';
echo 'nome: '.$microondas->getName().'<br>';
echo 'description: '.$microondas->getDescription().'<br>';
echo 'preço: '.$microondas->getPrice().'<br>';
echo 'peso: '.$microondas->getPeso().'<br>';
