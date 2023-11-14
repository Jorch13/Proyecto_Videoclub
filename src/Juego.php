<?php
class Juego extends Soporte implements Resumible
{

    public $consola;
    private $minNumJugadores;
    private $maxNumJugadores;

    public function __construct($titulo, $numero, $prec, $consola, $minJugadores, $maxJugadores)
    {
        parent::__construct($titulo, $numero, $prec);
        $this->consola = $consola;
        $this->minNumJugadores = $minJugadores;
        $this->maxNumJugadores = $maxJugadores;
    }

    public function muestraJugadoresPosibles()
    {
        return $this->fraseJugadores();
    }

    private function fraseJugadores()
    {
        return ($this->minNumJugadores == 1 && $this->maxNumJugadores == 1)
            ? "Para un jugador."
            : ($this->minNumJugadores == $this->maxNumJugadores
                ? "Para " . $this->maxNumJugadores . " jugadores."
                : "De " . $this->minNumJugadores . " a " . $this->maxNumJugadores . " jugadores.");
    }

    /**
     * Devuelve en formato HTML un resumen del Juego
     * 
     * @return string Resumen de las caracteristicas juego
     */
    public function muestraResumen()
    {
        $resumen = parent::muestraResumen();
        $resumen .= "<p>Consola: " . $this->consola . "</p>";
        $resumen .= "<p>" . $this->muestraJugadoresPosibles() . "</p>";
        return $resumen;
    }
}
