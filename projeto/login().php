<?php
include_once('conexãoBD().php');

session_start();
connect_BD();



$nome = $_POST["nome"];
$senha = $_POST["senha"];


?>