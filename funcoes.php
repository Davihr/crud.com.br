<?php
// Função responsável por gravar os produtos no banco
function gravar_produto($conexao, $nome, $marca, $modelo, $categoria, $material, $tamanho, $peso, $tensao, $estoque, $estoque_minimo, $caracteristica) {

    $sql = "INSERT INTO produtos 
    (nome, marca, modelo, categoria, material, tamanho, peso, tensao, estoque, estoque_minimo, caracteristicas) 
    VALUES 
    ('$nome', '$marca', '$modelo', '$categoria', '$material', '$tamanho', '$peso', '$tensao', '$estoque', '$estoque_minimo', '$caracteristica')";

    mysqli_query($conexao, $sql);
}

function listarProdutos($conexao){
    $sql = "SELECT * FROM produtos ORDER BY nome ASC";
    return mysqli_query($conexao, $sql);
}

function buscarProdutos($conexao, $id){
    $sql = "SELECT * FROM produtos WHERE id = $id";
    return mysqli_fetch_assoc(mysqli_query($conexao, $sql));
}
?>