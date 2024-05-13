<?php
// Verifica se os ados foram enviados via  POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos necessários foram preenchidos
    if (isset($_POST["categoria"]) && isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["preco"])) {
        // Inclui o arquivo de conexão com o banco de dados
        require_once "connect.php";

        // Obtém os valores dos campos do formulário
        $categoria_id = $_POST["categoria"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];

        try {
            // Prepara a consulta SQL para inserir um novo produto na tabela de produtos
            $sql = "INSERT INTO produtos (nome, descricao, categoria_id, preco) VALUES (:nome, :descricao, :categoria_id, :preco)";
            $stmt = $pdo->prepare($sql);
            // Vincula os parâmetros da consulta aos valores dos campos do formulário
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":categoria_id", $categoria_id);
            $stmt->bindParam(":preco", $preco);
            // Executa a consulta
            if ($stmt->execute()) {
                // Redireciona de volta para a página admin.php com um parâmetro de sucesso
                header("Location: ../admin/admin.php?sucesso_produto=1");
                exit();
            } else {
                // Redireciona de volta para a página admin.php com um parâmetro de erro
                header("Location: ../admin/admin.php?sucesso_produto=0");
                exit();
            }
        } catch (PDOException $e) {
            // Em caso de erro, redireciona de volta para a página admin.php com um parâmetro de erro
            header("Location: ../admin/dmin.php?sucesso_produto=0");
            exit();
        }
    } else {
        // Se algum campo estiver faltando, redireciona de volta para a página admin.php com um parâmetro de erro
        header("Location: ../admin/admin.php?sucesso_produto=0");
        exit();
    }
}
?>
