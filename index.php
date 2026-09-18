<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>Dados do Cliente</title>
</head>

<body>

    <h1>Dados do Cliente</h1>

    <!-- Formulário para entrada dos dados -->
    <form action="index.php" method="POST">

        <!-- Campo para informar o nome -->
        <label>Nome:</label><br />
        <input type="text" name="nome" required />

        <br><br>

        <!-- Campo para informar o e-mail -->
        <label>E-mail:</label><br />
        <input type="email" name="email" required />

        <br><br>

        <!-- Botão para enviar o formulário -->
        <button type="submit">Cadastrar</button>

    </form>

    <?php

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Recebe o nome e o e-mail enviados pelo formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // Mostra os dados informados
        echo "Nome recebido: " . $nome . "<br>";
        echo "E-mail recebido: " . $email;
    }

    ?>
</body>

</html>