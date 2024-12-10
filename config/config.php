<?php
$host = 'localhost';         // Altere para o seu host, se necessário
$dbname = 'sistema_arte';    // Nome do banco de dados
$username = 'root';          // Nome de usuário do banco
$password = '';              // Senha do banco (padrão vazio para XAMPP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>