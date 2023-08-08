<?php
// Verificação de autenticação e permissão (simulado)
$isAuthenticated = true; // Altere para a lógica de autenticação real
$isLeader = true; // Altere para a lógica de verificação do líder de turma

if (!$isAuthenticated || !$isLeader) {
    header("Location: index.html");
    exit();
}

$index = isset($_GET['index']) ? $_GET['index'] : -1;

// Simulação de informações de entregas de trabalhos
$entregasTrabalhos = [
    ['data' => '2023-09-05', 'descricao' => 'Entrega de Trabalho de Geografia'],
    ['data' => '2023-09-15', 'descricao' => 'Entrega de Trabalho de Português'],
    // ... outras entregas de trabalhos
];

$entregaTrabalho = ($index >= 0 && $index < count($entregasTrabalhos)) ? $entregasTrabalhos[$index] : null;

if ($entregaTrabalho === null) {
    header("Location: home_lider.php");
    exit();
}

// Simulação de atualização de informações após o envio do formulário
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newData = $_POST["new_data"];
    $newDescricao = $_POST["new_descricao"];

    $entregasTrabalhos[$index]["data"] = $newData;
    $entregasTrabalhos[$index]["descricao"] = $newDescricao;

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
    <title>Editar Entrega de Trabalho</title>
</head>
<body>
    <header>
        <h1>Editar Entrega de Trabalho</h1>
    </header>
    <div class="container">
        <div class="content">
            <form action="" method="POST">
                <label for="new_data">Nova Data:</label>
                <input type="date" id="new_data" name="new_data" value="<?php echo $entregaTrabalho['data']; ?>" required><br>
                
                <label for="new_descricao">Nova Descrição:</label>
                <input type="text" id="new_descricao" name="new_descricao" value="<?php echo $entregaTrabalho['descricao']; ?>" required><br>
                
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