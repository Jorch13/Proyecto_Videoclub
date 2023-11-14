<?php

class Videoclub
{
    private $nombre;
    private $numero;
    private $productos = [];
    private $socios = [];
    private $numSocios = 0;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    private function incluirProducto(Soporte $producto)
    {
        if ($producto instanceof Soporte) {
            $this->productos[] = $producto;
        } else {
            echo "Error: El objeto no es una instancia de la clase Soporte.\n";
        }
    }
    public function incluirCintaVideo($titulo, $precio, $numero, $duracion)
    {
        $cinta = new CintaVideo($titulo, $precio, $numero, $duracion);
        $this->incluirProducto($cinta);
    }
    public function incluirDvd($titulo, $numero, $precio, $idiomas, $pantalla)
    {
        $dvd = new DVD($titulo, $numero, $precio, $idiomas, $pantalla);
        $this->incluirProducto($dvd);
    }

    public function incluirJuego($titulo, $numero, $precio, $consola, $minJ, $maxj)
    {
        $juego = new Juego($titulo, $numero, $precio, $consola, $minJ, $maxj);
        $this->incluirProducto($juego);
    }
    public function incluirSocio($nombre, $numero, $maxAlquileresConcurrentes = 3)
    {
        $socio = new Cliente($nombre, $numero, $maxAlquileresConcurrentes);
        $this->socios[] = $socio;
        $this->numSocios++;
    }
    public function listarProductos()
    {
        $lista = "<p>Lista de Productos: </p>";
        $lista .= "<ul>";
        foreach ($this->productos as $producto) {
            $lista .= "<li><p>" . $producto->muestraResumen() . "</p></li>";
        }
        $lista .= "</ul>";
        echo $lista;
    }
    public function listarSocios()
    {
        $lista = "<p>Lista de Socios: </p>";
        $lista .= "<ul>";
        foreach ($this->socios as $socio) {
            $lista .= "<li><p>" . $socio->muestraResumen() . "</p></li>";
        }
        $lista .= "</ul>";
        echo $lista;
    }
    public function alquilarSocioProducto($numeroCliente, $numeroSoporte)
    {
    }
}
