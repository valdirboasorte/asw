<?php
// Verificação de autenticação e permissão (simulado)
$isAuthenticated = true; // Altere para a lógica de autenticação real
$isLeader = true; // Altere para a lógica de verificação do líder de turma

if (!$isAuthenticated || !$isLeader) {
    header("Location: index.html");
    exit();
}

$index = isset($_GET['index']) ? $_GET['index'] : -1;

// Simulação de informações de reposições
$reposicoes = [
    ['data' => '2023-08-15', 'materia' => 'Matemática'],
    ['data' => '2023-08-20', 'materia' => 'História'],
    // ... outras reposições
];

$reposicao = ($index >= 0 && $index < count($reposicoes)) ? $reposicoes[$index] : null;

if ($reposicao === null) {
    header("Location: home_lider.php");
    exit();
}

// Simulação de atualização de informações após o envio do formulário
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newData = $_POST["new_data"];
    $newMateria = $_POST["new_materia"];

    $reposicoes[$index]["data"] = $newData;
    $reposicoes[$index]["materia"] = $newMateria;

    // Aqui você pode implementar o código para atualizar os dados no banco de dados

    header("Location: home_lider.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Reposição de Aula</title>
</head>
<body>
    <header>
        <h1>Editar Reposição de Aula</h1>
    </header>
    <div class="container">
        <div class="content">
            <form action="" method="POST">
                <label for="new_data">Nova Data:</label>
                <input type="date" id="new_data" name="new_data" value="<?php echo $reposicao['data']; ?>" required><br>
                
                <label for="new_materia">Nova Matéria:</label>
                <input type="text" id="new_materia" name="new_materia" value="<?php echo $reposicao['materia']; ?>" required><br>
                
                <button type="submit" class="btn btn-edit">Salvar Alterações</button>
            </form>
            <a href="home_lider.php" class="btn btn-back">Cancelar</a>
        </div>
    </div>
    <footer>
        &copy; 2023 Sistema de Gerenciamento Escolar
    </footer>
</body>
</html> 