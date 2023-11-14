<?php

/**
 * Clase que representa Productos de un videoclub
 * Class representing a media support.
 *
 * Comentarios en inglés para mejorar la adaptabilidad del proyecto.
 * Descripción de algunos metodos para mejorar la legibilidad.
 */
class Soporte
{
    /** @const float IVA - Constant value representing the VAT rate. */
    private const IVA = 1.21;

    /** @var string $titulo - Title of the support. */
    public $titulo;

    /** @var int $numero - Number of the support. */
    protected $numero;

    /** @var float $precio - Price of the support. */
    private $precio;

    /**
     * Constructor of the Support class.
     *
     * @param string $titulo - Title of the support.
     * @param int $numero - Number of the support.
     * @param float $precio - Price of the support.
     */
    public function __construct($titulo, $numero, $precio)
    {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Gets the Price of the support with applied VAT.
     *
     * @return float - Price of the support with VAT.
     */
    public function getPrecioConIva()
    {
        return $this->precio * self::IVA;
    }

    /**
     * Displays a Summary of the support.
     *
     * @return string - Summary of the support in HTML format.
     */
    public function muestraResumen()
    {
        $resumen = "<p>titulo: " . $this->titulo . "</p>";
        $resumen .= "<p>numero: " . $this->numero . "</p>";
        $resumen .= "<p>precio: " . $this->precio . "</p>";
        $resumen .= "<p>precio con IVA: " . $this->getPrecioConIva() . "</p>";
        return $resumen;
    }
}
