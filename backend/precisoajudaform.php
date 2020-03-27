<?php

require("conecta.php");

//================= AGUARDAR POST DO FORMULARIO =====================
if (isset($_POST["nome"])) {

    $nome = $_POST["nome"];
    $whatsapp = $_POST["whatsapp"];
    $idade = $_POST["idade"];
    $cidade = $_POST["cidade"];
    $longitude = $_POST["longitude"];
    $latitude = $_POST["latitude"];

    //============ INSERIR DADOS NO BANCO DE DADOS =====================   
    $inserir = "INSERT INTO preciso_ajuda";
    $inserir .= "(nome, whatsapp, idade, cidade, longitude, latitude)";
    $inserir .= "VALUES";
    $inserir .= "('$nome', '$whatsapp', '$idade', '$cidade', '$longitude', '$latitude')";
    $retorno = array();
    $salvounobanco = mysqli_query($conn, $inserir);

    if ($salvounobanco) {
        $retorno["sucesso"] = true;
        $retorno["menssagem"] = "Mensagem enviada com Sucesso!";
    } else {
        $retorno["sucesso"] = false;
        $retorno["menssagem"] = "Erro ao enviar mensagem!";
    }

    echo json_encode($retorno);
}