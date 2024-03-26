<?php

class Escola
{
    const PID = 'asdfg5s';
    private static $saldo = 0.0;

    static public function getSaldo() : float
    {
        return self::$saldo;
    }

    static public function addSaldo(float $saldo)
    {
        self::$saldo += $saldo;
    }
}

class Aluno
{
    public $name;
    public $saldo = 0;

    public function addSaldo(float $saldo)
    {
        $this->saldo = $saldo;
    }

    public function getSaldo() : float
    {
        return $this->saldo;
    }

    public function novaCompra(float $valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;

            Escola::addSaldo($valor);
            
            echo "Compra aprovada com sucesso <br>";

            return true;
        } else {
            echo 'Saldo insuficiente <br>';
            
            return false;
        }
    }
}

echo "<hr>";
$aluno01 = new Aluno;
$aluno01->name = 'Werlen';
echo $aluno01->getSaldo();
echo '<br/>';
$aluno01->addSaldo(50.0);
echo $aluno01->getSaldo();
echo '<br/>';
$aluno01->novaCompra(20);
echo $aluno01->getSaldo();

echo "<hr>";

$aluno02 = new Aluno;
$aluno02->name = "Aluno fulano";
echo $aluno02->getSaldo();
echo "<br>";
$aluno02->addSaldo(100);
$aluno02->novaCompra(30);
echo $aluno02->getSaldo();

echo "<hr>";

echo Escola::getSaldo();
