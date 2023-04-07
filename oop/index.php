<?php 
include_once("Animal.php");
include_once("Frog.php");
include_once("Ape.php");

$hewan = new Animal("Shaun");
echo "Name : " .$hewan->name ."<br>";
echo "Legs : " .$hewan->legs ."<br>";
echo "Cold Blooded : " .$hewan->cold_blooded ."<br> <br>";

$katak = new Frog("Buduk");
echo "Name : " .$katak->name ."<br>";
echo "Legs : " .$katak->legs ."<br>";
echo "Cold Blooded : " .$katak->cold_blooded ."<br>";
echo "Jump : " .$katak->jump ."<br> <br>";

$monyet = new Ape("Kera Sakti");
echo "Name : " .$monyet->name ."<br>";
echo "Legs : " .$monyet->legs ."<br>";
echo "Cold Blooded : " .$monyet->cold_blooded ."<br>";
echo "Yell : " .$monyet->yell;
?>
