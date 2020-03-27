<?php

require("conecta.php");

//================= AGUARDAR POST DO FORMULARIO =====================
if (isset($_POST["nomeEmpresa"])) {

    $nome_empresa = $_POST["nomeEmpresa"];
    $whatsapp = $_POST["whatsapp"];
    $telefone = $_POST["telefone"];
    $seguimento = $_POST["seguimento"];
    $descricao = $_POST["descricao"];
    $estado = $_POST["UF"];
    $cidade = $_POST["cidade"];
    $longitude = $_POST["longitude"];
    $latitude = $_POST["latitude"];

    //============ INSERIR DADOS NO BANCO DE DADOS =====================   
    $inserir = "INSERT INTO empresa_delivery";
    $inserir .= "(nome_empresa, whatsapp, telefone, seguimento, descricao, UF, cidade, longitude, latitude)";
    $inserir .= "VALUES";
    $inserir .= "('$nome_empresa', '$whatsapp', '$telefone', '$seguimento', '$descricao', '$estado', '$cidade', '$longitude', '$latitude')";
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