<?php 
class Dvd extends Soporte{
    public $idiomas;
    protected $formatPantalla;
    public function __construct($titulo, $numero, $precio, $idiomas, $formatPantalla) {
        parent::__construct($titulo, $numero, $precio);
        $this->idiomas = $idiomas;
        $this->formatPantalla = $formatPantalla;
    }

    public function muestraResumen() {
        $resumen = parent::muestraResumen();
        $resumen .= "<p>Idiomas disponibles: ".$this->idiomas."</p>";
        $resumen .= "<p>Formato de Pantalla: ".$this->formatPantalla."</p>";
        return $resumen;
    }
}