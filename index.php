<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods: GET, POST");
    header("Content-Type: application/json");

    include('connection.php');
    include('crud.php');

    #RECUPERA O TIPO DE AÇÃO DA REQUISIÇÃO
    $acao = $_REQUEST["acao"];

    #### CRIAÇÃO DAS ROTAS ####

    ## ROTA DO READ ##
    if($acao == "read") {
        read($conn);
    }

    ## ROTA DO CREATE ##
    if($acao == "create") {
        $nome = $_REQUEST["nome"];
        $sobrenome = $_REQUEST["sobrenome"];
        $email = $_REQUEST["email"];
        $celular = $_REQUEST["celular"];
        $fotografia = $_REQUEST["fotografia"];

        create($nome, $sobrenome, $email, $celular, $fotografia, $conn);
    }

?>