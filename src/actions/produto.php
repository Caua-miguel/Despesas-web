<?php 

require $_SERVER['DOCUMENT_ROOT'] . '/projetos/conexao.php';
require $_SERVER['DOCUMENT_ROOT'] . '/projetos/src/database/produto.php';

function consultarProduto(){
    global $conexao;
    return consultarProdutosBD($conexao);
}

function consultarProdutoById($id){
    global $conexao;
    return consultarProdutoByIdBD($conexao, $id);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $data = $_POST['data'];

    if (isset($_POST['inserir'])) {
        if (cadastrarProdutoBD($conexao, $nome, $descricao, $quantidade, $preco, $data)) {
            header('location: ../pages/produto/listarProduto.php');
            exit; // Adicionado para garantir que o script pare aqui
        }else {
            header('location: ../pages/produto/listarProduto.php');
            exit; // Adicionado para garantir que o script pare aqui
        }
    }else if(isset($_POST['editar'])){
        if (editarProdutoBD($conexao, $id, $nome, $descricao, $quantidade, $preco)) {
            header('location: ../pages/produto/listarProduto.php');
            exit; // Adicionado para garantir que o script pare aqui
        }else {
            header('location: ../pages/produto/listarProduto.php');
            exit; // Adicionado para garantir que o script pare aqui
        }
    }else if(isset($_POST['excluir'])){
        if (excluirProdutoBD($conexao, $id)) {
            header('location: ../pages/produto/listarProduto.php');
            exit; // Adicionado para garantir que o script pare aqui
        }else {
            header('location: ../pages/produto/listarProduto.php');
            exit; // Adicionado para garantir que o script pare aqui
        }
    }
}

?>