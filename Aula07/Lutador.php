<?php

class Lutador {
    private $nome;
    private $nac;
    private $idade;
    private $alt;
    private $peso;
    private $cat;
    private $vit;
    private $der;
    private $emp;
    
    public function __construct($nome, $nac, $idade, $alt, $peso, $vit, $der, $emp) {
        $this->nome = $nome;
        $this->nac = $nac;
        $this->idade = $idade;
        $this->alt = $alt;
        $this->setPeso($peso);
        $this->vit = $vit;
        $this->der = $der;
        $this->emp = $emp;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNac() {
        return $this->nac;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAlt() {
        return $this->alt;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCat() {
        return $this->cat;
    }

    public function getVit() {
        return $this->vit;
    }

    public function getDer() {
        return $this->der;
    }

    public function getEmp() {
        return $this->emp;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNac($nac): void {
        $this->nac = $nac;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAlt($alt): void {
        $this->alt = $alt;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCat();
    }

    private function setCat(): void {
        if($this->getPeso() < 52.2){
            $this->setCat("Inválida");
        }
        elseif($this->getPeso() <= 70.3){
            $this->setCat("Leve");
        }
        elseif($this->getPeso() <= 83.9){
            $this->setCat("Média");
        }
        elseif($this->getPeso() <=120.2){
            $this->setCat("Pesada");
        }
        else{
            $this->setCat("Inválida");
        }
    }

    public function setVit($vit): void {
        $this->vit = $vit;
    }

    public function setDer($der): void {
        $this->der = $der;
    }

    public function setEmp($emp): void {
        $this->emp = $emp;
    }

        
    public function apresentar(){
        echo "<p>-----------------------------</p>";
        
        echo "<p>Chegou a hora! O Lutador " . $this->getNome() . "diretamente de " . $this->getNac();
        echo "com " . $this->getIdade() . "anos e pesa " . $this->getPeso() . " kg, ";
        echo "possui " . $this->getVit() . " vitórias, " . $this->getEmp() . " empates e " . $this->getDer() . " derrotas.";
        
        echo "<br><br>";
    }
    
    public function status(){
        echo "<p>-----------------------------</p>";
        
        echo "<p>Nome: " . $this->getNome() . ";</p>";
        echo "<p>Idade: " . $this->getIdade() . " anos;</p>";
        echo "<p>Peso:  " . $this->getPeso() . " kg;</p>";
        echo "<p>Categoria: " . $this->getCat() . ";</p>";
        echo $this->getVit() . " vitórias, " . $this->getEmp() . " empates e " . $this->getDer() . " derrotas</p>";
        
        echo "<br><br>";
    }
    
    public function ganharLuta(){
        $this->setVit($this->getVit() + 1);
    }
    
    public function perderLuta(){
        $this->setDer($this->getDer() + 1);
    }
    
    public function empatarLuta(){
        $this->setEmp($this->getEmp() + 1);
    }
}    
