<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador{
    
    private $volume;
    private $ligado;
    private $tocando;
    
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume): void {
        $this->volume = $volume;
    }

    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }
    
    //-----------------------------------------
    
    public function ligar() {
        $this->setLigado(true);
    }
    
    public function desligar() {
        $this->setLigado(false);
    }
    
    public function abrirMenu() {
        echo "<br>Está ligado? " . ($this->getLigado() ? "SIM" : "NÂO");
        echo "<br>Está tocando? " . ($this->getTocando() ? "SIM" : "NÂO");
        echo "<br>Voume: " . $this->getVolume();
    }

    public function fecharMenu() {
        echo "Fehando menu...";
    }

    public function maisVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 1);
        }
        else{
            echo "<p>ERRo! Não posso aumentar o volume.</p>";
        }
    }

    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() -1);
        }
        else{
            echo "<p>ERRo! Não posso diminuir o volume.</p>";
        }
    }
    
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    
    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    
    public function play() {
        if ($this->getLigado() && !($this->getTocando())){
            $this->getTocando(true);
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}
