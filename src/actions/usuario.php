<?php

require $_SERVER['DOCUMENT_ROOT'] . '/projetos/conexao.php';
require $_SERVER['DOCUMENT_ROOT'] . '/projetos/src/database/usuario.php';

function consultarUsuario(){
    global $conexao;
    return consultarUsuariosBD($conexao);
}

function consultarUsuarioById($id){
    global $conexao;
    return consultarUsuarioByIdBD($conexao, $id);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $data_registro = $_POST['data_registro'];

    if (isset($_POST['inserir'])) {
        if (cadastrarUsuarioBD($conexao, $nome, $email, $telefone, $endereco, $data_registro)) {
            header('location: ../pages/usuario/listarUsuario.php');
            exit; // Adicionado para garantir que o script pare aqui
        }else {
            header('location: ../pages/usuario/listarUsuario.php');
            exit; // Adicionado para garantir que o script pare aqui
        }
    }else if(isset($_POST['editar'])){
        if (editarUsuarioBD($conexao, $id, $nome, $email, $telefone, $endereco)) {
            header('location: ../pages/usuario/listarUsuario.php');
            exit; // Adicionado para garantir que o script pare aqui
        }else {
            header('location: ../pages/usuario/listarUsuario.php');
            exit; // Adicionado para garantir que o script pare aqui
        }
    }else if(isset($_POST['excluir'])){
        if (excluirUsuarioBD($conexao, $id)) {
            header('location: ../pages/usuario/listarUsuario.php');
            exit; // Adicionado para garantir que o script pare aqui
        }else {
            header('location: ../pages/usuario/listarUsuario.php');
            exit; // Adicionado para garantir que o script pare aqui
        }
    }
}

?>