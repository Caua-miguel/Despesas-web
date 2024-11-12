<?php 

function consultarUsuariosBD($conexao) {
    $buscar_usuarios = 'SELECT * FROM usuario';
    $query_usuarios = pg_query($conexao, $buscar_usuarios);

    if (!$query_usuarios) {
        die("Erro na consulta: " . pg_last_error($conexao));
    }

    $listaUsuarios = pg_fetch_all($query_usuarios);
    
    pg_close($conexao);

    return $listaUsuarios;
}

function consultarUsuarioByIdBD($conexao, $id) {
    $buscar_usuarios = "SELECT * FROM usuario where id = $id";
    $query_usuarios = pg_query($conexao, $buscar_usuarios);

    if (!$query_usuarios) {
        die("Erro na consulta: " . pg_last_error($conexao));
    }

    $Usuarios = pg_fetch_array($query_usuarios);
    
    pg_close($conexao);

    return $Usuarios;
}

function cadastrarUsuarioBD($conexao, $nome, $email, $telefone, $endereco, $data_registro) {
    $inserir_usuario = "INSERT INTO usuario (nome, email, telefone, endereco, data_registro) VALUES
    ('$nome', '$email', '$telefone', '$endereco', '2010-10-10')";
    
    $query_usuarios = pg_query($conexao, $inserir_usuario);

    if ($query_usuarios) {
        return true;
    } else {
        //pg_last_error()
        return false;
    }
}

function editarUsuarioBD($conexao, $id, $nome, $email, $telefone, $endereco) {
    $editar_usuario = "UPDATE usuario SET nome='$nome', email='$email', telefone='$telefone', endereco='$endereco', data_registro=NOW() WHERE
    id=$id";
    
    $query_usuarios = pg_query($conexao, $editar_usuario);

    if ($query_usuarios) {
        return true;
    } else {
        //pg_last_error()
        return false;
    }
}

function excluirUsuarioBD($conexao, $id) {
    $excluir_usuario = "delete from usuario where id=$id";
    
    $query_usuarios = pg_query($conexao, $excluir_usuario);

    if ($query_usuarios) {
        return true;
    } else {
        //pg_last_error()
        return false;
    }
}

?>
