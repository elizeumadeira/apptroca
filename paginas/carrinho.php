<?php

$acao = $_GET['acao'];
$produtos = $_GET['produtos'];
$produto = $_GET['produto'];

if($acao == 'adicionar'){
    $produtos[] = $_GET['cod'];
}else if($acao = 'remover'){
    if (($key = array_search($produto, $produtos)) !== false) {
        unset($produtos[$key]);
    }
}