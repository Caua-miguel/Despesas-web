<?php 

function consultarProdutosBD($conexao) {
    $buscar_produtos = 'SELECT * FROM produto';
    $query_produtos = pg_query($conexao, $buscar_produtos);

    if (!$query_produtos) {
        die("Erro na consulta: " . pg_last_error($conexao));
    }

    $listaProdutos = pg_fetch_all($query_produtos);
    
    pg_close($conexao);

    return $listaProdutos;
}

function consultarProdutoByIdBD($conexao, $id) {
    $buscar_produtos = "SELECT * FROM produto where id = $id";
    $query_produtos = pg_query($conexao, $buscar_produtos);

    if (!$query_produtos) {
        die("Erro na consulta: " . pg_last_error($conexao));
    }

    $Produtos = pg_fetch_array($query_produtos);
    
    pg_close($conexao);

    return $Produtos;
}

function cadastrarProdutoBD($conexao, $nome, $descricao, $quantidade, $preco, $data) {
    $inserir_produto = "INSERT INTO produto (nome, descricao, quantidade, preco, data) VALUES
    ('$nome', '$descricao', $quantidade, $preco, '2010-10-10')";
    
    $query_produtos = pg_query($conexao, $inserir_produto);

    if ($query_produtos) {
        return true;
    } else {
        //pg_last_error()
        return false;
    }
}

function editarProdutoBD($conexao, $id, $nome, $descricao, $quantidade, $preco) {
    $editar_produto = "UPDATE produto SET nome='$nome', descricao='$descricao', quantidade=$quantidade, preco=$preco, data=NOW() WHERE
    id=$id";
    
    $query_produtos = pg_query($conexao, $editar_produto);

    if ($query_produtos) {
        return true;
    } else {
        //pg_last_error()
        return false;
    }
}

function excluirProdutoBD($conexao, $id) {
    $excluir_produto = "delete from produto where id=$id";
    
    $query_produtos = pg_query($conexao, $excluir_produto);

    if ($query_produtos) {
        return true;
    } else {
        //pg_last_error()
        return false;
    }
}

?>
