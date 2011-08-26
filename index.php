<?php
require_once 'Persona.php';
require_once 'Alcancia.php';

class Index {
    
    public function main(){
        $ninho = new Persona("Carlos");
        $this->Alcancia2HTML($ninho);
    }
    
    public function Alcancia2HTML(Persona $ninho) {
        $metermoneda = array($ninho->meterMoneda(10),$ninho->meterMoneda(13),$ninho->meterMoneda(200));        
        $presionobotonverde = $ninho->presionarBoton("Verde");
        $presionobotonrojo = $ninho->presionarBoton("Rojo");
        $presionobotonverde = $ninho->presionarBoton("Verde");
        require_once 'vistaAlcancia.html';
    }
}

$index = new Index();
$index->main();
            
?>
