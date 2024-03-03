<?php

date_default_timezone_set("America/Sao_Paulo");
function saudacao(){

    $hora = date('H:i:s');
    $saudacao = '';

    if($hora <= 12) return $saudacao='bom dia';
    if($hora >= 12 AND $hora < 18) return $saudacao='boa tarde';
    if($hora >= 18) return $saudacao='boa noite';
    
    return $saudacao;
}
function resumirTexto(string $texto, int $limite, string $continue="..."){
    // echo $total = mb_strlen($texto) ; // pega a quantidade de caracteres
    // echo $resumo = mb_substr($texto, 3, 15) ; // Cortando a string texto, inicio 3 ate posicao 15 do array.
    // echo $ocorrencia = mb_strrpos($texto,'a'); //posicao onde achou o ULTIMO a 
    //$texto = strip_tags($texto); //remove TAGS HTML
    $textolimpo = trim(strip_tags($texto));

    if(mb_strlen($textolimpo) <= $limite){
        return $textolimpo;
    }
    $resumirTexto = mb_substr($textolimpo, 0, mb_strrpos(mb_substr($textolimpo, 0, $limite), ''));

    return $resumirTexto.$continue;
}