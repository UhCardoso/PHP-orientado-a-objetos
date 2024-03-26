<?php

class Pessoa
{
    private $name;

    public function setName(String $name) 
    {   
        $this->name = $name;
    } 

    public function getName() : String
    {
        return $this->name;
    }
}

$werlen = new Pessoa();
$werlen->setName('Werlen');
echo $werlen->getName();