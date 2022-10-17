<?php
include 'db.php';


$query = "SELECT * FROM colaborador";
$consulta_colaborador = mysqli_query($conexao, $query);

$dados= mysqli_query($conexao, $query) or die("ERRO!");
$select = mysqli_fetch_array($dados);


?>