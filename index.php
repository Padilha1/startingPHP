<?php

require "sistema/configuracao.php";
include_once "Helpers.php";

$texto ="alouaiushdaiushdiuashdiuahiudiau" ;

echo saudacao();
echo '<hr>';
echo resumirTexto($texto, 6);
