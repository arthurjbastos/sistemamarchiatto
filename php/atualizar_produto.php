<?php
include("connect.php");

$codigo = $_POST["id_produto"];
$novo_nome = $_POST["novo_nome"];
$nova_descricao = $_POST["nova_descricao"];
$nova_categoria = $_POST["nova_categoria"];
$novo_preco = $_POST["novo_preco"];

try {
    // Preparando e executando a consulta SQL para atualizar o produto
    $sql = "UPDATE produtos SET nome = :novo_nome, descricao = :nova_descricao, categoria_id = :nova_categoria, preco = :novo_preco WHERE id = :codigo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':novo_nome', $novo_nome);
    $stmt->bindParam(':nova_descricao', $nova_descricao);
    $stmt->bindParam(':nova_categoria', $nova_categoria);
    $stmt->bindParam(':novo_preco', $novo_preco);
    $stmt->bindParam(':codigo', $codigo);
    $stmt->execute();

    header("Location: ../admin/cardapio.php?sucesso=2");
    exit();
} catch(PDOException $e) {
    echo "Ocorreu um erro. " . $e->getMessage();
}
?>
