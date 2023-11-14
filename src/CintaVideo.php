<?php

class CintaVideo extends Soporte
{
    protected $duracion;
    public function __construct($titulo, $numero, $precio, $duracion)
    {
        parent::__construct($titulo, $numero, $precio);
        $this->duracion = $duracion;
    }

    public function muestraResumen()
    {
        $resumen = parent::muestraResumen();
        $resumen .= "<p>Duración (minutos): " . $this->duracion . "</p>";
        return $resumen;
    }
}
