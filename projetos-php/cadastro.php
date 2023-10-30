<?php
$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host,$usuario,$senha,$database);

if ($mysqli_error){
    die("Falha ao conectar ao banco de dados: ". $mysqli_error);
}
?>