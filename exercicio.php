<?php

$url = $_SERVER["REQUEST_URI"];

$divisao = parse_url($url);

$caminho = $divisao["path"];

$caminho = trim($caminho, "/");

$divisao = explode ("/", $caminho);

$url = $divisao [0];


?>