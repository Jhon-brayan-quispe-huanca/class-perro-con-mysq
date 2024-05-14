<?php

declare(strict_types=1);

require_once('./Perro.php');

$perro1 = new Perro;

// Establecer el nombre del perro
$errorNombre = $perro1->setNombre('bulldog');
echo $errorNombre ? "Nombre del perro actualizado: " : "Error al actualizar el nombre del perro:\n ";

// Establecer el peso del perro
$errorPeso = $perro1->setPeso(60);
echo $errorPeso ? "Peso del perro actualizado  <br>" :"Error al actualizar el peso del perro </br>";

// Establecer el color del perro
$errorColor = $perro1->setColor('marrón');
echo $errorColor ? "Color del perro actualizado  <br>" :"Error al actualizar el color del perro </br>";

// Establecer la raza del perro
$errorRaza = $perro1->setRaza('Labrador');
echo $errorRaza ? "Raza del perro actualizada  <br>" :"Error al actualizar la raza del perro </br>";

// Obtener y mostrar las propiedades del perro
$propiedades_perro = $perro1->getPropiedades();
list($raza, $peso, $color, $nombre) = explode(',', $propiedades_perro);
echo "<br></br>";
echo "<br> Nombre: <b>".$nombre."</br>";
echo "<br> Peso: <b>".$peso."</br>";
echo "<br> Color: <b>".$color."</br>";
echo "<br> Raza: <b>".$raza."</br>";

