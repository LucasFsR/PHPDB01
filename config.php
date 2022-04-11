<?php

//Essa deve ser sempre a primeira linha de código do site

header("Content-Type: text/html; charset=utf-8");

//Conexão com o banco de dados

$db = array(
    "server" = "localhost",
    "database" = "vitugo",
    "username" = "root",
    "password" = ""
);

$conn = new mysqli ($db ["hostname"], $db ["username"], $db ["password"], $db ["database"])

?>