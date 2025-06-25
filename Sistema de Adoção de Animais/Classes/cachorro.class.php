<?php

class cachorro{
    public $nome;
    public $raca;
    public $porte;
    public $nivelEnergia;
    public $vacinado;
    public $vermifugado;
    public $sociavel;
    public $adestrado;

    public function exibirCachorro(){
        return "O cachorro se chama {$this->nome}, a raça dele é {$this->raca}, o porte dele é {$this->porte}, o nível de energia dele é {$this->nivelEnergia}, o cahorro está vacinado: {$this->vacinado}, o charro {$this->vermifugado} vermifugado, o cachorro {$this->sociavel} e o cahorro é {$this->adestrato}";
    }
    public function vacinar(){
        if (strtolower($this->vacinado) === "sim"){
            return "O cachorro está vacinado.";
        } else {
            return "O cachorro não está vacinado.";
        }
    }
    public function verificarAdestramento(){
        return "O cachorro é adestrado: {$this->adestrato}";
    }
    public function atualizarNivelEnergia(){
        if (strtolower($this->nivelEnergia) === "1"){
            return "O cachorro está com energia baixa<br>";
        } elseif (strtolower($this->nivelEnergia) === "2"){
            return "O cachorro está com energia média<br>";
        } elseif (strtolower($this->nivelEnergia) === "3"){
            return "O cachorro está com energia alta<br>";
        }
    }    
    public function indicarPorte(){
        return "O cahorro é de porte {$this->porte}<br>";
    }
    public function socializar(){
        return "O cahorro é sociavel: {$this->sociavel}<br>";
    }
    public function iniciarAdestramento(){
        if (strtolower($this->adestrado) === "sim"){
            return "O cachorro é adestrado.<br>";
        } else {
            return "O cachorro não é adestrado.<br>";
        }
    }
    public function resumoCachorro(){
        return "O cahorro se chama {$this->nome}, a raça dele é {$this->raca} e seu porte é {$this->porte}";
    }
}       
?>