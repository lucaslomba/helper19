<?php

require("conecta.php");

//================= AGUARDAR POST DO FORMULARIO =====================
if (isset($_POST["nome"])) {

    $nome = $_POST["nome"];
    $whatsapp = $_POST["whatsapp"];
    $estado = $_POST["UF"];
    $idade = $_POST["idade"];
    $estado = $_POST["UF"];
    $cidade = $_POST["cidade"];
    $longitude = $_POST["longitude"];
    $latitude = $_POST["latitude"];

    //============ INSERIR DADOS NO BANCO DE DADOS =====================   
    $inserir = "INSERT INTO quero_ajudar";
    $inserir .= "(nome, whatsapp, UF, idade, cidade, longitude, latitude)";
    $inserir .= "VALUES";
    $inserir .= "('$nome', '$whatsapp','$estado', '$idade', '$cidade', '$longitude', '$latitude')";
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