<?php
require_once 'Alcancia.php';
class Persona {
    private $_nombre;    
    private $_alcancia;
    public function __construct($nombre) {
        $this->_nombre = $nombre;
        $this->_alcancia = new Alcancia(0);
    }
    public function getNombre() {
        return $this->_nombre;
    }
    public function meterMoneda($dinero) {
        return "Metiste S/.".$dinero.$this->_alcancia->reproducirCancion($dinero);
    }
    public function presionarBoton($colorBoton) {
        $colorBoton = strtolower($colorBoton);
        switch ($colorBoton)
        {
            case "verde":
                return $this->_alcancia->obtenerSaldo();
                break;
            case "rojo":
                return $this->_alcancia->darDinero();
                break;
        }            
    }
}

?>
