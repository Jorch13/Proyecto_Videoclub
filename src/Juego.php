<?php
class Juego extends Soporte
{

    public $consola;
    private $minNumJugadores;
    private $maxNumJugadores;

    public function __construct($nom, $tit, $prec, $consola, $minJugadores, $maxJugadores)
    {
        parent::__construct($nom, $tit, $prec);
        $this->consola = $consola;
        $this->minNumJugadores = $minJugadores;
        $this->maxNumJugadores = $maxJugadores;
    }

    private function fraseJugadores()
    {
        return ($this->minNumJugadores == 1 && $this->maxNumJugadores == 1)
            ? "Para un jugador."
            : ($this->minNumJugadores == $this->maxNumJugadores
                ? "Para " . $this->maxNumJugadores . " jugadores."
                : "De " . $this->minNumJugadores . " a " . $this->maxNumJugadores . " jugadores.");
    }

    public function muestraJugadoresPosibles()
    {
        return $this->fraseJugadores();
    }

    public function muestraResumen()
    {
        $resumen = parent::muestraResumen();
        $resumen .= "<p>Consola: " . $this->consola . "</p>";
        $resumen .= "<p>" . $this->muestraJugadoresPosibles() . "</p>";
        return $resumen;
    }
}
