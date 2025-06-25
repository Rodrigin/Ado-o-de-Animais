<?php

include_once "Classes/gato.class.php";

$gato = new gato();
$gato->nome = "Yhago";
$gato->pelagem = "amarelado";
$gato->$castrado = "sim";
$gato->independente = "grau 3";
$gato->vacinado = "sim";
$gato->curioso = "não";
$gato->adoraColo= "sim";
$gato->usaCaixaAreia = "sim";

echo $gato->exibirGato();
echo $gato->castrar();
echo $gato->verificarPelagem();
echo $gato->atualizarIndependencia();
echo $gato->vacinar();
echo $gato->gatoCurioso();
echo $gato->resumoGato();
echo $gato->ensinarCaixaAreia();
echo $gato->verificarContato();

include_once "Classes/cachorro.class.php";

$cachorro = new cachorro();
$cachorro->nome = "Fernando";
$cachorro->raca = "Pastor Alemão";
$cachorro->$porte = "médio";
$cachorro->nivelEnergia = "3";
$cachorro->vacinado = "sim";
$cachorro->vermifugado = "não";
$cachorro->sociavel= "não";
$cachorro->adestrado = "sim";

echo $cachorro->exibirCachorro();
echo $cachorro->vacinar();
echo $cachorro->verificarAdestramento();
echo $cachorro->atualizarNivelEnergia();
echo $cachorro->indicarPorte();
echo $cachorro->socializar();
echo $cachorro->iniciarAdestramento();
echo $cachorro->resumoCachorro();
?>