<?php 

require '../../actions/usuario.php';

$listaUsuarios = consultarUsuario();

// Verificar se a consulta retornou produtos
if ($listaUsuarios === false) {
    echo "Erro ao consultar usuarios.";
    exit; // Para evitar que o restante da página seja carregado se houver erro
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Listar Usuário</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <h1>Lista de Usuários</h1>

            <a href="./inserirUsuario.php" class="btn btn-primary">
                <i class="bi bi-plus-square"></i>
                <span>Novo Usuário</span>
            </a>
        </div>

        <div class="w-100">
            <?php include('../../../mensagem.php')?>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Data Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($listaUsuarios as $usuario):?>
                    <tr>

                    <td scope="row"><?php echo $usuario['id']; ?></td>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td><?php echo $usuario['telefone']; ?></td>
                    <td><?php echo $usuario['endereco']; ?></td>
                    <td><?php echo $usuario['data_registro']; ?></td>
                    
                    <td><a class="btn btn-primary" href="./editarUsuario.php?id_usuario=<?php echo $usuario['id']?>">
                    <i class="bi bi-pencil-square"></i>
                    </a></td>

                    <td>
                        <form action='../../actions/usuario.php' method='post'>
                                <input type='text' name='id' id='id'
                                    value="<?php echo $usuario[ 'id' ]?>" hidden>
                                <button class='btn btn-danger' type='submit' name='excluir'
                                    onclick="return confirm('Tem certeza que deseja excluir usuario?')">
                                    <i class='bi bi-trash'></i>
                                </button>
                        </form>
                    </td>
                    
                    </tr>               
                    <?php endforeach; ?>   
                </tbody>
            </table>
        </div>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>