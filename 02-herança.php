<?php

class Conta
{
    var $number;
    var $name;
}

class ContaPfis
{
    var $number;
    var $name;
    var $cpf;

    public function setNumber(String $number)
    {
        $this->number = $number;
    }

    public function getNumber(): String
    {
        return $this->number;
    }

    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function getName(): String
    {
        return $this->name;
    }

    public function setCPF(String $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCPF(): String
    {
        return $this->cpf;
    }

    public function getData(): String
    {
        return "Nome: {$this->name}, Numero: {$this->number}, CPF: {$this->cpf}";
    }
}

class ContaPJUR
{
    var $number;
    var $name;
    var $cnpj;

    public function setNumber(String $number)
    {
        $this->number = $number;
    }

    public function getNumber(): String
    {
        return $this->number;
    }

    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function getName(): String
    {
        return $this->name;
    }

    public function setCNPJ(String $cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getCNPJ(): String
    {
        return $this->cnpj;
    }

    public function getData(): String
    {
        return "Nome: {$this->name}, Numero: {$this->number}, CNPJ: {$this->cnpj}";
    }
}

$werlen = new ContaPfis();
$werlen->setNumber('123456');
$werlen->setName('Werlen Cardoso');
$werlen->setCPF('22211133322');
echo $werlen->getData();

echo '<hr>';

$uhcardosoti = new ContaPJUR();
$uhcardosoti->setName('Uhcardoso TI');
$uhcardosoti->setNumber('314598789');
$uhcardosoti->setCNPJ('78945612398478');
echo $uhcardosoti->getData();
