<?php
$servername = "localhost"; // Nome do servidor do banco de dados
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "escola"; // Nome do banco de dados

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}