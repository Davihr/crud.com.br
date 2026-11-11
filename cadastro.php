
<?php
// esta página será responsável por cadastrar os dados no banco de dados
include "conexao.php";
include "funcoes.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'] ?? null;
    $marca = $_POST['marca'] ?? null;
    $modelo = $_POST['modelo'] ?? null;
    $categoria = $_POST['categoria'] ?? null;
    $material = $_POST['material'] ?? null;
    $tamanho = $_POST['tamanho'] ?? null;
    $peso = $_POST['peso'] ?? null;
    $tensao = $_POST['tensao'] ?? null;
    $estoque = $_POST['estoque'] ?? null;
    $estoque_minimo = $_POST['estoque_minimo'] ?? null;
    $caracteristica = $_POST['caracteristicas'] ?? null;

    gravar_produto(
        $conexao, $nome, $marca, $modelo, $categoria,
        $material, $tamanho, $peso, $tensao,
        $estoque, $estoque_minimo, $caracteristica
    );
}
?>

<form action="cadastro.php" method="POST">
    Nome: <input type="text" name="nome"><br>
    Marca: <input type="text" name="marca"><br>
    Modelo: <input type="text" name="modelo"><br>
    Categoria: <input type="text" name="categoria"><br>
    Material: <input type="text" name="material"><br>
    Tamanho: <input type="text" name="tamanho"><br>
    Peso: <input type="text" name="peso"><br>
    Tensão: <input type="text" name="tensao"><br>
    Características: <input type="text" name="caracteristicas"><br>
    Estoque: <input type="text" name="estoque"><br>
    Estoque Mínimo: <input type="text" name="estoque_minimo"><br>

    <button type="submit">Enviar</button>
</form>
