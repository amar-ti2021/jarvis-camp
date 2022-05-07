<?php
require_once 'Animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

$kambing = new Animal('Shaun');
echo "<p>Name : " . $kambing->name . "</p>";
echo "<p>Legs : " . $kambing->legs . "</p>";
echo "<p>Cold blooded : " . $kambing->cold_blooded . "</p>";
echo "<br>";
$kodok = new Frog('Buduk');
echo "<p>Name : " . $kodok->name . "</p>";
echo "<p>Legs : " . $kodok->legs . "</p>";
echo "<p>Cold blooded : " . $kodok->cold_blooded . "</p>";
echo "<p>jump : " . $kodok->jump() . "</p>";
echo "<br>";
$monyet = new Ape('Kera Sakti');
echo "<p>Name : " . $monyet->name . "</p>";
echo "<p>Legs : " . $monyet->legs . "</p>";
echo "<p>Cold blooded : " . $monyet->cold_blooded . "</p>";
echo "<p>Yell : " . $monyet->yell() . "</p>";
