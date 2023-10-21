<?php
$valor = $_POST["valor"];
$cupom = " ";
$cupom1 = $_POST["desconto"];
$desconto = 0;

if($cupom1 != " "){
    $cupom = $cupom1;
}

if($cupom == 'd'){
    $desconto += (0.1*$valor);
}
else if($cupom == 'q'){
    $desconto += (0.15*$valor);
}

$valor -= $desconto ;
    echo"Valor da compra é : $valor";


?>