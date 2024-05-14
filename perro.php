<?php
class perro{
    // declaracion de propiedades
    private int $peso = 50;
    private string $raza = 'sin raza';
    private string $color = 'sin color';
    private string $nombre = 'sin nombre';

    // Constructor
    public function __construct($nombre, $raza, $color, $peso) {
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->color = $color;
        $this->peso = $peso;
    }
    // Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getRaza() {
        return $this->raza;
    }

    public function getColor() {
        return $this->color;
    }

    public function getPeso() {
        return $this->peso;
    }

    // Setters (opcional)
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setRaza($raza) {
        $this->raza = $raza;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }
}