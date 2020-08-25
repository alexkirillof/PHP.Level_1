<?php
$a = 5;
$b = 3;
function summ($a, $b)
{
        return $a + $b;
}

function subtract($a, $b)
{
        return $a - $b;
}

function mult($a, $b)
{
        return $a * $b;
}

function divis($a, $b)
{
        return $a / $b;
}

function mathOperation($arg1, $arg2, $operation)
{

        switch ($operation) {
                case "сложение":
                        return summ($arg1, $arg2);
                case "вычитание":
                        return subtract($arg1, $arg2);
                case "умножение":
                        return mult($arg1, $arg2);
                case "деление":
                        return divis($arg1, $arg2);
        }
}
echo mathOperation(100, 4, "деление");
