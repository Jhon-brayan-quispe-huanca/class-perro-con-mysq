<?php

class Perro {

  // Propiedades
  private string $raza = "sin raza";
  private int $peso = 0;
  private string $color = "sin color";
  private string $nombre = "sin nombre";

  // Métodos
  public function getPropiedades(): string {
    return "$this->raza,$this->peso,$this->color,$this->nombre";
  }

  public function setNombre(string $valor): bool {
    $mensaje_error = true;
    (ctype_alpha($valor) && strlen($valor) <= 20) ? $this->nombre = $valor : $mensaje_error = false;
    return $mensaje_error;
  }

  public function setPeso(int $valor): bool {
    $mensaje_error = true;
    ($valor >= 0 && $valor <= 60) ? $this->peso = $valor : $mensaje_error = false;
    return $mensaje_error;
  } 
  public function setColor(string $valor): bool {
    $mensaje_error = true;
    // Validar aquí el color si es necesario
    $this->color = $valor;
    return $mensaje_error;
  } 

  public function setRaza(string $valor): bool {
    $mensaje_error = true;
    // Validar aquí la raza si es necesario
    $this->raza = $valor;
    return $mensaje_error;
  } 
}