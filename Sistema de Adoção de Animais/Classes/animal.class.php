<?php

class animal{
    public $ficha:
    public $nome;
    public $especie;
    public $idade;
    public $sexo;
    public $peso;
    public $cor;
    public $status;
    public $chipado;

    public function ficha(){
        return "A ficha do animal é {$this->nome}, {$this->especie}, {$this->idade}, {$this->sexo}, {$this->peso}, {$this->cor}, {$this->status} e {$this->chipado}."
    }
    public function atualizarPeso(){
        return "O peso atualizado é {$this->peso}"
    }
    public function alterarStatus(){
        return "O animal está {$this->status}"
    }
    public function verificarIdade(){
        return "O animal é {$this->idade}"
    }
    public function marcarComoChipado(){
        return "O animal {$this->chipado}"
    }
    public function desmarcarChipado(){
        return "O animal"
    }
    public function resumoAnimal(){
        return "Nome: {$this->nome}" <br> "Espécie {$this->especie}" <br> "Status: {$this->status}"
    }
    public function verificarSexo(){
        return "O sexo do animal é {$this->sexo}"
    }
    }
        

?>