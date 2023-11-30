<?php
/**
 * Description of Caneta
 *
 * @author Maria Helena
 */
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if ($this -> tampada == true) {
            echo '<h1>Não posso rabiscar :( </h1>';
        }
        else {
            echo '<h1>Estou rabiscando...</h1>';
        }    
    }
    
    public function tampar(){
        $this -> tampada = true;
    }
    
    public function destampar(){
        $this -> tampada = false;
    }
}
