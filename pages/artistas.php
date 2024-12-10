<?php
include '../config/config.php';

$success = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];

    if (!empty($nome)) {
        $stmt = $pdo->prepare("INSERT INTO artistas (nome) VALUES (?)");
        $stmt->execute([$nome]);

        // Exibe a mensagem de sucesso
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro de Artistas</title>
</head>
<body class="container py-5">

    <h2 class="text-center mb-4">Cadastro de Artistas</h2>

    <!-- Mensagem de sucesso -->
    <?php if ($success): ?>
        <div class="alert alert-success" role="alert">
            Artista cadastrado com sucesso!
        </div>
    <?php endif; ?>

    <form method="post" action="artistas.php">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Artista</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</body>
</html>
