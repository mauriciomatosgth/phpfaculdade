<?php
$temperatura = $_GET["c"];
$valor = $_GET["t"];
$grau = 0;
switch($temperatura){
    case 'ctf':
        $grau = ($valor * (9/5)) +32;
        $grau_formatado = number_format($grau,2);
        echo "A temperatura $valor C° em Fahrenheit é $grau_formatado F°";
        break;

    case 'ftc':
        $grau = ($valor - 32)*(5/9);
        $grau_formatado = number_format($grau,2);
        echo "A temperatura $valor F° em Celsius $grau_formatado C°";
        break;
    default:
        echo "Nenhum valor escolhido.";

}



?>