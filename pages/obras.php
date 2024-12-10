<?php
include '../config/config.php'; 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $tecnica = $_POST['tecnica'];
    $data_criacao = $_POST['data_criacao'];
    $artista_id = $_POST['artista_id'];


    $stmt = $pdo->prepare("INSERT INTO obras (titulo, tecnica, data_criacao, artista_id) VALUES (?, ?, ?, ?)");
    $stmt->execute([$titulo, $tecnica, $data_criacao, $artista_id]);


    header("Location: ../html/obras.html?success=1");
    exit;
}
?>
