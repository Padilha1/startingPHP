<?php

function saudacao(){
    $hora = 5;
    $saudacao = '';

    if($hora <= 10) return $saudacao='bom dia';
    
    return $saudacao;
}
function resumirTexto(string $texto, int $limite, string $continue="..."){
    return $texto;
}