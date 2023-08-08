<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <header>
        <h1>Cadastro de Aluno</h1>
    </header>
    <div class="container">
        <div class="content">
            <form action="home_aluno.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="matricula">Matrícula:</label>
                <input type="text" id="matricula" name="matricula" required>
                <label for="estatus"> Status: </label>
      <select name="estatus" required>
        <option value="1">Ativo</option>
        <option value="0">Desativo</option>
      </select>


                <button type="submit" class="btn btn-submit">Cadastrar</button>
            </form>
            <a href="index.html" class="btn btn-back">Voltar</a>
        </div>
    </div>
    <footer>
        &copy; 2023 Sistema de Gerenciamento Escolar
    </footer>
</body>
</html>