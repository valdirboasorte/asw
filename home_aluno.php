<?php
$alunoInfo = [
    'nome' => 'João da Silva',
    'matricula' => '20231001',
    'curso' => 'Engenharia de Computação',
    'receber_email' => 1, // Simulação, substitua pelo valor real do banco de dados
    'aulas' => [
        'Segunda-feira' => 'Matemática',
        'Terça-feira' => 'História',
        'Quarta-feira' => 'Biologia',
        // ... outras aulas ...
    ],
    'reposicoes' => [
        '2023-08-15' => 'Matemática',
        '2023-08-20' => 'História',
        // ... outras reposições ...
    ],
    'datas_provas' => [
        '2023-09-10' => 'Prova de Matemática',
        '2023-09-20' => 'Prova de História',
        // ... outras datas de provas ...
    ]
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $emailNotifications = isset($_POST["email_notifications"]) ? 1 : 0;
    $alunoInfo['receber_email'] = $emailNotifications;

    // Atualiza o banco de dados com a preferência de notificação por e-mail do aluno
    // Aqui você pode adicionar o código para atualizar o banco de dados com a nova preferência
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home do Aluno</title>
</head>
<body>
    <header>
        <h1>Bem-vindo à Sua Página de Home, <?php echo $alunoInfo['nome']; ?>!</h1>
    </header>
    <div class="container">
        <div class="content">
            <h2>Suas Aulas</h2>
            <ul>
                <?php foreach ($alunoInfo['aulas'] as $dia => $materia): ?>
                    <li><strong><?php echo $dia; ?>:</strong> <?php echo $materia; ?></li>
                <?php endforeach; ?>
            </ul>

            <h2>Reposições</h2>
            <ul>
                <?php foreach ($alunoInfo['reposicoes'] as $data => $materia): ?>
                    <li><strong><?php echo $data; ?>:</strong> <?php echo $materia; ?></li>
                <?php endforeach; ?>
            </ul>

            <h2>Datas de Provas</h2>
            <ul>
                <?php foreach ($alunoInfo['datas_provas'] as $data => $prova): ?>
                    <li><strong><?php echo $data; ?>:</strong> <?php echo $prova; ?></li>
                <?php endforeach; ?>
            </ul>

            <h2>Configurações</h2>
            <form method="POST">
                <label>
                    <input type="checkbox" name="email_notifications" <?php echo $alunoInfo['receber_email'] ? 'checked' : ''; ?>>
                    Receber notificações por e-mail sobre mudanças nos horários
                </label>
                <br>
                <button type="submit" class="btn btn-save">Salvar Configurações</button>
            </form>

            <a href="index.html" class="btn btn-back">Sair</a>
        </div>
    </div>
    <footer>
        &copy; <?php echo date("Y"); ?> Sistema de Gerenciamento Escolar
    </footer>
</body>
</html>