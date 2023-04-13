<?php
//numerico
$numero = 4;
echo "<br>";
echo "Esto es una variable numerica <br>";
var_dump($numero);  //me da mas info de la variable, ej si es entero y que numero es

echo "<hr>";

//string
$palabra = "Esto es un string";
echo "<br>".$palabra."<br>";
var_dump($palabra); 

echo "<hr>";

//boleana
$boleana = true;
echo "<br>".$boleana."<br>";
var_dump($boleana); 

echo "<hr>";

//arrays
$colores = array("rojo","azul","verde");
echo "<br>";
echo "Esto es un array:$colores[1]<br>";
var_dump($colores);

echo "<hr>";

//arrays con propiedades
$verduras = array ("verdura1" => "lechuga", "verdura2" => "zanahoria", "verdura3" => "morron");
echo "<br>";
echo "Esto es un array con propiedades: $verduras[1]";
echo "<br>";
var_dump($verduras);

echo "<hr>";

//Variables objetos
$frutas = (object) ["fruta1"=>"pera", "fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1 <br>";
var_dump($frutas);

