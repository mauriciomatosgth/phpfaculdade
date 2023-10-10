<?php
$populacao = $_POST["inicial"] ;
$crescimento = $_POST["cresci"];//como colocar em decimal no formulario. é step="00.1"
$simular = $_POST["simu"];
$geracao = 1;



while( $geracao <= $simular ){
    //$populacao = number_format($populacao,1);
    printf( "Geração N°$geracao, Total da população é igual a %.0f. <br>",$populacao);
    $populacao += ($populacao * $crescimento);
    $geracao ++;
    
}


?>