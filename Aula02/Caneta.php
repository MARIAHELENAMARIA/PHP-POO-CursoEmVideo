<?php
/**
 * Description of Caneta
 *
 * @author Maria Helena
 */
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if ($this -> tampada == true) {
            echo '<h1>Não posso rabiscar :( </h1>';
        }
        else {
            echo '<h1>Estou rabiscando...</h1>';
        }    
    }
    
    function tampar(){
        $this -> tampada = true;
    }
    
    function destampar(){
        $this -> tampada = false;
    }
}
