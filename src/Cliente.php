<?php

class Cliente extends Videoclub
{
    private $nombre;
    private $numero;
    private $maxAlquilerConcurrente;
    private $numSoportesAlquilados;
    private $soportesAlquilados;

    /**
     * Constructor de la clase Cliente.
     *
     * @param string $nombre - Client name.
     * @param int $numero - Client number.
     * @param int $maxAlquilerConcurrente - Max rents simultane (default 3).
     */
    public function __construct($nombre, $numero, $maxAlquilerConcurrente = 3)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
        $this->numSoportesAlquilados = 0;
        $this->soportesAlquilados = [];
    }

    /**
     * Obtiene el número del cliente.
     *
     * @return int - Número del cliente.
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Establece el número del cliente.
     *
     * @param int $numero - Número del cliente.
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Obtiene la cantidad de soportes alquilados.
     *
     * @return int - Cantidad de soportes alquilados.
     */
    public function getNumSoportesAlquilados()
    {
        return $this->numSoportesAlquilados;
    }

    /**
     * Muestra un resumen del cliente.
     *
     * @return string - Resumen del cliente.
     */
    public function muestraResumen()
    {
        $resumen = "Nombre: " . $this->nombre . "<br>";
        $resumen .= "Alquileres realizados: " . $this->numSoportesAlquilados;
        return $resumen;
    }

    /**
     * Comprueba si el cliente tiene alquilado un soporte específico.
     *
     * @param Soporte $soporte - Soporte a comprobar.
     * @return bool - Devuelve true si el soporte está alquilado por el cliente, false en caso contrario.
     */
    public function tieneAlquilado(Soporte $soporte): bool
    {
        foreach ($this->soportesAlquilados as $soporteAlquilado) {
            if ($soporteAlquilado->getNumero() === $soporte->getNumero()) {
                return true;
            }
        }
        return false;
    }

    /**
     * Intenta alquilar un soporte y muestra un mensaje informando de lo ocurrido.
     *
     * @param Soporte $soporte - Soporte a alquilar.
     * @return bool - Devuelve true si el alquiler fue exitoso, false en caso contrario.
     */
    public function alquilar(Soporte $soporte): bool
    {
        if ($this->tieneAlquilado($soporte)) {
            echo "<p>El cliente {$this->nombre} ya tiene alquilado el soporte {$soporte->getNumero()}.</p>";
            return false;
        }

        if ($this->numSoportesAlquilados < $this->maxAlquilerConcurrente) {
            $this->soportesAlquilados[] = $soporte;
            $this->numSoportesAlquilados++;
            echo "<p>El cliente {$this->nombre} ha alquilado el soporte {$soporte->getNumero()}.</p>";
            return true;
        } else {
            echo "<p>El cliente {$this->nombre} ha alcanzado el límite de alquileres concurrentes.</p>";
            return false;
        }
    }

    /**
     * Devuelve un soporte y muestra un mensaje informando de lo ocurrido.
     *
     * @param int $numSoporte - Número del soporte a devolver.
     * @return bool - Devuelve true si la devolución fue exitosa, false en caso contrario.
     */
    public function devolver(int $numSoporte): bool
    {
        foreach ($this->soportesAlquilados as $key => $soporteAlquilado) {
            if ($soporteAlquilado->getNumero() === $numSoporte) {
                unset($this->soportesAlquilados[$key]);
                $this->numSoportesAlquilados--;
                echo "El cliente {$this->nombre} ha devuelto el soporte {$numSoporte}.<br>";
                return true;
            }
        }

        echo "El cliente {$this->nombre} no tiene alquilado el soporte {$numSoporte}.<br>";
        return false;
    }

    /**
     * Lista los alquileres del cliente y muestra un mensaje informando de la cantidad.
     */
    public function listarAlquileres(): void
    {
        echo "<p>El cliente {$this->nombre} tiene {$this->numSoportesAlquilados} alquiler(es).</p>";
        echo "<ul>";
        if ($this->numSoportesAlquilados > 0) {
            echo "<p>Lista de alquileres:</p>";
            foreach ($this->soportesAlquilados as $soporte) {
                echo "<li>- Soporte {$soporte->getNumero()}: {$soporte->titulo}</li>";
            }
        }
        echo "</ul>";
    }
}
