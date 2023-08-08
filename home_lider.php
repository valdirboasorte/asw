<?php
include 'conexao.php';

// Simulação de informações do líder de turma
$liderInfo = [
    'nome' => 'Maria Santos',
    'turma' => 'A101',
    'reposicoes' => [
        ['data' => '2023-08-15', 'materia' => 'Matemática'],
        ['data' => '2023-08-20', 'materia' => 'História'],
        // ... outras reposições
    ],
    'aulas_praticas' => [
        ['data' => '2023-08-25', 'materia' => 'Biologia'],
        ['data' => '2023-08-28', 'materia' => 'Química'],
        // ... outras aulas práticas
    ],
    'datas_provas' => [
        ['data' => '2023-09-10', 'descricao' => 'Prova de Matemática'],
        ['data' => '2023-09-20', 'descricao' => 'Prova de História'],
        // ... outras datas de provas
    ],
    'entregas_trabalhos' => [
        ['data' => '2023-09-05', 'descricao' => 'Entrega de Trabalho de Geografia'],
        ['data' => '2023-09-15', 'descricao' => 'Entrega de Trabalho de Português'],
        // ... outras entregas de trabalhos
    ]
];

function generateEditButton($type, $index) {
    return "<a href='editar_$type.php?index=$index' class='btn btn-edit'>Editar</a>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home do Líder de Turma</title>
</head>
<body>
    <header>
        <h1>Bem-vindo à Sua Página de Home, <?php echo $liderInfo['nome']; ?>!</h1>
    </header>
    <div class="container">
        <div class="content">
            <h2>Turma: <?php echo $liderInfo['turma']; ?></h2>
            
            <h3>Reposições de Aulas:</h3>
            <table class="excel-style">
                <tr>
                    <th>Data</th>
                    <th>Matéria</th>
                    <th>Ações</th>
                    <th>Notificar Alunos</th>
                </tr>
                <?php
                foreach ($liderInfo['reposicoes'] as $index => $reposicao) {
                    echo "<tr>";
                    echo "<td>{$reposicao['data']}</td>";
                    echo "<td>{$reposicao['materia']}</td>";
                    echo "<td>" . generateEditButton('reposicoes', $index) . "</td>";
                    echo "<td><a href='notificar_alunos.php?tipo=reposicoes&index=$index' class='btn btn-notify'>Notificar Alunos</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>

            <h3>Aulas Práticas:</h3>
            <table class="excel-style">
                <tr>
                    <th>Data</th>
                    <th>Matéria</th>
                    <th>Ações</th>
                    <th>Notificar Alunos</th>
                </tr>
                <?php
                foreach ($liderInfo['aulas_praticas'] as $index => $aula_pratica) {
                    echo "<tr>";
                    echo "<td>{$aula_pratica['data']}</td>";
                    echo "<td>{$aula_pratica['materia']}</td>";
                    echo "<td>" . generateEditButton('aulas_praticas', $index) . "</td>";
                    echo "<td><a href='notificar_alunos.php?tipo=aulas_praticas&index=$index' class='btn btn-notify'>Notificar Alunos</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>

            <h3>Datas de Provas:</h3>
            <table class="excel-style">
                <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                    <th>Notificar Alunos</th>
                </tr>
                <?php
                foreach ($liderInfo['datas_provas'] as $index => $data_prova) {
                    echo "<tr>";
                    echo "<td>{$data_prova['data']}</td>";
                    echo "<td>{$data_prova['descricao']}</td>";
                    echo "<td>" . generateEditButton('datas_provas', $index) . "</td>";
                    echo "<td><a href='notificar_alunos.php?tipo=datas_provas&index=$index' class='btn btn-notify'>Notificar Alunos</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>

            <h3>Entregas de Trabalhos:</h3>
            <table class="excel-style">
                <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                    <th>Notificar Alunos</th>
                </tr>
                <?php
                foreach ($liderInfo['entregas_trabalhos'] as $index => $entrega_trabalho) {
                    echo "<tr>";
                    echo "<td>{$entrega_trabalho['data']}</td>";
                    echo "<td>{$entrega_trabalho['descricao']}</td>";
                    echo "<td>" . generateEditButton('entregas_trabalhos', $index) . "</td>";
                    echo "<td><a href='notificar_alunos.php?tipo=entregas_trabalhos&index=$index' class='btn btn-notify'>Notificar Alunos</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>

            <a href="index.html" class="btn btn-back">Sair</a>
        </div>
    </div>
    <footer>
        &copy; 2023 Sistema de Gerenciamento Escolar
    </footer>
</body>
</html>