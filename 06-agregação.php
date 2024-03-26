<?php

class Carrinho
{
    private $items = [];

    public function add(Produto $product)
    {
        array_push($this->items, $product);
    }

    public function all() : array
    {
        return $this->items;
    }
}

class Produto
{
    public $name;
}

$p1 = new Produto;
$p1->name = "DVD";

$p2 = new Produto;
$p2->name = "VAZO";

$p3 = new Produto;
$p3->name = "ROUPA";

$cart = new Carrinho;
$cart->add($p1);
$cart->add($p2);
$cart->add($p3);
$items = $cart->all();
foreach ($items as $product) {
    echo "Nome: {$product->name} <br/>";
}
 