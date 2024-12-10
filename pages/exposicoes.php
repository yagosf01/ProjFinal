<?php
include '../config/config.php'; 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['data'];
    $galeria = $_POST['galeria'];
    $tema = $_POST['tema'];


    $stmt = $pdo->prepare("INSERT INTO exposicoes (data, galeria, tema) VALUES (?, ?, ?)");
    $stmt->execute([$data, $galeria, $tema]);

    exit;
}
?>
