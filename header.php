<?php
include 'colaboradores.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/style_new.css">

    <title>CRM Empresas</title>
</head>

<body>
    <header>
        <div class="left">
        <h3>CRM <span>Empresas</span> </h3>
        </div>
        <div class="rigth">
            <a href="?pagina=inserir_excell" class="sair_btn">Inserir XML</a>    
            <a href="?pagina=inserir_cadastro" class="sair_btn">Inserir um Cadastro</a>
            <a href="login.php" class="sair_btn">Sair</a>
            <a href="?pagina=pesquisa" class="sair_btn">Pesquisar</a>
        </div>
    </header>
    <div class="sidebar">
        <center>
        <a href="?pagina=home" style="padding: 0;"><img src="img/Logo difere.jpg" class="image" alt=""></a>
            <h2>DIFFERE</h2>
        </center>
        <div id="menu">
            <a href="?pagina=empresa"><img src="img/admin (1).svg" class="contato-image" alt=""> Empresas</a>
            <a href="?pagina=fabio"><img src="img/contato.svg" class="contato-image" alt=""> Fabio</a>
            <a href="?pagina=gabriel"><img src="img/contato.svg" class="contato-image" alt=""> Gabriel</a>
            <a href="?pagina=beto"><img src="img/contato.svg" class="contato-image" alt=""> Gilberto</a>
            <a href="?pagina=jorge"><img src="img/contato.svg" class="contato-image" alt=""> Jorge</a>
        </div>
    </div>
    <div id="conteudo" class="container">