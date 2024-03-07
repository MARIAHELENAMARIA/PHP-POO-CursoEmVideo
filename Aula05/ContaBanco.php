<?php

class ContaBanco {
    //atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    //métodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        
        if($t == "CC"){
            $this->setSaldo(50);
        }
        elseif($t == "CP"){
            $this->setSaldo(150);
        }
    }
    
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "<p>A conta ainda possui dinheiro. Não é possível fechá-la.</p> <br>";
            
        }
        elseif($this->getSaldo() < 0){
            echo "<p>A conta está em débito. Não é possível fechá-la.</p> <br>";
        }
        else{
            $this->setStatus(false);
        }
    }
    
    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito autorizado.</p> <br>"; 
        }
        else{
            echo "<p>Conta fechada. Não é possível depositar.</p> <br>";
        }
    }
    
    public function sacar($v){
        if($this->getSaldo()){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Saque autorizado.</p><br>";
            }
            else{
                echo "<p>Saldo insuficiente.</p> <br>";
            }
        }
        else{
            echo "<p>Não posso sacar de uma conta fechada.</p> <br>";
        }
    }
    
    public function pagarMensal(){
        if ($this->getTipo() == "CC"){
            $v = 12;
        }
        elseif($this->getTipo() == "CP"){
            $v = 20;
        }
        
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Mensalidade paga.</p> <br>";
        }
        else{
            echo "<p>Problemas com a conta. Não posso cobrar.</p>";
        }
    }
    
    //metodos especiais
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta aberta com sucesso.</p> <br> ";
    }
    
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }
}
