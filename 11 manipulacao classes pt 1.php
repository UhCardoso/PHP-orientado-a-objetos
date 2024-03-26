<?php

class MyClassDad
{

}

class MyClass extends MyClassDad
{
    public $name = "Qualquer";
    private $id;
    protected $lastName;

    public function method1() : string
    {
        return 'retorno metodo 1';
    }

    public function method2($prm = 'method2', $prm2 = 'default') : String
    {
        return "{$prm} - {$prm2}";
    }
    
    protected function method3() :void
    {
        
    }

    private function method4() :void
    {
        
    }
}

$obj = new MyClass;
// Retorna os métodos disponíveis na classe do objeto passado
echo "<p>get_parent_class</p>";
var_dump(get_class_methods($obj));
echo "<hr/>";
//get_class_methods('MyClass') // Tbm funciona passando o nome da classe
//---------------------------------------------------------------------

// Retorna os atributos publicos de uma classe passando o nome da classe
echo "<p>get_class_vars</p>";
var_dump(get_class_vars('MyClass'));
echo "<hr/>";

// Retorna os atributos publicos de uma classe passando o objeto
echo "<p>get_object_vars</p>";
var_dump(get_object_vars($obj));
echo "<hr/>";

// Recuperar o nome da classe de um objeto
echo "<p>get_class</p>";
var_dump(get_class($obj));
echo "<hr/>";

//retorna a classe pai do objeto que está sendo passado
echo "<p>get_parent_class</p>";
var_dump(get_parent_class($obj));
echo "<hr/>";

// retorna True ou False, verificando se o objeto passado é subclasse da classe passada no 2º parametro
echo "<p>is_subclass_of</p>";
var_dump(is_subclass_of($obj, 'MyClassDad'));
echo "<hr/>";

// retorna True ou False, verificando se um determinado método existe na classe informada independente da visibilidade
echo "<p>method_existsf</p>";
var_Dump(method_exists($obj, 'method1'));
echo "<hr/>";

// retorna True ou False, verificando se propriedade existe independente da visibilidade
echo "<p>property_exists</p>";
var_dump(property_exists($obj, 'name'));
echo "<hr/>";

// Chamar método de uma classe especifica
// Muito comum em sistema de roteamento no PHP
echo "<p>echo call_user_func</p>";

function teste($prm1, $prm2, $prm3) {
    return "{$prm1} - {$prm2} - {$prm3}";
}

$functionN = 'teste';
$className = 'MyClass';
$params = [1, 2, 3];
echo call_user_func($functionN, ... $params);
echo "<hr/>";

// Chamar método de uma classe especifica com array
echo "<p>call_user_func_array</p>";
$functionN2 = 'method2';
echo call_user_func_array([$obj, $functionN2], [123, 456]);
echo "<hr/>";

// retorna True ou False, verificando se uma classe existe
echo "<p>class_exists</p>";
$className2 = 'MyClass';
var_dump(class_exists($className));
echo "<hr/>";

// retorna True ou False, verificando se o objeto é especifico da classe que quer verificar ou se é da classe pai
echo "is_a</p>";
var_dump(is_a($obj, 'MyClass'));
echo "<hr/>";

// Retorna True ou False, verificando se o objeto é uma instância de uma determinada classe
echo "instanceof</p>";
var_dump($obj instanceof MyClass);
