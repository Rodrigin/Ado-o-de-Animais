<?php

class gato {
    public $nome;
    public $pelagem;
    public $castrado;
    public $independente;
    public $vacinado;
    public $curioso;
    public $adoraColo;
    public $usaCaixaAreia;

    public function exibirGato() {
        return "Dados: O gato se chama {$this->nome}<br>Sua pelagem é {$this->pelagem}<br>O gato é castrado{$this->castrado}<br>Grau de independencia: {$this->independente}<br>O gato é vacinado: {$this->vacinado}<br>O gato é curioso: {$this->curioso}<br>O gato gosta de colo: {$this->adoraColo}<br>O gato usa caixa de areia: {$this->usaCaixaAreia}.<br>";
    }

    public function castrar() {
        if (strtolower($this->castrado) === "sim") {
            return "O gato é castrado.<br>";
        } else {
            return "O gato não é castrado.<br>";
        }
    }

    public function verificarPelagem() {
        return "O tipo de pelagem é {$this->pelagem}.<br>";
    }

    public function atualizarIndependencia() {
        $grau = strtolower($this->independente);
        if ($grau === "grau 1") {
            return "O nível de independência do gato é grau 1.<br>";
        } elseif ($grau === "grau 2") {
            return "O nível de independência do gato é grau 2.<br>";
        } elseif ($grau === "grau 3") {
            return "O nível de independência do gato é grau 3.<br>";
        } else {
            return "Nível de independência desconhecido.<br>";
        }
    }

    public function vacinar() {
        if (strtolower($this->vacinado) === "sim") {
            return "O gato está vacinado.<br>";
        } else {
            return "O gato não está vacinado.<br>";
        }
    }

    public function gatoCurioso() {
        if (strtolower($this->curioso) === "sim") {
            return "O gato é curioso.<br>";
        } else {
            return "O gato não é curioso.<br>";
        }
    }

    public function resumoGato() {
        return "Resumo: {$this->nome}, pelagem {$this->pelagem}.<br>";
    }

    public function ensinarCaixaAreia() {
        if (strtolower($this->usaCaixaAreia) === "sim") {
            return "O gato usa a caixa de areia.<br>";
        } else {
            return "O gato não usa a caixa de areia.<br>";
        }
    }

    public function verificarContato() {
        if (strtolower($this->adoraColo) === "sim") {
            return "O gato aceita colo.<br>";
        } else {
            return "O gato não aceita colo.<br>";
        }
    }
}
?>
