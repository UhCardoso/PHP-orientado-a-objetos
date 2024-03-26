<?php

class Str
{
    public function __call($name, $arguments)
    {
        if ($name == 'upper') {
            return strtoupper($arguments[0]);
        }
    }

    static public function __callStatic($name, $arguments)
    {
        if ($name == 'upper') {
            return strtoupper($arguments[0]);
        }
    }

    public function __toString()
    {
        return 'Algo';
    }
}

$obj = new Str;
echo $obj->upper('valor');
echo '<hr/>';
echo Str::upper('Value');
echo '<hr/>';

