<?php
class Soporte
{
    private const IVA = 1.21;
    public $titulo;
    protected $numero;
    private $precio;

    public function __construct($titulo, $numero, $precio)
    {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getPrecioConIva()
    {
        return $this->precio * self::IVA;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function muestraResumen()
    {
        $resumen = "<p>Título: " . $this->titulo . "</p>";
        $resumen .= "<p>Número: " . $this->numero . "</p>";
        $resumen .= "<p>Precio: " . $this->precio . "</p>";
        $resumen .= "<p>Precio con IVA: " . $this->getPrecioConIva() . "</p>";
        return $resumen;
    }
}
