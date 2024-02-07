<?php

class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    public function __construct($m, $c, $p){
        $this->modelo = $m;
        //$this->setModelo($m);
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }
    
//    public function __construct(){
//        $this->cor = "Azul";
//        $this->tampar();
//    }
    
//    public function Caneta(){
//        $this->cor = "Azul";
//        $this->tampar();
//    }
    
    public function tampar(){
        $this->tampada = true;
    }
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo($m){
        $this->modelo = $m;
    }
    
    public function getPonta(){
        return $this->ponta;
    }
    
    public function setPonta($p){
        $this->ponta = $p;
    }
}
