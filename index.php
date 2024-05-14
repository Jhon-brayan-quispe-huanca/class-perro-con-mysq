<?php
declare(strict_types=1);

// Llamado de clases
require_once('./perro.php');

// Creación de objetos
$Perro1 = new perro("Firulais", "Bulldog", "Café", 50);

// Imprimiendo datos
echo "Nombre del perro: " . $Perro1->getNombre() . PHP_EOL;
echo "Raza del perro: " . $Perro1->getRaza() . PHP_EOL;
echo "Color del perro: " . $Perro1->getColor() . PHP_EOL;
echo "Peso del perro: " . $Perro1->getPeso() . " kg" . PHP_EOL; 