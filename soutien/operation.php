<?php
    function add(int $nb1, int $nb2) : int
{
return $nb1 + $nb2;
}

    function substract(int $nb1, int $nb2) : int
{
return $nb1 - $nb2;
}

    function multiply(int $nb1, int $nb2) : int
{
return $nb1 * $nb2;
}

    function divide(int $nb1, int $nb2) : ?int
{
return $nb1 / $nb2;
}

    function modulo(int $nb1, int $nb2) : ?int
{
return $nb1 % $nb2;
}
?>