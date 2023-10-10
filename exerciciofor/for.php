<?php
$num = $_GET["n"];
$dec = $_GET["e"];
$valor = 0;

if ($dec == 'p'){
    echo"Escolha foi PAR: <br>";
    for($i = 0; $i <= $num; $i++){
        if($i%2== 0){
            $valor += $i;
            echo "$i <br>" ;
        }
    }
    echo"O Resultado da soma dos pares foi: $valor";
} 
else if($dec == 'i'){
    echo"Escolha foi IMPAR: <br>";
    for($i = 0; $i <= $num; $i++){
        if($i%2== 1){
            $valor += $i;
            echo "$i<br>" ;
        }
    }
    echo"O Resultado da soma dos impares foi: $valor";
}

?>