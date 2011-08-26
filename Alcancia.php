<?php
class Alcancia {
    private $_dinero;
    
    public function __construct($dinero) {
        $this->_dinero = $dinero;
    }
    public function obtenerSaldo() {
        return " Obtienes el saldo: S/.".$this->_dinero;
    }
    public function reproducirCancion($dinero) {
        $this->_dinero = $this->_dinero + $dinero;
        return " : Reprodusco una cancion random!.";
    }
    public function darDinero() {
        $msg = "Devuelvo todo el dinero S/.".$this->_dinero;
        $this->_dinero = 0;
        return $msg;
        
    } 
    
}

?>
