<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Configurações do banco de dados
    // Armazenando nas "variáveis" as ifnromações que configuramos no Workbench
    $host = '127.0.0.1:3306';
    $usuario = 'root';
    $senha = 'enzo123';
    $banco = 'users';

    // Conexão com o banco de dados
    // Criando uma conexão e armaenando os valores no local "conexao"
    $conexao = new mysqli($host, $usuario, $senha, $banco);

    // Verifica se houve erro na conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Prepara a consulta SQL para inserir um novo usuário
    $query = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

    // Executa a consulta SQL
    if ($conexao->query($query) === TRUE) {
        echo "Novo usuário registrado com sucesso!<br>";
    } else {
        echo "Erro ao registrar usuário: " . $conexao->error;
    }

    // Consulta ao banco de dados
    // Usando o comando SELECT para buscar informações no banco
    // Deverá utilizar comandos SQL para recuperar e alterar informações no banco
    $query = "SELECT * FROM usuarios";
    $resultado = $conexao->query($query);


    // Exibição dos resultados
    // Ao usar o método fetch_assoc(), você obtém uma linha de resultados de uma consulta SQL como um array associativo, onde os nomes 
    // das colunas da tabela no banco de dados são usados como chaves e os valores correspondentes são os valores associados a essas chaves.
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "ID: " . $row['id'] . " - Nome: " . $row['nome'] . " - Email: " . $row['email'] . "<br>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
}
?>
