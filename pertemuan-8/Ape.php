<?php
require_once 'Animal.php';

class Ape extends Animal
{
    public $legs = 2;

    function yell()
    {
        return "Auooo";
    }
}