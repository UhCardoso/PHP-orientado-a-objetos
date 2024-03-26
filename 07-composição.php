<?php

class Endereco
{
    public $rua;
    public $bairro;
}

class User 
{
    public $name;
    public $endereco;

    public function setEndereco(String $rua, String $bairro)
    {   
        $endereco = new Endereco();
        $endereco->rua = $rua;
        $endereco->bairro = $bairro;

        $this->endereco = $endereco;
    }

    public function getEndereco() : String
    {
        return "Endereço: {$this->endereco->rua}, {$this->endereco->bairro}";
    }
}

$werlen = new User;
$werlen->name = "werlen";
echo $werlen->name;
$werlen->setEndereco("Rua xxx", "bairro zzz");
echo $werlen->getEndereco();
