<?php

//$conn = new mysqli("localhost", "u630607413_fmomoreira", "devfullstack", "u630607413_helper19");
$conn = new mysqli("localhost", "root", "", "helper19");
$fuso = new DateTimeZone('America/Sao_Paulo');
$data = new DateTime();
$data->setTimezone($fuso);
$dataatual =  $data->format('d-m-Y H:i:s');