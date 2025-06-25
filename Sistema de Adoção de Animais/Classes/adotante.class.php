<?php

class adotante{
    public $nome;
    public $idade;
    public $telefone;
    public $email;
    public $endereco;
    public $temOutrosAnimais;
    public $experienciaComPets;
    public $animalAdotado;
    public $continuarAdocao;

    public function exibirAdotante(){
        return "O nome do adotante é {$this->nome}, sua idade é {$this->idade}, seu telefone é {$this->telefone} e seu email é {$this->email}"
    }
    public function adotarAnimal(){
        
    }
    public function verificarIdade(){
        if (strtolower($this->idade) >= 18){
            return "A pessoa pode adotar um animal"
        } else {
            return "A pessoa não pode adotar um animal"
        }
    }
    public function temExperiencia(){
        if (strtolower($this->experienciaComPets) === "sim"){
            return "O adotante tem experiência com animais."
        } else {
            return "O adotante não tem experiência com animais."
        }
    }
    public function listarContato(){
        return "O telefone do adotante é {$this->telefone}, e seu email é {$this->email}."
    }
    public function verificarOutrosAnimais(){
        if (strtolower($this->temoutrosAnimais) === "sim"){
            return "O adotante possui outros animais."
        } else {
            return "O adotante não possui outros animais."
        }
    }
    public function cancelarAdocao(){
        if (strtolower($this->continuarAdocao) === "Não"){
            return "O adotante quer cancelar a adoção."
        } else {
            return "O adotante quer continuar a adoção."
        }
    }
    public function resumoAdotante(){

    }
}   
?>